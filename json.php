<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Transactions</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>


</body>
</html>

<?php
$users = [
         ["name"=>"angry-balloon","email"=>"angry-balloon@ucoz.plt","status"=>"passive"],
          ["name"=>"smile-cucumber", "email"=>"smile-cucumber@ucoz.indoor","status"=>"semi"],
           ["name"=>"smile-balloon","email"=>"smile-balloon@site.box","status"=>"status"],
            ["name"=>"hidden-warrior","email"=>"hidden-warrior@commerce.ua","status"=>"semi"],
             ["name"=>"big-cherry", "email"=>"big-cherry@suprunovka.plt", "status"=>"semi"],
              [ "name"=> "fine-balloon", "email"=>"fine-balloon@khpi.plt","status"=>"active"],
               ["name"=>"small-phone", "email"=>"small-phone@khpi.plt","status"=>"semi"],
                [ "name"=>"baby-president","email"=>"baby-president@meta.indoor","status"=>"passive"],
                 [ "name"=>"hidden-student","email"=> "hidden-student@payment.kh","status"=>"active"],
                  [ "name"=>"warm-student","email"=>"warm-student@ucoz.world","status"=>"passive"],
                   [ "name"=>"fine-snail","email"=>"fine-snail@google.indoor","status"=>"semi"],
                    ["name"=>"smile-fox", "email"=>"smile-fox@gmail.indoor", "status"=> "passive"]
];






//$result= $_POST['name'];
//print_r($users[$result-1]);


echo json_encode( $users);

?>
<form action="transaction.php" method="post">
<input type="number" name="transaction" id="number"><br>
<button type="submit" class="button" id="margin">Get transaction list by user id</button>
</form>
