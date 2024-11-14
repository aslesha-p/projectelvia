<?php
// Database connection
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password (leave empty if using default XAMPP setup)
$dbname = "budget_calculator"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle the budget form submission
$ev_data = [];
if (isset($_POST['budget'])) {
    $user_budget = $_POST['budget'];
    
    // Query to get EV information within the user's budget
    $sql = "SELECT ev_image, description FROM budget_entries WHERE budget <= ? ORDER BY budget DESC LIMIT 3";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("d", $user_budget);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch all results
        while ($row = $result->fetch_assoc()) {
            $ev_data[] = $row;
        }
    } else {
        $ev_data[] = ['ev_image' => '', 'description' => 'No EV found within this budget.'];
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EV Calculator</title>
  <link rel="stylesheet" href="c1.css">
</head>
<body>
  <div class="calculator">
    <h1>Enter Your Budget</h1>
    <form method="post" action="c1.php">
      <label for="price-input">Enter Price:</label>
      <input type="number" id="price-input" name="budget" min="0" required>
      <button type="submit" id="go-button">Go</button>
    </form>
    <div id="ev-list">
      <?php
      if (!empty($ev_data)) {
          foreach ($ev_data as $ev) {
              if ($ev['ev_image']) {
                  echo "<div class='ev-item'>
                          <img src='" . htmlspecialchars($ev['ev_image']) . "' alt='EV Image'>
                          <p>" . htmlspecialchars($ev['description']) . "</p>
                        </div>";
              } else {
                  echo "<p>" . htmlspecialchars($ev['description']) . "</p>";
              }
          }
      }
      ?>
    </div>
  </div>
</body>
</html>
