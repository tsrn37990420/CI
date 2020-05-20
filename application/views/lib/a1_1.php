<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="http://code.jquery.com/jquery-1.9.0rc1.js"></script>
	<script type="text/javascript">
		/*$(document).ready(function(){
			// var id_data = window.location.href.split("?")[1].split("=")[1];
			// alert(id_data);
			   var only = $("$only_id").val();
			$("#button5").click(function(){
				// e.preventDefault();
				// alert("abc");
			   	alert(only);
				$.ajax({
					type: "POST",
					
					data:{account:only},
					success:function(data){
					// $('#print').submit();
					alert(data);  //啟用submit();							
					 },
					error:function(XMLHttpRequest, textStatus, errorThrown) {
  					alert(XMLHttpRequest.status);
					alert(XMLHttpRequest.readyState);
					alert(textStatus);
					}
				});
			});
		}); */

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
					<p id = "A1"> <a href="a1">圖書館藏書</a></p>
					<p><a href="http://localhost/CodeIgniter/index.php/lib/a2">書版社資料</a></p>
					<p><a href="http://localhost/CodeIgniter/index.php/lib/a3">圖書類別</a></p>
					<p><a href="http://localhost/CodeIgniter/index.php/lib/a4">系統設定</a></p>
					<p><a href="http://localhost/CodeIgniter/index.php/lib/a5">帳號查詢</a></p>
					<p><a href="http://localhost/CodeIgniter/index.php/lib/a6">藏書庫</a></p>
					<p><a href="http://localhost/CodeIgniter/index.php/lib/a7">黑名單</a></p>
					<p><a href="http://localhost/CodeIgniter/index.php/lib/a8">借閱紀錄</a></p>
				</div>
				
				<div class="right , col-12 col-sm-8">
					<form method="post" action="http://localhost/CodeIgniter/index.php/lib/a1_2" enctype="multipart/form-data" id="print">
						<p>書名 : <input type="text" id = "name" name="book_name"></p>
						<input style="display:none" type="text" name="account5" value="<?php echo $id; ?>" id = only_id>
						<p>出版社 : <select id ="select_1" name="publishing">
							<option>無</option SELECTED >
							<option>格林</option>
							<option>太陽</option>
							<option>月亮</option></select>
						</p>
						<p>出版日 : <input type="text" id ="date" name="date">
						<p>類別 : <select id ="select_2" name="book_class"></p>
							<option>無</option SELECTED >
							<option>恐怖</option>
							<option>童話</option>
							<option>愛情</option></select></p>
						<p><input type="radio" name="radio5" value="on" checked>有效
							<input type="radio" name="radio5" value="off">無效</p>
						<button id = "button5" type="submit">送出</button></form>
						<a href="http://localhost/CodeIgniter/index.php/lib/a1"><button id = "bt2" type="submit" >返回</button></a>
					
				</div>
			</div>
		</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript"></script>>
	</body>
</head>