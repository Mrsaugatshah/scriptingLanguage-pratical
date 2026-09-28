<!DOCTYPE html>
<html>

<body>

    <h2>Leap Year Checker</h2>

    <form method="post">
        Enter Year:
        <input type="number" name="year" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if (isset($_POST['year'])) {
        $year = $_POST['year'];

        if ($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0))
            echo "It is a Leap Year";
        else
            echo "It is not a Leap Year";
    }
    ?>

</body>

</html>