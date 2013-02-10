<?php include 'header.php';?>
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
<?php include 'footer.php';?>