<div id="main">
<article>
    <h1>Submit an <?php
    
      $word = ucwords($this->uri->segment(3));
      if ($word == "")
        $word = "Article";
      echo $word;
      ?>
    
    </h1>
    <div id="left-section">
    	<h5>Apollon Independent e-Journal</h5>
      <p>Use the form to submit a .pdf or .doc.  
      Please follow the 
      <?php
        if ($word == "Article")
          echo anchor('apollon/about/6',$word.' Guidelines');
        else {
          echo anchor('apollon/about/5','reviewer');
          echo " and " . anchor('apollon/about/4','editor') . " guidelines.";
        }
      ?>.
        
      </p>
        
        
      <?php if (isset($error)) echo $error; ?>
    </div>
    
    <div id="right-section">
        <?= form_open_multipart('apollon/upload'); ?>
        	<fieldset>
            <input type="file" name="userfile" size="20" />
            <input type="submit" value="upload" />
          </fieldset>
        </form>
    </div>
    <div class="clear"></div>
</article>
</div>
