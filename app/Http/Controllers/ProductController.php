<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view ('pages.product.index' , compact("product"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('pages.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "namaproduk" => "required",
            "harga" => "required",
            "stock" => "required",
            "foto" => "required"
        ]);
    
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imgName = rand() . '.' . $image->extension();
            $path = public_path('assets/image/');
            $image->move($path, $imgName);
        } else {
            return redirect()->back()->withInput()->withErrors(['foto' => 'Tidak ada file yang diunggah']);
        }
        
        $product = Product::create([
            "namaproduk" => $request->namaproduk,
            "harga" => $request->harga,
            "stock" => $request->stock,
            "foto" => $imgName  
        ]);
    
        // Redirect to the index page or any other appropriate page after successful creation
        return redirect()->route('product')->with('success', 'Produk berhasil dibuat');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::where('id', '=', $id)->firstOrFail();

        return view('page.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::where('id', '=', $id)->delete();

        return redirect()->back()->with('succes', 'Produk berhasil dihapus');
    }
}