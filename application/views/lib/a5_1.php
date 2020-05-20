<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- <script src="http://code.jquery.com/jquery-1.9.0rc1.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			var data = window.location.href.split("?")[1].split("=")[1];
			alert("id: " + data);
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
				<div class="left1 , col-12 col-sm-4">
					<p id = "A1"> <a href="http://localhost/CodeIgniter/index.php/lib/a1">圖書館藏書</a></p>
					<p><a href="http://localhost/CodeIgniter/index.php/lib/a2">書版社資料</a></p>
					<p><a href="http://localhost/CodeIgniter/index.php/lib/a3">圖書類別</a></p>
					<p><a href="http://localhost/CodeIgniter/index.php/lib/a4">系統設定</a></p>
					<p><a href="http://localhost/CodeIgniter/index.php/lib/a5">帳號查詢</a></p>
					<p><a href="http://localhost/CodeIgniter/index.php/lib/a6">藏書庫</a></p>
					<p><a href="http://localhost/CodeIgniter/index.php/lib/a7">黑名單</a></p>
					<p><a href="http://localhost/CodeIgniter/index.php/lib/a8">借閱紀錄</a></p>
				</div>
		
				<div class="right , col-12 col-sm-8">
					<form method="post" action="http://localhost/CodeIgniter/index.php/lib/a5_2" >
					<h1 style="padding-top: 20px">新增/編輯帳號</h1><br>
					<input style="display:none" type="text" name="account5" value="<?php echo $id; ?>" id = only_id>
					<p style="font-size:15px"> 人名 : <input type="text" name="name_text"> </p>
					<p style="font-size:15px"> 帳號 : <input type="text" name="account_text"> </p>
					<p style="font-size:15px"> 密碼 : <input type="password" name="pd1"></p>
					<p style="font-size:15px"> 狀態 : <input type="radio" name="rad1" checked>有效 <input type="radio" name="rad1">無效 </p>
					<p style="font-size:15px">黑名單狀態 : <input type="checkbox" name="ch1"></p> 
					<p style="padding-left: 50px;font-size:15px"><input type="submit" name="sbu1" value="確定/修改">
					   </form>
					<a href="http://localhost/CodeIgniter/index.php/lib/a5" style="font-size:15px" ><input type="submit" name="sbu2" value="返回"></a>
				</div>
			</div>
		</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	</body>
</head>			