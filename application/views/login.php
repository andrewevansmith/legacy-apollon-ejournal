<?php 
  $data['title'] = "Administrator | Apollon";
  $this->load->view('includes/docinfo', $data); 
?>
<article class="admin">
<!-- Begin Content -->

<hr />

<h1>Apollon Administrator Login</h1>

<?=form_open('admin/login')?>

  <?=form_label('Username:', 'username')?>
  <?=form_input('username')?>
  <?=form_label('Password:', 'password')?>
  <?=form_password('password')?>
  <?=br()?>
  <?=form_submit('submit', 'Log in')?>

<?=form_close();?>

<hr />

<!-- End Content -->
</article>
</body>
</html>