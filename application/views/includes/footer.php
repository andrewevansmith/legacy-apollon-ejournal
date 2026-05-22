<footer>
	<p>&copy;2010 Apollon eJournal</p>
	
	<p class="map">
		<?=anchor('apollon', 'Home')?> | 
		<?=anchor('apollon/submit', 'Submit')?> | 
		<?=anchor('apollon/contact', 'Contact')?>
	</p>

	<p class="end">
		Follow us: <br />
		<a href="http://www.facebook.com/pages/Apollon/128987300458489">
        <img src="<?=base_url()?>images/icon-facebook.png" alt="facebook" /></a>

      <!--a href="http://www.twitter.com">
        <img src="<?=base_url()?>images/icon-twitter.png" alt="twitter" /></a>-->
	</p>
    <div class="clear"></div>
</footer>

<?php if ($toolbar): ?>
<div id="toolbar">
  <ul id="tools">
    <li class="increase"><img src="<?=base_url()?>images/ui/plus.png" />Increase Font</li>
    <li class="decrease"><img src="<?=base_url()?>images/ui/minus.png" />Decrease Font</li>
    <li><img src="<?=base_url()?>images/ui/download.png" />
      <a href="<?=base_url().'documents/'.$article['pdf_link']?>">Download</a></li>
    <!--<li><img src="<?=base_url()?>images/ui/like.png" />Like</li>-->
    <li><img src="<?=base_url()?>images/ui/home.png" /><?=anchor('apollon', 'Home')?></li>
    <li class="center"><a href="#" id="close">Close</a></li>
  </ul> 
</div>
<?php endif; ?>

</body>
</html>
