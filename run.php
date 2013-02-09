<?php
$con = mysql_connect("localhost", "root", "root");
mysql_select_db("mnsounds");


/* delete all rows from table */
mysql_query("TRUNCATE scroll_images;");


/* then add whatever exists now */

// list of allowed image extensions
$image_exts=array('png','jpg','ico','gif','bmp'); // ...


// function to store image file to db
function db_add_image($image){
    $name=mysql_real_escape_string(basename($image));
    mysql_query("INSERT INTO `scroll_images` (`name`)
        VALUES ('".$name."')");
        echo($name);
}

// loop in your folder (glob returns an array of files matching a wildcard)
foreach(glob('images/*.*') as $file)
    // if the file is an image...
    if(in_array(strtolower(pathinfo($file,PATHINFO_EXTENSION)),$image_exts))
        // add image to database
        db_add_image($file);


?>