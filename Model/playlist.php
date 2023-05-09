<?php

class Playlist
{
  private $playlistId;
  private $playlistName;
  private $userId;
  private $channelId;

  public function setPlaylistId($id)
  {
    # code...
    $this->playlistId = $id;
  }
  public function setPlaylistName($name)
  {
    $this->playlistName = $name;
  }
  public function setUserId($id)
  {
    $this->userId = $id;
  }
  public function setChannelId($id)
  {
    $this->channelId = $id;
  }

  public function getPlaylistId()
  {
    # code...
    return $this->playlistId;
  }
  public function getPlaylistName()
  {
    return $this->playlistName;
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
