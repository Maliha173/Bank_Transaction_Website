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
.table {
    width: 100%; /* Make table width fill its container */
    border-collapse: collapse; /* Collapse table borders */
}

th, td {
    border: 1px solid #ccc; /* Light gray border */
    padding: 8px; /* Add padding for better spacing */
    background-color: white;
}

th {
    background-color:#8b388b; }

p {
    font-family: Arial, sans-serif; 
    font-size: 18px; 
    margin-top: 20px; 
    text-align: center; 
}

    .print-button {
    padding: 10px 20px;
    background-color: #8b388b; 
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.print-button:hover {
    background-color: #0056b3;
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
<li><a href="http://localhost/isa/uview.php/">Check_balance</a></li>

          <li><a href="http://localhost/isa/adminlogin.php/">Admin</a></li>
          <li><a href="AboutUs.php">About Us</a></li>
        </ul>
      </nav>
    </div>
  </header>

<div class="table"><div id="printableArea">
         <br><br>   <h2 align="center"> Customer Data Set </h2>
            <center>
                <table border="1" align="center">
                <!-- comment -->
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "rabbit";
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                 echo "<table ><tr><th>User_Id</th><th>Balance</th><th>Email</th><th>Mobile</th><th>Date</th></tr>";
                
                $sql = "SELECT * FROM account ";
                $result = mysqli_query($conn,$sql);

                while ($test = mysqli_fetch_array($result)) {
                    $user_id = $test['user_id'];
                    echo "<tr align='center'>";
                     echo"<td><font color='black'>" . $test['user_id'] . "</font></td>";
                    echo"<td><font color='black'>" . $test['balance'] . "</font></td>";
                    echo"<td><font color='black'>" . $test['email'] . "</font></td>";
                    echo"<td><font color='black'>" . $test['mobile'] . "</font></td>";
                    echo"<td><font color='black'>" . $test['date'] . "</font></td>";

                    echo "</tr>";
                }
                mysqli_close($conn);
                ?>
            </table></div>
<center>
     <br><br>   <input type="button" onclick="printDiv('printableArea')" value="print" /><br><br><br>
         <button type="button" onclick="location.href = 'http://localhost/isa/uview.php'">Back</button>
            </center>
            </center>
        
        

            <script>
                function printDiv(divName) {
                    var printContents = document.getElementById(divName).innerHTML;
                    var originalContents = document.body.innerHTML;
                    document.body.innerHTML = printContents;
                    window.print();
                    document.body.innerHTML = originalContents;
                }</script><br>           
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
