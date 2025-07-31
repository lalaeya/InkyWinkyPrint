<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * @var \App\View\AppView $this
 */
$cakeDescription = 'InkyWinky System';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>: <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Quicksand:wght@500&display=swap" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake']) ?>

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #daebf8ff, #fad1d1ff);
        }

        /* HEADER BAR */
        .main-header {
            background-color: #fda7baff;
            color: white;
            padding: 15px 30px;
            width: 100%;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .main-header .title {
            font-family: 'Playfair Display', serif;
            font-size: 26px;
            font-weight: 700;
            color: white;
            letter-spacing: 1px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
            margin-right: auto;
        }

        .main-header .nav-buttons {
            display: flex;
            gap: 10px;
        }

        .main-header .home-button {
            background-color: white;
            color: #fda7baff;
            padding: 8px 16px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: bold;
            font-family: 'Quicksand', sans-serif;
            transition: 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .main-header .home-button:hover {
            background-color: #f0ededff;
        }

        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 0px;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #aaa;
            font-size: 0.9em;
        }


    </style>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <!-- HEADER -->
<header class="main-header">
    <div class="title">InkyWinky Printing ✧</div>
    <div class="nav-buttons">
        <a href="<?= $this->Url->build('/') ?>" class="home-button">Homepage</a>
        <a href="<?= $this->Url->build(['controller' => 'Contact', 'action' => 'index']) ?>" class="home-button">Contact</a>
        <a href="<?= $this->Url->build(['controller' => 'About', 'action' => 'index']) ?>" class="home-button">About Us</a>
    </div>
</header>


    <!-- PAGE CONTENT -->
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>

    <!-- FOOTER -->
    <footer>
        © 2025 InkyWinky Printing Service
    </footer>
</body>
</html>