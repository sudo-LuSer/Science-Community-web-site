var check=true;

$('#dark-mode').click(function(){

	if(check){

		$(this).css('filter','invert(1)');

		$('html').css('filter','invert(1)');

		$('img').css('filter','invert(1)');

		$('body').css('filter','invert(1)');

		$('span').css('filter','invert(0)');

		$('span').css('color','black');

		$('span').hover(function(){

			$(this).css('color','rgb(10,60,220)');

		});

		$('#phone_ms').css('color','black');

		$('#phone_ss').css('color','black');

		$('#phone_ms').hover(function(){

			$(this).css('color','var(--blue-dark-translucent)');

		});

		$('#phone_ss').hover(function(){

			$(this).css('color','var(--blue-dark-translucent)');

		});

		$('#Instuctions').css('color','rgb(242,256,216)');

		$('#Contactbtn').css('color','rgb(242,256,216)');

		check=false;

	}

	else{

		$(this).css('filter','invert(0)');

		$('html').css('filter','invert(0)');

		$('img').css('filter','invert(0)');

		$('body').css('filter','invert(0)');

		$('span').css('color','rgb(195, 195,201)');

		$('span').hover(function(){

			$(this).css('color','rgb(195, 195,201)');

		});

		$('#phone_ms').css('color','var(--gray-15)');

		$('#phone_ss').css('color','var(--gray-15)');

		$('#phone_ms').hover(function(){

			$(this).css('color','var(--blue-light)');

		});

		$('#phone_ss').hover(function(){

			$(this).css('color','var(--blue-light)');

		});

		$('#Instuctions').css('color','rgb(195, 195,201)');

		$('#Contactbtn').css('color','var(--blue-dark)');

		check=true;

	}

});