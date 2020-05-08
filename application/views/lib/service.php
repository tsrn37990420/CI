<?php
session_start();
header('Content-Type: application/json; charset=UTF-8'); //設定資料類型為 json，編碼 utf-8
if ($_SERVER['https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'] == "POST") { //如果是 POST 請求
    @$nickname = $_POST["nickname"]; //取得 nickname POST 值
    @$gender = $_POST["gender"]; //取得 gender POST 值
    @$account =$_POST["account"];
    @$password1 =$_POST["password1"];
    @$captcha1 = $_POST["captcha1"];

    if ($nickname != null && $gender != null && $account!=null && $password1!=null && $captcha1!=null) { //如果 nickname 和 gender 都有填寫
        //回傳 nickname 和 gender json 資料
        // if ($securimage->check($_POST["captcha1"]) == false) 
        // {
        //     'captcha1'=>
        // }
        if ($securimage->check($_POST["captcha1"]) == false) 
            {
            echo json_encode(array(
            'nickname' => $nickname,
            'gender' =>  $gender,
            'account' => $account,
            'password1' => $password1,
            'captcha1' => "錯誤",
        ));
            }
        else echo json_encode(array(
            'nickname' => $nickname,
            'gender' =>  $gender,
            'account' => $account,
            'password1' => $password1,
            'captcha1' => $captcha1,
            'captcha1' => "正確",
        ));
    } else {
        //回傳 errorMsg json 資料
        echo json_encode(array(
            'errorMsg' => '資料未輸入完全！'
        ));
    }
} else {
    //回傳 errorMsg json 資料
    echo json_encode(array(
        'errorMsg' => '請求無效，只允許 POST 方式訪問！'
    ));
// include_once $_SERVER['DOCUMENT_ROOT'].'/securimage/securimage.php';

// $securimage = new Securimage();


// if ($securimage->check($_POST["captcha1"]) == false) {


//  echo "The security code entered was incorrect.<br /><br />";

//  echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";

//  exit;

// }

}

?>