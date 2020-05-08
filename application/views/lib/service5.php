<?php
session_start();
header('Content-Type: application/json; charset=UTF-8'); //設定資料類型為 json，編碼 utf-8
if ($_SERVER['REQUEST_METHOD'] == "POST") { //如果是 POST 請求
    @$account = $_POST["account"]; //取得 nickname POST 值
    @$password = $_POST["password"]; //取得 gender POST 值
    @$cpa_password = $_POST["cpa_password"];

    include_once $_SERVER['DOCUMENT_ROOT'].'/securimage/securimage.php';
    $securimage = new Securimage();

    if ($account != null && $password != null && $cpa_password !=null) { //如果 nickname 和 gender 都有填寫
        //回傳 nickname 和 gender json 資料
        if($securimage->check($_POST["cpa_password"]) == false)
        {
            echo json_encode(array(
            'account' => $account,
            'password' => $password,
            // 'text' =>$abc_text,
            'cpa_password'=>"錯誤",
            ));
        } 
        else {
        //回傳 errorMsg json 資料
        echo json_encode(array(
            'account' => $account,
            'password' => $password,,
            'cpa_password'=>"正確",
        ));
        
    } else {
            echo json_encode(array(
            'errorMsg' => '資料未輸入完全！'
            ));
        }
    } else {
    //回傳 errorMsg json 資料
    echo json_encode(array(
        'errorMsg' => '請求無效，只允許 POST 方式訪問！'
    ));


}
?>