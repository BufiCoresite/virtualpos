<!DOCTYPE HTML>
<html>
<head>
    <title><?= $templateTitle; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>

<header class="bs-docs-nav navbar navbar-static-top" id="top">
    <div class="container">
        <div class="navbar-header">
            <button aria-controls="bs-navbar" aria-expanded="false" class="collapsed navbar-toggle" data-target="#bs-navbar" data-toggle="collapse" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?= $hostUrl ?>" class="navbar-brand">Main Page</a>
        </div>
        <nav class="collapse navbar-collapse" id="bs-navbar">
            <ul class="nav navbar-nav">
                <li> <a href="<?= $hostUrl ?>/interpos">InterPos (Deniz bank)</a></li>
            </ul>
        </nav>
    </div>
</header>
<div id="wrapper">
    <div class="container" style="max-width: 640px;">
        <h2 class="text-center"><?= $templateTitle; ?></h2>
        <hr>
