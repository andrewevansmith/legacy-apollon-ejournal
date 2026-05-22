<div id="main">

<section id="current-issue">
  <h2>Introducing <em>Apollon</em>!</h2>
    <img src="<?=base_url()?>images/fg-boat.jpg" alt="boat embarks" class="img-left img-border" />
  <p>When  work on <em>Apollon</em> began in the spring semester of 2010, no one was sure whether
  there  would even be a first issue. The challenges of building an ejournal  were initially overwhelming. 
  We fretted over funding, honed our  project pitching skills, and designed an online portal to house the  
  finished product without knowing whether our efforts would come to  fruition in the form of a polished 
  and presentable first issue. </p>
  <a href="<?=base_url()?>index.php/apollon/about/2">
    <p class="read-more">

      <img src="<?=base_url()?>images/icon-rightarrow.png" /> 
      <span>Read full editorial note</span>
      <div class="clear"></div>
    </p>
  </a>
</section>
    
<section id="current-articles">
  <h2>Volume 1.1</h2> 
  <ul>
    <?php foreach($articles as $article): ?>
        <?=anchor('apollon/article/'.$article['id'],'<li>'.$article['title'].'</li>')?>
    <?php endforeach; ?>    
  </ul>
</section>

<div class="clear"></div>

</div>

<div id="featured">
  <section id="featured-article">
    <h4><strong>Featured Paper:</strong> <em>The Jurymen</em></h4>

    <p>Written  by Katherine Janson, <em>The Jurymen</em> is a comedic dialogue that seeks to 
    enlighten modern readers using  the Socratic method as its touchpoint. A research-based play, it is 
     built upon extensive study of the lives, philosophic principles, and  historic context of the two 
     inseparable ancient thinkers, Plato and  Socrates, and seeks to &ldquo;put the conversation on 
     Athens back  together again.&rdquo; </p>
    <p><?=anchor('apollon/article/1', 'Read full paper')?></p>
    </section>
  <section id="featured-contributor">
      <img class="img-left" src="<?=base_url()?>images/contributors/katherine-janson.jpg" alt="Katherine Janson" />

        <h4>Katherine Janson</h4>
        <p>Katherine Janson is a recent graduate from Randolph College (founded as Randolph-Macon 
        Woman's College) in Lynchburg, Virginia. She graduated Cum Laude in May 2010 with a BA in 
        Classics and minors in Philosophy and Psychology.</p>
  </section>
    <div class="clear"></div>
</div>
