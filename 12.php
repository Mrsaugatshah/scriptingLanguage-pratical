<!DOCTYPE html>
<html>

<body>

    <h2>Name Sorting</h2>

    <form method="post">
        Enter Names (comma separated):
        <input type="text" name="names" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    function sortNames($names)
    {
        sort($names);
        return $names;
    }

    if (isset($_POST['names'])) {

        // Convert string into array
        $names = explode(",", $_POST['names']);

        // Remove extra spaces
        $names = array_map('trim', $names);

        // Sort names
        $names = sortNames($names);

        echo "<h3>Total Names: " . count($names) . "</h3>";

        echo "Sorted Names:<br>";
        foreach ($names as $name) {
            echo $name . "<br>";
        }
    }
    ?>

</body>

</html>