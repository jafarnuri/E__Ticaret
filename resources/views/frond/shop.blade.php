@extends('frond_layout.master')
@section('content')

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="{{url('/')}}">{{__('msg.home')}}</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">{{__('msg.categories')}}</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">{{__('msg.shop all')}}</h2></div>
                
              </div>
            </div>
            <div class="row mb-5">
@foreach($mehsul as $mehsulcek)
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="{{url('/urundetay/'.$mehsulcek->id)}}"><img src="{{asset('dimg/mehsullar/'.$mehsulcek->mehsul_resm)}}" width="225" height="225" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="{{url('/urundetay/'.$mehsulcek->id)}}">{{$mehsulcek->mehsul_ad}}</a></h3>
                   
                    <p class="text-primary font-weight-bold" class="product-old-price">{{$mehsulcek->mehsul_qiymet}}<img src="{{asset('icons/manat_9585233.png')}}" alt="Image placeholder"  width="15" height="13"></p>
                 @if(($mehsulcek->mehsul_endirimqiymet) > 0) 
                   <span class="text-danger font-weight-bold"><del class="product-old-price">${{$mehsulcek->mehsul_endirimqiymet}}<img src="{{asset('icons/manat_9585233.png')}}" alt="Image placeholder"  width="15" height="13"></del></span>
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
              <h3 class="mb-3 h6 text-uppercase text-black d-block">{{__('msg.categories')}}</h3>
              <ul class="list-unstyled mb-0">


              @foreach($kategori as $katecek)
              <li class="mb-1"><a class="d-flex" href="{{url('/kategorilist/'.$katecek->id)}}"><span>{{$katecek->kategoriya_ad}}</span><span class="text-black ml-auto">(2,220)</span></a></li>
                
                      @endforeach





              </ul>
            </div>

            <div class="border p-4 rounded mb-4">


              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">{{__('msg.sizes')}}</h3>
                @foreach($size as $sizecek)
                <li class="mb-1"><a  href="{{url('/sizelist/'.$sizecek->id)}}"><span>{{$sizecek->size_ad}}</span><span class="text-black ml-auto">(2,220)</span></a></li>
               
                @endforeach
              </div>

              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">{{__('msg.colors')}}</h3>
                @foreach($reng as $rengcek)
                <li class="mb-1"><a  href="{{url('/renglist/'.$rengcek->id)}}"><span>{{$rengcek->reng_ad}}</span><span class="text-black ml-auto">(2,220)</span></a></li>
               
                @endforeach
              </div>

            </div>
          </div>
        </div>

       
        
        
      </div>
    </div>

 @endsection