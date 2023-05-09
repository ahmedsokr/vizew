<?php

class Subscription
{
  private $subscriptionId;
  private $userId;
  private $channelId;

  public function setSubscriptionId($id)
  {
    $this->subscriptionId = $id;
  }
  public function setUserId($id)
  {
    $this->userId = $id;
  }
  public function setChannelId($id)
  {
    $this->channelId = $id;
  }


  public function getSubscriptionId()
  {
    return $this->subscriptionId;
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
