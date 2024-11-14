<?php
session_start();
$_SESSION["userId"] = "9";
$conn = mysqli_connect("localhost", "root", "", "talha") or die("Connection Error: " . mysqli_error($conn));

if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT *from user WHERE userId='". $_SESSION["userId"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["currentPassword"] == $row["password"]) {
        mysqli_query($conn, "UPDATE user set password='" . $_POST["newPassword"] . "' WHERE userId='" . $_SESSION["userId"] . "'");
        echo "password is changed sucessfully";
    } else
        echo "Current Password is not correct";
}
?>