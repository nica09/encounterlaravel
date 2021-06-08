@extends('layouts.apphome')
@section('contenthome')
<div id="wrapper">

       @include('navbar.navbaradm')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Member</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                         <div class="panel-heading">
                            <a href="{{ route('addmember') }}" type="button" class="btn btn-primary">Tambah Data</a>
                         </div>
                          @include('layouts.alert.alert-flashmessage')
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                       <th>No</th>
                                       <th>Nama Member</th>
                                       <th>ID Member</th>
                                       <th>Gambar</th>
                                       <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php $no = 1;?>
                                 @foreach ( $memberdata as $datamember )
                                   <tr class="gradeU">
                                       <td>{{ $no++ }}</td>
                                       <td>{{ $datamember->nama_member }}</td>
                                       <td>{{ $datamember->no_member }}</td>
                                       <td class="center">
                                            <img src="{{ asset('images/'. $datamember->gambar_member) }}" style="width: 100px; height: 50px;">
                                       </td>
                                       <td class="center">
                                           <a href="{{ url('/member/edit/' . $datamember->id_member) }}" type="button" class="btn btn-success">Edit</a>

                                            <a href="{{ url('/member/hapus/' . $datamember->id_member) }}" type="button" class="btn btn-danger">Hapus</a>

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