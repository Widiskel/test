<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="row float-right m-2">
        <form action="">
            @csrf
            <div class="input-group">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" name="search"
                    aria-describedby="search-addon" />
                <button type="submit" class="btn btn-outline-primary">search</button>
            </div>
        </form>
        <a href="{{route('create')}}"><button class="btn btn-outline-primary ml-2">create</button></a>
    </div>
    <br>
    <table class="table m-4">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Merk produk </th>
                <th scope="col">Jenis produk</th>
                <th scope="col">Jumlah stok</th>
                <th scope="col">Harga produk</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $itr = 0;
            @endphp
            @foreach ($product as $prod)
                @php
                    $itr += 1;
                @endphp
                <tr>
                    <td>
                        {{ $itr }}
                    </td>
                    <td>
                        {{ $prod->merk_produk }}
                    </td>
                    <td>
                        {{ $prod->jenis_produk }}
                    </td>
                    <td>
                        {{ $prod->jumlah_stok }}
                    </td>
                    <td>
                        @php
                            $formatted_price = number_format($prod->harga_produk, 2, '.', ',');
                        @endphp
                        {{ 'Rp. '.$formatted_price}}
                    </td>
                    <td>
                        {{ $prod->keterangan }}
                    </td>
                    <td>
                        <a href="{{route('edit',$prod->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{route('destroy',$prod->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>

</html>
