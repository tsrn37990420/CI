<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script type="text/javascript " >
	</script>
	<jsp:forward page="a5_1.php"/>
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
		
				<div class="right , col-12 col-sm-8 , table-respinsive">
					<p style="font-size:15px;padding-top: 20px" >
					   人名 : <input type="text" name="tx1">
					   帳號 : <input type="text" name="ac1">
					   <input type="radio" name="rad1">黑名單

					   <a href="a5_1"><input style="margin-left: 35px" type="submit" name="bt1" value="新增帳號">
						</a>
					</p>
					<table class="table">
						<thead>
							<tr>
								<th>編號</th>
								<th>人名</th>
								<th>帳號</th>
								<th>密碼</th>
								<th>狀態</th>
								<th>黑單狀態</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody>
							
							<?php for($i=0;$i<count($data2[0]);$i++) { ?>

							<tr>
								<td><?=$data2[0][$i]; ?></td>
								<td><?=$data2[1][$i]; ?></td>
								<td><?=$data2[2][$i]; ?></td>
								<td><?=$data2[3][$i]; ?></td>
								<td><?=$data2[4][$i]; ?></td>
								<td><?=$data2[5][$i]; ?></td>
								<td><a href="a5_1?id=<?php echo $data2[0][$i]?>"><?php echo "操作/作廢" ?></a></td>
							</tr>
							<?php } ?>
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