<?php

class Comment
{
  private $commentId;
  private $commentContent;
  private $userId;
  private $videoId;

  public function setCommentId($id)
  {
    $this->commentId = $id;
  }
  public function setCommentContent($content)
  {
    $this->commentContent = $content;
  }
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  public function setVideoId($videoId)
  {
    $this->videoId = $videoId;
  }

  public function getCommentId()
  {
    return $this->commentId;
  }
  public function getCommentContent()
  {
    return $this->commentContent;
  }
  public function getUserId()
  {
    return $this->userId;
  }
  public function getVideoId()
  {
    return $this->videoId;
  }
}
