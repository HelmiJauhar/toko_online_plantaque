<div class="container-fluid">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url('assets/img/slider1.jpg')?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/slider2.jpg')?>" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

  <div class="row text-center">
    <?php foreach ($barang as $brg) : ?>

    <div class="card ml-3 mt-4" style="width: 16rem;">
      <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title mb-1"><?php echo $brg->nama_barang ?></h5>
        <small><?php echo $brg->keterangan ?></small>
        <span class="badge badge-success mr-3">Rp. <?php echo number_format($brg->harga,0,',','.') ?></span>
        <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_barang,
        '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
        <?php echo anchor('dashboard/detail/'.$brg->id_barang,
        '<div class="btn btn-sm btn-success">Detail</div>') ?>
        
        </div>
    </div>

    <?php endforeach; ?>

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