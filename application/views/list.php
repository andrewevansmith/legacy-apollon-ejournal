<article class="contributors">
<!-- Content -->

<h1>Affiliated Contributors</h1>

<?php foreach($list as $row): ?>
  
  <?php if ($row['image'] != ""): ?>
      <img src="<?=base_url()?>images/contributors/<?=$row['image']?>" alt="<?=$row['title']?>" 
       class="img-border img-left" />
  <?php endif; ?>
  
  <h3 <?php if ($row['image'] != "") echo "style='margin-right: 200px;'";?>><?=$row['title']?></h3>
  <cite <?php if ($row['image'] != "") echo "style='margin-right: 200px;'";?>><?=anchor($row['institution_url'], $row['institution'])?></cite>
  <p><?=$row['body']?></p>
  <hr />
<? endforeach; ?>

<!-- End Content -->
</article>

