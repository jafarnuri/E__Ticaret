@extends('frond_layout.master')
@section('content')

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="{{route('home')}}">ESAS SEYIFE</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">{{$sizes->size_ad}}</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">{{$sizes->size_ad}}</h2></div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Latest
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                
                    @foreach($size as $sizecek)
                      <a class="dropdown-item" href="{{url('/sizelist/'.$sizecek->id)}}">{{$sizecek->size_ad}}</a>
                
                      @endforeach
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="row mb-5">
@foreach($mehsul as $mehsulcek)
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="{{url('/urundetay/'.$mehsulcek->id)}}"><img src="{{asset('dimg/mehsullar/'.$mehsulcek->mehsul_resm)}}" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="{{url('/urundetay/'.$mehsulcek->id)}}">{{$mehsulcek->mehsul_ad}}</a></h3>
                    <p class="mb-0">{{$mehsulcek->mehsul_model}}</p>
                                     @if(($mehsulcek->mehsul_endirimqiymet) > 0) 
                   <span class="text-danger font-weight-bold"><del class="product-old-price">${{$mehsulcek->mehsul_endirimqiymet}}</del></span>
                   @endif
                  </div>
                </div>
              </div>
@endforeach





            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
                <div class="site-block-27">
                  <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

     <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Kategoriya</h3>
              <ul class="list-unstyled mb-0">


              @foreach($kategori as $kategoricek)
              <li class="mb-1"><a class="d-flex" href="{{url('/kategorilist/'.$kategoricek->id)}}"><span>{{$kategoricek->kategoriya_ad}}</span><span class="text-black ml-auto">(2,220)</span></a></li>
                
                      @endforeach





              </ul>
            </div>

            <div class="border p-4 rounded mb-4">


            <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Size</h3>
                @foreach($size as $sizecek)
                <li class="mb-1"><a  href="{{url('/sizelist/'.$sizecek->id)}}"><span>{{$sizecek->size_ad}}</span><span class="text-black ml-auto">(2,220)</span></a></li>
               
                @endforeach
              </div>

              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Rengler</h3>
                @foreach($reng as $rengcek)
                <li class="mb-1"><a  href="{{url('/renglist/'.$rengcek->id)}}"><span>{{$rengcek->reng_ad}}</span><span class="text-black ml-auto">(2,220)</span></a></li>
               
                @endforeach
              </div>

            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="site-section site-blocks-2">
                <div class="row justify-content-center text-center mb-5">
                  <div class="col-md-7 site-section-heading pt-4">
                    <h2>Categories</h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                    <a class="block-2-item" href="#">
                      <figure class="image">
                        <img src="{{asset('/')}}frondend/images/women.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Collections</span>
                        <h3>Women</h3>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <a class="block-2-item" href="#">
                      <figure class="image">
                        <img src="{{asset('/')}}frondend/images/children.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Collections</span>
                        <h3>Children</h3>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                    <a class="block-2-item" href="#">
                      <figure class="image">
                        <img src="{{asset('/')}}frondend/images/men.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Collections</span>
                        <h3>Men</h3>
                      </div>
                    </a>
                  </div>
                </div>
              
            </div>
          </div>
        </div>
        
      </div>
    </div>

 @endsection