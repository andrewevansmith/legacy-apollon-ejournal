<!doctype html>
<html>
<head>
	<title><?= $title ?></title>
	<?= link_tag("css/style.css") ?>
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if IE 6]>
        <style>
        body {behavior: url("csshover3.htc");}
        #menu li .drop {background:url("img/drop.gif") no-repeat right 8px;
        </style>
    <![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
      <script>
      
      $(document).ready(function(){
        // Reset Font Size
       
        
        
        
        var originalFontSize = $('article').css('font-size');
        
          $(".resetFont").click(function(){
          $('article').css('font-size', originalFontSize);
        });
        // Increase Font Size
        $(".increase").click(function(){
          var currentFontSize = $('article').css('font-size');
          var currentFontSizeNum = parseFloat(currentFontSize, 10);
          var newFontSize = currentFontSizeNum*1.1;
          $('article').css('font-size', newFontSize);
          return false;
        });
        
        // Decrease Font Size
        $(".decrease").click(function(){
          var currentFontSize = $('article').css('font-size');
          var currentFontSizeNum = parseFloat(currentFontSize, 10);
          var newFontSize = currentFontSizeNum*0.9;
          $('article').css('font-size', newFontSize);
          return false;
        });
        
        
        $("#close").click(function(){
          $("#toolbar").toggle('slow');
        });
        
      });
    </script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19271253-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
