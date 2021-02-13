<!--
  dalam PHP 5.6 keatas, kode echo bisa di persingkat
  Tanpa dipersingkat :
  < ?php echo $variable ?>

  jika dipersingkat
  < ?= $variable ?>

  Hapus spasi diantara < dan ?
-->
<div class="resit-container">
  <h2 class="resit-text-center resit-white">ADD MOVIE</h2>

  <?php
  if(isset($status)){
    if($status){
  ?>

  <div class="resit-message resit-message-success">
    <?= isset($message) ? $message : "" ?>
  </div>

  <?php
    }
  }
  ?>

  <form action="<?= $save_url ?>" method="POST" class="resit-form-add">
    <div class="resit-row">
      <div class="resit-col-4">
        <div class="resit-btn-upload">
          <div class="resit-btn-upload-label">Upload Thumbnail</div>
          <input type="file" class="resit-type-input" />
        </div>
      </div>
      <div class="resit-col-8">
        <div class="resit-form-group">
          <label class="resit-label-group">Title</label>
          <input type="text" class="resit-form-input" name="judul" />
        </div>
        <div class="resit-form-group">
          <label class="resit-label-group">Genre</label>
          <input type="text" class="resit-form-input" name="genre" />
        </div>
        <div class="resit-form-group">
          <label class="resit-label-group">Youtube Video ID</label>
          <input type="text" class="resit-form-input" name="youtube_id" />
        </div>
      </div>
    </div>
    <div class="resit-row resit-item-center resit-mt-6">
      <button type="submit" class="resit-btn-primary">ADD MOVIE</button>
    </div>
  </form>
</div>