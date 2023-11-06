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
