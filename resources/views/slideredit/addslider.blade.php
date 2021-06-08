@extends('layouts.apphome')
@section('contenthome')
<div id="wrapper">

  @include('navbar.navbaradm')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Slider </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                   <form action="{{ url('/post/slider') }}" id="signupForm1" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="firstname">Judul</label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control" id="judul_slider" name="judul_slider" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="firstname">Status</label>
                      <div class="col-sm-8">
                      <select name="status_slider" class="form-control" id="status_slider">
                            <option value="">--  PILIH STATUS --</option>
                            <option value="1">Aktif</option>
                            <option value="0">Non-Aktif</option>
                            
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="firstname">Gambar Slider</label>
                      <div class="col-sm-8">
                      <input type="file" class="form-control" id="gambar_slider" name="gambar_slider" />
                      </div>
                    </div>


                    <div class="form-group">
                      <div class="col-sm-9 col-sm-offset-4">
                      <button type="submit" class="btn btn-primary" name="" id="signupForm1">Submit</button>
                      </div>
                    </div>
                   </form>
                    <!-- /.panel -->
                </div>
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

</div>

@endsection