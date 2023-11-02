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
            <h2>Istifadeciler</h2>


          <div class="x_content">




            <!-- Div İçerik Başlangıç -->
            <input type="hidden" >

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Sira</th>
                  <th>Istifadeci Ad</th>
                  <th>Istifadeci Email</th>
                  <th><center>Sil</center></th>
                </tr>
              </thead>  

              <tbody>
           
        
                <tr> 
                 <td width="20"></td>
                 <td></td>
                 <td></td>
                 <td><center><a href=""><button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a></center></td>
                </tr>
                 <input type="hidden" >
          
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