<?php

class User
{
  private $userId;
  private $userName;
  private $userEmail;
  private $userGender;
  private $userPassword;
  private $userNumber;
  private $userImage;
  private $userRole;

  public function setUserId($id)
  {
    $this->userId = $id;
  }
  public function setUserName($name)
  {
    $this->userName = $name;
  }
  public function setUserEmail($email)
  {
    $this->userEmail = $email;
  }
  public function setUserGender($gender)
  {
    $this->userGender = $gender;
  }
  public function setPassword($password)
  {
    $this->userPassword = $password;
  }
  public function setUserNumber($number)
  {
    $this->userNumber = $number;
  }
  public function setImage($image)
  {
    $this->userImage = $image;
  }
  public function setUserRole($role)
  {
    $this->userRole = $role;
  }

  public function getUserId()
  {
    return $this->userId;
  }
  public function getUserName()
  {
    return $this->userName;
  }
  public function getUserEmail()
  {
    return $this->userEmail;
  }
  public function getUserGender()
  {
    return $this->userGender;
  }
  public function getUserPassword()
  {
    return $this->userPassword;
  }
  public function getUserNumber()
  {
    return $this->userNumber;
  }
  public function getUserImage()
  {
    return $this->userImage;
  }
  public function getUserRole()
  {
    return $this->userRole;
  }
}
