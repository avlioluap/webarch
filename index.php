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

<div id="header"><a id="showchat"><img src="img/chat_ic.png" width="30" height="30" /></a></div>
<div id="wrapper">

<div id="div1">1</div>
<div id="div2">2</div>
<div id="div3">3</div>
	
</div>	
	

			
			

    
	<script type="text/javascript">
        $(document).ready(function () {
            
 			
			var one = $('#div1').width();
			var two = $('#div3').width(); 
			var remaining_width = parseInt($(window).width() - one);
			
			$('#div2').css('width', remaining_width);
			$('#div3').hide();
			   
		   
		   
		   
		   $('a#showchat').click(function () {                
				$('#div1').animate({width: 'toggle'});
				$('#div3').animate({width: 'toggle'});	
					var remaining_width = parseInt($(window).width() - two);

					$('#div2').css('width', remaining_width);
            });	



	
			
        });
		

			
    </script>
	
</body>
	
</html>