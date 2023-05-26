<?php

$connect = mysqli_connect("localhost", "root", "", "it-stores");

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

    $username = strtolower(stripslashes($data["username"]));
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($connect, $data["password"]);
    $confirm = mysqli_real_escape_string($connect, $data["confirm"]);

    $result = mysqli_query($connect, "SELECT username FROM users WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                    alert('Username yang dipilih sudah terdaftar')
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

    mysqli_query($connect, "INSERT INTO users VALUES('', '$username','$email', '$hash', 'penjual')");

    return mysqli_affected_rows($connect);
}
