<?php function svg($name, $height, $width, $classes, $data) {
	echo '<svg xmlns="http://www.w3.org/2000/svg" class=" ' . $classes . ($width > 0 ? '" width="' . $width : '')  . ($height > 0 ? '" height="' . $height : '')  . '" ' . $data . '><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-' . $name  . '"></use> </svg>';
}
?>

<?php function stars($stars, $hasPlus = false, $hasText = true) { ?>

<div class="our-ratings">
  <div class="our-ratings__stars">
    <?php for($ii = 0; $ii < $stars; $ii++) { ?>
      <span><?php svg('star', -1, -1, 'icon', ''); ?></span>
    <?php }
      if($hasPlus) { ?>
      <span class="our-ratings__plus">plus</span>
    <?php }
      if ($hasText) { ?>
      <h4 class="our-ratings__title">Our rating</h4>
    <?php } ?>
  </div>
</div>

<?php } ?>

<?php define('COMPONENTS_DIR', __DIR__ . '/../Components/'); ?>
