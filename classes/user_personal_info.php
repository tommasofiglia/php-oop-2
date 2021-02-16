<?php
class UserPersonalInfo{
  public $name;
  public $lastName;
  public $age;

  function __construct(string $name, string $lastName, int $age)
  {
   $this->name = $name;
   $this->lastName = $lastName;
   $this->age = $age;
  }
}
?>
