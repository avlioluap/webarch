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
		
		<script src="http://code.jquery.com/jquery-latest.min.js"type="text/javascript"></script>
	


</head>

<body>

	<div id="main">
		<!-- menu equerda -->
		<div id="menuleft">
			
			<div id="menulefttop">
				menu esq
			</div>
			
			<div id="menuleftcontent">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed diam sem, imperdiet at mollis vestibulum, bibendum id purus. Aliquam molestie, leo sed molestie condimentum, massa enim lobortis massa, in vulputate diam lorem quis justo. Nullam nec dignissim mi. In non varius nibh. Proin et eros nisi, eu vulputate libero. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis ultricies augue id risus dapibus blandit.</p>
			</div>
			
			<div id="menuleftbottom">
				menu esq bottom
			</div>
		</div>
		
		<!-- conteudo meio -->
		<div id="content">
			
			<div id="contenttop">

				<a id="showchat"><img src="img/chat_ic.png" width="30" height="30" /></a>
			</div>
			
			<!-- menu direita -->	
			<div id="menuright">
				<div id="menurighttop">
					menu dir
				</div>
			</div>
			
			
			
			<div class="clear"></div>	
		</div>
	


    
	<script type="text/javascript">
        $(document).ready(function () {
            $('#menuright').hide();
 
			
		   $('a#showchat').click(function () {                
				$('#menuright').animate({width: 'toggle'});
				$('#menuleft').animate({width: 'toggle'});	
            });	

			
        });
			
    </script>
	
</body>
	
</html>