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
$email = $_POST['email'];


// Prepare and execute SQL statement
$sql = "INSERT INTO  tblsubscription (email)
 VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
//   echo "successfully subscribed";
  header("location:incld/subscription.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
// Function to check if email already exists
function isEmailAlreadyExist($conn, $email) {
    $stmt = $conn->prepare("SELECT * FROM tblsubscription WHERE email = ?");
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
  $to = "ezems.developers@gmail.com"; // Email address where you want to receive the notification
  $subject = "New Subscription";
  $message = "A new user with email: $email has subscribed to your service.";

  // Set additional headers
  $headers = "From: ezems.developers@gmail.com" . "\r\n" .
             "Reply-To: ezems.developers@gmail.com" . "\r\n" .
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