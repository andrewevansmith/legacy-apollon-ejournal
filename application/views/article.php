<article>
<!-- Content -->


<h1><?=$title?></h1>

<?php if ($subtitle != ""): ?>
<h3><?=$subtitle?></h3>
<? endif; ?>

<?php if ($article_image != ""): ?>
  <div class="article-img">
    <img class="" src="<?=base_url()?>images/articles/<?=$article_image?>" 
    alt="<?=$title?>" />
    <?php if ($image_caption != ""): ?>
      <cite><?=$image_caption?></cite>
    <?php endif ?>
  </div>
<? endif; ?>

<section id="author">
<?php
	$image_properties = array(
      'src' => base_url() . "images/contributors/" . $image,
      'alt' => $author,
      'title' => $author,
	);
	echo img($image_properties);
  echo heading($author, 2);
	echo paragraph($author_bio);
?>
</section>

<?= $body ?>

<!--<a href="<?=base_url()?>documents/<?=$pdf_link?>">
<p class="read-more">
      <img src="<?=base_url()?>images/icon-download.png" /> 
        <span>Download as PDF</span>
        <div class="clear"></div>
    </p>
</a>-->

<?php if ($references != ""): ?>
<h5>References:</h5>
<section id="references">
  <?= $references ?>
</section>
<?php endif ?>

<!-- End Content -->
</article>

