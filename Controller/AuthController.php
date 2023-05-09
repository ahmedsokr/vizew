<?php

require_once '../Model/users.php';
require_once 'DBController.php';
class AuthController
{
    private $userEmail;
    private $userPassword;
    protected $db;

    public function login(User $user)
    {

        $this->db = new DBController;
        if ($this->db->openConnection()) {
            $this->userEmail = $user->getUserEmail();
            $this->userPassword = $user->getUserPassword();
            $query = "select * from users where Email='$this->userEmail' and Password ='$this->userPassword'";
            $result = $this->db->select($query);
            if ($result === false) {
                echo "Error in Query";
                return false;
            } else {
                if (count($result) == 0) {
                    session_start();
                    $_SESSION["errMsg"] = "You have entered wrong email or password";
                    return false;
                } else {
                    session_start();
                    $_SESSION["userId"] = $result[0]["Id"];
                    $_SESSION["userName"] = $result[0]["UserName"];
                    $_SESSION["userRole"] = $result[0]["roled"];
                    return true;
                }
            }
        } else {
            echo "Error in Database connection";
            return false;
        }
    }
}
