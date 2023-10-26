@extends('admin_layout.master')

@section('contect')

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
           
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    
                  <h2>Haqqimizda Ayar </h2> 


                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    @if(Session::has("status"))
                        <br>
                        <div class="alert alert-success">
                          {{Session::get('status')}}

                        </div>
                     @endif

                     <form action="{{route('haqqimizdalogo')}}" method="POST" enctype="multipart/form-data"  data-parsley-validate class="form-horizontal form-label-left">
                    @csrf
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yuklu Logo <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         
                         <img width="200"  src="{{asset('dimg/logo/'.$haqqimizda->haqqimizda_logo)}}" alt="">
                        
                        </div>
                      </div>
                     

                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" >Logo Sec <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" id="first-name" name="haqqimizda_logo" class="form-control col-md-7 col-xs-12">
                      </div>

                        </div>

                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button  type="submit" name="" class="btn btn-primary">Guncelle</button>
                        </div>

                      

                    </form>
                    <form action="{{route('haqqimizdayenile')}}" method="POST"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      @csrf
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Baslik <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="haqqimizda_baslik" 
                          value="{{$haqqimizda->haqqimizda_baslik}}" required="required"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İcerik <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea value="{{$haqqimizda->haqqimizda_umumi}}"  class="form-control col-md-7 col-xs-12" id="first-name" name="haqqimizda_umumi"></textarea>
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Video <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="haqqimizda_vidio"
                          value="{{$haqqimizda->haqqimizda_vidio}}" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                          <button  type="submit" name="" class="btn btn-success">Guncelle</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

@endsection

