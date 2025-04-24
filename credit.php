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
            background-color: #f0f0f0;
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
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-wrap: wrap;
        }

        .profile {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-right: 20px;
            flex: 1; /* Grow to fill available space */
            min-width: 300px; /* Minimum width to prevent collapsing */
        }

        .credit-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            flex: 1; /* Grow to fill available space */
            min-width: 300px; /* Minimum width to prevent collapsing */
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 20px;
        }

        .profile-picture img {
            width: 100%;
            height: auto;
        }

        form {
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
<li><a href="http://localhost/isa/uview.php/">Check_Balance</a></li>
                    <li><a href="http://localhost/isa/adminlogin.php/">Admin</a></li>
                    <li><a href="AboutUs.php">About Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="profile">
          <center>  <h2><b>User Profile</b></h2></center>
            <div class="profile-picture">
                <img src="https://imageio.forbes.com/specials-images/imageserve/62d599ede3ff49f348f9b9b4/0x0.jpg?format=jpg&crop=821,821,x155,y340,safe&height=416&width=416&fit=bounds" alt="Profile Picture">
            </div>
            <!-- Display user profile details here -->
<center>
<h5>User_ID:1</h5>
<h5>Name:Bill Gates</h5>
<h5>Email:bill60@gmail.com</h5>
<h5>Mobile:776633</h5>
<h5>City:London</h5>
</center>

        </div>
        <div class="container">
        <h2>Credit Form</h2>
        <form action="#" method="post">
            <label for="user_id">User ID:</label>
            <input type="number" id="user_id" name="user_id" required>

            <label for="credit_amount">Credit Amount:</label>
            <input type="number" id="credit_amount" name="credit_amount" min="0.01" step="0.01" required>
<label for="date">Date:</label>
            <input type="date" id="date" name="date" required>

            <input type="submit" value="Credit">
        </form>

        
        </div>
    </main>
    
    <footer>
        <div class="container">
            <p>&copy; Developed by Umma Habiba Maliha;ID:22103055;CSE department</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "rabbit";

// Retrieve form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST["user_id"];
    $credit_amount = $_POST["credit_amount"];
    $date = $_POST["date"]; // Added line to retrieve date input

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to update account balance and date
    $sql = "UPDATE account SET balance = balance + ?, date = ? WHERE user_id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind parameters and execute the statement
        $stmt->bind_param("dsi", $credit_amount, $date, $user_id);

        if ($stmt->execute()) {
            echo "Credit successfully applied!";
        } else {
            echo "Error updating account balance: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Prepare statement error: " . $conn->error;
    }

    // Close connection
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
