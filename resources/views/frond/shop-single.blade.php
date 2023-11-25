@extends('frond_layout.master')
@section('content')

<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="{{url('/')}}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Tank Top T-Shirt</strong></div>
    </div>
  </div>
</div>  

<div class="site-section">
  <div class="container">
    
    <form action="{{url('/sebetelavet')}}" method="POST">
    @csrf
    <div class="row">
      <div class="col-md-6">
        <img src="{{asset('dimg/mehsullar/'.$mehsul->mehsul_resm)}}" alt="Image" class="img-fluid">
      </div>
      <div class="col-md-6">
                     @if(Session::has("status"))
                        <br>
                        <div class="alert alert-success">
                          {{Session::get('status')}}

                        </div>
                     @endif
                     @if(Session::has("error"))
                        <br>
                        <div class="alert alert-danger">
                          {{Session::get('error')}}

                        </div>
                     @endif
        <h2 class="text-black">{{$mehsul->mehsul_ad}}</h2>
        <p>{{$mehsul->mehsul_melumat}}</p>
        
        @if(($mehsul->mehsul_endirimqiymet) > 0) 
                   <span class="text-danger font-weight-bold"><del class="product-old-price">{{$mehsul->mehsul_endirimqiymet}}azn</del></span>
                   @endif
        <p><strong class="text-primary h4">{{$mehsul->mehsul_qiymet}}azn</strong></p>
        <div class="mb-1 d-flex">
          <label for="option-sm" class="d-flex mr-3 mb-3">
            <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-sm" name="size"></span> <span class="d-inline-block text-black">Small</span>
          </label>
          <label for="option-md" class="d-flex mr-3 mb-3">
            <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-md" name="size"></span> <span class="d-inline-block text-black">Medium</span>
          </label>
          <label for="option-lg" class="d-flex mr-3 mb-3">
            <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-lg" name="size"></span> <span class="d-inline-block text-black">Large</span>
          </label>
          <label for="option-xl" class="d-flex mr-3 mb-3">
            <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-xl" name="size"></span> <span class="d-inline-block text-black"> Extra Large</span>
          </label>
        </div>
        <div class="mb-5">
          <div class="input-group mb-3" style="max-width: 120px;">
          <div class="input-group-prepend">
            <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
          </div>
          <input type="text" name="mehsul_eded" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
          <div class="input-group-append">
            <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
          </div>
        </div>

        </div>
        <input type="hidden" name="mehsul_id" value="{{$mehsul->id}}" >
        <input type="hidden" name="user_id" value="@if(Auth::guard('web')->user()){{Auth::guard('web')->user()->id}}@endif" >
        <div class="form-group">
              
            <button type="submit" name="" class="buy-now btn btn-sm btn-primary">Sebete Elave Et</button>
              
        </div>
      </div>
    </div>
</form>
  </div>
</div>

@endsection