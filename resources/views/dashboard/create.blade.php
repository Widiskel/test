@extends('layouts.app')

@section('title')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
            </li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Tambah Produk</h6>
    </nav>
@endsection

@section('main')
    <div class="container-fluid py-4">

        <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-12 col-7">
                            <form action="{{ route('dashboard.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Merk Produk</label>
                                    <input required type="text" class="form-control required" id="exampleFormControlInput1"
                                        name="merk_produk">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Jenis Produk</label>
                                    <select required class="form-control required" id="exampleFormControlSelect1" name="jenis_produk">
                                        @foreach ($jenis_produk as $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Jumlah Stok</label>
                                    <input required type="number" class="form-control required" id="exampleFormControlInput1"
                                        name="jumlah_stok">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Harga Produk</label>
                                    <input required type="number" class="form-control required" id="exampleFormControlInput1"
                                        name="harga_produk">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Keterangan</label>
                                    <textarea required  class="form-control required" id="exampleFormControlTextarea1" rows="3" name="keterangan"></textarea>
                                </div>

                                <div class="float-right">
                                    <button type="submit" class="btn btn-primary">Tambah Produk</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
