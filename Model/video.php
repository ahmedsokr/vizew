<?php

class Video
{
  private $videoId;
  private $videoTitle;
  private $userId;
  private $videoDescription;
  private $channelId;

  public function setVideoId($id)
  {
    $this->videoId = $id;
  }
  public function setVideoTitle($title)
  {
    $this->videoTitle = $title;
  }
  public function setVideoDescription($description)
  {
    $this->videoDescription = $description;
  }
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }

  public function getVideoId()
  {
    return $this->videoId;
  }
  public function getVideoTitle()
  {
    return $this->videoTitle;
  }
  public function getVideoDescription()
  {
    return $this->videoDescription;
  }
  public function getUserId()
  {
    return $this->userId;
  }
  public function getChannelId()
  {
    return $this->channelId;
  }
}
