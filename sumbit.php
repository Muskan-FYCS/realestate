<?php
// DB connection info
$host = "sql113.infinityfree.com";
$user = "if0_38797709";
$password = "6oRw00XreJOq9"; // default for XAMPP, WAMP
$dbname = "if0_38797709_property_db";

// Connect to database
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get and sanitize form data
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$budget = htmlspecialchars($_POST['budget']);
$property_type = htmlspecialchars($_POST['property_type']);

// Prepare SQL statement
$stmt = $conn->prepare("INSERT INTO enquiry (name, email, phone, budget, property_type) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $phone, $budget, $property_type);

// Execute and respond
if ($stmt->execute()) {
    echo "";
    
} else {
    echo "Error: " . $stmt->error;
}
echo '
  <div style="
    max-width: 500px;
    margin: 50px auto;
    padding: 30px;
    background: #e7f9ed;
    border: 1px solid #b2dfdb;
    border-radius: 12px;
    text-align: center;
    font-family: Arial, sans-serif;
    box-shadow: 0 8px 16px rgba(0,0,0,0.1);
  ">
    <h2 style="color: #2e7d32;">✅ Thank You!</h2>
    <p style="font-size: 16px; color: #333;">
      Your enquiry has been submitted successfully.<br>
      We’ll get back to you shortly.
    </p>
    <a href="index.php" style="
      display: inline-block;
      margin-top: 15px;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
    ">Back to Home</a>
  </div>
';

// Close connection
$stmt->close();
$conn->close();
?>
