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
            <h2>Kategori</h2>

            <div class="clearfix"></div>

            <div align="right">
              <a href="{{route('kategorielaveet')}}"><button class="btn btn-success btn-xs"> Əlavə et</button></a>

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
            <input type="hidden"{{$say='1'}} >

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Sira</th>
                  <th>Kategoriya Ad</th>
                  <th><center>Yenile</center></th>
                  <th><center>Sil</center></th>
                </tr>
              </thead>  

              <tbody>
           
                @foreach($kategori as $kategoricek)
                <tr> 
                 <td width="20">{{$say}}</td>
                 <td>{{$kategoricek->kategoriad}}</td>
                 <td><center><a href="{{url('/kategoriyenile/'. $kategoricek->kategori_id)}}"><button class="btn btn-primary btn-xs"><i class="fa fa-rotate-right"></i></button></a></center></td>
                 <td><center><a href=""><button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a></center></td>
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