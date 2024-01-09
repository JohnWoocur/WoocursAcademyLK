<?php
if (isset($_SESSION["message"])) {
    echo "<h3 class='text-success'>" . $_SESSION["message"] . "</h3>";
    unset($_SESSION["message"]);
}
if (isset($_SESSION["error"])) {
    echo "<h3 class='text-danger'>" . $_SESSION["error"] . "</h3>";
    unset($_SESSION["error"]);
}
?>