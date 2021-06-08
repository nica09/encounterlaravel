<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Sliderm;
use App\Models\Products;
use App\Models\Members;
use App\Models\Blogs;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slider = Sliderm::where('status_slider','=','1');
        $slider_count = $slider->count();

        $blog = Blogs::all();
        $blog_count = $blog->count();

        $product = Products::all();
        $product_count = $product->count();

        $member = Members::all();
        $member_count = $member->count();
       

        $data = User::all();
        return view('home', ['data'=>$data], compact('slider','slider_count',
                                                'blog','blog_count',
                                                'product','product_count',
                                                'member','member_count'));
        //return view('home',compact('slider','slider_count'));
    }
    public function indextwo()
    {

        $slider = Sliderm::all();
        $slider_count = $slider->count();

        $blog = Blogs::all();
        $blog_count = $blog->count();

        $product = Products::all();
        $product_count = $product->count();

        $member = Members::all();
        $member_count = $member->count();
       

        $data = User::all();
        return view('memberr', ['data'=>$data], compact('slider','slider_count',
                                                'blog','blog_count',
                                                'product','product_count',
                                                'member','member_count'));
        //return view('home',compact('slider','slider_count'));
    }

     // PROSES TAMBAH DATA BLOG 
    public function addProduk()
    {
        return view('adm2.add');
    }
    public function addProduuk()
    {
        return view('adm2.home-edit');
    }
   
     public function prosestambahblogshome(Request $request)
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
            return redirect()->route('home')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('home')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function editBlog($id_blog)
    {
        $blog = Blogs::findOrFail($id_blog);
        // echo $blog;exit;
        return view('adm2.edit', compact('blog'));
    }
    

    public function editHomeBlog($id_blog)
    {
        $blog = Blogs::findOrFail($id_blog);
        // echo $blog;exit;
        return view('adm2.home-edit', compact('blog'));
    }
    
    // PROSES UPDATE/EDIT BLOG
    public function updateDataHomeBlog(Request $request, $id_blog)
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
            //return redirect()->route('home')->with(['success' => 'Data Berhasil DiUpdate!']);
           return redirect()->route('home')->with(['success' => 'Data Berhasil DiUpdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('home')->with(['danger' => 'Data Gagal DiUpdate']);
        }
    }
    // PROSES HAPUS BLOG
    public function hapusDataBlog($id_blog)
    {
        // echo $id; exit;
        $blog = Blogs::where('id_blog',$id_blog)->delete();

        if ($blog) {
            //redirect dengan pesan sukses
            return redirect()->route('home')->with(['success' => 'Data Berhasil Didelete!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('home')->with(['error' => 'Data Gagal Didelete!']);
        }
    }


}
