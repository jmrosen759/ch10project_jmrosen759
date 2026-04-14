<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Form Project</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>

<h1>Building a Dynamic Form with PHP</h1>

<p>Jacob Rosen</p>
<p><?php echo date("F j, Y"); ?></p>

<?php
// just setting up variables for later
$msg = "";
$type = "";

// check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // grabbing data from form and trimming it
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // cleaning up the email a bit
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // basic check to see if anything is empty
    if ($name == "" || $email == "" || $message == "") {
        $msg = "something is missing, fill everything out";
        $type = "error";
    } else {
        $msg = "form submitted, looks good";
        $type = "success";
    }

    // show message box
    echo "<div class='$type'>$msg</div>";

    // print what user entered
    echo "<p><b>Name:</b> $name</p>";
    echo "<p><b>Email:</b> $email</p>";
    echo "<p><b>Message:</b> $message</p>";
}
?>

</body>
</html>