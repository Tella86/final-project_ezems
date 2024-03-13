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
$name = $_POST['name'];
$email = $_POST['email'];
$package = $_POST['package'];
$phone = $_POST['phone'];
$Amount = $_POST['Amount'];
$date= $_POST['date'];

// Prepare and execute SQL statement
$sql = "INSERT INTO  tblscubsribers (name, email, package, phone, Amount,date)
 VALUES ('$name', '$email', '$package', '$phone', '$Amount', '$date')";

if ($conn->query($sql) === TRUE) {
  echo "successfully subscribed";
  header("location:../invoices/invoice.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>