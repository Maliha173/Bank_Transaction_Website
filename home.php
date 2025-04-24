<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bank Transaction System</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #007bff;
      padding: 20px;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h1 {
      font-size: 2em;
      margin: 0;
      font-weight: bold;
    }

    nav ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    nav li {
      display: inline-block;
      margin-right: 20px;
    }

    nav a {
      text-decoration: none;
      color: #fff;
      font-weight: bold;
      transition: color 0.3s ease;
    }

    nav a:hover {
      color: #f8f9fa;
    }

    main {
      padding: 0;
    }

    .carousel-item img {
      width: 100%;
      height: 540px;
    }

   footer {
        background-color: #333333;
        color: #fff;
        text-align: center;
        padding: 10px 0;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
  </style>
</head>
<body>
  <header>
    <div class="container">
      <h1><i class='fas fa-lock' style='font-size:48px;color:green'></i> Bank Transaction System</h1>

      <nav>
        <ul>
          <li><a href="http://localhost/isa/home.php/">Home</a></li>
<li><a href="http://localhost/isa/userreg.php/">Registration</a></li>
                    <li><a href="http://localhost/isa/ulogin.php/">User</li>
          <li><a href="http://localhost/isa/adminlogin.php/">Admin</a></li>
          <li><a href="http://localhost/isa/about.php/">About Us</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://img.freepik.com/free-vector/fintech-isometric-flowchart-composition-with-isolated-images-online-payment-card-transfer-editable-text-captions-vector-illustration_1284-73739.jpg?size=626&ext=jpg"class="d-block w-100;height:100" alt="Slide 1">
        </div>
        <div class="carousel-item">
          <img src="https://previews.123rf.com/images/chormuang/chormuang2105/chormuang210500019/168785814-internet-banking-technology-isometric-illustration-of-bank-on-dark-blue-technology-background.jpg" class="d-block w-100;height:100" alt="Slide 2">
        </div>
        <div class="carousel-item">
          <img src="https://cloudfront-us-east-2.images.arcpublishing.com/reuters/NHQJ3SYJF5KHPNK22M45PHWPVM.jpg" class="d-block w-100;height:100" alt="Slide 3">
        </div>
      </div>
    </div>
  </main>

  <footer>
    <div class="container">
      <p>&copy;Developed by Umma Habiba Maliha;ID:22103055;CSE department</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
