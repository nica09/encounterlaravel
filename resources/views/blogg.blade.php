@extends('layouts.apphome')
@section('contenthome')
<div id="wrapper">

        <!-- Navigation -->
         @include('navbar.navbaradm')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Blog & News</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                        <!-- /.panel-heading -->
                        <div class="panel-heading">
                           <a href="{{ route('addblog') }}" type="button" class="btn btn-primary">Tambah Data</a>
                        </div>
                         @include('layouts.alert.alert-flashmessage')
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                   </tr>
                                </thead>
                                <tbody>
                                  <?php $no = 1;?>
                                  @foreach ( $blog as $blogss )
                                   <tr class="gradeU">
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $blogss->judul_blog }}</td>
                                    <td>{{ $blogss->deskripsi_blog }}</td>
                                    <td class="center">
                                        <img src="{{ asset('images/' . $blogss->img_blog) }}" style="width: 100px; height: 50px;">
                                    </td>
                                    <td class="center">
                                        <a href="{{ url('/blog/edit/' . $blogss->id_blog) }}" type="button" class="btn btn-success">Edit</a>

                                        <a href="{{ url('/blog/hapus/' . $blogss->id_blog) }}" type="button" class="btn btn-danger">Hapus</a>
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