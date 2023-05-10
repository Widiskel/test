<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="col-lg-12 float-left m-2">
        <a href="{{route('index')}}"><button class="btn btn-outline-primary ml-2">Back</button></a>
    </div>
    <br>
    <br>
    <hr>
    <div class="col-lg-12 m-2">
        <form action="{{route('store')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Merk Produk</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" 
                name="merk_produk">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Jenis Produk</label>
              <select class="form-control" id="exampleFormControlSelect1" name="jenis_produk">
                @foreach ($jenis_produk as $item)
                    <option value="{{$item}}">{{$item}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Jumlah Stok</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" 
                  name="jumlah_stok">
              </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Harga Produk</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" 
                  name="harga_produk">
              </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Keterangan</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"></textarea>
            </div>

            <div class="float-right">
                <button type="submit" class="btn btn-primary">Create Produk</button>
            </div>
          </form>
    </div>


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
