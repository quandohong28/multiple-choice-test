<?php
function hashPassword($password)
{
    try {
        return password_hash($password, PASSWORD_DEFAULT);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
;

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
        $sql = "SELECT a.id, a.username, a.fullname, a.avatar, a.email, a.address, a.tel, a.introduce, r.role 
        FROM accounts a INNER JOIN roles r ON a.role_id = r.id ORDER BY a.id ASC;";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getAccounts($page)
{
    try {
        $sql = "SELECT a.id, a.username, a.fullname, a.avatar, a.email, a.address, a.tel, a.introduce, r.role 
        FROM accounts a INNER JOIN roles r ON a.role_id = r.id ORDER BY a.id ASC LIMIT $page,10 ;";
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

function changePassword($id, $old_password, $new_password)
{
    try {
        $user = getAccountById($id);
        if ($user) {
            if (verifyPassword($old_password, $user["password"])) {
                $hashedPassword = hashPassword($new_password);
                $sql = "UPDATE accounts
                        SET password = '$hashedPassword'
                        WHERE id = $id";
                pdo_execute($sql);
                return true;
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

function deleteAccount($id)
{
    try {
        $sql = "DELETE FROM accounts WHERE id = $id";
        pdo_execute($sql);
        header('location: ?act=tables&data=accounts');
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
        avatar = '$avatar',
        email = '$email',
        address = '$address',
        tel = '$tel'
        WHERE id = $id";

        pdo_execute($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function insertAccount($username, $password, $fullname, $avatar, $email, $address, $tel, $role_id)
{
    if (isset($_POST['btn_add'])) {
        try {
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

function editProfile($id, $email, $introduce, $avatar, $fullname, $tel, $address)
{
    try {
        $sql = "UPDATE accounts
        SET email = '$email',
        introduce = '$introduce',
        avatar = '$avatar',
        fullname = '$fullname',
        tel = '$tel',
        address = '$address'
        WHERE id = $id";
        pdo_execute($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function filterAccount($filterByCategory, $filterByLetter, $search, $page)
{
    try {
        $sql = "SELECT a.id, a.username, a.fullname, a.avatar, a.email, a.address, a.tel, a.introduce, r.role 
        FROM accounts a 
        INNER JOIN roles r ON a.role_id = r.id ";

        if (!is_null($search) && $search != "") {
            $sql .= " WHERE a.username LIKE '%$search%' OR a.fullname LIKE '%$search%' OR a.id LIKE '%$search%' OR a.email LIKE '%$search%'";
        }

        if ($filterByCategory != "id") {
            if ($filterByCategory == "username") {
                $sql .= "ORDER BY a.username";

                $sql .= ($filterByLetter != "a-z") ? " DESC" : " ASC";
            }
            if ($filterByCategory == "fullname") {
                $sql .= "ORDER BY a.fullname";

                $sql .= ($filterByLetter != "a-z") ? " DESC" : " ASC";
            }
            if ($filterByCategory == "role") {
                $sql .= "ORDER BY r.role";

                $sql .= ($filterByLetter != "a-z") ? " DESC" : " ASC";
            }
        } else {
            $sql .= "ORDER BY a.id";
            $sql .= ($filterByLetter != "a-z") ? " DESC" : " ASC";
        }

        $sql .= " LIMIT $page,10 ;";


        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }

}
function getNumberUser()
{
    try {
        $sql = "SELECT COUNT(*) AS number_user 
                FROM accounts 
                WHERE role_id = 1;";
        return pdo_query_one($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}
