<?
    $string_variable = "기능경기대회 입상";
    $number_varibale = 123123;
    $array_variable = array(1 => 'first', 2 => 'second', 3 => 'third');
    $obj_variable = (object) array(
        'data' => (object) array(
            "userId" => '1',
            "userName" => "koldin",
            "userEmail" => "alex108902@naver.com",
            "userTel" => "01027729778",
            "userProfile" => "https://play-lh.googleusercontent.com/PCpXdqvUWfCW1mXhH1Y_98yBpgsWxuTSTofy3NGMo9yBTATDyzVkqU580bfSln50bFU"
        )
    );

    $userId = $obj_variable -> data -> userId;
    $userName = $obj_variable -> data -> userName;
    $userEmail = $obj_variable -> data -> userEmail;
    $userTel = $obj_variable -> data -> userTel;
    $userProfile = $obj_variable -> data -> userProfile;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div id="root">
        <div id="mainProfile">
            <div class="mainInfo">
                <img class="userImage" src="<?php echo $userProfile ?>" alt="userProfile">
                <div class="detail">
                    <p class="userName"><? echo $userName ?></p>
                    <p class="userSubInfo"><? echo $userEmail ?></p>
                    <p class="userSubInfo"><? echo $userTel ?></p>
                </div>
            </div>
            <div class="detailInfo">
            </div>
        </div>
    </div>
</body>
</html>