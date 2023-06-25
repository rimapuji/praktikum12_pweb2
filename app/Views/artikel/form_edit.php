<?= $this->include('template/admin_header'); ?>
<div class="form">
    <h2><?= $title; ?></h2>
    <form action="" method="post">
        <label for="judul"></label>
        <input type="text" id="judul" name="judul" value="<?= $data['judul']; ?>">
        <textarea name="isi" cols="50" rows="10"><?= $data['isi']; ?></textarea>
        <div class="form-data">
            <input type="file" name="gambar">
        </div>
        <p><input type="submit" value="Send" class="btn btn-large"></p>
    </form>
</div>
<?= $this->include('template/admin_footer'); ?>