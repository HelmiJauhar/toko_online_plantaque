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
    <?php foreach ($tanaman_hias as $brg) : ?>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    <link rel='stylesheet' id='wptwa-public-css'  href='https://herbalgresik.com/whatsapp/css/public.css?ver=5.0.2' type='text/css' media='all' />

  <link rel='stylesheet' id='wptwa-generated-css'  href='https://herbalgresik.com/whatsapp/css/auto-generated-wptwa.css?ver=5.0.2' type='text/css' media='all' />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script type='text/javascript' src='https://herbalgresik.com/whatsapp/js/public.js?ver=5.0.2' defer='defer'></script>

</head>
<body>
    <div class="wptwa-container right-side" data-delay-time="0" data-inactive-time="0" data-scroll-length="0" data-auto-display-on-mobile="off">

    <div class="wptwa-box">

     <div class="wptwa-wrapper"> 

      <div class="wptwa-description">

       <p>Jika ada pertanyaan atau order tanaman dengan senang hati kami melayani. Silakan Chat dengan Customer Service kami</p>

      </div>

 <span class="wptwa-close"></span>

 <div class="wptwa-people"><a href="https://wa.me/6282145466837?text=Hai Admin, bolehkah saya bertanya?" target="_blank" class="wptwa-account" data-number="6282145466837" data-auto-text="Plantaque">

 <div class="wptwa-face"><img src="img/team-1.jpg" onerror="this.style.display='none'"></img></div>

 <div class="wptwa-info">

 <span class="wptwa-title">Admin 1</span><span class="wptwa-name">Raihan Ahnaf</span>

 </div>

 <div class="wptwa-clearfix"></div>

 </a>

 <div class="wptwa-people"><a href="https://wa.me/6281234869483?text=Hai Admin, bolehkah saya bertanya?" target="_blank" class="wptwa-account" data-number="6281234869483" data-auto-text="Plantaque">

 <div class="wptwa-face"><img src="img/team-1.jpg" onerror="this.style.display='none'"></img></div>

 <div class="wptwa-info">

 <span class="wptwa-title">Admin 2</span><span class="wptwa-name">Helmi Jauhar</span>

 </div>

 <div class="wptwa-clearfix"></div>

 </a>

 </div>

 </div>

 </div>

 </div>

 <span class="wptwa-handler">

 <svg class="WhatsApp" width="15px" height="15px" viewBox="0 0 90 90">

 <path id="WhatsApp" d="M90,43.841c0,24.213-19.779,43.841-44.182,43.841c-7.747,0-15.025-1.98-21.357-5.455L0,90l7.975-23.522   c-4.023-6.606-6.34-14.354-6.34-22.637C1.635,19.628,21.416,0,45.818,0C70.223,0,90,19.628,90,43.841z M45.818,6.982   c-20.484,0-37.146,16.535-37.146,36.859c0,8.065,2.629,15.534,7.076,21.61L11.107,79.14l14.275-4.537   c5.865,3.851,12.891,6.097,20.437,6.097c20.481,0,37.146-16.533,37.146-36.857S66.301,6.982,45.818,6.982z M68.129,53.938   c-0.273-0.447-0.994-0.717-2.076-1.254c-1.084-0.537-6.41-3.138-7.4-3.495c-0.993-0.358-1.717-0.538-2.438,0.537   c-0.721,1.076-2.797,3.495-3.43,4.212c-0.632,0.719-1.263,0.809-2.347,0.271c-1.082-0.537-4.571-1.673-8.708-5.333   c-3.219-2.848-5.393-6.364-6.025-7.441c-0.631-1.075-0.066-1.656,0.475-2.191c0.488-0.482,1.084-1.255,1.625-1.882   c0.543-0.628,0.723-1.075,1.082-1.793c0.363-0.717,0.182-1.344-0.09-1.883c-0.27-0.537-2.438-5.825-3.34-7.977   c-0.902-2.15-1.803-1.792-2.436-1.792c-0.631,0-1.354-0.09-2.076-0.09c-0.722,0-1.896,0.269-2.889,1.344   c-0.992,1.076-3.789,3.676-3.789,8.963c0,5.288,3.879,10.397,4.422,11.113c0.541,0.716,7.49,11.92,18.5,16.223   C58.2,65.771,58.2,64.336,60.186,64.156c1.984-0.179,6.406-2.599,7.312-5.107C68.398,56.537,68.398,54.386,68.129,53.938z"></path>

 </svg>

 <span class="text">Admin ganteng</span></span>

 </div>
</body>
</html>