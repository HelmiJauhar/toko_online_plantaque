<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_blogspot">
    <i class="fas fa-plus fa-sm"></i> Tambah Blogspot</button>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA ARTIKEL</th>
            <th>ISI ARTIKEL</th>
            <th>GAMBAR</th>
            <th colspan='3'>AKSI</th>
        </tr>

        <?php 
        $no=1;
        foreach($blogspot as $blog) : ?>
        
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $blog->nama_deskripsi ?></td>
            <td><?php echo substr($blog->deskripsi, 0, 120)  ?>...</td>
            <td>
              <img src="<?php echo base_url('/uploads/'.$blog->gambar) ?>" width="64">
            </td>
            <td><?php echo anchor('admin/data_blogspot/edit/'.$blog->id_deskripsi,
            '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?></td>
            <td><?php echo anchor('admin/data_blogspot/hapus/'.$blog->id_deskripsi,
            '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
        </tr>

        <?php endforeach; ?>

    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_blogspot" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Tutorial</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/data_blogspot/tambah_aksi';?>" method="post" 
        enctype="multipart/form-data">

            <div class="form-group">
                <label>Nama Artikel</label>
                <input type="text" name="nama_deskripsi" class="form-control">
            </div>
            <div class="form-group">
                <label>Artikel</label>
                <input type="text" name="deskripsi" class="form-control">
            </div>
            <div class="form-group">
                <label>Gambar Produk</label><br>
                <input type="file" name="gambar" class="form-control">
            </div>

      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>