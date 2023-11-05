<?php
function hashPassword($password)
{
    try {
        return password_hash($password, PASSWORD_DEFAULT);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
};

function verifyPassword($password, $hashedPassword)
{
    try {
        return password_verify($password, $hashedPassword);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getAllAccounts()
{
    try {
        $sql = "SELECT a.id, a.username, a.fullname, a.avatar, a.email, a.address, a.tel, r.role 
        FROM accounts a INNER JOIN roles r ON a.role_id = r.id ORDER BY a.id DESC;";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getAccountById($id)
{
    try {
        $sql = "SELECT * FROM
        accounts
        WHERE
        id = $id;";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getAccountByUsername($username)
{
    try {
        $sql = "SELECT * FROM
        accounts
        WHERE
        username = '$username';";
        return pdo_query_one($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function login($username, $password)
{
    try {
        $user = getAccountByUsername($username);
        if ($user) {
            if (verifyPassword($password, $user['password'])) {
                return $user;
            } else {
                return false;
            }
        } else {
            return false;
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function signup($email, $username, $password)
{
    try {
        $hashedPassword = hashPassword($password);
        $sql = "INSERT INTO
        accounts (email, username, password)
        VALUES
        ('$email', '$username', '$hashedPassword');";
        pdo_execute($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
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

function insertAccount() {
    if (isset($_POST['btn_add'])) {
        try {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $fullname = $_POST['fullname'];
            $address = $_POST['address'];
            $email = $_POST['emailAddress'];
            $tel = $_POST['tel'];
            $role_id = $_POST['role_id'];
        
            if ($_FILES['avatar']['name'] != ""){
                $targetDir = '../assets/img/accounts/';
                $avatar = $_FILES['avatar']['name']; 
                move_uploaded_file($_FILES['avatar']['tmp_name'], $targetDir . $avatar);
            }else {
                $avatar = "profile.png";
            }
    
            $sql2 = "INSERT INTO accounts (username, password, fullname, avatar, email, address, tel, role_id)
            VALUES ('$username', '$password', '$fullname', '$avatar', '$email', '$address', '$tel', $role_id);";
            pdo_execute($sql2);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

function getRoles()
{
    try {
        $sql1 = "SELECT * FROM roles";
        return pdo_query($sql1);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}