<?PHP

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "Elon2508/*-";
$database = "dbvoting";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$invoiceNumber = $_POST['invoiceNumber'];
$description = $_POST['description'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$total = $_POST['total'];
$Phone= $_POST['Phone'];

// Prepare and execute SQL statement
$sql = "INSERT INTO  tblinvoice (invoiceNumber, description, quantity, price, total,Phone)
 VALUES ('$invoiceNumber', '$description', '$quantity', '$price', '$total', '$Phone')";

if ($conn->query($sql) === TRUE) {
  echo "successfully subscribed";
  header("location:../index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>