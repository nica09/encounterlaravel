<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productdata = Products::all();
        return view('productt', compact('productdata'));
    }
    // PROSES TAMBAH DATA PRODUCT
    public function addProduct()
    {
        return view('productedit.addproduct');
    }
   
     public function prosestambahproduks(Request $request)
    {
         $this->validate($request, [
            'img_product'     => 'required|image|mimes:png,jpg,jpeg',
            'nama_produk'     => 'required',
            'quantity_produk'   => 'required',
            'harga_produk'   => 'required',
            'deskripsi_produk'  => 'required'
        ]);

        //upload image
        $productdata = new Products();
        $productdata->nama_produk = $request->get('nama_produk');
        $productdata->quantity_produk = $request->get('quantity_produk');
        $productdata->harga_produk = $request->get('harga_produk');
        $productdata->deskripsi_produk = $request->get('deskripsi_produk');
        
        if ($request->hasFile('img_product')) {
            // $post->delete_image();
            $img_product = $request->file('img_product');
            // echo $photo_profile;exit;
            $name = rand(1000, 9999) . $img_product->getClientOriginalName();
            $img_product->move('images', $name);
            $productdata->img_product = $name;
        }


        $productdata->save();

        if($productdata){
            //redirect dengan pesan sukses
            return redirect()->route('productt')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('productt')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
   
      public function editProduct($id_product)
    {
        $productdata = Products::findOrFail($id_product);
        // echo $blog;exit;
        return view('productedit.editproduct', compact('productdata'));
    }
    // PROSES UPDATE/EDIT PRODUCT
     public function updateDataProduct(Request $request, $id_product)
    {
         $this->validate($request, [
            'img_product'     => 'image|mimes:png,jpg,jpeg',
            'nama_produk'     => 'required',
            'quantity_produk'   => 'required',
            'harga_produk'   => 'required',
            'deskripsi_produk'   => 'required'
        ]);

        $productdata = Products::findOrFail($id_product);
        $productdata->nama_produk = $request->get('nama_produk');
        $productdata->quantity_produk = $request->get('quantity_produk');
        $productdata->harga_produk = $request->get('harga_produk');
        $productdata->deskripsi_produk = $request->get('deskripsi_produk');
        

        if ($request->hasFile('img_product')) {
            // $post->delete_image();
           
            if($request->file('img_product') == ""){
                $img_product = $request->file('gambar_old');
            }else{
                 $img_product = $request->file('img_product');
            }
            // echo $photo_profile;exit;
            $name = rand(1000, 9999) . $img_product->getClientOriginalName();
            $img_product->move('images', $name);
            $productdata->img_product = $name;
        }
        $productdata->save();


        // dd($slider);
        if($productdata){
            //redirect dengan pesan sukses
            return redirect()->route('productt')->with(['success' => 'Data Berhasil DiUpdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('productt')->with(['error' => 'Data Gagal DiUpdate!']);
        }
    }
    // PROSES HAPUS PRODUCT
    public function hapusDataProduct($id_product)
    {
        // echo $id; exit;
        $productdata = Products::where('id_product',$id_product)->delete();

        if ($productdata) {
            //redirect dengan pesan sukses
            return redirect()->route('productt')->with(['success' => 'Data Berhasil Didelete!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('productt')->with(['error' => 'Data Gagal Didelete!']);
        }
    }


}
