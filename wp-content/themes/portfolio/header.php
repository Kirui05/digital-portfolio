<!-- header section -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Portfolio</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <?php wp_head(); ?>
</head>
<body>

<header>
  <div class="container">
    <div class="logo">
    <h1><a href="<?php echo site_url('/home')?>" style="color:#008759;  text-decoration: none;" class="bold">PORTFOLIO</a></h1>
    </div>
    <nav>
      <ul>
        <li><a href="#about">About me</a></li>
        <li><a href="<?php echo site_url('/projects')?>">Projects</a></li>
        <li><a href="<?php echo site_url('/contact')?>">Contact me</a></li>
      </ul>
    </nav>
  </div>
</header>