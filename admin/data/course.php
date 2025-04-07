<?php
function removeCourse($conn, $id)
{
    $sql = "DELETE FROM subjects WHERE subject_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
}