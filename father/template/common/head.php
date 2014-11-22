<!DOCTYPE html>
<html>
<head lang="en">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="nuanba,暖爸,yanweiqing">

	<title>
<?php
	if (isset($fullTitle)) {
		echo $fullTitle;
	} else if (isset($title)) {
		echo 'YANWEIQING | ', $title;
	} else {
		echo 'XX';
	}
?>
	</title>
<?php
	if ($title === "HOME") {
		echo '<link rel="stylesheet" href="style/css/base.css">';
	} else {
		echo '<link rel="stylesheet" href="../../style/css/base.css">';
		if (isset($cssfile)) {
			foreach ($cssfile as $value) {
				echo '<link rel="stylesheet" href="../../style/css/partials/', $value, '.css">';
			}
		}
	}
?>
	<script src="http://yui.yahooapis.com/3.18.0/build/yui/yui-min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
