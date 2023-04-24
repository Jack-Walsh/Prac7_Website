<!DOCTYPE html>
<html>
<head>
    <title>Practical 7 Website</title>
    <link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen">

</head>
<body>
    <?php include 'header.php'?>


    <h1>Contact Us</h1>
    <form method="post" action="contact.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <br>
        <input type="submit" value="Submit">
    </form>
    <?php include 'footer.php'; ?>

</body>
</html>
