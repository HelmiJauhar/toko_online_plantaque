  <div class="row text-center">
    <?php foreach ($blogspot as $blog) : ?>

    <div class="card ml-3 mt-4" style="width: 16rem;">
      <img src="<?php echo base_url().'/uploads/'.$blog->gambar ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title mb-1"><?php echo $blog->nama_deskripsi ?></h5>
        <small><?php echo substr($blog->deskripsi, 0, 120)  ?>...</small>
        <?php echo anchor('blogspot/detail_blogspot/'.$blog->id_deskripsi,
        '<div class="btn btn-sm btn-success">Read More</div>') ?>
        
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