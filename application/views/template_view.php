<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>template: home</title>
	<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
	<meta name="description" content="Your description goes here..." />
	<meta name="keywords" content="your,keywords,goe,here" />
	<meta name="author" content="Your Name / Design by Fernbap - http://fernbap.com/" />
	<link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>
<body>
<div id="wrapper">
	<div id="title">
	</div>
	<div id="header">
	</div>
	<div id="menu">
		<ul>
			<li><a href="/user"><span>Юзеры</span></a></li>
			<li><a class="selected" href="/user"><span>Добавить юзера</span></a></li>
		</ul>
	</div>
	<div id="content">
		<div id="right">
		<h2 class="topright">Меню</h2>
		<div class="rightitem">
			<ul>
			<li><a href="/user">Юзеры</a></li>
			</ul>
		</div>
		</div>
		<div id="main">



			<?php include 'application/views/'.$content_view; ?>



		</div>
		<div class="leftbottom"></div>
	</div>
	<div id="clear"></div>
	<div id="footer">
		<p>Copyright &copy; 2008 Your Name - All rights reserved | <a href="http://validator.w3.org/check?uri=referer">XHTML 1.1</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS 2.1</a> | Design by <a href="http://www.fernbap.com">Fernbap</a></p>
	</div>
</div>
</body>
</html>