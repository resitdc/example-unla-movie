<!--
  dalam PHP 5.6 keatas, kode echo bisa di persingkat
  Tanpa dipersingkat :
  < ?php echo $variable ?>

  jika dipersingkat
  < ?= $variable ?>

  Hapus spasi diantara < dan ?
-->
<div class="resit-container">
  <div class="resit-row">

    <?php
    foreach($list_movie as $movie){
    ?>

    <div class="resit-col-2">
      <a href="<?= site_url('watch/detail/'.$movie['id']) ?>">
        <div class="resit-movie-box">
          <div class="resit-movie-thumbnail-box">
            <img src="https://via.placeholder.com/200x300" class="resit-movie-thumbnail" />
          </div>
          <div class="resit-movie-info">
            <div class="resit-movie-title"><?= $movie['judul']; ?></div>
            <div class="resit-movie-genre"><?= $movie['genre']; ?></div>
          </div>
        </div>
      </a>
    </div>
    <?php
    }
    ?>


  </div>
</div>