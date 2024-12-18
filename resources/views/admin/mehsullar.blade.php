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
            <h2>Ürün Listeleme</h2>

            <div class="clearfix"></div>

            <div align="right">
              <a href="{{url('/admin/mehsulyukle')}}"><button class="btn btn-success btn-xs"> Yeni Ekle</button></a>

            </div>
          </div>
          <div class="x_content">
          @if(Session::has("status"))
                        <br>
                        <div class="alert alert-success">
                          {{Session::get('status')}}

                        </div>
                     @endif

            <!-- Div İçerik Başlangıç -->
            <input type="hidden" {{$say='1'}}>
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Mehsul Ad</th>
                  <th>Mehsul Model</th>
                  <th>Kategori ismi</th>
                  <th>Mehsul Stok</th>
                  <th>Mehsul Fiyat</th>
                  <th>Mehsul Endirim Fiyati</th>
                  <th>Mehsul Endirim Tarixi</th>
                  <th>Mehsul Umumu Melumat</th>
                  <th>Mehsul Reng</th>
                  <th>Mehsul Size</th>
                  <th>Mehsul Olcu</th>
                  <th>Foto</th>
                  <th>Yenile</th>
                  <th>Sil</th>
                  
                </tr>
              </thead>

              <tbody>
          @foreach($mehsullar as $mehsulcek)
                <tr>
                 <td width="20">{{$say}}</td>
                 <td>{{$mehsulcek->mehsul_ad}}</td>
                 <td>{{$mehsulcek->mehsul_model}}</td>
                 <td>{{$mehsulcek->kategoriad}}</td>
                 <td>{{$mehsulcek->mehsul_say}}</td>
                 <td>{{$mehsulcek->mehsul_qiymet}}</td>
                 <td>{{$mehsulcek->mehsul_endirimqiymet}}</td>
                 <td>{{$mehsulcek->mehsul_endirim_tarix}}</td>
                 <td> 
                        <textarea {{$mehsulcek->mehsul_melumat}} ></textarea>

                  </td>
                 <td>{{$mehsulcek->mehsul_reng}}</td>
                 <td>{{$mehsulcek->mehsul_size}}</td>
                 <td>{{$mehsulcek->mehsul_olcu}}</td>
                 <td><img  src="{{asset('dimg/mehsullar/'.$mehsulcek->mehsul_resm)}}" alt=""></td>
                 <td><center><a href="{{url('/admin/mehsulduzenle/'.$mehsulcek->id)}}"><button class="btn btn-primary btn-xs"><i class="fa fa-rotate-right"></i></button></a></center></td>
                 <td><center><a href="{{url('/admin/mehsulsil/'.$mehsulcek->id)}}"><button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a></center></td>
                </tr>
                <input type="hidden" {{$say++}}>
         @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>
</div>
<!-- /page content -->
@endsection