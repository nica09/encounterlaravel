@extends('layouts.apphome')
@section('contenthome')
<div id="wrapper">
 @include('navbar.navbaradm')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Blog</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                   <form action="{{ url('/post/blog') }}" id="signupForm1" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="firstname">Judul</label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control" id="judul_blog" name="judul_blog" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="firstname">Deskripsi</label>
                      <div class="col-sm-8">
                      <textarea name="deskripsi_blog" class="form-control" id="deskripsi_blog"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="firstname">Gambar Blog</label>
                      <div class="col-sm-8">
                      <input type="file" class="form-control" id="img_blog" name="img_blog" />
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