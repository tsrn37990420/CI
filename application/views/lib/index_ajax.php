<!DOCTYPE html>
<html>
<head>
		
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">

		$(document).ready(function(){
			$("#btHello").click(function(){
				var fullname_val = $("#fullname").val();
				alert(fullname_val);
				$.ajax({
					type:'POST',
					data:{'fullname1':fullname_val},
					url:'<?php echo site_url('lib/test');?>',

					success: function(re){
						//$('#result1').html(re);
						alert(re);
						//alert(result);
					}
				});
			});
		});
	</script>
</head>
<body>
	Name <input type="text" id="fullname">
	<input id = "btHello" type="submit" value="確認">
	<span id="result1"></span>
</body>
</html>