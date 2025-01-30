<?php
    $current_page = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang ="en">
    <head>
        <meta charset="=UFT-8">
        <meta name="viewpoint" content ="width=device-width,initial-scale=1.0">
        <title>MY PHP PAGE</TITLE>
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <div class="logo">
        <img src="images/logo.png" height=100 width=100 alt="site logo" class="logo">
</div>
     <nav>
        <ul>
            <li class="<?=($current_page == 'index.php')?'active': ''; ?>"><a href="index.php">HOME</a></li>
            <li class="<?=($current_page == 'about.php')?'active': ''; ?>"><a href="about.php">ABOUT US</a></li>
</ul>
</nav>
</header>