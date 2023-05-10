<div class="card-body px-0 pb-2">
    <div class="table-responsive">
        <table class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        NO
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Merk Produk</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                        Jenis Produk</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Jumlah Stok</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Harga Produk</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Keterangan</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                        AKSI</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($product))
                    @if ($product->total() != 0)
                        @foreach ($product as $item)
                            <tr>
                                <td class="align-middle text-center text-sm">
                                    {{$loop->iteration}}
                                </td>
                                <td class="align-middle text-center text-sm">
                                    {{ $item->merk_produk }}
                                </td>
                                <td class="align-middle text-center text-sm">
                                    {{ $item->jenis_produk }}
                                </td>
                                <td class="align-middle text-center text-sm">
                                    {{ $item->jumlah_stok }}
                                </td>
                                <td class="align-middle text-center text-sm">
                                    Rp. {{ number_format($item->harga_produk, 0, ',', '.')}}
                                </td>
                                <td class="align-middle text-center text-sm">
                                    {{ $item->keterangan }}
                                </td>
                                <td class="align-middle ">
                                    <a href="{{route('dashboard.edit',$item->id)}}" class="btn btn-primary opacity-9">Edit</a>
                                    <a href="#" class="btn btn-danger opacity-9">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="align-middle text-center text-sm">
                                Belum ada Produk
                            </td>
                        </tr>
                    @endif
                @else
                    <tr>
                        <td colspan="6" class="align-middle text-center text-sm">
                            Belum ada data pesanan
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
<div class="card-footer">
    {{ $product->links('layouts.partials.paginate') }}
</div>
