<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class WebController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        
        $data['product'] = Product::when($search, function($q) use ($search){
            $q->where('merk_produk','LIKE','%'.$search.'%');
        })->get();
        
        return view('product',$data);
    }
    public function create(Request $request)
    {   
        $data['jenis_produk'] = Product::select('jenis_produk')->groupBy('jenis_produk')->get()->pluck('jenis_produk')->toArray();

        return view('create',$data);
    }
    public function edit(Request $request,$id)
    {   
        $data['id'] = $id;
        $data['jenis_produk'] = Product::select('jenis_produk')->groupBy('jenis_produk')->get()->pluck('jenis_produk')->toArray();
        $data['product'] = Product::find($id);
        return view('edit',$data);
    }
    public function store(Request $request)
    {   
        // dd($request->except('_token'));
        try {
            Product::create($request->except('_token'));
            return redirect()->route('index');
        } catch (\Throwable $th) {
            dd($th);
            return back();
        }

    }
    public function update(Request $request,$id)
    {   
        // dd($request->except('_token'));
        try {
            Product::where('id',$id)->update($request->except('_token'));
            return redirect()->route('index');
        } catch (\Throwable $th) {
            dd($th);
            return back();
        }

    }
    public function destroy($id)
    {   
        Product::find($id)->delete();
        return back();
    }
}
