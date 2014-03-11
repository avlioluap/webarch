<!DOCTYPE html>
<html>

<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Admin</title>

		<meta name="description" content="web admin">
		<meta name="author" content="Paulo Silva">
		
		<link rel="shortcut icon" href="" type="image/png">		
		<link rel='stylesheet' id='style-css'  href='css/layout.css' type='text/css' media='all' />	
		
		<script src="http://code.jquery.com/jquery-git.js"type="text/javascript"></script>
	


</head>

<body>

	
	<div id="wrapper_content">

		<div id="div1">
			<ul>
				<li><a href="#" id="showmenu"><img src="img/menu_ic.png" width="30" height="30" /></a></li>
				<li><a href="#" id="showchat"><img src="img/chat_ic.png" width="30" height="30" /></a></li>		
			</ul>		
		</div>
		
		<div id="div2">menu l</div>
		
		<div class="clear"></div>
		
	</div>	
	
	<div id="menurigth">
	1
	</div>

			
			

    
	<script type="text/javascript">
	
		var remaining_width = parseInt($(window).width());
		var one = $('#wrapper_content').width();
		var two = $('#menurigth').width();
	
	function mySetupFunction() {
		$('#menurigth').hide();
		$('#div1').css('width', remaining_width);
	}
		
	$(document).ready(function () {
		$(document).on('click', 'a#showchat', function () {
			$('#menurigth').animate({ width: 'toggle' });
			$('#div1').css('width', remaining_width - two);
			$('a#showchat').attr('id', 'hidechat')
		});

		$(document).on('click', 'a#hidechat', function () {
			$('#menurigth').animate({ width: 'toggle' });
			$('#div1').css('width', remaining_width);
			$('a#hidechat').attr('id', 'showchat')
		});
		mySetupFunction();
	});

	$(window).resize(function () { mySetupFunction(); });
	
	



		

			
    </script>
	
</body>
	
</html>