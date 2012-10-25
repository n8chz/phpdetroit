<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP Detroit "Whose Code" App</title>  
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <style>
    body {
     /* background color hue to reflect day of the week */
     background:hsl(<?php echo floor(date("w")*360.0/7.0+0.5) ?>,100%,80%);
    }
    </style>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body>
<div id="container">
