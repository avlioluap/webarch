	function mySetupFunction() {
		
		var remaining_width = parseInt($(window).width()),
			one = $('#wrapper_content').width(),
			two = $('#menurigth').width(),
			three = $('#menuleft').width();	
		
		$('#menurigth').hide();
		$('#menuleft').show();
		if (window.innerWidth < 1045)
		{
			$('#logo').hide();
		}
		if (window.innerWidth > 1045)
		{
			$('#logo').show();
		}		
		$('a#hidechat').attr('id', 'showchat')			
		$('#wrapper_content').css('width', remaining_width);
		$('#content').css('width', remaining_width - three);
		
	}
		
	$(document).ready(function () {	
		
		$(document).on('click', 'a#showchat', function () {
		
		var remaining_width = parseInt($(window).width()),
			one = $('#wrapper_content').width(),
			two = $('#menurigth').width(),
			three = $('#menuleft').width();	
		
			$('#menurigth').animate({ width: 'toggle' });
			$('#menuleft').hide();
			$('#logo').hide();
			
			$('#wrapper_content').css('width', remaining_width - two);
			$('#content').css('width', remaining_width - two);
			$('a#showchat').attr('id', 'hidechat');
			
		});

		$(document).on('click', 'a#hidechat', function () {
		
		var remaining_width = parseInt($(window).width()),
			one = $('#wrapper_content').width(),
			two = $('#menurigth').width(),
			three = $('#menuleft').width();		
		
			$('#menurigth').animate({ width: 'toggle' });
			$('#menuleft').animate({ width: 'toggle' });
			if (window.innerWidth > 1045)
			{
				$('#logo').animate({ width: 'toggle' });
			}
			
			$('#wrapper_content').css('width', remaining_width);
			$('#content').css('width', remaining_width - three);
			$('a#hidechat').attr('id', 'showchat');
			
		});
		mySetupFunction();
	});

	$(window).resize(function () { mySetupFunction(); });