<?php
function hashPassword($password)
{
    return password_hash($password, PASSWORD_DEFAULT);
};

function verifyPassword($password, $hashedPassword)
{
    return password_verify($password, $hashedPassword);
}

function getAllaccounts()
{
    try {
        $sql = "SELECT * FROM accounts";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
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

function deleteAccount($id)
{
    try {
        $sql = "DELETE FROM accounts WHERE id = $id";
        pdo_execute($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function editAccount($id, $fullname, $avatar, $email, $address, $tel)
{
    try {
        $sql = "UPDATE
        accounts
        SET fullname = '$fullname',
        SET avatar = '$avatar',
        SET email = '$email',
        SET address = '$address',
        SET tel = '$tel',
        WHERE id = $id";
        pdo_execute($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}