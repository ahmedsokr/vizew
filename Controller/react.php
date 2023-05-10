<?php
require_once '../../Model/view.php';
require_once '../../Model/likes.php';
require_once '../../Model/video.php';
require_once '../Controller/DBController.php';

// Open the database connection
$db = new DBController();
$db->openConnection();

$likess=$likes->getReact();
$video1=$video->getVideoId();

function increment_likes($db, $video_id) {
  // Prepare the SQL statement
  $stmt = $db->prepare("UPDATE videos SET react = react + 1 WHERE id = ?");
  if (!$stmt) {
    throw new Exception("Failed to prepare statement: " . $db->error);
  }
  
  // Bind the parameter
  $stmt->bind_param("i", $video_id);
  
  // Execute the statement
  if (!$stmt->execute()) {
    throw new Exception("Failed to increment video likes: " . $stmt->error);
  }
  
  // Close the statement
  $stmt->close();
}

function increment_dislikes($db, $video_id) {
  // Prepare the SQL statement
  $stmt = $db->prepare("UPDATE videos SET dislikes = dislikes + 1 WHERE id = ?");
  if (!$stmt) {
    throw new Exception("Failed to prepare statement: " . $db->error);
  }
  
  // Bind the parameter
  $stmt->bind_param("i", $video_id);
  
  // Execute the statement
  if (!$stmt->execute()) {
    throw new Exception("Failed to increment video dislikes: " . $stmt->error);
  }
  
  // Close the statement
  $stmt->close();
}

// Close the database connection
$db->closeConnection();
?>
```