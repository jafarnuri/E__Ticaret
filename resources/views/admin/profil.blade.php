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
                    <h2>Menim Hesabim<small>
                   
                    </small></h2>
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

              
   <hr>

                       <form action="" method="POST" enctype="multipart/form-data"  data-parsley-validate class="form-horizontal form-label-left">
                           @csrf
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yuklu Resim <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12"> 
                            <img width="200" src="" alt="">
                        </div>
                      </div>
        

                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" >Resim Sec <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" id="first-name" name=""  class="form-control col-md-7 col-xs-12">
                      </div>

                        </div>

                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button  type="submit" name="" class="btn btn-primary">Guncelle</button>
                        </div>

                      

                    </form>
                    
                    <form action="" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                         @csrf
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site bashligi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="" 
                          value="" required="required"  class="form-control col-md-7 col-xs-12">
                   
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site aciklamasi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name=""
                          value="" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     
                     
                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                          <button  type="submit" name="" class="btn btn-primary">Yenile</button>
                        </div>
                      </div>

                    </form>


                    
                    
                    <form action="" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                         @csrf

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site bashligi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="" 
                          value="" required="required"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site aciklamasi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name=""
                          value="" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site aciklamasi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name=""
                          value="" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     
                     
                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                          <button  type="submit" name="" class="btn btn-primary">Yenile</button>
                        </div>
                      </div>

                    </form>


<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Hesabi sil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Hesabınız silindikdən sonra onun bütün resursları və məlumatları həmişəlik silinəcək. 
                Hesabınızı silməzdən əvvəl, saxlamaq istədiyiniz hər hansı məlumatı  endirin..') }}
        </p>
    </header>
    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
        <a href="{{route('hesabsil')}}">
    <button   type="submit" name="" class="btn btn-danger">Hesabi sil</button></a>
            </div>
            </div>

    

   
</section>


                  
                    
                  </div>
                </div>
              </div>
            </div>



          
          </div>
        </div>
        <!-- /page content -->
     

@endsection

       