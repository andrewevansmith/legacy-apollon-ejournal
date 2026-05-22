<?php 
  $data['title'] = "Administrator | Apollon";
  $this->load->view('includes/docinfo', $data); 
?>
<article class="admin">
<!-- Begin Content -->

<hr />

<h1>Apollon Administrator</h1>
<cite><?=anchor('admin/logout', 'Logout')?></cite>

<?php $categories = array_keys($records); ?>

<?php foreach ($categories as $category): ?>
  <h1 class="admin" id="<?=$category?>">
    <?=remove_underscores($category)?>
  </h1>
  <table class="accordian <?=$category?>">
  <?php foreach ($records[$category] as $page): ?>
  <tr>
  <?php foreach ($page as $field): ?>
    <td>
      <?=anchor_popup('apollon/'.$category.'/'.$page['id'], $field)?>
    </td>
  <?php endforeach; ?>
  <td class="td-last no-border">
    <?=anchor("admin/edit/$category/$page[id]", img('images/ui/edit.png'))?>
    <a href="<?=base_url()?>index.php/admin/delete/<?=$category.'/'.$page['id']?>" 
    onclick="javascript:return confirm('Are you sure you want to delete this file?')">
    <?=img('images/ui/exit.png')?>
    </a>

  </td>
  </tr>
  <?php endforeach; ?>
  <tr><td colspan="3" class="td-center">
  <?=anchor("admin/add/$category", img('images/ui/plus.png')."Add new")?>
  </td></tr>
  </table>
<?php endforeach; ?>

<hr />
<hr />

<!-- End Content -->
</article>

<script type="text/javascript">

  $('.accordian').toggle();

  $('h1.admin').click(function() 
  {
    $(this).next().slideToggle('slow');
  });                       

</script>
</body>
</html>