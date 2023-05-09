<?php

class View
{
  private $viewId;
  private $userId;
  private $videoId;

  public function setViewId($id)
  {
    $this->viewId = $id;
  }
  public function setUserId($id)
  {
    $this->userId = $id;
  }
  public function setVideoId($id)
  {
    $this->videoId = $id;
  }

  public function getViewId()
  {
    return $this->viewId;
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
