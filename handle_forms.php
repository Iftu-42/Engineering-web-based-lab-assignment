<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formType = $_POST['form_type'];

    if ($formType == "login") {
        $user = $_POST['username'];
        $pass = $_POST['password'];

        // Static check for demonstration
        if ($user == "admin" && $pass == "1234") {
            echo "<h1>Login Success! Welcome $user.</h1>";
        } else {
            echo "<h1>Login Failed! Invalid credentials.</h1>";
        }
    } 
    
    elseif ($formType == "register") {
        $fname = $_POST['firstname'];
        $hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : "None";

        echo "<h1>Account Created for $fname</h1>";
        echo "Selected Hobbies: " . $hobbies;
    }
    
    echo "<br><br><a href='index.php'>Back to Form</a>";
}
?>
