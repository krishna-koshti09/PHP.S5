<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Odd Number Checker</title>
</head>

<body>
    <h1>Check if a Number is Odd</h1>
    <form method="POST">
        Enter number: <input type="text" name="number" required>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $number = $_POST['number'];

        if ($number % 2 == 0) {
            echo "$number is Even";
        } else {
            echo "$number is Odd";
        }
    }
    ?>
</body>

</html>
