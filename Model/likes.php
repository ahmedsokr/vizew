<?php

class Likes
{
  private $likesId;
  private $userId;
  private $videoId;
  private $react;

  public function setLikesId($id)
  {
    $this->likesId = $id;
  }
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  public function setVideoId($id)
  {
    $this->videoId = $id;
  }
  public function setReact($react)
  {
    $this->react = $react;
  }

  public function getLikesId()
  {
    return $this->likesId;
  }
  public function getUserId()
  {
    return $this->userId;
  }
  public function getVideoId()
  {
    return $this->videoId;
  }
  public function getReact()
  {
    return $this->react;
  }
}
