<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <?php
       function getMax($num1, $num2){
         if($num1 > $num2){
           return $num1;
         } else {
           return $num2;
         }
       }

       echo getMax(300, 90);

    ?>





  </body>
</html>
