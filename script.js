var check=true;

$('#dark-mode').click(function(){

	if(check){

		$(this).css('filter','invert(1)');

		$('html').css('filter','invert(1)');

		$('img').css('filter','invert(1)');

		$('body').css('filter','invert(1)');

		check=false;

	}

	else{

		$(this).css('filter','invert(0)');

		$('html').css('filter','invert(0)');

		$('img').css('filter','invert(0)');

		$('body').css('filter','invert(0)');

		check=true;

	}

});