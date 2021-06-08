<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $memberdata = Members::all();
        return view('memberr', compact('memberdata'));

    }
     public function addMember()
    {
        return view('memberedit.addmemberss');
    }
   
     public function prosestambahmember(Request $request)
    {
         $this->validate($request, [
            'gambar_member'     => 'required|image|mimes:png,jpg,jpeg',
            'nama_member'     => 'required',
            'no_member'   => 'required'

        ]);
        

        //upload image
        $memberdata = new Members();
        $memberdata->nama_member = $request->get('nama_member');
        $memberdata->no_member = $request->get('no_member');
        
        if ($request->hasFile('gambar_member')) {
            // $post->delete_image();
            $gambar_member = $request->file('gambar_member');
            // echo $photo_profile;exit;
            $name = rand(1000, 9999) . $gambar_member->getClientOriginalName();
            $gambar_member->move('images', $name);
            $memberdata->gambar_member = $name;
        }


        $memberdata->save();

        if($memberdata){
            //redirect dengan pesan sukses
            return redirect()->route('memberr')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('memberr')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    public function editMember($id_member)
    {
        $memberdata = Members::findOrFail($id_member);
        // echo $blog;exit;
        return view('memberedit.editmemberss', compact('memberdata'));
    }
    // PROSES UPDATE/EDIT MEMBER
     public function updateDataMember(Request $request, $id_member)
    {
         $this->validate($request, [
            'gambar_member'     => 'image|mimes:png,jpg,jpeg',
            'nama_member'     => 'required',
            'no_member'   => 'required'
        
        ]);

        $memberdata = Members::findOrFail($id_member);
        $memberdata->nama_member = $request->get('nama_member');
        $memberdata->no_member = $request->get('no_member');
       
        

        if ($request->hasFile('gambar_member')) {
            // $post->delete_image();
           
            if($request->file('gambar_member') == ""){
                $gambar_member = $request->file('gambar_old');
            }else{
                 $gambar_member = $request->file('gambar_member');
            }
            // echo $photo_profile;exit;
            $name = rand(1000, 9999) . $gambar_member->getClientOriginalName();
            $gambar_member->move('images', $name);
            $memberdata->gambar_member = $name;
        }
        $memberdata->save();


        // dd($slider);
        if($memberdata){
            //redirect dengan pesan sukses
            return redirect()->route('memberr')->with(['success' => 'Data Berhasil DiUpdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('memberr')->with(['error' => 'Data Gagal DiUpdate!']);
        }
    }
    // PROSES HAPUS MEMBER
    public function hapusDataMember($id_member)
    {
        // echo $id; exit;
        $memberdata = Members::where('id_member',$id_member)->delete();

        if ($memberdata) {
            //redirect dengan pesan sukses
            return redirect()->route('memberr')->with(['success' => 'Data Berhasil Didelete!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('memberr')->with(['error' => 'Data Gagal Didelete!']);
        }
    }

    
}
