<div class="container-fluid">
    <h4>Keranjang Belanja</h4>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>NO</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Sub-Total</th>
        </tr>
        <?php 
        $no=1;
        foreach ($this->cart->contents() as $items) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $items['name'] ?></td>
                <td><?php echo $items['qty'] ?></td>
                <td align="right">Rp.<?php echo number_format($items['price'],0,',','.')?></td>
                <td align="right">Rp.<?php echo number_format($items['subtotal'],0,',','.')?></td>
            </tr>
        <?php endforeach; ?>
            <tr>
                <td colspan="4"></td>
                <td align="right">Rp. <?php echo number_format($this->cart->total(),0,',','.') ?></td>
            </tr>
    </table>

            <div align="right">
                <a href="<?php echo base_url('dashboard/hapus_keranjang') ?>">
                <div class="btn btn-sm btn-danger">Hapus Keranjang</div></a>
                <a href="<?php echo base_url('dashboard/index') ?>">
                <div class="btn btn-sm btn-primary">Lanjutkan Berbelanja</div></a>
                <a href="<?php echo base_url('dashboard/pembayaran') ?>">
                <div class="btn btn-sm btn-success">Pembayaran</div></a>
            </div>

</div>
<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+6281234869483", // WhatsApp number
            call_to_action: "Chat admin ganteng", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->