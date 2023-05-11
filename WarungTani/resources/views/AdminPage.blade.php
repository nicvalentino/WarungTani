<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Checkout</title>
        <link rel="stylesheet" href="/css/style.css">
        <script src="https://kit.fontawesome.com/4456df0b79.js" crossorigin="anonymous"></script>

    </head>

    <body>
        @extends('navbar')
        <br><br><br><br><br>
        <main>
            <h2 style="font-weight: 600; margin-left: 31%;">Orderan</h2>
            <div class="checkout">
                <h2 style="font-weight: 600; margin-left: 3%;">Pelanggan 1</h2>
                <div class="border"></div>
                <div class="data-pengiriman">
                    <h3 style="font-weight: 500; margin-bottom: 5px;margin-left: 3%;">Alamat Pengiriman</h3>
                    <h4 class="keterangan">Muhammad Raihan Fauzi</h4>
                    <h4 class="keterangan">08123456789</h4>
                    <h4 class="keterangan">Jl.Telekomunikasi No.1, Bandung</h4>
                </div>
                <div class="border"></div> 
                <br>
                <div class="product-checkout">
                    <div class="sebelahan">
                        <div class="icontoko-product" style="margin-bottom: 20px;margin-left: 4%;">
                            <img id="logo-gudang" src="/Gudang.png" alt="">
                        </div>
                        <h3 class="produk" style="margin-top: 30px;margin-left: 10px;">Gudang Buah Batu</h3>
                    </div>
                    <div class="sebelahan">
                        <div class="produk-admin-page">
                            <div class="sebelahan">
                                <img class="gambar-produk" src="/Beras.png" alt="">
                                <div class="product-checkout">
                                    <h3 class="produk">Beras 10 KG</h3>
                                    <h5 class="berat">(Jumlah : 2)</h5>
                                    <h3 class="harga">Rp.65.000</h3>
                                </div>
                            </div>
                            <div class="sebelahan">
                                <img class="gambar-produk" src="/Apel.jpg" alt="">
                                <div class="product-checkout">
                                    <h3 class="produk">Apel Fuji 7 KG</h3>
                                    <h5 class="berat">(Jumlah : 1)</h5>
                                    <h3 class="harga">Rp.40.000</h3>
                                </div>
                            </div>
                        </div>
                        <div class="ubah-status-transaksi" style="margin-left: 29%;">
                            <a href="#"><button id="edit-product" class="button-normal" style="width: 140px;">Sedang Dikemas</button></a><br>
                            <a href="#"><button id="edit-product" class="button-normal" style="width: 150px;">Proses Pengiriman</button></a><br>
                            <a href="#"><button id="edit-product" class="button-normal" style="width: 150px;">Batalkan Pesanan</button></a>
                        </div>
                    </div>
                </div>
                <div class="sebelahan keterangan-pengiriman">
                    <h3 class="jarak-pengiriman">Go-Send</h3>
                    <h3 class="jarak-pengiriman">Same Day</h3>
                    <h3>Rp.20.000</h3>
                </div> 
                <div class="border"></div>
                <div class="Ringkasan-Belanja">
                    <h3 style="font-weight: 500;">Ringkasan Belanja</h3>
                    <div class="sebelahan">
                        <h3 style="margin-right: 135px; margin-top: 3px;">Total Harga (2 Barang)</h3>
                        <h3 style="margin-top: 5px;margin-left: 100px;">Rp.105.000</h3>
                    </div>
                    <div class="sebelahan">
                        <h3 style="margin-right: 265px;">Total Ongkos Kirim</h3>
                        <h3>Rp.20.000</h3>
                    </div>
                </div>
                <div class="border"></div>
                <div class="Total-harga-pembayaran">
                    <div class="sebelahan pembayaran-checkout">
                        <div class="totalharga">
                            <h3 class="produk">Total Harga</h4>
                            <h2 class="harga" style="font-weight: bold;">Rp.125.000</h3>
                        </div>
                        <div class="sebelahan status-pemesanan-produk" style="padding: 10px;margin-bottom: 10px;margin-top: 40px;margin-left: 28%;">
                            <h5 class="keterangan-pelanggan" style="font-weight: 550;">Status Pemesanan :</h5>
                            <h5 class="keterangan-pelanggan" style="font-weight: 550;">&nbsp;Proses Pengiriman</h5>
                        </div>
                    </div>
                </div>
            </div>   
            <div class="checkout">
                <h2 style="font-weight: 600; margin-left: 3%;">Pelanggan 2</h2>
                <div class="border"></div>
                <div class="data-pengiriman">
                    <h3 style="font-weight: 500; margin-bottom: 5px;margin-left: 3%;">Alamat Pengiriman</h3>
                    <h4 class="keterangan">Muhammad Raihan Fauzi</h4>
                    <h4 class="keterangan">08123456789</h4>
                    <h4 class="keterangan">Jl.Telekomunikasi No.1, Bandung</h4>
                </div>
                <div class="border"></div> 
                <br>
                <div class="product-checkout">
                    <div class="sebelahan">
                        <div class="icontoko-product" style="margin-bottom: 20px;margin-left: 4%;">
                            <img id="logo-gudang" src="/Gudang.png" alt="">
                        </div>
                        <h3 class="produk" style="margin-top: 30px;margin-left: 10px;">Gudang Buah Batu</h3>
                    </div>
                    <div class="sebelahan">
                        <div class="produk-admin-page">
                            <div class="sebelahan">
                                <img class="gambar-produk" src="/Beras.png" alt="">
                                <div class="product-checkout">
                                    <h3 class="produk">Beras 10 KG</h3>
                                    <h5 class="berat">(Jumlah : 2)</h5>
                                    <h3 class="harga">Rp.65.000</h3>
                                </div>
                            </div>
                            <div class="sebelahan">
                                <img class="gambar-produk" src="/Apel.jpg" alt="">
                                <div class="product-checkout">
                                    <h3 class="produk">Apel Fuji 7 KG</h3>
                                    <h5 class="berat">(Jumlah : 1)</h5>
                                    <h3 class="harga">Rp.40.000</h3>
                                </div>
                            </div>
                        </div>
                        <div class="ubah-status-transaksi" style="margin-left: 29%;">
                            <a href="#"><button id="edit-product" class="button-normal" style="width: 140px;">Sedang Dikemas</button></a><br>
                            <a href="#"><button id="edit-product" class="button-normal" style="width: 150px;">Proses Pengiriman</button></a><br>
                            <a href="#"><button id="edit-product" class="button-normal" style="width: 150px;">Batalkan Pesanan</button></a>
                        </div>
                    </div>
                </div>
                <div class="sebelahan keterangan-pengiriman">
                    <h3 class="jarak-pengiriman">Go-Send</h3>
                    <h3 class="jarak-pengiriman">Same Day</h3>
                    <h3>Rp.20.000</h3>
                </div> 
                <div class="border"></div>
                <div class="Ringkasan-Belanja">
                    <h3 style="font-weight: 500;">Ringkasan Belanja</h3>
                    <div class="sebelahan">
                        <h3 style="margin-right: 135px; margin-top: 3px;">Total Harga (2 Barang)</h3>
                        <h3 style="margin-top: 5px;margin-left: 100px;">Rp.105.000</h3>
                    </div>
                    <div class="sebelahan">
                        <h3 style="margin-right: 265px;">Total Ongkos Kirim</h3>
                        <h3>Rp.20.000</h3>
                    </div>
                </div>
                <div class="border"></div>
                <div class="Total-harga-pembayaran">
                    <div class="sebelahan pembayaran-checkout">
                        <div class="totalharga">
                            <h3 class="produk">Total Harga</h4>
                            <h2 class="harga" style="font-weight: bold;">Rp.125.000</h3>
                        </div>
                        <div class="sebelahan status-pemesanan-produk" style="padding: 10px;margin-bottom: 10px;margin-top: 40px;margin-left: 28%;">
                            <h5 class="keterangan-pelanggan" style="font-weight: 550;">Status Pemesanan :</h5>
                            <h5 class="keterangan-pelanggan" style="font-weight: 550;">&nbsp;Sedang Dikemas</h5>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <br><br>
        @extends('footer')
    </body>
</html>