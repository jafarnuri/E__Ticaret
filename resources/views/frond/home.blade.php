@extends('frond_layout.master')



@section('content')
<div class="site-blocks-cover" style="background-image: url(images/hero_1.jpg);"  data-aos="fade">
      <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end">
        <img src="{{asset('/')}}frondend/images/cloth_2.jpg" alt="Image placeholder" class="img-fluid">
          <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
            <h1 class="mb-2"><a href="{{url('/')}}" class="js-logo-clone">Trend Az</a>
          
            </h1>   
            <div class="intro-text text-center text-md-left">
              <p class="mb-4">{{__('msg.our customers are very valuable to us')}} </p>
              <p class="mb-4">{{__('msg.customer rights are fully protected')}} </p>
              <p>
                <a href="{{route('kategori')}}" class="btn btn-sm btn-primary">{{__('msg.shop now')}}</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm site-blocks-1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-truck"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">{{__('msg.free shipping')}}</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-refresh2"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">{{__('msg.free returns')}}</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-help"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">{{__('msg.customer support')}}</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
            </div>
          </div>
        </div>
      </div>
    </div>


   

@endsection