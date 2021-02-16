<?php

/** User blog
 * @author Tommaso Figlia
 * @copyright 2021 Tommaso Figlia s.p.a
 */
class User{
  public $name;
  public $lastName;
  public $age;
  public $nickname;
  public $email;
  public $registeredAt;
  public $lastSeenOnline;
  public $lastPost;
  public $profilePicture;


  function __construct(string $name, string $lastName, int $age, string $nickname, string $email, string $registeredAt, string $lastSeenOnline, string $lastPost, string $profilePicture)
  {
   $this->name = $name;
   $this->lastName = $lastName;
   $this->age = $age;
   $this->nickname = $nickname;
   $this->email = $email;
   $this->registeredAt = $registeredAt;
   $this->lastSeenOnline = $lastSeenOnline;
   $this->lastPost = $lastPost;
   $this->profilePicture = $profilePicture;
  }
}

$users=[
  'user1' => new User('Tommaso', 'Figlia', 25, 'tomascy', 'tommasofiglia@gmail.com', gmdate("M d Y H:i:s", mktime(12, 33, 05, 5, 6, 2013)), gmdate("M d Y H:i:s", mktime(12, 33, 05, 5, 6, 2013)) , 'Come si guida una moto', 'https://www.autoo.it/ufiles/medium/Ferrari-F40.jpg?t=11022021'),

  'user2' => new User('Antonino', 'Mandina', 24, 'ninoblivion', 'antonino@nello.com', gmdate("M d Y H:i:s", mktime(12, 33, 05, 5, 6, 2013)) , date(DATE_ATOM,mktime(15,31,0,10,3,1975)) , 'Come modificare il GBA con la lucina', 'https://www.zeldadungeon.net/wp-content/uploads/2013/09/zeldacdi.jpg'),

  'user3' => new User('Luciano', 'Alagna', 24, 'luckyano', 'lucianeddu@beddu.com', gmdate("M d Y H:i:s", mktime(12, 33, 05, 5, 6, 2013)) , date(DATE_ATOM,mktime(15,31,0,10,3,1975)) , 'Le mie nuove cuffie Ferrari Thrustmaster', 'https://images-na.ssl-images-amazon.com/images/I/61aBo7K8dwL._AC_SL1085_.jpg'),

  'user4' => new User('MariaPia', 'Gianguzzi', 30, 'piuzza', 'lucianeddu@beddu.com', gmdate("M d Y H:i:s", mktime(12, 33, 05, 5, 6, 2013)) , date(DATE_ATOM,mktime(15,31,0,10,3,1975)) , 'Le mie nuove cuffie Ferrari', 'https://images-na.ssl-images-amazon.com/images/I/61aBo7K8dwL._AC_SL1085_.jpg')
];

var_dump($users);

?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <style media="screen">
       .card strong{
         text-transform: uppercase;
       }
     </style>
   </head>
   <body>

     <div class="container">
       <?php foreach ($users as $user): ?>
         <div class="card">
           <h2>
            <?php
              echo  $user->name . " " . $user->lastName;
            ?>
           </h2>
           <img src="<?php echo $user->profilePicture; ?>" alt="">
           <p>
             <?php
              echo  "<strong> età: </strong>" . $user->age;
             ?>
           </p>
           <p>
             <?php
              echo  "<strong> nickname: </strong>" . $user->nickname;
             ?>
           </p>
           <p>
             <?php
              echo  "<strong> email: </strong>" . $user->email;
             ?>
           </p>
           <p>
             <?php
              echo "<strong> Data di registrazione: </strong>" . $user->registeredAt;
              ?>
           </p>
           <p>
             <?php
              echo "<strong> Ultimo accesso: </strong>" . $user->lastSeenOnline;
              ?>
           </p>
         </div>
       <?php endforeach; ?>
     </div>

   </body>
 </html>
