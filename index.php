<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Test Page</title>
</head>

<body>

	<form method="post" id="myform" onsubmit="return post()">
		<input type="text" name="text1" id = "text1">
		<input type="text" name="text2" id = "text2">
		<input type="button" name="submit" value="submit" onclick = "post()">
	</form>

</body>

<script>
	
	function post(){
		alert("form is submitted");
		var text1 = $("#text1").val();
		var text2 = $("#text2").val();
		var url = "testapi.php";
		$.ajax({
			url : url,
			data: {'text1': text1 , 'text2': text2},
			type: "post"
			
		}).done(function(response){
			alert(response);
		});
		
		
	}
	
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</html>