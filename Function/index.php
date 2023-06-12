<?php

$connect = mysqli_connect("localhost", "root", "", "it-store");

function query($query)
{
    global $connect;
    $result = mysqli_query($connect, $query);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function register($data)
{
    global $connect;



    $npm = strtolower(stripslashes($data["npm"]));
    $username = stripslashes($data["username"]);
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($connect, $data["password"]);
    $confirm = mysqli_real_escape_string($connect, $data["confirm"]);
    $npm_sama = mysqli_query($connect, "SELECT npm FROM users WHERE npm = '$npm'");


    if (mysqli_fetch_assoc($npm_sama)) {
        echo "<script>
                    alert('Npm yang dipilih sudah terdaftar')
                </script>";
        return false;
    }

    

    if ($confirm !== $password) {
        echo "<script>
                    alert('Password tidak sama')
                </script>";
        return false;
    }

    $hash = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($connect, "INSERT INTO users VALUES('', '$username','$npm','$email', '$hash', 'penjual')");

    return mysqli_affected_rows($connect);
}
