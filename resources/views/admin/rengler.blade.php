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
            <h2>Rengler</h2>

            <div class="clearfix"></div>

            <div align="right">
              <a href="{{url('/admin/reng_elavet')}}"><button class="btn btn-success btn-xs"> Əlavə et</button></a>

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
                  <th>Reng Ad</th>
                  <th><center>Yenile</center></th>
                  <th><center>Sil</center></th>
                </tr>
              </thead>  

              <tbody>
           
                @foreach($reng as $rengcek)
                <tr> 
                 <td width="20">{{$say}}</td>
                 <td>{{$rengcek->reng_ad}}</td>
                 <td><center><a href="{{url('/admin/reng_yenile/'.$rengcek->id)}}"><button class="btn btn-primary btn-xs"><i class="fa fa-rotate-right"></i></button></a></center></td>
                 <td><center><a href="{{url('/admin/rengsil/'.$rengcek->id)}}"><button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a></center></td>
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