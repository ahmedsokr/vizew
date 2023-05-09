<?php
require_once '../Model/view.php';
function increment_likes($video_id)
{
  // Connect to the database
  $db = new mysqli('localhost', 'root', '', 'vizew');

  // Check for errors
  if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
    return;
  }

  // Prepare the SQL statement
  $stmt = $db->prepare("UPDATE videos SET likes = likes + 1 WHERE id = ?");
  $stmt->bind_param("i", $video_id);

  // Execute the statement
  $stmt->execute();

  // Check for errors
  if ($stmt->errno) {
    echo "Failed to increment video likes: " . $stmt->error;
    return;
  }

  // Close the statement and database connection
  $stmt->close();
  $db->close();
}

function increment_dislikes($video_id)
{
  // Connect to the database
  $db = new mysqli('localhost', 'root', '', 'vizew');

  // Check for errors
  if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
    return;
  }

  // Prepare the SQL statement
  $stmt = $db->prepare("UPDATE videos SET dislikes = dislikes + 1 WHERE id = ?");
  $stmt->bind_param("i", $video_id);

  // Execute the statement
  $stmt->execute();

  // Check for errors
  if ($stmt->errno) {
    echo "Failed to increment video dislikes: " . $stmt->error;
    return;
  }

  // Close the statement and database connection
  $stmt->close();
  $db->close();
}
