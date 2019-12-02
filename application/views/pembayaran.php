<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grandtotal = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grandtotal = $grandtotal + $item['subtotal'];
                    }
                    echo "<h4>Total Belanja Anda: Rp. ".number_format($grandtotal,0,',','.');
                
                ?>
            </div><br><br>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>
            <form method="post" action="<?php echo base_url('dashboard/proses_pesanan') ?>">
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">No. Telepon</label>
                    <input type="text" name="no_telp" placeholder="No. Telepon Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Jasa Pengiriman</label>
                    <select class="form-control">
                        <option value="">JNE</option>
                        <option value="">TIKI</option>
                        <option value="">Pos Indonesia</option>
                        <option value="">Go-Jek</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Pilih Bank</label>
                    <select class="form-control">
                        <option value="">BCA - XXXXX</option>
                        <option value="">BNI - XXXXX</option>
                        <option value="">BRI - XXXXX</option>
                        <option value="">Mandiri - XXXXXX</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-sm btn-primary mb-3">
                Pesan
                </button>
            </form>
            <?php 
                }else{
                   echo "<h4>Keranjang Belanja Anda Masih Kosong";
                }
            ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>