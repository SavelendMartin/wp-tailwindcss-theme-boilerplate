<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= wp_get_document_title() ?></title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Blinker:wght@300;400;600&display=swap" rel="stylesheet">   

    <script>document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/, 'js');</script>
	<?php wp_head() ?>
</head>
<body <?php body_class('bg-offwhite-400') ?>>