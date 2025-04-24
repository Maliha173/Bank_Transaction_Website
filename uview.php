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
button.navbar-toggler {
      color: white; /* Set color to white */
      border: none; /* Remove border */
    }

    button.navbar-toggler:focus {
      outline: none; /* Remove focus outline */
    }

    button.navbar-toggler:hover {
      color: Black; /* Change color on hover */
    }

    button[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
      background-color: #0056b3;
    }

    .profile-picture {
    width: 150px; /* Set width */
    height: 150px; /* Set height */
    border-radius: 50%; /* Make it round */
    overflow: hidden; /* Hide overflow */
    margin: 0 auto 20px; /* Center horizontally and add margin bottom */
}

.profile-picture img {
    width: 100%; /* Make the image fill the container */
    height: auto; /* Maintain aspect ratio */
}
.btn-custom {
      padding: 10px 20px; /* Padding */
      margin: 5px; /* Margin */
      border-radius: 5px; /* Rounded corners */
      cursor: pointer; /* Pointer cursor on hover */
      transition: background-color 0.3s ease; /* Smooth transition */
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
<li><a href="http://localhost/isa/credit.php/">Credit</a></li>
<li><a href="http://localhost/isa/pdf.php/">Pdf</a></li>

          <li><a href="http://localhost/isa/adminlogin.php/">Admin</a></li>
          <li><a href="AboutUs.php">About Us</a></li>
        </ul>
      </nav>
    </div>
  </header>

<main>
  <center>
   <div class="profile-picture">
    <img src="https://imageio.forbes.com/specials-images/imageserve/62d599ede3ff49f348f9b9b4/0x0.jpg?format=jpg&crop=821,821,x155,y340,safe&height=416&width=416&fit=bounds" alt="Profile Picture">

</div>
</center>
</main>



<!DOCTYPE html>
<html>
<head>
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

  table {
    border-collapse: collapse;
    width: 80%;
    margin-top: 20px;
  }

  th, td {
    border: 1px solid blue;
    padding: 8px;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  tr:hover {
    background-color: #ddd;
  }
</style>
</head>

<body>
<center>
  <h1>User Balance & Details</h1>
  <?php
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="rabbit";

  $conn=new mysqli($servername,$username,$password,$dbname);
  if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
  }
  $sql="SELECT * FROM account";
  $result=$conn->query($sql);

  if($result->num_rows>0){
    echo "<table>
      <th>User_ID</th>
<th>Name</th>

      <th>Balance</th>
      <th>Email</th>
      <th>Mobile</th>
<th>Date</th>

      </tr>";
    while($row=$result->fetch_assoc()){
      echo "<tr><td>".$row["user_id"]."</td><td>".$row["name"]."</td><td>".$row["balance"]."</td><td>".$row["email"]."</td><td>".$row["mobile"]."</td><td>".$row["date"]."</td><tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
  $conn->close();
  ?><br><br><br><br><br><br><br><br>
</center>
</body>
</html>
        
        

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
