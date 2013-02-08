<?php

$requested_page = $_POST['page_num'];
$set_limit = (($requested_page - 1) * 12) . ",12";

$con = mysql_connect("localhost", "kgzohssv_danger", "Mintman1");
mysql_select_db("kgzohssv_metoo");


$result = mysql_query("select  * from scroll_images order by rand() limit $set_limit");

$item = (($requested_page -1) * 12);
$cat = 0;
$html = '';

while ($row = mysql_fetch_array($result)) {
    $html .= "<script>$('#col" . $cat . "').append(\"<div class='item is" . $item . " cat" . $cat . "'><a class='group' rel='group1' href='images/" . $row['name'] . "'><img src='images/" . $row['name'] . "' /></a><div class='options'><a href='http://yeametoo.com/meh.php#" . $row['name'] . "' target=\'blank\' class='enhance'>enhance</a><a href=\'https://twitter.com/share\' class=\'twitter-share-button\' data-url=\'http://yeametoo.com/meh.php#" . $row['name'] . "\' data-via=\'yeametoo_meh\' data-count=\'none\' data-hashtags=\'yeametoo\'>Tweet</a><div class='fb-like' data-href='http:\/\/www.yeametoo.com\/meh.php#" . $row['name'] . "' data-send='false' data-layout='button_count' data-width='140' data-show-faces='false' data-colorscheme='dark' data-font='trebuchet ms'></div></div></div>\");</script>" ;
    $item++;
    $cat++;
    if($cat == 3){
       $cat = 0; 
    }
    
}






echo $html;

exit;
?>
