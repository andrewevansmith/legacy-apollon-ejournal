<?php $this->load->view('includes/docinfo'); ?>
<article class="admin">
<!-- Begin Content -->

  <h1>Add Content</h1>

  <?php
    
    echo form_open("admin/insert/$table");
    
    foreach ($fields as $field)
    {
      if ($field != 'id')
      {
        echo '<label>' . remove_underscores($field) . '</label>';
        if (($field != 'body') and ($field != 'references'))
          echo form_input($field);
        else
          echo form_textarea($field);
      }
    }
    echo form_submit('submit','Create page');
    echo form_close();
    //echo anchor("admin/edit/$table/$page[id]", 'Start over');
    echo "<br />";
    echo anchor('admin', 'Go back to admin home');
  ?>


<!-- End Content -->
</article>
</body>
</html>