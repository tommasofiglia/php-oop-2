<?php
  /** User blog
  * @author Tommaso Figlia
  * @copyright 2021 Tommaso Figlia s.p.a
  */

  include 'user_personal_info.php';
  
  class User extends UserPersonalInfo{

    public $nickname;
    public $email;
    public $registeredAt;
    public $lastSeenOnline;
    public $lastPost;
    public $profilePicture;

    function __construct(string $name, string $lastName, int $age, string $nickname, string $email, string $registeredAt, string $lastSeenOnline, string $lastPost, string $profilePicture)
    {
     parent:: __construct($name, $lastName, $age);
     $this->nickname = $nickname;
     $this->email = $email;
     $this->registeredAt = $registeredAt;
     $this->lastSeenOnline = $lastSeenOnline;
     $this->lastPost = $lastPost;
     $this->profilePicture = $profilePicture;
    }
  }
?>
