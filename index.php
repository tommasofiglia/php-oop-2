<?php

include __DIR__ . '/classes/user.php';

$users=[
  'user1' => new User('Tommaso', 'Figlia', 25, 'tomascy', 'tommasofiglia@gmail.com', gmdate("M d Y H:i:s", mktime(12, 33, 05, 5, 6, 2013)), gmdate("M d Y H:i:s", mktime(18, 37, 51, 2, 11, 2021)) , 'Come si guida una moto', 'https://www.iosonobellezza.it/wp-content/uploads/2020/12/F40-tris-2-696x559.jpg'),

  'user2' => new User('Antonino', 'Mandina', 24, 'ninoblivion', 'antonino@nello.com', gmdate("M d Y H:i:s", mktime(11, 58, 05, 02, 18, 2016)), gmdate("M d Y H:i:s", mktime(19, 36, 05, 2, 13, 2021)) , 'Come modificare il GBA con la lucina', 'https://www.zeldadungeon.net/wp-content/uploads/2013/09/zeldacdi.jpg'),

  'user3' => new User('Luciano', 'Alagna', 24, 'luckyano', 'lucianeddu@beddu.com', gmdate("M d Y H:i:s", mktime(19, 12, 05, 12, 3, 2020)), gmdate("M d Y H:i:s", mktime(19, 31, 05, 4, 12, 2020)) , 'Le mie nuove cuffie Ferrari Thrustmaster', 'https://images-na.ssl-images-amazon.com/images/I/61aBo7K8dwL._AC_SL1085_.jpg'),

  'user4' => new User('Mariapia', 'Gianguzzi', 30, 'piuzza', 'malanova@pia.com', gmdate("M d Y H:i:s", mktime(06, 55, 38, 12, 2, 2016)), gmdate("M d Y H:i:s", mktime(03, 30, 05, 2, 2, 2021)) , 'Ultime news su u Paddu Siccu', 'https://t2.ea.ltmcdn.com/it/images/0/9/2/5_cose_buffe_che_fanno_i_gatti_290_600.jpg')
];

?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Esercizio</title>
     <link rel="stylesheet" href="css/style.css">
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
              echo  "<strong> Ultimo post commentato: </strong>" . $user->lastPost;
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
