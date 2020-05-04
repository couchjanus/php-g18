<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contact Page</h1>
    <ul>
        
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
    
    <?php
        if ($_POST) {
            if (!$_POST['name'] or !$_POST['email'] or !$_POST['message']) {
                $error = "<h2>Please complete all the fields</h2>";
            }

            // checking $email
            // try {
            //     // checking if
            //     if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
            //       // throwing an exception in case email is not valid
            //       throw new Exception($email);
            //     }
            // } catch (Exception $e) {
            //     // displaying error message
            //     echo $e->getMessage();
            // }
             
            if ($error) {
                echo $error;
            } else {
                echo "<p>Hi, " . $_POST["name"] . "</p>";
                echo "<p>Your email, " . $_POST["email"] . "</p>";
                echo "<p>Your message, " . $_POST["message"] . "</p>";

                // Пример использования filter_input()
                // $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
                // $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);
                // $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
                
                // echo "<p>Hi, " . $name . "</p>";
                // echo "<p>Your email, " . $email . "</p>";
                // echo "<p>Your message, " . $message . "</p>";

                // foreach ($_POST as $value) {
                //     echo $value;
                // }
                
                // foreach ($_POST as $key => $value){
                //     echo $key;
                //     echo $value;
                // }
                $result = [];
                // foreach ($_POST as $key => $value) {
                //     if ($key == 'email') {
                //         array_push($result, filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
                //     } else {
                //         array_push($result, filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS));
                //     }
                // }
                // foreach ($result as $value) {
                //     echo "<h3>".$value."</h3>";
                // }

                // while (count($result)>0) {
                //     echo "<h3>".array_pop($result)."</h3>";
                // }
            }
        }
    ?>
    
    <form method="post" action="">
        <p>
        <label for="inputName">Name:</label>
        <input type="text" name="name" id="inputName">
        </p>
        <p>
        <label for="inputEmail">Email:</label>
        <input type="email" name="email" id="inputEmail">
        </p>
        <p>
        <label for="inputMsg">Messaage:</label>
        <textarea name="message" id="inputMsg"></textarea>
        </p>
        <input type="submit" value="Submit">
    </form>
    
    </body>
</html>
