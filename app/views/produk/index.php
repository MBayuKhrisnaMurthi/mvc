<div class="container mt-5">

    <div class="row">
        <div class="col-6">
            <h3>Daftar Barang</h3>
            <?php foreach ($data['produk'] as $produk) : ?>
                <ul>
                    <li><?= $produk['nama']; ?></li>
                    <li><?= $produk['kategori']; ?></li>
                    <li><?= $produk['harga']; ?></li>
                    <li><?= $produk['deskripsi']; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>