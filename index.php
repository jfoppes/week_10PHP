<!DOCTYPE html>
<html>
    <head>
        <title>Basic PHP Page</title>
    </head>
    <body>
        <h1><?php echo "Welcome to My Simple PHP Page!<br><br>"; ?></h1>
        <p><?php
        define("Welcome", "Welcome To my PHP Site");
        $name = "Jake";
        $age = "28";
        echo "Greettings " . $name . ", Congrats on being " . $age . "<br>"; // prin text + variables
        if (strlen($name)>15) {
            echo "<br><br> Your name is too long ";
        }
        else {
            echo "You Name iS Just Right";
        }

        if ($age >20) {
            echo "<br><br>You are over 21 and can enter the site";
            echo "<br><br>I'm Gonna give you to the count of of ten, to get your ugly, yella, no good keister off my property.";
            for ($x = 0; $x < 10; $x++) {
                echo "<br>". $x;
            }}
        else {
            echo "<br>Sorry Your Not Old Enough";
        }
        ?></p>

        <form method="post"> <!-- form to collect info  !-->
            <h2>Update Info</h2>
            <input type="text" name="uName" placeholder="Your Name"> // get val from form 
            <input type="number" name="uAge" placeholder="Your Age">
            <input type="submit" value="Submit">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {// CHekc for button push 
            $newName =  $_POST["uName"]; //get val from form 
            $newAge = $_POST["uAge"]; // get val from form 
            echo "<h3>Updated Info:</h3>"; // print data 
            echo "<p>Name: " . htmlspecialchars($newName) . "</p>";
            echo "<p>Age: " . (int)$newAge . "</p>";}
            if ($newAge <21) {
                echo "<br><br> Iss time for you to go. You are not old enough to drink ";
        }
        else if ($newAge > 21) {
            echo "<br><br> Welcome! Might i Recomend the Tequaula  ";
        }

        ?>


    </body>
</html>