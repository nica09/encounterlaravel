@extends('layouts.apphome')
@section('contenthome')
<div id="wrapper">

        <!-- Navigation -->
         @include('navbar.navbaradm')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Slider</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row --> 
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                        <!-- /.panel-heading -->
                        <div class="panel-heading">
                           <a href="{{ route('addsliderr') }}" type="button" class="btn btn-primary">Tambah Data</a>
                        </div>
                         @include('layouts.alert.alert-flashmessage')
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                       <th>No</th>
                                       <th>Judul</th>
                                       <th>Status</th>
                                       <th>Gambar</th>
                                       <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php $no = 1; ?>
                                 @foreach ( $sliderdata as $dataslider)
                                   <tr class="gradeU">
                                       <td>{{ $no++ }}</td>
                                       <td>{{ $dataslider->judul_slider }}</td>

                                          @if($dataslider->status_slider == 1)
                                           <td>
                                                <span class="label label-success">Aktif</span>
                                            </td>
                                            @elseif($dataslider->status_slider == 0)
                                            <td>
                                                <span class="label label-danger">Non-Aktif</span>
                                            </td>
                                            @endif
                                       <td>
                                           <img src="{{ asset('images/' . $dataslider->gambar_slider) }}" style="width: 100px; height: 50px;">
                                        </td>
                                     
                                       <td class="center">
                                           <a href="{{ url('/slider/edit/' . $dataslider->id_slider) }}" type="button" class="btn btn-success">Edit</a>

                                            <a href="{{ url('/slider/hapus/' . $dataslider->id_slider) }}" type="button" class="btn btn-danger">Hapus</a>
                                          
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