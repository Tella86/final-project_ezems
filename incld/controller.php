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
//   echo "successfully subscribed";
  header("location:../invoices/invoice.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
// Function to check if email already exists
function isEmailAlreadyExist($conn, $email) {
    $stmt = $conn->prepare("SELECT * FROM tblscubsribers WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->num_rows > 0;
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    if (isEmailAlreadyExist($conn, $email)) {
        echo "Email already exists!";
    } else {
        // Insert new user into database
        $stmt = $conn->prepare("INSERT INTO tblscubsribers (email) VALUES (?)");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        // header("location:../invoices/invoice.php");
        echo "successfully subscribed";
        
      
    }
}
function sendSubscriptionNotification($email) {
  // Set your notification details
  $to = "nillymae07@gmail.com"; // Email address where you want to receive the notification
  $subject = "New Subscription";
  $message = "A new user with email: $email has subscribed to your service.";

  // Set additional headers
  $headers = "From: nillymae07@gmail.com" . "\r\n" .
             "Reply-To: nillymae07@gmail.com" . "\r\n" .
             "X-Mailer: PHP/" . phpversion();

  // Send the notification email
  $result = mail($to, $subject, $message, $headers);

  // Check if the email was sent successfully
  if($result) {
      echo "Notification email sent successfully.";
  } else {
      echo "Failed to send notification email.";
  }
}

// Example usage:
$email = "user@example.com"; // Replace this with the user's email
sendSubscriptionNotification($email);
// Close connection
$conn->close();
?>
<