<!DOCTYPE html>
<html>
<head>
		
	<title></title>
	
	<script type="text/javascript">

		$(document).ready(function(){
			$("#btHello").click(function(){
				var fullname_val = $("#fullname").val();
				//alert(fullname_val);
				$.ajax({
					type:'POST',
					data:{fullname_val:$("#fullname").val()},
					dataType: "json",
					url:'<?=site_url('lib/test')?>',

					success: function(ac){
					 $('#result1').html(ac);
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
	<p id = test></p>
	<span id="result1"></span>
</body>
</html>