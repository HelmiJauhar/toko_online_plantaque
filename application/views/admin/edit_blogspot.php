<div class='container-fluid'>
    <h3 class="fas fa-edit">Edit Data Blogspot</h3>
    <?php foreach ($blogspot as $blog) : ?>

    <form action="<?php echo base_url().'/admin/data_blogspot/update'?>" method="post">
        <div class="for-group">
            <label >Nama Artikel</label>
            <input type="text" name="nama_deskripsi" class="form-control" value="<?php echo $blog->nama_deskripsi?>">
        </div>
        <div class="for-group">
            <label >Artikel</label>
            <input type="hidden" name="id_deskripsi" class="form-control" value="<?php echo $blog->id_deskripsi?>">
            <textarea style="height:200px" name="deskripsi" class="form-control"><?php echo $blog->deskripsi ?></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary btn-sm">Simpan
        </button>
    </form>

    <?php endforeach; ?>
</div>