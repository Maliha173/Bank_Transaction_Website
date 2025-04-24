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
      padding: 20px;
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
                    <li><a href="http://localhost/isa/ulogin.php/">User</a><li>
          <li><a href="http://localhost/isa/adminlogin.php/">Admin</a></li>
          <li><a href="AboutUs.php">About Us</a></li>
        </ul>
      </nav>
    </div>
  </header>
<main>
    
<body>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
  }

  center {
    margin-top: 50px;
  }

  h1 {
    color: #333;
  }

  form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    margin: 0 auto;
  }

  input[type="number"],
  input[type="text"],
  input[type="email"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type="submit"] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #45a049;
  }
</style>

<center>
  <h1>Registration</h1>
  <form action="#" method="Post">
    User_ID:<input type="number" name="user_id" required><br>
    Name:<input type="text" name="name" required><br>
    Email:<input type="email" name="email" required><br>
    Mobile:<input type="number" name="mobile" required><br>
    City:<input type="text" name="city" required><br>
<input type="password"name="password" id="password" placeholder="Password" required>

<input type="submit" name="submit" value="Submit">
 <li><a href="http://localhost/isa/view.php/">Show</a></li>

    
</a>

  </form>
</center>

<?php
if(isset($_POST['submit']))
{
$user_id=$_POST['user_id'];
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$city=$_POST['city'];
$password=$_POST['password'];


$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'rabbit';

$conn =  mysqli_connect($host,$user,$pass,$dbname);
$sql = "INSERT INTO killer(user_id,name,email,mobile,city,password) values('$user_id','$name','$email','$mobile','$city','$password')";
mysqli_query($conn,$sql);
}
?>
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