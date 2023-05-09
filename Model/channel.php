<?php

class Channel
{
  private $channelId;
  private $channelName;
  private $userId;

  public function setchannelId($id)
  {
    $this->channelId = $id;
  }
  public function setchannelName($content)
  {
    $this->channelName = $content;
  }
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }


  public function getchannelId()
  {
    return $this->channelId;
  }
  public function getchannelName()
  {
    return $this->channelName;
  }
  public function getUserId()
  {
    return $this->userId;
  }
}