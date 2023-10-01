<?php
$logName = filter_input(INPUT_POST,'login');
$passName = filter_input(INPUT_POST, 'password');
$emailUser = filter_input(INPUT_POST,'email');
$confirmPass = filter_input(INPUT_POST,'repeat-password');
$termsOfUser = filter_input(INPUT_POST,'agree-or-not');


$logText = "login";
$passText = "pass";
$emailText = "email";
$success = "Сongratulations with successful registration";

$users = [
    [
        $logText => 'admin',
        $passText => '$2y$10$QjNpQXpxtw8tjMJ9uVn48.b9u/olLgGQ6IzJUFSnh6dyu20W.rSGu',
        $emailText => 'somelikeithot@gmail.com',
    ],
];
function validationOfErrors($login,$pass,$email,$confirm,$termsOfUser){
    $errors = [];
    if(empty($login)){
        $errors[] = "You should write login";
    }
    if(empty($pass)){
        $errors[] = "You should write password";
    }
    if(empty($email)){
        $errors[] = "We need your email";
    }
    if(empty($confirm)){
        $errors[] = "Write confirm password..";
    }
    if($pass !== $confirm){
        $errors[] = "You confirm password should match with password";
    }
    if($termsOfUser !== 'on'){
        $errors[] = "Need to accept 'Terms of User'";
    }
    if(strlen($pass) + strlen($confirm) < 12){
        $errors[] = "Password or confirm-password should be more then 6 characters..";
    }
    return $errors;
}

$resOfValidation = validationOfErrors($logName,$passName,$emailUser,$confirmPass,$termsOfUser);
if(count($resOfValidation) == 0){
    $newUser = [];
    $newUser[$logText] = strtolower($logName);
    $newUser[$passText] = password_hash($passName, PASSWORD_DEFAULT);
    $newUser[$emailText] = $emailUser;
    array_unshift($users,$newUser);
};
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registartion status:</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="kkk"></div>
        <div class="container">
            <div class="left-side"></div>
            <div class="right-side">
                <h1>Registartion status:</h1>
                <div class="errors">
                    <?php if(count($resOfValidation) > 0){?>
                        <?php foreach ($resOfValidation as $value){
                            $errors = $value;?>
                    <ul>
                        <li>
                            <?php echo $errors;?>	&#8855;
                        </li>
                    </ul>
                     <?php }?>
                    <?php }else{?>
                    <div class="success-text">
                        <?php echo "$success - $logName"?>
                    </div>
<!--                        --><?php //echo var_dump($users);?>
                    <div class="success"></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </body>
</html>
