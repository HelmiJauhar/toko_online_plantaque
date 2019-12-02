<div class="container-fluid">
  <div class="card">
    <div class="card-header">
    Detail Artikel
  </div>
  <div class="card-body">
  <?php foreach($blogspot as $blog): ?>
    <div class="row">
        <div class="col-md-4">
                <img src="<?php echo base_url().'/uploads/'.$blog->gambar ?>" class="card-img-top" alt="">
        </div>
        <div class="col-md-8">
        <table class="table">
        <tr> 
        <td>Judul Artikel</td>
        <td><strong><?php echo $blog->nama_deskripsi ?></strong></td>
        </tr>
        <td>Keterangan</td>
        <td><strong><?php echo $blog->deskripsi ?></strong></td>
        </table>
        </div>
        
    </div>
  <?php endforeach;?>
  </div>
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