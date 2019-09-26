<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Bit Academy</title>
</head>

<body>
    <h1>Skateboard <small>(#1)</small></h1>
    <h1>Basketbal <small>(#2)</small></h1>
    <h1>Skeelers <small>(#3)</small></h1>

    <!-- maak hier de opdracht -->
    <form action="" method="post">
        <input type="text" id="nummer" name="nummer" placeholder="Vul het nummer in">
        <input type="submit" id="submit" name="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $_SESSION['value'] = $_POST['nummer'];
    }
    $gekozennum = $_SESSION['value'];
    echo "<h2>Je hebt gekozen: $gekozennum</h2>";
    ?>

</body>

</html>