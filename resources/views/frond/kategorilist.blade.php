@extends('frond_layout.master')



@section('content')
<div class="container">
	
		<div class="row">
			<div class="col-md-9"><!--Main content-->
				<div class="title-bg">
					<div class="title">{{$kategori->kategori_ad}}</div>
					
				</div>
				<div class="row prdct"><!--Products-->
				@foreach($mehsul as $mehsulcek)

					<div class="col-md-4">
						<div class="productwrap">
							<div class="pr-img">
								<div ></div>
								<a href="" ><img src="{{asset('dimg/urunler/'.$uruncek->urun_resm)}}" alt="" class="img-responsive"></a>
								<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale"><span class="oldprice">${{$mehsulcek->mehsul_endirimqiymet}}</span>${{$mehsulcek->mehsul_qiymet}}</span></div></div>
							</div>
							<span class="smalltitle"><a href="">{{$mehsulcek->mehsul_ad}}</a></span>
							
						</div>
					</div>
					@endforeach
				</div><!--Products-->


			</div>
		
		</div>
		<div class="spacer"></div>
	</div>

@endsection