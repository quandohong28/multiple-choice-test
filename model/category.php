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



function insertCategory($name, $image)
{
    try {
        $sql = "INSERT INTO categories (name, image) VALUES ( '$name', '$image')";
        pdo_execute($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function editCategory($id, $name, $image)
{
    try {
        $sql = "UPDATE categories 
                SET name = '$name', 
                    image = '$image' 
                WHERE id = $id;";
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

function filterCategory($filterByCategory, $filterByLetter, $search, $page)
{
    try {
        $sql = "SELECT * FROM categories ";

        if (!is_null($search) && $search != "") {
            $sql .= " WHERE name LIKE '%$search%'";
        }

        if ($filterByCategory != "id") {
            if ($filterByCategory == "category_name") {
                $sql .= "ORDER BY name";

                $sql .= ($filterByLetter != "a-z") ? " DESC" : " ASC";
            } 
        } else {
            $sql .= "ORDER BY id";
            $sql .= ($filterByLetter != "a-z") ? " DESC" : " ASC";
        }

        $sql .= " LIMIT $page, 10;";    
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
function getCategories($page)
{
    try {
        $sql = "SELECT * FROM categories LIMIT $page, 10;";
        return pdo_query($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}
