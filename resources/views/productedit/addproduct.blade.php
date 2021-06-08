@extends('layouts.apphome')
@section('contenthome')
<div id="wrapper">

  @include('navbar.navbaradm')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Produk </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                   <form action="{{ url('/post/product') }}" id="signupForm1" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="firstname">Nama Produk</label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control" id="nama_produk" name="nama_produk" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="firstname">Quantity Produk</label>
                      <div class="col-sm-8">
                      <input type="number" class="form-control" id="quantity_produk" name="quantity_produk" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="firstname">Harga Produk</label>
                      <div class="col-sm-8">
                      <input type="number" class="form-control" id="harga_produk" name="harga_produk" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="firstname">Deskripsi Produk</label>
                      <div class="col-sm-8">
                      <textarea name="deskripsi_produk" class="form-control" id="deskripsi_produk"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="firstname">Upload Gambar</label>
                      <div class="col-sm-8">
                      <input type="file" class="form-control" id="img_product" name="img_product" />
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