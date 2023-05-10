<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $product = Product::where(function ($q){
                $q->where('id','LIKE','%'.request()->search.'%')
                ->orWhere('merk_produk','LIKE','%'.request()->search.'%')
                ->orWhere('jenis_produk','LIKE','%'.request()->search.'%')
                ->orWhere('harga_produk','LIKE','%'.request()->search.'%')
                ->orWhere('keterangan','LIKE','%'.request()->search.'%');
            });
    
        $data['jumlah_produk'] = $product->count('id');
        $data['jenis_produk'] = Product::select('jenis_produk')->groupBy('jenis_produk')->get()->count();

        $data['product'] = $product->paginate(15);

        return view('dashboard.index',$data);
    }
    public function create()
    {
        $data['jenis_produk'] = Product::select('jenis_produk')->groupBy('jenis_produk')->get()->pluck('jenis_produk')->toArray();

        return view('dashboard.create',$data);
    }

    public function edit(Request $request,$id)
    {   
        $data['id'] = $id;
        $data['jenis_produk'] = Product::select('jenis_produk')->groupBy('jenis_produk')->get()->pluck('jenis_produk')->toArray();
        $data['product'] = Product::find($id);
        return view('dashboard.edit',$data);
    }
    public function store(Request $request)
    {   
        try {
            Product::create($request->except('_token'));
            return redirect()->route('dashboard.index')->with('success', 'Berhasil Menambahkan Data');
        } catch (\Throwable $th) {
            return back()->with('error', 'Terjadi Kesalahan');
        }

    }
    public function update(Request $request,$id)
    {   
        try {
            Product::where('id',$id)->update($request->except('_token'));
            return redirect()->route('dashboard.index')->with('success', 'Berhasil Mengubah Data');
        } catch (\Throwable $th) {
            return back()->with('error', 'Terjadi Kesalahan');
        }

    }
    public function destroy($id)
    {   
        Product::find($id)->delete();
        return redirect()->back()->with('success', 'Berhasil Menghapus Data');
    }
}
