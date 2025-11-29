<?php
if (isset($_POST['username'])) {
    $name = htmlspecialchars($_POST['username']); // sanitize input
    echo "<h2>Hello, $name!</h2>";
} else {
    echo "<h2>Please enter your name in the form.</h2>";
}
?>
