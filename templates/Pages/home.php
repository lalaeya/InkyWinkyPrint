<?php
$this->disableAutoLayout();
?>

<!DOCTYPE html>
<html lang="ms">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>InkyWinky Printing</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Quicksand:wght@500&family=Fredoka:wght@400;500&display=swap" rel="stylesheet">

  <style>
    html, body {
      margin: 0;
      padding: 0;
      font-family: 'Fredoka', sans-serif;
      background: linear-gradient(135deg, #daebf8ff, #fad1d1ff);
      color: #333;
    }

    /* HEADER */
    .main-header {
      background-color: #fda7ba;
      color: white;
      padding: 25px 30px;
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
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
      margin-right: auto;
    }

    .main-header .nav-buttons {
      display: flex;
      gap: 10px;
    }

    .home-button {
      background-color: white;
      color: #fda7ba;
      padding: 8px 16px;
      border-radius: 12px;
      text-decoration: none;
      font-weight: bold;
      font-family: 'Quicksand', sans-serif;
      transition: 0.3s ease;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .home-button:hover {
      background-color: #f0ededff;
    }

    /* MAIN CONTENT */
    .container {
      max-width: 1000px;
      margin: 0 auto;
      padding: 120px 20px;
      text-align: center;
    }

    h1 {
      font-size: 3.2rem;
      color: #4db2f1;
      font-weight: 700;
      margin-top: 20px;
      letter-spacing: 2px;
      text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.1);
    }

    p {
      font-size: 1.4rem;
      color: #555;
      font-weight: 500;
      margin: 30px 0;
    }

    .button-container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 30px;
      margin-top: 40px;
    }

    .button {
      padding: 16px 30px;
      font-size: 18px;
      font-weight: bold;
      border-radius: 40px;
      text-decoration: none;
      transition: transform 0.3s ease-in-out, background-color 0.3s;
      font-family: 'Quicksand', sans-serif;
      box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
    }

    .button:active{
        transform:scale(0.95);
    }

    @keyframes bounce {
        0%, 100% {
            transform:translateY(0);
        }
        50% {
            transform:translateY(-15px);
        }
    }

    .button-container a {
        animation:bounce 1s infinite;
    }

    .customer-btn {
      background: linear-gradient(45deg, #b3e5fc, #81d4fa);
      color: #034f84;
    }

    .customer-btn:hover {
      background: linear-gradient(45deg, #81d4fa, #4fc3f7);
    }

    .admin-btn {
      background: linear-gradient(45deg, #f8bbd0, #f48fb1);
      color: #880e4f;
    }

    .admin-btn:hover {
      background: linear-gradient(45deg, #f48fb1, #f06292);
    }

    /* WOW FACTOR – STARS ANIMATION */
    .stars {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      background: url('https://www.transparenttextures.com/patterns/stardust.png');
      opacity: 0.1;
      animation: moveStars 60s linear infinite;
    }

    @keyframes moveStars {
      from { background-position: 0 0; }
      to { background-position: 1000px 1000px; }
    }

    /* FOOTER */
    footer {
      text-align: center;
      padding: 25px;
      color: #555;
      font-size: 0.9em;
      font-family: 'Quicksand', sans-serif;
      background: linear-gradient(135deg, #daebf8ff, #fad1d1ff);
    }
  </style>
</head>
<body>

  <!-- Stars Background Animation -->
  <div class="stars"></div>

  <!-- HEADER -->
  <header class="main-header">
    <div class="title">InkyWinky Printing ✧</div>
    <div class="nav-buttons">
      <a href="<?= $this->Url->build('/') ?>" class="home-button">Homepage</a>
      <a href="<?= $this->Url->build(['controller' => 'Contact', 'action' => 'index']) ?>" class="home-button">Contact</a>
      <a href="<?= $this->Url->build(['controller' => 'About', 'action' => 'index']) ?>" class="home-button">About Us</a>
    </div>
  </header>

  <!-- MAIN CONTENT -->
  <div class="container">
    <h1>WELCOME TO INKYWINKY PRINTING!</h1>
    <p>Easy, fast and cheap! Make your order now!</p>

    <div class="button-container">
      <?= $this->Html->link('I AM A CUSTOMER 🙋🏻‍♀️', ['controller' => 'Customers', 'action' => 'add'], ['class' => 'button customer-btn']) ?>
      <?= $this->Html->link('I AM AN ADMIN ✨', ['controller' => 'Admin', 'action' => 'login'], ['class' => 'button admin-btn']) ?>
    </div>
  </div>

  <!-- FOOTER -->
  <footer>
    © 2025 InkyWinky Printing Service
  </footer>

</body>
</html>
