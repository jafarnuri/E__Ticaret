@extends('admin_layout.master')

@section('contect')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Ürün Düzenleme</h2>
           
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

          @if(Session::has("status"))
                        <br>
                        <div class="alert alert-success">
                          {{Session::get('status')}}

                        </div>
                     @endif
            <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
            <form action="{{url('/admin/mehsul_yenile/'.$mehsullar->id)}}" method="POST" id="demo-form2" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">

            @csrf
          

                 <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mehsul Ad <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="first-name" name="mehsul_ad" 
                    value="{{$mehsullar->mehsul_ad}}" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mehsul Model <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="first-name" name="mehsul_model" 
                    value="{{$mehsullar->mehsul_model}}" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div >



                <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori Seç<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-6">
                
                    <select class="select2_multiple form-control" required="" name="kategoriad" >
                  @foreach($kategori as $katcek)
                       <option  value="{{$mehsullar->kategoriad}}">{{$katcek->kategoriya_ad}}</option>
                      @endforeach
                     </select>
                   </div>
                 </div>



              <!-- Ck Editör Bitiş -->

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mehsul Endirim Qiymet 
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="mehsul_endirimqiymet" 
                  value="{{$mehsullar->mehsul_endirimqiymet}}"  class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mehsul Qiymet <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="mehsul_qiymet" 
                  value="{{$mehsullar->mehsul_qiymet}}"  class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mehsul Size <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="mehsul_size" 
                  value="{{$mehsullar->mehsul_size}}" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

       

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mehsul Stok <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="mehsul_say" 
                  value="{{$mehsullar->mehsul_say}}" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>



              <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mehsul Resim<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         
                         <img width="200"  src="{{asset('dimg/mehsullar/'.$mehsullar->mehsul_resm)}}" alt="">
                        
                        </div>
                      </div>
                     

                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" >Resim Sec <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" id="first-name" name="mehsul_resm" class="form-control col-md-7 col-xs-12">
                      </div>

                        </div>


             <div class="ln_solid"></div>
             <div class="form-group">
              <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" name="" class="btn btn-success">Güncelle</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- /page content -->
@endsection