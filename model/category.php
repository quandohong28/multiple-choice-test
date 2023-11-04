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

function getQuantityOfQuestions($id)
{
    try {
        $sql = "SELECT COUNT(*) AS value FROM questions 
                WHERE category_id = $id;";
        return pdo_query_one($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function insertCategory($id, $name)
{
    try {
        $sql = "INSERT INTO categories (id, name) 
                VALUES ( $id','$name');";
        pdo_execute($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
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
                WHERE id = $id;";
        pdo_execute($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}
