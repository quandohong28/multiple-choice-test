<?php

function insertAutoNotification($receiver, $content, $action)
{
    try {
        $sql = "INSERT INTO notifications(receiver, content, action) 
                VALUES ('$receiver', '$content', '$action');";
        pdo_execute($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function getNotificationsByUserId($user_id)
{
    try {
        $sql = "SELECT notifications.*,
                accounts.fullname
                FROM notifications
                INNER JOIN accounts ON notifications.sender = accounts.id
                WHERE receiver = $user_id;";
        return pdo_query($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function getNumberNotification($user_id)
{
    try {
        $sql = "SELECT COUNT(*) AS number_notification 
                FROM notifications 
                WHERE receiver = $user_id AND status = 0;";
        return pdo_query_one($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

?>