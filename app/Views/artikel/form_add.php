<?= $this->include('template/admin_header'); ?>
<div class="form">
    <h2><?= $title; ?></h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="judul">Title</label>
        <input type="text" name="judul" id="judul" placeholder="">
        <textarea name="isi" cols="50" rows="10"></textarea>
        <div class="form-data">
            <input type="file" name="gambar">
        </div>
        <p><input type="submit" value="Send" class="btn btn-large"></p>
    </form>
</div>
<?= $this->include('template/admin_footer'); ?>