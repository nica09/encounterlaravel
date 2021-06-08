@extends('layouts.apphome')
@section('contenthome')
<div id="wrapper">

  @include('navbar.navbaradm')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Slider </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ url('/member/proses/edit/' . $memberdata->id_member) }}" method="post" enctype="multipart/form-data">
                    @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Member</label>
                        <input type="text" name="nama_member" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $memberdata->nama_member }}">
                     
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Id Member</label>
                        <input type="number" name="no_member" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $memberdata->no_member }}">
                     
                      </div>
                     
                       <div class="form-group">
                        <img src="{{ asset('images/'. $memberdata->gambar_member)}}" class="img-responsive" style="width: 250px; height: 100px;">
                        <input type="hidden" name="gambar_old" value="{{ $memberdata->gambar_member }}">
                        <br>
                        <label for="exampleFormControlFile1">Upload Gambar</label>
                        <input type="file" name="gambar_member" class="form-control-file" id="exampleFormControlFile1">
                        <span>Klik untuk ganti gambar</span>
                      </div>
                      
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <!-- /.panel -->
                </div>
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

</div>

@endsection