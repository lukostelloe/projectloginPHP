<?php

$users = [
  [
    "email" => "john@go.com",
    "password" => "1234"
  ],
  [
    "email" => "jane@go.com",
    "password" => "5678"
  ],
  [
    "email" => "ste@go.com",
    "password" => "2345"
  ]
];



if(isset($_POST["sub"])){
  if(!empty($_POST["email"]) && !empty($_POST["password"])){
      $post = [
          "email" => $_POST['email'],
          "password" => $_POST['password']
      ];
      if(!in_array($post,$users)){
          header('Location:./?status=error');
      } else {
          foreach($users as $user){
              if($user['email']==$post['email'] && $user['password']==$post['password']){
                      header('Location:./views/successlogin.php');
             }
         }

    }
  }
}

?>