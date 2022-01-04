<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
        return view('Product.index');
    }

    public function read()
    {
        $data = Product::all();
        return view('Product.read')->with([
            'data' => $data
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
        return view('Product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // menyimpan data
        $data['nama'] = $request->nama;
        $data['harga'] = $request->harga;
        $data['stok'] = $request->stok;
        $data['desc'] = $request->desc;
        $data['produsen'] = $request->produsen;
        $data['perusahaan'] = $request->perusahaan;

        Product::insert($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // detail
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         // view edit data
         $edit = Product::findOrFail($id);
         return view('Product.edit')->with([
             'edit' => $edit
         ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // menyimpan data update
        $edit = Product::findOrFail($id);
        $edit->nama = $request->nama;
        $edit->harga = $request->harga;
        $edit->stok = $request->stok;
        $edit->desc = $request->desc;
        $edit->produsen = $request->produsen;
        $edit->perusahaan = $request->perusahaan;
        $edit->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete data
        $data = Product::findOrFail($id);
        $data->delete();

        return redirect('product')->with('succes', 'Berhasil Delete');
    }
}
