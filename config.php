<?php

$conn = mysqli_connect("localhost", "root", "", "tryout");

if (!$conn) {
    echo "Connection Failed";
}