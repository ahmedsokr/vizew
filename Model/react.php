<?php 

class React 
{
  private $reactId;
  private $react;

  public function setReactId ($id) 
  {
    $this->reactId = $id;
  }
  public function setReact ($react) 
  {
    $this->react = $react;
  }

  public function getReactId () 
  {
    return $this->reactId;
  }
  public function getReact () 
  {
    return $this->react;
  }
}
