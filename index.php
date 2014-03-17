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
		<script src="js/layout_beahvior.js" type="text/javascript"></script>
	


</head>

<body>

	
	<div id="wrapper_content">

		<div id="header">
			<!-- logotipo -->
			<div id="logo">
				<span class="logotipo"></span>
				<ul>
					<li><a href="#"><img src="img/home_ic.png" /></a></li>
					<li><a href="#"><img src="img/mail_ic.png" /></a></li>
				</ul>
			</div>
			
			<div id="header_menu">
				<ul id="header_menu_left">
					<li>links</li>
					<li>links</li>
					<li>links</li>
				</ul>
				<ul id="header_menu_rigth">
					<li><a href="#" id="showchat"></a></li>				
					<li>links</li>
					<li>links</li>					
				</ul>				
			</div>		
		</div>
		
		<div id="contentwrapper">
			<div id="menuleft">
				<?php include ('app/menu_left/menu.php'); ?>
			</div>
			<div id="content">conteudo</div>
		</div>
		
		<div class="clear"></div>
		
	</div>	
	
	<div id="menurigth">
	1
	</div>

	<script>
$(document).ready(function () {
		
	$('#accordion a.item').click(function () {

		/* FIRST SECTION */
	
		//slideup or hide all the Submenu
		$('#accordion li').children('ul').slideUp('fast');	
		
		//remove all the "Over" class, so that the arrow reset to default
		$('#accordion a.item').each(function () {
			if ($(this).attr('rel')!='') {
				$(this).removeClass($(this).attr('rel') + 'Over');	
			}
		});
		
		/* SECOND SECTION */		
		
		//show the selected submenu
		$(this).siblings('ul').slideDown('fast');
		
		//add "Over" class, so that the arrow pointing down
		$(this).addClass($(this).attr('rel') + 'Over');			
	
		return false;

	});

	
});
	</script>	
	
</body>
	
</html>