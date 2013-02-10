<?php
$con = mysql_connect("localhost", "root", "root") or die ('Error connecting to mysql');
mysql_select_db("mnsounds");

$result = mysql_query("select SQL_CALC_FOUND_ROWS * from scroll_images order by rand() limit 12");
$result2 = mysql_query("select SQL_CALC_FOUND_ROWS * from scroll_images order by rand() limit 12");
$result3 = mysql_query("select SQL_CALC_FOUND_ROWS * from scroll_images order by rand() limit 12");



$row_object = mysql_query("Select Found_Rows() as rowcount");
$row_object = mysql_fetch_object($row_object);
$actual_row_count = $row_object->rowcount;
?>

<html lang='en'>
    <head>
        <title>yea, me too.</title>
        <meta name="robots" content="index, follow">
        <meta name="viewport" content="width=480, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <link rel="shortcut icon" href="http://www.yeametoo.com/favicon.ico?v=2" />
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css" type="text/css">
        
        <script src="js/jquery-1.7.2.js" type="text/javascript"></script>
        <script type='text/javascript' src='js/jquery.fancybox-1.3.4.pack.js'></script>
        <script src="js/main.js" type="text/javascript"></script>

<script type="text/javascript"> 
        $(function() {/* so fucking temporary */
            $("a.group").fancybox({
                'nextEffect'    :   'fade',
                'prevEffect'    :   'fade',
                'overlayOpacity' :  0.8,
                'overlayColor' : '#000000',
                'arrows' : false,
                'titleShow' : true,
                'titlePosition' : 'outside',
                
            });         
        });

    /* this was all "just want to see if this works" code. don't judge me. re-write in-coming... */
    var page = 1;
    var data = {
            page_num: page
        };
                
    var actual_count = "<?php echo $actual_row_count; ?>";
    var timesLoaded = 1;
    loadingInterval = 3000;
    loading = function(){
        $.ajax({
            type: "POST",
            url: "data.php",
            data:data,
            success: function(res) {
                $("#container").append(res);
                $(function() {
                    $("a.group").fancybox({
                        'nextEffect'    :   'fade',
                        'prevEffect'    :   'fade',
                        'overlayOpacity' :  0.8,
                        'overlayColor' : '#000000',
                        'arrows' : false,
                        'titleShow' : true,
                        'titlePosition' : 'outside',
                    });
                });
                twttr.widgets.load();
            }
        });
        timesLoaded++;
        loadingInterval = (timesLoaded * 500);
        if(timesLoaded > 12){
        }
        else{
            setTimeout(function(){
                loading();
            }, loadingInterval); 
        }
        
    }
    setTimeout(function(){
        loading();
    }, 500);  
                   
    $(window).scroll(function () {
        $('#more').hide();
        $('#no-more').hide();
       
        if($(window).scrollTop() + $(window).height() > $(document).height() - 300) {
            $('#more').css("top","400");
            $('#more').show();
        }
        if($(window).scrollTop() + $(window).height() == $(document).height()) {
            $('#more').hide();
            $('#no-more').hide();
            page++;
            if((page-1)* 12 > actual_count){ 
                $('#no-more').css("top","400");
                $('#no-more').show();
            }else{
                loading();
            }
        }
    });
                
            
$(document).ready(function(){
    (function(){
        var url = window.location.href;
        console.log(url);
        <?php
            function curPageURL() {
                $pageURL = '';
                if ($_SERVER["SERVER_PORT"] != "80") {
                $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
                } else {
                $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
                }
                return $pageURL;
            }
            $url = curPageURL();
            
            $item = 0;
            $cat = 0;
            while ($row = mysql_fetch_array($result)) { /* my god... */
                echo "$('#container').append(\"<div class='item is" . $item . " cat" . $cat . "'><a class='group' rel='group1' href='images/" . $row['name'] . "'><img src='images/" . $row['name'] . "' /></a><div class='options'><a href='" . $url . "meh.php#" . $row['name'] . "' target=\'blank\' class='enhance'>enhance</a><a href=\'https://twitter.com/share\' class=\'twitter-share-button\' data-url=\'" . $url . "#" . $row['name'] . "\' data-via=\'yeametoo_meh\' data-count=\'none\' data-hashtags=\'yeametoo\'>Tweet</a><div class='fb-like' data-href='" . $url . "\/meh.php#" . $row['name'] . "' data-send='false' data-layout='button_count' data-width='140' data-show-faces='false' data-colorscheme='dark' data-font='trebuchet ms'></div></div></div>\");
                    ";
                $item++;
                $cat++;
                if($cat == 3){
                   $cat = 0; 
                }
            }
        ?>
        $('.bar-content a').hide();
        setTimeout(function(){
            $('.bar-content a').fadeIn(1500);
        },10000);
        $(function() {
            $("a.group").fancybox({ /* why does this exist. fuck you plugin */
                'nextEffect'    :   'fade',
                'prevEffect'    :   'fade',
                'overlayOpacity' :  0.8,
                'overlayColor' : '#000000',
                'arrows' : false,
                'titleShow' : true,
                'titlePosition' : 'outside',
            });
        });
    }());
});
</script>




</head>

<body>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=131000287038500";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    
    <div class="bottom"></div>
        <div id='more' >Loading More Content</div>
        <div id='no-more' >No More Content</div>
        <div id="bar">
            <div class="bar-content">
                <a class="meh-btn" href="">meh</a>
                <a href="https://twitter.com/yeametoo_meh" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @yeametoo_meh</a>
            </div>
        </div>
        <div id="heading">yea, me too.</div>
        <div id="container">
            
        </div>
    <script>
    
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
    
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