<?php
function getFAQs()
{
    try {
        $sql = "SELECT * FROM FAQs";
        return pdo_query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
