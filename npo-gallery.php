<!--gallery-->
<?php
  $iLink[0] = get_theme_mod('gallery_first_img');
  $iLink[1] = get_theme_mod('gallery_second_img');
  $iLink[2] = get_theme_mod('gallery_third_img');
  $iLink[3] = get_theme_mod('gallery_fourth_img');
  $iLink[4] = get_theme_mod('gallery_fifth_img');
  $iLink[5] = get_theme_mod('gallery_sixth_img');
?>
<div class="gallery container" id="gallery">
	<div class="row">
		<div class="col-md-4 col-sm-12 mb-4">
			<img class="img-fluid img-thumbnail" src="<?php echo $iLink[0]; ?>">
		</div>
		<div class="col-md-4 col-sm-12 mb-4">
			<img class="img-fluid img-thumbnail" src="<?php echo $iLink[1]; ?>">
		</div>
		<div class="col-md-4 col-sm-12 mb-4">
			<img class="img-fluid img-thumbnail" src="<?php echo $iLink[2]; ?>">
		</div>
		<div class="col-md-4 col-sm-12 mb-4">
			<img class="img-fluid img-thumbnail" src="<?php echo $iLink[3]; ?>">
		</div>
		<div class="col-md-4 col-sm-12 mb-4">
			<img class="img-fluid img-thumbnail" src="<?php echo $iLink[4]; ?>">
		</div>
		<div class="col-md-4 col-sm-12 mb-4">
			<img class="img-fluid img-thumbnail" src="<?php echo $iLink[5]; ?>">
		</div>
	</div>
</div>