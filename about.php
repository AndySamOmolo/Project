<?php
 require_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    h1 {
      font-size: 36px;
      margin-top: 0;
    }

    main {
      max-width: 800px;
      margin: 0 auto;
      padding: 40px;
    }

    p {
      line-height: 1.5;
    }

    img {
      max-width: 100%;
      height: auto;
      display: block;
      margin: 20px auto;
      border-radius: 50%;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>
<body>
  <header>
    <h1>About Us</h1>
  </header>
  <main>
    <img src="https://picsum.photos/500/500" alt="Company Logo">
    <h2>Our Story</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod urna in lorem faucibus aliquet. Fusce id quam aliquet, rutrum sapien non, aliquam ipsum. Etiam laoreet ante quis nunc luctus ultrices. Suspendisse potenti. In venenatis tellus ac mauris aliquet interdum. Sed vel sapien mauris. Aliquam erat volutpat. Nam in quam euismod, pretium arcu sit amet, consequat nulla.</p>
    <p>Donec efficitur fringilla justo vitae lobortis. Praesent ac erat sed elit dictum malesuada. Aenean luctus sapien eget libero molestie, in facilisis metus lobortis. Nullam vitae dolor eleifend, sagittis risus eu, ultricies sapien. Suspendisse vestibulum, ex a lacinia imperdiet, odio turpis pharetra urna, sed maximus nisi nisl in lacus.</p>
    <h2>Our Team</h2>
    <p>Meet the talented individuals behind our success:</p>
    <ul>
      <li>John Smith - CEO</li>
      <li>Jane Doe - Marketing Director</li>
      <li>Mike Johnson - Sales Manager</li>
    </ul>
  </main>
</body>
</html>


<?php
 require_once 'footer.php';
?>
