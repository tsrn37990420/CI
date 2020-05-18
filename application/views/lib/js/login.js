$(function(){
  $("form").submit(function(e){
	  var username = $(".loginusername").val();
	  var password = $(".loginpassword").val();
	  
	  if(username!='' && password!=''){	  
		  var errormessage = "使用者名稱密碼匹配中……";
		  $.ajax({
			  data:{username:username,password:password},       //要傳送的資料
			  type:"POST",           //傳送的方式
			  //url:"/CodeIgniter/application/index.php/lib/UserLogin",
			  //url:<?=site_url('lib/UserLogin')?>,//url地址
			  url:<?= base_url("index.php/lib/UserLogin")?>,
			  error:function(msg){ //處理出錯的資訊
			  	  console.log("失敗")	
				  var errormessage="再試一次";
				  $(".loginerror").html(errormessage);
			  },
			  success:function(msg){  //處理正確時的資訊
				  //alert("success" + msg)
				  if(msg!=''){
				  	  console.log("成功")
					  var errormessage="登入成功";
					  $(".loginerror").html(errormessage);
					  location.href = "http://localhost/"
				  }else{
				  	console.log("成功2")
					  var errormessage="使用者名稱或密碼錯誤";
					  $(".loginerror").html(errormessage);
				  }
			  }
		  });
		  
	  }else{
		 var errormessage = "使用者名稱或密碼不能為空";
	  }
	  
	  $(".loginerror").html(errormessage);	
	  return false;
  });
});