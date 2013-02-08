<?php
$con = mysql_connect("localhost", "kgzohssv_danger", "Mintman1") or die ('Error connecting to mysql');
mysql_select_db("kgzohssv_metoo");


$row_object = mysql_query("Select Found_Rows() as rowcount");
$row_object = mysql_fetch_object($row_object);
$actual_row_count = $row_object->rowcount;
?>

<html lang='en'>
    <head>
        <title>meh, what's this.</title>
        <meta name="robots" content="index, follow">
        <meta name="viewport" content="width=480, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <link rel="shortcut icon" href="http://www.yeametoo.com/favicon.ico?v=2" />
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise' rel='stylesheet' type='text/css'>

        
        <script src="js/jquery-1.7.2.js" type="text/javascript"></script>
        <script type='text/javascript' src='js/jquery.fancybox-1.3.4.pack.js'></script>
        <script src="js/main.js" type="text/javascript"></script>
        <script>
		if((navigator.userAgent.match(/iPad/i))) {
    		document.write("<link type=\"text\/css\" rel=\"stylesheet\" media=\"all\" href=\"css\/tablet.css\" charset=\"utf-8\" \/>");
	  }
	  if((navigator.userAgent.match(/iPhone/i))) {
    		document.write("<link type=\"text\/css\" rel=\"stylesheet\" media=\"all\" href=\"css\/mobile.css\" charset=\"utf-8\" \/>");
	  }
	  </script>

                <script type="text/javascript">
                
                
                
            
            $(document).ready(function(){
                
                url = window.location.href.split('#');
                hash = url[1];
                
                $('#meh').append('<img src=\'http://yeametoo.com/images/' + hash + '\' />');
                $('#showlink').val('http://yeametoo.com/meh.php#' + hash + '');
                
                $('#twt').append('<a href=\'https://twitter.com/share\' class=\'twitter-share-button\' data-url=\'http://yeametoo.com/meh.php#' + hash + '\' data-via=\'yeametoo_meh\' data-count=\'none\' data-hashtags=\'yeametoo\'>Tweet</a>');
                
                });
                
                
                                
        </script>




    </head>

    <body>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=179899382091852";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    
    <div class="bottom"></div>

        
        <div id="container">
        <a href="http://yeametoo.com"><div id="small-heading">yea, me too.</div></a>
            <div class="meh-contain">
                
                     <div id="meh"></div>
                     <input id="showlink" type="text" value="" />
                     <div id="twt"></div>
                     <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                     <div class="fb-like" data-send="true" data-layout="button_count" data-width="450" data-show-faces="false" data-colorscheme="dark" data-font="trebuchet ms"></div>
            </div>
        </div>
       
        <script type="text/javascript">
        
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-34276446-1']);
          _gaq.push(['_trackPageview']);
        
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
        
        </script>

    </body>
</html>