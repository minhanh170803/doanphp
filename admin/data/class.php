<?php

function getAllClasses($conn)
{
  $sql = "SELECT * FROM class";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  if ($stmt->rowCount() > 0) {
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  return [];
}

function getClassById($id, $conn)
{
  $sql = "SELECT * FROM class WHERE class_id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->execute([$id]);
  if ($stmt->rowCount() == 1) {
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
  return null;
}


// DELETE
function removeClass($id, $conn)
{
  $sql  = "DELETE FROM class
           WHERE class_id=?";
  $stmt = $conn->prepare($sql);
  $re   = $stmt->execute([$id]);
  if ($re) {
    return 1;
  } else {
    return 0;
  }
}