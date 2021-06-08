@extends('layouts.apphome')
@section('contenthome')
<div id="wrapper"> 

  @include('navbar.navbaradm')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Member </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                   <form action="{{ url('/post/member') }}" id="signupForm1" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="firstname">Nama Member</label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control" id="nama_member" name="nama_member" />
                      </div>
                    </div>
                    
                 <div class="form-group">
                      <label class="col-sm-4 control-label" for="firstname">ID Member</label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control" id="no_member" name="no_member" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="firstname">Upload Gambar</label>
                      <div class="col-sm-8">
                      <input type="file" class="form-control" id="gambar_member" name="gambar_member" />
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