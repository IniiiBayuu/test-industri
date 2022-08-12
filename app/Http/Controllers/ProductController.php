<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data dari model Siswa
        $product = Product::all();
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'uuid' => 'required',
            'name' => 'required',
            'type' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);
        $product = Product::findOrFail($id);
        $product->uuid = $request->uuid;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();
        return redirect()->route('product.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $product = Product::findOrFail($id);
    //     return view('product.show', compact('product'));
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product.edit', compact('product'));

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
        // Validasi
        $validated = $request->validate([
            'uuid' => 'required',
            'name' => 'required',
            'type' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);

        $Product = Product::findOrFail($id);
        $product->uuid = $request->uuid;
        $product->name = $request->name;
        $product->type = $request->type;
        $product->price = $request->price;
        $product->quantiy = $request->quantity;
        $barang->save();
        return redirect()->route('barang.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index')->with('succes','Data berhasil dibuat!');
    }
}