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
            <h2>Ürün Ekle</h2>
           
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
            <form action="{{route('mehsul_elavet')}}" method="POST" id="demo-form2" enctype="multipart/form-data"  data-parsley-validate class="form-horizontal form-label-left">
            @csrf
   

                <!-- Ck Editör Başlangıç -->


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Ad <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="mehsul_ad" placeholder="Ürün adnizi girin"  class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Model <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="mehsul_model" placeholder="Ürün modelin girin"  class="form-control col-md-7 col-xs-12">
                </div>
              </div>




              <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori Seç<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-6">
                
                    <select class="select2_multiple form-control" required="" name="kategoriad" >
                  @foreach($kategori as $katcek)
                       <option  value="{{$katcek->kategoriya_ad}}">{{$katcek->kategoriya_ad}}</option>
                      @endforeach
                     </select>
                   </div>
                 </div>

 

                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Endirim Fiyat 
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="mehsul_endirimqiymet" placeholder="Ürün fiyat giriniz"  class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Fiyat <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="mehsul_qiymet" placeholder="Ürün fiyat giriniz"  class="form-control col-md-7 col-xs-12">
                </div>
              </div>



              
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Stok <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="mehsul_say" placeholder="Ürün stok giriniz" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Foto <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="first-name" name="mehsul_resm" placeholder="" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

            <div class="form-group">
              <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" name="" class="btn btn-success">Kaydet</button>
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