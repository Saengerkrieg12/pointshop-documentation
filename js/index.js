$(function()
{
	var $window = $(window);
	var $overlay = $('#banner');
	
	$window.scroll(function()
	{
		var scrollTop = $window.scrollTop();
		var percentage = scrollTop / $window.innerHeight();
		
		$overlay.css('opacity', 1 - percentage);
	});
});