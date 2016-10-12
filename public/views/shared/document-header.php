<!doctype html>
<html class="no-js<?php if (isset($html_class)) { echo ' ' . $html_class; } ?>" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Brad Haynes<?php if (isset($page_title)) echo ' - ' . $page_title; ?></title>

		<meta name="description" content="Brad Haynes is a product designer and  creative director based in Nashville, TN">
		<meta name="robots" content="all">

		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta http-equiv="cleartype" content="on">

		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" title="favicon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x57-precomposed.png">
		<link rel="shortcut icon" href="apple-touch-icon.png">

		<meta name="msapplication-TileImage" content="apple-touch-icon-144x144-precomposed.png">
		<meta name="msapplication-TileColor" content="#32425c">

		<link rel="stylesheet" href="assets/styles/main.css">

		<?php if ($html_class === 'Home'): ?>
			<script src="assets/scripts/eqcss.js"></script>

			<script type="text/eqcss">
	      @element ".Masthead-wrap" and (max-width: 220px) {
	        .Masthead-wrap h1 {
	          font-size: 36px;
	        }

	        .Masthead-wrap p {
	          font-size: 20px;
	        }
	      }

	      @element ".Masthead-wrap" and (min-width: 221px) and (max-width: 399px) {
	        .Masthead-wrap h1 {
	          font-size: 45px;
	        }

	        .Masthead-wrap p {
	          font-size: 20px;
	        }
	      }

	      @element ".Masthead-wrap" and (min-width: 400px) and (max-width: 889px) {
	        .Masthead-wrap h1 {
	          font-size: 63px;
	        }

	        .Masthead-wrap p {
	          font-size: 28px;
	        }
	      }

	      @element ".CaseStudy-description" and (max-width: 214px) {
	        .CaseStudy-description .title {
	          font-size: 26px;
	          line-height: 1.2;
	        }

	        .CaseStudy-description .intro {
	          font-size: 16px;
	        }

	        .CaseStudy-description .Button {
	          font-size: 14px;
	        }
	      }

	      @element ".CaseStudy-description" and (min-width: 215px) and (max-width: 329px) {
	        .CaseStudy-description .title {
	          font-size: 35px;
	        }

	        .CaseStudy-description .intro {
	          font-size: 20px;
	        }

	        .CaseStudy-description .Button {
	          font-size: 16px;
	        }
	      }
	    </script>
		<?php endif; ?>
	</head>

	<body<?php if (isset($body_class)) { echo ' class="' . $body_class . '"'; } ?>>
