@extends('frond_layout.master')
@section('content')
@if(Session::has("status"))
                        <br>
                        <div class="alert alert-success">
                          {{Session::get('status')}}

                        </div>
                     @endif
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="{{route('home')}}">ESAS SEYIFE</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">{{$mehsul->kategoriad}}</strong></div>
        </div>
      </div>
    </div>  

		<div class="row">
			<div class="col-md-9"><!--Main content-->
				<div class="title-bg">

				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="dt-img">
							<div class="detpricetag"><div class="inner"></div></div>
							<a class="fancybox" href="" data-fancybox-group="gallery" title="Cras neque mi, semper leon">
							<img src="{{asset('dimg/mehsullar/'.$mehsul->mehsul_resm)}}" alt="" class="img-responsive"></a>
						</div>
					</div>
					<div class="col-md-6 det-desc">
						<div class="productdata">
            <div class="infospan">Mehsul Ad   <span class="text-primary font-weight-bold">  {{$mehsul->mehsul_ad}}</span></div>
							<div class="infospan">Model   <span class="text-primary font-weight-bold">   {{$mehsul->mehsul_model}}</span></div>
							<div class="infospan">Stok   <span class="text-primary font-weight-bold">  {{$mehsul->mehsul_say}}</span></div>
              <div class="infospan">Reng   <span class="text-primary font-weight-bold">  {{$mehsul->mehsul_reng}}</span></div>
              <div class="infospan">Qiymet   <span class="text-primary font-weight-bold">  {{$mehsul->mehsul_qiymet }} Azn</span></div>
							<div class="average">
							<form role="form">

							</form>
							</div>
				
							
							<form action="{{route('sebetelavet',$mehsul->id)}}" method="POST" class="form-horizontal ava" role="form">
		                          
							@csrf

								<div class="form-group">
									<label for="first-name" class="col-sm-2 control-label">Say</label>
			
									<div class="col-sm-4">
										<select class="form-control" name="mehsul_eded" id="first-name">
											<option>1
											<option>2
											<option>3
											<option>4
											<option>5
										</select>
									</div>
									<input type="hidden" name="user_id" value="{{Auth::guard('web')->user()->id}}">
									<input type="hidden" name="mehsul_id" value="{{$mehsul->id}}">
									<div class="col-sm-4">
										<button type="submit" class="btn btn-primary btn-red btn-sm"><span class="addchart">Sebete Elave Et</span></button>
									</div>
									<div class="clearfix"></div>
								</div>
							</form>
				
						</div>
					</div>
				</div>

				<div class="tab-review">
					<ul id="myTab" class="nav nav-tabs shop-tab">
						<li class="active"><a href="#desc" data-toggle="tab">Mehsul Detay</a></li>
						<li class=""><a href="#rev" data-toggle="tab">  Yorumlar (0)</a></li>
						<li class=""><a href="#video" data-toggle="tab">Urun Video</a></li>
					</ul>
					<div id="myTabContent" class="tab-content shop-tab-ct">
						<div class="tab-pane fade active in" id="desc">
							<p>
							{{$mehsul->mehsul_melumat}}
							</p>
						</div>
						<div class="tab-pane fade" id="rev">
							<p class="dash">
							<span>Jhon Doe</span> (11/25/2012)<br><br>
							Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.
							</p>
							<h4>Yorum yaz</h4>

						  <form action="" method="POST" role="form">

							<div class="form-group">
								<textarea class="form-control" id="text"></textarea>
							</div>
		
							<button  type="submit" class="btn btn-default btn-red btn-sm">Gonder</button>
						  </form>
							
						</div>

						<div class="tab-pane fade " id="video">
									<p>

										<iframe width="560" height="315" src="" frameborder="0" allowfullscreen></iframe>

									</p>
								</div>
					</div>
				</div>
				
			</div><!--Main content-->
			

@endsection
   