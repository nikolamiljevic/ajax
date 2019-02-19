$(document).ready(function(){
	//ucitava inicijalno home.php stranu
	$('.row').load('home.php');

	$('.container a').click(function(){
		var page = $(this).attr('href');
		$('.row').load(page+'.php');
		return false;
	});
});