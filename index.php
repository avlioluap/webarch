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
				<img src="img/logo.png" />
			</div>
			
		</div>
		
		<!-- conteudo meio -->
		<div id="content">
			
			<div id="contenttop">
				<a id="showhidetrigger">show/hide</a>
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
			$('#menuleft').show();
 
			
		   $('a#showhidetrigger').click(function () {
                $('#menuright').animate({width: 'toggle'});
				$('#menuleft').animate({width: 'toggle'});
            });
        });
		
		/*$(window).resize(function(){
		  $('.contenttop').each(function(){
			$(this).css('width', $(this).parent().width()-250);
		  })
		});	*/	
    </script>
	
</body>
	
</html>