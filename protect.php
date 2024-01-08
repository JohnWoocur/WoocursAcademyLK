<?php
session_start();

// $_SESSION["id"] = $row["id"];
// $_SESSION["name"] = $row["name"];
// $_SESSION["type"] = "staff";

// This function to validate the user logged in and type of user
// If this fails redirect user to login page which provided in arguments
function notAuthenticated($type, $redirect)
{
    if (!isset($_SESSION["user_id"]) || !isset($_SESSION["usertype"]) || $_SESSION["usertype"] != $type) {
        header("Location:$redirect");
    }
}
function hasAuthenticated($type, $redirect)
{
    if (isset($_SESSION["user_id"]) && isset($_SESSION["usertype"]) && $_SESSION["usertype"] == $type) {
        header("Location:$redirect");
    }
}
?>