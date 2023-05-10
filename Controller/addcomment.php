<?php

require_once '../Controller/DBController.php';

$db = new DBController;
if($db-> openConnection())
{
    return true;
}
else
{
    echo "error";
    return false;
}

function addComment($video_id, $user_id, $comment) {
    // Connect to database
    $conn = new mysqli("localhost", "root", "", "vizew");
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
  
    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO comments (video_id, user_id, comment) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $video_id, $user_id, $comment);
  
    // Execute SQL statement
    if ($stmt->execute() === TRUE) {
      // Comment added successfully
      echo "Comment added successfully.";
    } else {
      // Error adding comment
      echo "Error adding comment: " . $conn->error;
    }
  
    // Close database connection
    $stmt->close();
    $conn->close();
  }
