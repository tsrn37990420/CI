	<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> -->
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script type="text/javascript">
		$(document).ready(function(){
			$("#bt1").click(function(){
				var pd2 = $("#cpa_password").val();
				if( pd2 == "<?=$word;?>"){
					alert("k");
				}
				else
					alert("n");
					alert("<?=$word;?>");
				$.ajax({
					type: "POST",
					url:'<?=site_url('lib/se')?>',
					data:{account:$("#ac_text1").val(),
						  password:$("#pw_text1").val(),
						  cpa_password:$("#cpa_password").val()},

					success:function(data){	
																	
							if(data=="nodata"){
								alert("請輸入帳號密碼");
							}
							else if(data=="zero"){
								alert("帳號密碼錯誤");
							}
							else if (pd2 == "<?=$word;?>"){
								alert(data+"歡迎!");
								window.location.href="/CodeIgniter/index.php/lib/a1";
							}
							else{
								alert("驗證碼錯誤");
							}
					 },
					error:function(XMLHttpRequest, textStatus, errorThrown) {
  					alert(XMLHttpRequest.status);
					alert(XMLHttpRequest.readyState);
					alert(textStatus);
					}

				});
			});
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
 			<div class="container-fluid">
			<div class="row">
				<div class="right , col-12 col-sm-12" style="padding-top: 25px">
					<form id="demo" method="post">
						<h1>登入!</h1>
					<p>帳號 : <input type="text" name = "ac_text" id = "ac_text1"></p>
					<p>密碼 : <input type="password" name="pw_text" id = "pw_text1"></p>
					<p style="font-size: 15px"><input type="text" name="cap_text" id = "cpa_password" style="width: 100;height:35;margin-right: 20px;margin-left:95px ">驗證碼 <?php echo $cap['image'] ?></p>
					<p><input type="button" value="登入" id = "bt1">
						<input type="reset" value="清除"></p>
					</form>
				</div>
			</div>
		</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	</body>
</head>