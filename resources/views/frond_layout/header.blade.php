<?php
use Illuminate\Support\Facades\Auth;
use App\Models\Kategori;
$kategori=Kategori::get();
?>
<header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="{{__('msg.search')}}">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="{{url('/')}}" class="js-logo-clone">Trend Az</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ Auth::user()->name }}</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{__('msg.login')}}</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{__('msg.register')}}</a>
                        @endif
                    @endauth
                </div>
            @endif
            <br>
 
                  <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                  <?php
            if(Auth::user()){?>
                  <li>
                    <a href="cart.html" class="site-cart">
                      <span class="icon icon-shopping_cart"></span> 
                      <span class="count">2</span>
                    </a>
                  </li> 
                  <?php }?>
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 


      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
          <li><a href="{{url('/')}}">{{__('msg.home')}}</a></li>
            <li class="has-children active">
              <a href="{{route('kategori')}}">{{__('msg.categories')}}</a>
              
              <ul class="dropdown">
              @foreach($kategori as $katecek)
                <li><a href="{{url('/kategorilist/'.$katecek->id)}}">{{$katecek->kategoriya_ad}}</a></li>
              @endforeach
              </ul>
            </li>
            <li><a href="{{route('about')}}">{{__('msg.about')}}</a></li>
            <li><a href="{{route('bizimleelaqe')}}">{{__('msg.contact')}}</a></li>
            <?php
            if(Auth::user()){?>
              <li><a  href="{{url('/sebet/'.Auth::user()->id)}}">{{__('msg.cart')}}</a></li>
           <?php }?>
            
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('msg.language')}}</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              @foreach(config('localization.locales') as $locale)
              <a class="dropdown-item" href="{{route('localization',$locale)}}">{{__($locale)}}</a>
              @endforeach
            </div>
            </li>

          </ul>
        </div>
      </nav>
    </header>