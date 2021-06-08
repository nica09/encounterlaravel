<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;


class BlogerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blog = Blogs::all();
         return view('blogg', compact('blog'));
    }

    // PROSES TAMBAH DATA BLOG 
    public function addProduk()
    {
        return view('blogedit.add');
    }
   
     public function prosestambahblogs(Request $request)
    {
         $this->validate($request, [
            'img_blog'     => 'required|image|mimes:png,jpg,jpeg',
            'judul_blog'     => 'required',
            'deskripsi_blog'   => 'required'
        ]);


        //upload image
        $blog = new Blogs();
        $blog->judul_blog = $request->get('judul_blog');
        $blog->deskripsi_blog = $request->get('deskripsi_blog');
        
        if ($request->hasFile('img_blog')) {
            // $post->delete_image();
            $img_blog = $request->file('img_blog');
            // echo $photo_profile;exit;
            $name = rand(1000, 9999) . $img_blog->getClientOriginalName();
            $img_blog->move('images', $name);
            $blog->img_blog = $name;
        }


        $blog->save();

        if($blog){
            //redirect dengan pesan sukses
            return redirect()->route('blog2')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('blog2')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
     public function editBlog($id_blog)
    {
        $blog = Blogs::findOrFail($id_blog);
        // echo $blog;exit;
        return view('blogedit.edit', compact('blog'));
    }
    
    // PROSES UPDATE/EDIT BLOG
    public function updateDataBlog(Request $request, $id_blog)
    {
        $this->validate($request, [
            'img_blog'     => 'image|mimes:png,jpg,jpeg',
            'judul_blog'     => 'required',
            'deskripsi_blog'   => 'required'
        ]);

        $blog = Blogs::findOrFail($id_blog);
        $blog->judul_blog = $request->get('judul_blog');
        $blog->deskripsi_blog = $request->get('deskripsi_blog');
        

        if ($request->hasFile('img_blog')) {
            // $post->delete_image();
           
            if($request->file('img_blog') == ""){
                $img_blog = $request->file('gambar_old');
            }else{
                 $img_blog = $request->file('img_blog');
            }
            // echo $photo_profile;exit;
            $name = rand(1000, 9999) . $img_blog->getClientOriginalName();
            $img_blog->move('images', $name);
            $blog->img_blog = $name;
        }
        $blog->save();


        // dd($blogs);
        if($blog){
            //redirect dengan pesan sukses
            return redirect()->route('blog2')->with(['success' => 'Data Berhasil DiUpdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('blog2')->with(['error' => 'Data Gagal DiUpdate!']);
        }
    }
    // PROSES HAPUS BLOG
    public function hapusDataBlog($id_blog)
    {
        // echo $id; exit;
        $blog = Blogs::where('id_blog',$id_blog)->delete();

        if ($blog) {
            //redirect dengan pesan sukses
            return redirect()->route('blog2')->with(['success' => 'Data Berhasil Didelete!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('blog2')->with(['error' => 'Data Gagal Didelete!']);
        }
    }

}
