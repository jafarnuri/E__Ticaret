@extends('frond_layout.master')
@section('content')
<?php use App\Models\Mehsullar;?>
<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="{{url('/')}}">{{__('msg.home')}}</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">{{__('msg.cart')}}</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
        @if(Session::has("error"))
                        <br>
                        <div class="alert alert-danger">
                          {{Session::get('error')}}

                        </div>
                     @endif
          <form class="col-md-12" method="post">
          @csrf
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">{{__('msg.image')}}</th>
                    <th class="product-name">{{__('msg.product')}}</th>
                    <th class="product-price">{{__('msg.price')}}</th>
                    <th class="product-quantity">{{__('msg.quantity')}}</th>
                    <th class="product-total">{{__('msg.total')}}</th>
                    <th class="product-remove">{{__('msg.remove')}}</th>
                  </tr>
                </thead>
                <tbody>

                  @if($sebet)
               @foreach($sebet as $sebetcek)
              <?php
               $mehsul=Mehsullar::where("id",'=',$sebetcek->mehsul_id)->first();

               ?>
                   <tr>
                    <td class="product-thumbnail">
                      <img src="{{asset('dimg/mehsullar/'.$mehsul->mehsul_resm)}}" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">{{$mehsul->mehsul_ad}}</h2>
                    </td>
                    <td>{{$mehsul->mehsul_qiymet}}</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="{{$sebetcek->mehsul_eded}}" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                      </div>

                    </td>
                    <td>{{($mehsul->mehsul_qiymet)*($sebetcek->mehsul_eded)}}</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  @endforeach
                  @endif

                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">

          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">{{__('msg.cart totals')}}</h3>
                  </div>
                </div>

                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">{{__('msg.total')}} </span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black"></strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='checkout.html'">{{__('msg.proceed to checkout')}}</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection