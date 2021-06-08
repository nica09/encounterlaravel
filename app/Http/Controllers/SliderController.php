<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sliderm;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sliderdata = Sliderm::all();
        return view('slider', compact('sliderdata'));
      
    }

    // PROSES TAMBAH DATA SLIDER
    public function addSlider()
    {
        return view('slideredit.addslider');
    }
   
     public function prosestambahsliders(Request $request)
    {
         $this->validate($request, [
            'gambar_slider'     => 'required|image|mimes:png,jpg,jpeg',
            'judul_slider'     => 'required',
            'status_slider'   => 'required'
        ]);

        //upload image
        $sliderdata = new Sliderm();
        $sliderdata->judul_slider = $request->get('judul_slider');
        $sliderdata->status_slider = $request->get('status_slider');
        
        if ($request->hasFile('gambar_slider')) {
            // $post->delete_image();
            $gambar_slider = $request->file('gambar_slider');
            // echo $photo_profile;exit;
            $name = rand(1000, 9999) . $gambar_slider->getClientOriginalName();
            $gambar_slider->move('images', $name);
            $sliderdata->gambar_slider = $name;
        }


        $sliderdata->save();

        if($sliderdata){
            //redirect dengan pesan sukses
            return redirect()->route('slider')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('slider')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function editSlider($id_slider)
    {
        $sliderdata = Sliderm::findOrFail($id_slider);
        // echo $blog;exit;
        return view('slideredit.editslider', compact('sliderdata'));
    }
    // PROSES UPDATE/EDIT SLIDER
     public function updateDataSlider(Request $request, $id_slider)
    {
         $this->validate($request, [
            'gambar_slider'     => 'image|mimes:png,jpg,jpeg',
            'judul_slider'     => 'required',
            'status_slider'   => 'required'
        ]);

        $sliderdata = Sliderm::findOrFail($id_slider);
        $sliderdata->judul_slider = $request->get('judul_slider');
        $sliderdata->status_slider = $request->get('status_slider');
        

        if ($request->hasFile('gambar_slider')) {
            // $post->delete_image();
           
            if($request->file('gambar_slider') == ""){
                $gambar_slider = $request->file('gambar_old');
            }else{
                 $gambar_slider = $request->file('gambar_slider');
            }
            // echo $photo_profile;exit;
            $name = rand(1000, 9999) . $gambar_slider->getClientOriginalName();
            $gambar_slider->move('images', $name);
            $sliderdata->gambar_slider = $name;
        }
        $sliderdata->save();


        // dd($slider);
        if($sliderdata){
            //redirect dengan pesan sukses
            return redirect()->route('slider')->with(['success' => 'Data Berhasil DiUpdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('slider')->with(['error' => 'Data Gagal DiUpdate!']);
        }
    }
    // PROSES HAPUS SLIDER
    public function hapusDataSlider($id_slider)
    {
        // echo $id; exit;
        $sliderdata = Sliderm::where('id_slider',$id_slider)->delete();

        if ($sliderdata) {
            //redirect dengan pesan sukses
            return redirect()->route('slider')->with(['success' => 'Data Berhasil Didelete!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('slider')->with(['error' => 'Data Gagal Didelete!']);
        }
    }

    

   
}
