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
		
		<script src="http://code.jquery.com/jquery-git.js" type="text/javascript"></script>
	


</head>

<body>

	
	<div id="wrapper_content">

		<div id="header">
			<div id="logo">logo</div>
			<div id="header_menu">
				<ul id="header_menu_left">
					<li><a href="#" id="showmenu"><img src="img/menu_ic.png" width="30" height="30" /></a></li>	
				</ul>
				<ul id="header_menu_rigth">
					<li><a href="#" id="showchat"><img src="img/chat_ic.png" width="30" height="30" /></a></li>		
				</ul>				
			</div>		
		</div>
		
		<div id="contentwrapper">
			<div id="menuleft">links</div>
			<div id="content">conteudo</div>
		</div>
		
		<div class="clear"></div>
		
	</div>	
	
	<div id="menurigth">
	1
	</div>

			
			

    
	<script type="text/javascript">
	
		
	
	function mySetupFunction() {
		
		var remaining_width = parseInt($(window).width());
		var one = $('#wrapper_content').width();
		var two = $('#menurigth').width();
		var three = $('#menuleft').width();	
		
		$('#menurigth').hide();
		$('#menuleft').show();
		$('a#hidechat').attr('id', 'showchat')			
		$('#wrapper_content').css('width', remaining_width);
		$('#content').css('width', remaining_width - three);
		
	}
		
	$(document).ready(function () {
	

		
		$(document).on('click', 'a#showchat', function () {
		var remaining_width = parseInt($(window).width());
		var one = $('#wrapper_content').width();
		var two = $('#menurigth').width();
		var three = $('#menuleft').width();	
		
			$('#menurigth').animate({ width: 'toggle' });
			$('#menuleft').hide();
			$('#wrapper_content').css('width', remaining_width - two);
			$('#content').css('width', remaining_width - two);
			$('a#showchat').attr('id', 'hidechat');
			
		});

		$(document).on('click', 'a#hidechat', function () {
		var remaining_width = parseInt($(window).width());
		var one = $('#wrapper_content').width();
		var two = $('#menurigth').width();
		var three = $('#menuleft').width();			
		
			$('#menurigth').animate({ width: 'toggle' });
			$('#menuleft').animate({ width: 'toggle' });
			$('#wrapper_content').css('width', remaining_width);
			$('#content').css('width', remaining_width - three);
			$('a#hidechat').attr('id', 'showchat');
			
		});
		mySetupFunction();
	});

	$(window).resize(function () { mySetupFunction(); });
	
	



		

			
    </script>
	
</body>
	
</html>