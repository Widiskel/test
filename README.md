## Product table Schema
```
public function up()
{
    Schema::create('produk', function (Blueprint $table) {
        $table->id();
        $table->string('merk_produk');
        $table->string('jenis_produk');
        $table->integer('jumlah_stok');
        $table->double('harga_produk');
        $table->string('keterangan');
        $table->timestamps();
    });

    
}

public function down()
{
    Schema::dropIfExists('produk');
}
```

## Product table Seeder
```
public function run()
{
    $dummy = [
        [        'merk_produk' => 'Nike',        'jenis_produk' => 'Sepatu',        'jumlah_stok' => 100,        'harga_produk' => 750000.00,        'keterangan' => 'Sepatu olahraga untuk lari',        'created_at' => now(),        'updated_at' => now(),    ],
        [        'merk_produk' => 'Adidas',        'jenis_produk' => 'Sepatu',        'jumlah_stok' => 50,        'harga_produk' => 850000.00,        'keterangan' => 'Sepatu olahraga untuk basket',        'created_at' => now(),        'updated_at' => now(),    ],
        [        'merk_produk' => 'Samsung',        'jenis_produk' => 'Smartphone',        'jumlah_stok' => 200,        'harga_produk' => 4500000.00,        'keterangan' => 'Smartphone dengan kamera 108MP',        'created_at' => now(),        'updated_at' => now(),    ],
        [        'merk_produk' => 'Apple',        'jenis_produk' => 'Laptop',        'jumlah_stok' => 20,        'harga_produk' => 25000000.00,        'keterangan' => 'Laptop dengan prosesor M1',        'created_at' => now(),        'updated_at' => now(),    ],
        [        'merk_produk' => 'Sony',        'jenis_produk' => 'Kamera',        'jumlah_stok' => 30,        'harga_produk' => 12500000.00,        'keterangan' => 'Kamera mirrorless full-frame',        'created_at' => now(),        'updated_at' => now(),    ]
    ];

    foreach ($dummy as $data) {
        Product::create($data);
    }

}
```
