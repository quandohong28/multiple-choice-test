<?php
function hashPassword($password)
{
    return password_hash($password, PASSWORD_DEFAULT);
};

function verifyPassword($password, $hashedPassword)
{
    return password_verify($password, $hashedPassword);
}

function getUserById($id)
{
    $sql = "SELECT * FROM users WHERE id = $id";
    return pdo_query_one($sql);
}

function getUserByUsername($username)
{
    $sql = "SELECT * FROM users WHERE username = '$username'";
    return pdo_query_one($sql);
}

function login($username, $password)
{
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $user = pdo_query_one($sql);
    if ($user) {
        if (verifyPassword($password, $user['password'])) {
            return $user;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function signup($username, $password)
{
    $hashedPassword = hashPassword($password);
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";
    pdo_execute($sql);
}
