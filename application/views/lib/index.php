
    <head>

        <meta charset="utf-8">

        <title>jQuery Ajax 實現不刷新頁面提交資料 Demo (後端使用 PHP 處理回傳 json)</title>
    </head>
    <body>

        <h1>jQuery Ajax 實現不刷新頁面提交資料 Demo (後端使用 PHP 處理回傳 json)</h1>
        <h2>登入</h2>
        <hr><br>
        <form id="demo">
            暱稱：<input type="text" id="nickname">
            性別：
            <select id="gender">
                <option value="">請選擇</option>
                <option value="男">男</option>
                <option value="女">女</option>
                <option value="其他">其他</option>
            </select>
            <br><br>
            帳號 : 
            <input type="text" id="account">
            <br><br>
            密碼 :
            <input type="password" id="password1">
            <br><br>

            <img id="captcha" src="/securimage/securimage_show.php" alt="CAPTCHA Image" />
            <br>
            <input type="text" name="captcha_code" id ="captcha1"size="10" maxlength="6" />
            <a href="#" onclick="document.getElementById('captcha').src = '/securimage/securimage_show.php?' + Math.random(); return false">[換一個]</a>
            <button type="button" id="submitExample" style="margin-left: 10px">執行範例</button>

        </form>

        <br><hr>
        <p id="result"></p> <!-- 顯示回傳資料 -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- 引入 jQuery -->
        <script type="text/javascript">

        $(document).ready(function() {
            $("#submitExample").click(function() { //ID 為 submitExample 的按鈕被點擊時
                $.ajax({
                    type: "POST", //傳送方式
                    url: "service.php", //傳送目的地
                    dataType: "json", //資料格式
                    data: { //傳送資料
                        nickname: $("#nickname").val(), //表單欄位 ID nickname
                        gender: $("#gender").val(), //表單欄位 ID gender
                        account: $("#account").val(),
                        password1: $("#password1").val(),
                        captcha1: $("#captcha1").val()
                    },
                    success: function(data) {
                        if (data.captcha1=="正確") { //如果後端回傳 json 資料有 nickname
                            $("#demo")[0].reset(); //重設 ID 為 demo 的 form (表單)
                            $("#result").html('<font color="#007500">您的暱稱為「<font color="#0000ff">' + data.nickname + '</font>」，性別為「<font color="#0000ff">' + data.gender + '</font>」！</font>' +'<br>帳號 : '+ data.account + '<br>密碼 : ' + data.password1 + "<br>認證碼 : " +data.captcha1);
                            alert("驗證碼 : 正確 ");
                        } else { //否則讀取後端回傳 json 資料 errorMsg 顯示錯誤訊息
                            $("#demo")[0].reset(); //重設 ID 為 demo 的 form (表單)
                            alert("驗證碼 : 錯誤");
                            // $("#result").html('<font color="#ff0000">' + "失敗" + '</font>');
                        }
                    },
                    error: function(jqXHR) {
                        $("#demo")[0].reset(); //重設 ID 為 demo 的 form (表單)
                        $("#result").html('<font color="#ff0000">發生錯誤：' + jqXHR.status + '</font>');
                    }
                })
            })
        });
        </script>
    </body>
