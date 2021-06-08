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
                    <form action="{{ url('/slider/proses/edit/' . $sliderdata->id_slider) }}" method="post" enctype="multipart/form-data">
                    @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label>
                        <input type="text" name="judul_slider" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $sliderdata->judul_slider }}">
                     
                      </div>

                       <div class="form-group">
                        <label for="sel1"> Status </label>
                          <select name="status_slider" class="form-control" id="sel1">
                            <option>--  PILIH STATUS --</option>
                            <option value="1" 
                            {{ $sliderdata->status_slider == 1 ? 'selected' : '' }} >Aktif</option>
                            <option value="0" {{ $sliderdata->status_slider == 0 ? 'selected' : '' }}>Non-Aktif</option>
                            
                          </select>
                     
                        </div>


                       <div class="form-group">
                        <img src="{{ asset('images/'. $sliderdata->gambar_slider)}}" class="img-responsive" style="width: 250px; height: 100px;">
                        <input type="hidden" name="gambar_old" value="{{ $sliderdata->gambar_slider }}">
                        <br>
                        <label for="exampleFormControlFile1">Upload Gambar</label>
                        <input type="file" name="gambar_slider" class="form-control-file" id="exampleFormControlFile1">
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