<article class="bio">
<!-- Content -->

<h1> 
    <?= $title . " - " . $job ?>  <br />
    <?php if ($email != ""): ?>
      <a href="mailto:<?= $email ?>" title="e-mail">
      <img src="<?= base_url() ?>images/icon-email.png" alt="email" /></a>
    <?php endif; ?>
</h1>

<?php
	$image_properties = array(
      'src' => base_url() . "images/contributors/" . $image,
      'alt' => $title,
      'class' => 'img-border img-right'
	);
	echo img($image_properties);
	echo $body;
?>

<!-- End Content -->
</article>

