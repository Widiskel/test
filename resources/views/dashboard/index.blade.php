@extends('layouts.app')

@section('title')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
        </li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Dashboard</h6>
</nav>
@endsection

@section('main')
    <div class="container-fluid py-4">
        @include('dashboard.components.today-data')

        <div class="row my-4">
            <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h6>Jumlah Produk Hari ini</h6>
                                <p class="text-sm mb-0">
                                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                                    <span class="font-weight-bold ms-1">{{$jumlah_produk}} produk</span> Hari ini
                                </p>
                                <br>
                                <a href="{{route('dashboard.create')}}" class="btn btn-primary">Tambah</a>
                            </div>
                            
                            <div class="col-lg-6 col-5 my-auto text-end">
                                <form action="">
                                    <div class="input-group">
                                        <span class="input-group-text text-body"><i class="fas fa-search"
                                                aria-hidden="true"></i></span>
                                        <input type="text" name="search" class="form-control" placeholder="Cari pesanan ...">
                                    </div>
                                </form>   
                            </div>
                        </div>
                    </div>
                    @include('dashboard.components.data-table')
                </div>
            </div>
        </div>   
    </div>
@endsection
