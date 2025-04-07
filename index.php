<!DOCTYPE html>
<html>
    <head>
        <title>Basic PHP Page</title>
    </head>
    <body>
        <h1><?php echo "Welcome to My Simple PHP Page!"; ?></h1>
        <p><?php
        define("Welcome","Welcome To my PHP Site");
        $name = "Jake";
        $age = "28";
        echo "Grettings " . $name .", Congrats on being " . $age;
        if ($age >20) {
            echo "<br>You are over 21 and can enter the site";
            echo "<br>I'm Gonna give you to the count of of ten, to get your ugly, yella, no good keister off my property.";
            for ($x = 0; $x < 10; $x++) {
                echo $x;
            }}
        else {
            echo "<br>Sorry Your Not Old Enough";
        }
        ?></p>

        <form method="post">
            <h2>Update Info</h2>
            <input type="text" name="uName" placeholder="Your Name">
            <input type="number" name="uAge" placeholder="Your Age">
            <input type="submit" value="Submit">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $newName =  $_POST["uName"] ??"";
            $newAge = $_POST["uAge"] ?? 0;
            echo "<h3>Updated Info:</h3>";
            echo "<p>Name: " . htmlspecialchars($newName) . "</p>";
            echo "<p>Age: " . (int)$newAge . "</p>";
        }

        ?>


    </body>
</html>