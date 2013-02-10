<?php
$con = mysql_connect("localhost", "root", "root") or die ('Error connecting to mysql');
mysql_select_db("mnsounds");


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

    