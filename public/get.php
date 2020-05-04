<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of PHP GET method</title>
</head>
<body>
    <ul>
        <li><a href="get.php">Get</a></li>
        <li><a href="post.php">Post</a></li>
        <li><a href="req.php">Request</a></li>
    </ul>
<?php
if(isset($_GET["name"])){
    echo "<p>Hi, " . $_GET["name"] . "</p>";
    echo "<p>URI, который был передан для того, чтобы получить доступ к этой странице: ".$_SERVER['REQUEST_URI']."</p>";
}
?>
<form method="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="inputName">Name:</label>
    <input type="text" name="name" id="inputName">
    <input type="submit" value="Submit">
</form>
</body>
