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

<!-- basic form, sends info to confirm.php -->
<form action="confirm.php" method="POST">

    <label>Name:</label>
    <input type="text" name="name" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Message:</label>
    <textarea name="message" required></textarea>

    <input type="submit" value="Submit">

</form>

</body>
</html>