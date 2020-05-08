<!DOCTYPE html>
<html>
<head>
		
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">

		$(document).ready(function(){
			$("#btHello").click(function(){
				var c = $("#fullname").val();
				$.ajax({
					type:'POST',
					data:{fullname:fullname},
					url:'<?php echo site_url('lib/test/');?>'+fullname,
					success:function(result){
						$('#result1').html(result);
					}
				});
			});
		});
	</script>
</head>
<body>
	Name <input type="text" id="fullname">
	<input id = "btHello" type="submit" value="確認">
</body>
</html>