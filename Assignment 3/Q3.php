<?php
      $pattern = "/^\d{3}-\d{3}-\d{4}$/";

      function validate_input($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
      }

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = validate_input($_POST["name"]);
        $phone = validate_input($_POST["phone"]);
        if (preg_match($pattern, $phone)) {
          echo "Thank you, " . $name . ". Your phone number " . $phone . " is valid.";
        } else {
          echo "Sorry, " . $name . ". Your phone number " . $phone . " is not valid.";
        }
      }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Phone Number Validator</title>
  </head>
  <body>
    <h1>Enter Your Name and Phone Number</h2>
    <form method="post">
      Name: <input type="text" name="name"><br><br>
      Phone Number (XXX-XXX-XXXX): <input type="text" name="phone"><br><br>
      <input type="submit" name="submit" value="Submit">
    </form>
  </body>
</html>
