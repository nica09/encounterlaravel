@extends('layouts.apphome')
@section('contenthome')
<div id="wrapper">

        <!-- Navigation -->
         @include('navbar.navbaradm')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Product</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                        <!-- /.panel-heading -->
                        <div class="panel-heading">
                           <a href="{{ route('addproduct') }}" type="button" class="btn btn-primary">Tambah Data</a>
                        </div>
                         @include('layouts.alert.alert-flashmessage')
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                       <th>No</th>
                                       <th>Nama Product</th>
                                       <th>Quantity Product</th>
                                       <th>Harga Product</th>
                                       <th>Deskripsi Product</th>
                                       <th>Gambar Product</th>
                                       <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php $no = 1; ?>
                                 @foreach ( $productdata as $dataproduct)
                                   <tr class="gradeU">
                                       <td>{{ $no++ }}</td>
                                       <td>{{ $dataproduct->nama_produk }}</td>
                                       <td>
                                            {{ $dataproduct->quantity_produk }}
                                       </td>
                                       <td>{{ $dataproduct->harga_produk }}</td>
                                       <td>
                                            {{ $dataproduct->deskripsi_produk }}
                                       </td>
                                       <td>
                                           <img src="{{ asset('images/' . $dataproduct->img_product) }}" style="width: 100px; height: 50px;">
                                        </td>
                                     
                                       <td class="center">
                                           <a href="{{ url('/product/edit/' . $dataproduct->id_product) }}" type="button" class="btn btn-success">Edit</a>

                                            <a href="{{ url('/product/hapus/' . $dataproduct->id_product) }}" type="button" class="btn btn-danger">Hapus</a>
                                          
                                       </td>
                                   </tr>
                                 @endforeach
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
 @endsection