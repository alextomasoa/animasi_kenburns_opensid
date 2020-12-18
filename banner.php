<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="banner">
	<div class="banner-slowmotion">
		<?php if($slider_gambar['gambar']) : ?>
			<div class="hero" id="js-hero">
				<?php foreach($slider_gambar['gambar'] as $data) : ?>
					<?php $img = $slider_gambar['lokasi'] . 'sedang_' . $data['gambar']; ?>
					<?php if(is_file($img)) : ?>

						<img class="hero__image js-animating" src="<?= base_url($img) ?>" alt="<?= $data['judul'] ?>" />
				
					<?php endif ?>
				<?php endforeach ?>
			</div>
		<?php endif ?>
	</div>
</section>
      
