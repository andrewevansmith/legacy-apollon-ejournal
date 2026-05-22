<header>
	<a href="<?=base_url()?>index.php/apollon">
        <img src="<?php echo base_url(); ?>images/logo-apollon.png"
             alt="Apollon eJournal" />
    </a>
	<ul id="menu">
		<li class="menu_right"><?=anchor('apollon/contact', 'Contact')?></li>
    <li class="menu_right">
      <a href="#" class="drop">Get Involved</a>
        <div class="dropdown_3columns align_right">
            <div class="col_1">
              <h3>Guidelines</h3>  
              <ul class="greybox">
                    <?php foreach($submissions as $row): ?>
                      <li>
                        <?=anchor('apollon/about/'.$row['id'], $row['title'])?>
                      </li>
                    <?php endforeach; ?>   
              </ul>   
            </div>
            <div class="col_1">
              <h3>FAQs</h3>
              <ul class="greybox">
                    <?php foreach($faq as $row): ?>
                      <li>
                        <?=anchor('apollon/about/'.$row['id'], $row['title'])?>
                      </li>
                    <?php endforeach; ?>   
              </ul>   
            </div>
            <div class="col_1">
              <h3>Submissions</h3>
              <ul class="greybox">
                <li><?=anchor('apollon/submit/article','Submit an Article')?></li>
                <li><?=anchor('apollon/submit/application','Submit an Application')?></li>
              </ul>   
            </div>
        </div>
    </li>
    <li class="menu_right">
      <a href="#" class="drop">Contributors</a>
          <div class="dropdown_3columns align_right">
              <div class="col_1">          
            <h3>Faculty</h3>  
                  <ul class="greybox">
                        <?php foreach ($contributors['faculty'] as $person): ?>
                        <li><?= anchor('apollon/bio/'.$person['id'], $person['name'])?></li>
                        <?php endforeach; ?>
                        <li><?=anchor('apollon/faculty','Affiliated Faculty')?></li>
                  </ul>   
              </div>
              <div class="col_1">
            <h3>Content</h3>
                  <ul class="greybox">
                        <?php foreach ($contributors['content'] as $person): ?>
                        <li><?= anchor('apollon/bio/'.$person['id'], $person['name'])?></li>
                        <?php endforeach; ?>
                  </ul>   
              </div>
              <div class="col_1">
            <h3>Design</h3>
                  <ul class="greybox">
                        <?php foreach ($contributors['design'] as $person): ?>
                        <li><?= anchor('apollon/bio/'.$person['id'], $person['name'])?></li>
                        <?php endforeach; ?>
                  </ul>   
              </div>
        </div>
    </li> 		
		<li class="menu_right">
			<a href="#" class="drop">Articles</a>
			<div class="dropdown_1column align_right">
            	<div class="col_1">
                	<ul class="greybox">
                    <?php foreach($articles as $article): ?>
                      <li>
                        <?=anchor('apollon/article/'.$article['id'], $article['title'])?>
                      </li>
                    <?php endforeach; ?>               
                  </ul>   
             	</div>
			</div>
		</li>
    	<li class="menu_right"><a href="#" class="drop">Apollon</a>
        	<div class="dropdown_1column align_right small">
            	<div class="col_1">
           	    	<ul class="greybox">
           	    	 <li><?=anchor('apollon','Home')?></li>
                    <?php foreach($about_pages as $page): ?>
                      <li>
                        <?=anchor('apollon/about/'.$page['id'], $page['title'])?>
                      </li>
                    <?php endforeach; ?>
                	</ul>   
            	</div>
        	</div>
    	</li>
	</ul>
	<div class="clear"></div>
</header>
