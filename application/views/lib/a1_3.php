<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="http://code.jquery.com/jquery-1.9.0rc1.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#A1").click(function(){
	
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
				<div class="left1 , col-12 col-sm-4">
					<p id = "A1"> <a href="a1">圖書館藏書</a></p>
					<p><a href="a2">書版社資料</a></p>
					<p><a href="a3">圖書類別</a></p>
					<p><a href="a4">系統設定</a></p>
					<p><a href="a5">帳號查詢</a></p>
					<p><a href="a6">藏書庫</a></p>
					<p><a href="a7">黑名單</a></p>
					<p><a href="a8">借閱紀錄</a></p>
				</div>
		
				<div class="right , col-12 col-sm-8" style="padding-top: 35px">
					<form method="post" action="a9" enctype="multipart/form-data">
						<label>書名 : </label> <input type="text" name="book_name">
						<label>出版社 : </label> <select id = select_1 name = "publishing">
							<option>無</option SELECTED >
							<option>格林</option>
							<option>太陽</option>
							<option>月亮</option></select>
						<label>類別 : </label> <select id = select_2 name="book_class" >
							<option>無</option SELECTED>
							<option>恐怖</option>
							<option>童話</option>
							<option>愛情</option></select>
						<input type="submit" value="查詢" id = "bt2">
						
					</form><a href = "a1_1"><input type="submit" value="新增" id = "bt1"></a>
					<br>
						<table class="table">
							<thead>
								<tr>
									<th>編號</th>
									<th>書名</th>
									<th>出版社</th>
									<th>出版日</th>
									<th>類別</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								<td><?php echo $select[0];?></td>
			
								</tr>
							</tbody>
						</table>
				</div>
			</div>
		</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	</body>
</head>