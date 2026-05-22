<?php $this->load->view('includes/docinfo'); ?>
<article class="admin">
<!-- Begin Content -->

  <h1>Edit Content</h1>

  <?php
    
    echo form_open("admin/make_change/$table");
  
    $keys = array_keys($page);
    
    foreach ($keys as $key)
    {
      echo '<label>' . remove_underscores($key) . '</label>';
      if (str_word_count($page[$key]) <= 20)
        echo form_input($key, $page[$key]);
      else
        echo form_textarea($key, $page[$key]);
    }
    echo form_submit('submit','Save changes');
    echo form_close();
    echo anchor("admin/edit/$table/$page[id]", 'Undo all changes');
    echo "<br />";
    echo anchor('admin', 'Go back to admin home');
  ?>


<!-- End Content -->
</article>
</body>
</html>