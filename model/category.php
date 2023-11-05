<?php

function getCategoryById($id)
{
    try {
        $sql = "SELECT * FROM categories 
                WHERE id = $id;";
        return pdo_query_one($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function getCategoryByName($name)
{
    try {
        $sql = "SELECT * FROM categories 
                WHERE name = '$name';";
        return pdo_query_one($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function getAllCategories()
{
    try {
        $sql = "SELECT * FROM categories;";
        return pdo_query($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function insertCategory($name, $image)
{
    if (isset($_POST['submit'])) {
        try {
            $sql = "INSERT INTO categories (name, image) VALUES ( name = '$name', image = '$image')";
            $file = $_FILES;
            $image = $file;
            move_uploaded_file($file['tmp_name'], '../assets/img/categories' . $image);
            pdo_execute($sql);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}

function editCategory($id, $name)
{
    try {
        $sql = "UPDATE categories 
        SET name = '$name' 
        WHERE id = '$id';";
        pdo_execute($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function deleteCategory($id)
{
    try {
        $sql = "DELETE FROM categories 
                WHERE id = '$id';";
        pdo_execute($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}