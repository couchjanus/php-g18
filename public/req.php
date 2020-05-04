<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of PHP $_REQUEST variable</title>
</head>
<body>
    <ul>
        <li><a href="get.php">Get</a></li>
        <li><a href="post.php">Post</a></li>
        <li><a href="req.php">Request</a></li>
    </ul>
<?php
if(isset($_REQUEST["name"])){
    echo "<p>Hi, " . $_REQUEST["name"] . "</p>";
}
?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="inputName">Name:</label>
    <input type="text" name="name" id="inputName">
    <input type="submit" value="Submit">
</form>
</body>
