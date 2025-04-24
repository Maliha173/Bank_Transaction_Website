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

         
          <li><a href="http://localhost/isa/ulogin.php/">User</a></li>
          <li><a href="http://localhost/isa/adminlogin.php/">Admin</a></li>
<li><a href="http://localhost/isa/search.php/">Search</a></li>


          <li><a href="AboutUs.php">About Us</a></li>

        </ul>
      </nav>
    </div>

      </header>
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

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  tr:hover {
    background-color: #ddd;
  }
</style>
</head>


  <main>
    <center>
      <h1>Customer Info</h1>
      <table>
        <tr>
          <th>User ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>City</th>
<th>Password</th>
          <th>Action</th>
        </tr>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "rabbit";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM killer";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["user_id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["mobile"] . "</td>";
            echo "<td>" . $row["city"] . "</td>";
echo "<td>" . $row["password"] . "</td>";

            echo "<td>";
            echo "<a href='http://localhost/isa/update.php/?user_id=" . $row["user_id"] . "'>Update</a> | ";
            echo "<a href='http://localhost/isa/delete.php/?user_id=" . $row["user_id"] . "'>Delete</a>";
            echo "</td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='6'>0 results</td></tr>";
        }
        $conn->close();
        ?>
      </table>
    </center>
  </main>
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
