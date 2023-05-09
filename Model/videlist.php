<?php

class VideoList
{
  private $videoId;
  private $playlistId;

  public function setVideoId($id)
  {
    $this->videoId = $id;
  }
  public function setPlaylistId($id)
  {
    $this->playlistId = $id;
  }

  public function getVideoId()
  {
    return $this->videoId;
  }
  public function getPlaylistId()
  {
    return $this->playlistId;
  }
}
