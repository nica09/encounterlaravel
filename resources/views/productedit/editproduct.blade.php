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
                    <form action="{{ url('/product/proses/edit/' . $productdata->id_product) }}" method="post" enctype="multipart/form-data">
                    @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $productdata->nama_produk }}">
                     
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Quantity Produk</label>
                        <input type="number" name="quantity_produk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $productdata->quantity_produk }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Harga Produk</label>
                        <input type="number" name="harga_produk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $productdata->harga_produk }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Deskripsi Produk</label>
                        <textarea name="deskripsi_produk" class="form-control" name="wysiwyg-editor">{{ $productdata->deskripsi_produk }}</textarea>
                     
                      </div>



                       <div class="form-group">
                        <img src="{{ asset('images/'. $productdata->img_product)}}" class="img-responsive" style="width: 250px; height: 100px;">
                        <input type="hidden" name="gambar_old" value="{{ $productdata->img_product }}">
                        <br>
                        <label for="exampleFormControlFile1">Upload Gambar</label>
                        <input type="file" name="img_product" class="form-control-file" id="exampleFormControlFile1">
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