<?php
class Roles
{
  private $rolesId;
  private $rolesName;

  public function setRolesId($id)
  {
    $this->rolesId = $id;
  }
  public function setRolesName($name)
  {
    $this->rolesName = $name;
  }
  public function getRolesId()
  {
    return $this->rolesId;
  }
  public function getRolesName($name)
  {
    return $this->rolesName;
  }
}
