<?php
function getQuestionLevels()
{
    try {
        $sql = "SELECT * FROM question_levels;";
        return pdo_query($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function getRandQuestion($category_id)
{
    try {
        $sql = "SELECT id FROM questions
        WHERE
        category_id = $category_id ORDER BY RAND() LIMIT 1;";
        return pdo_query_one($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}
