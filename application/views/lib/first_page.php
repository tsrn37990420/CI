<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- <script src="http://code.jquery.com/jquery-1.9.0rc1.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script type="text/javascript">

		$(document).ready(function(){
			$("#bt1").click(function(){
				var test = "<?php echo $log_in[0][0]; ?>";
				var account = $("#ac_text1").val();
				var password = $("#pw_text1").val();
				var abc_text = $("#abc").val();
				var password2 = $("#cpa_password").val();
				alert(password2)
				// // $.ajax({
				// 	type: "POST",
				// 	url:"lib.php",
				// 	dataType:"json",
				// 	data:"account="+account,
				// 	cache:false,
				// 	function(data){   
            
    //      				 }  
    //     			});   
  
    //  			 return false;   
  
   
				// $.ajax({
				// 	type: "POST",
				// 	url: "service.php",
				// 	dataType: "json",
				// 	data: {
				// 		account: $("#ac_text1").val(),
				// 		password: $("#pw_text1").val(),
				// 		cpa_password: $("#cpa_password").val()
				// 	},
				// 	success:function(data){
				// 		if (data.cpa_password=="正確"){
				// 			$("#demo")[0].reset(); //重設 ID 為 demo 的 form (表單)
    //                         alert("驗證碼 : 正確 ");
				// 		}
				// 		else
				// 			$("#demo")[0].reset();
				// 			alert("登入失敗");
				// 	},
    //                 error: function(jqXHR) {
    //                     $("#demo")[0].reset(); //重設 ID 為 demo 的 form (表單)
    //                     $("#result").html('<font color="#ff0000">發生錯誤：' + jqXHR.status + '</font>');
    //                 }
				// })
			})
		});
	</script>

	<style type="text/css">
		.left1{
			background: gray;
			font-size: 20px;
			height: 500px;
			width: 250px;
			text-align: center;
			margin-top: 60px; 
		}
		.right{
			background: Beige;
			font-size: 20px;
			height: 500px;
			width: 800px;
			text-align: center;
			margin-top: 60px; 
		}

		p {
			font-size:30px;
		}
	</style>
	<body>
		<?php 
			$this->load->helper('url');
			$this->load->helper('string');
			// $this->load->library('session');
			$this->load->helper('captcha');
			$vals = array(
				'word' =>random_string("alpha",6), //生成隨機字母
			    'img_path' => './captcha/',
			    // 'img_url' => base_url().'captcha/',
			    'img_url' => base_url('captcha')."/",
			    'img_width' => '150',
		        'img_height'    => 40,
		        'expiration'    => 7200,
		        'word_length'   => 6,
		        'font_size'     => 50,
		        'expiration' => 3
					    );
					$cap = create_captcha($vals);
					// echo $cap['image'];

		?>
<!-- 		<p><?php $cap['image'] ?></p>
 -->		
 			<div class="container-fluid">
			<div class="row">
				<div class="right , col-12 col-sm-12" style="padding-top: 25px">
					<form id="demo">
						<h1>登入!</h1>
					<p>帳號 : <input type="text" name = "ac_text" id = "ac_text1"></p>
					<p>密碼 : <input type="password" name="pw_text" id = "pw_text1"></p>
					<p style="font-size: 15px"><input type="text" name="cap_text" id = "cpa_password" style="width: 100;height:35;margin-right: 20px;margin-left:95px ">驗證碼 <?php echo $cap['image'] ?></p>
					<p><input type="submit" value="登入" id = "bt1">
						<input type="reset" value="清除"></p>
						<p class = "abc"><?php echo $log_in[0][0] ?></p>
					</form>
				</div>
			</div>
		</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	</body>
</head>