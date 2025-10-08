<!-- 2. Write a PHP program to find out maximum and minimum number -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Find Max and Min</title>
</head>
<body>
    <h2>Find Maximum and Minimum Number</h2>

    <form method="get" action="">
        <label>Enter Number 1: </label>
        <input type="number" name="no1" required><br><br>

        <label>Enter Number 2: </label>
        <input type="number" name="no2" required><br><br>

        <button type="submit">Submit</button>
    </form>

    <br>

    <?php
    if (isset($_GET['no1']) && isset($_GET['no2'])) {
        $no1 = $_GET['no1'];
        $no2 = $_GET['no2'];

        // Validate numeric input (optional because input type="number" restricts it)
        if (!is_numeric($no1) || !is_numeric($no2)) {
            echo "<p style='color:red;'>Please enter valid numeric values.</p>";
        } else {
            if ($no1 > $no2) {
                echo "<p>Maximum number is: <strong>$no1</strong></p>";
                echo "<p>Minimum number is: <strong>$no2</strong></p>";
            } elseif ($no2 > $no1) {
                echo "<p>Maximum number is: <strong>$no2</strong></p>";
                echo "<p>Minimum number is: <strong>$no1</strong></p>";
            } else {
                echo "<p>Both numbers are equal: <strong>$no1</strong></p>";
            }
        }
    }
    ?>

</body>
</html>
