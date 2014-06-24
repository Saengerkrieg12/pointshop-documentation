/*
 * This file is part of http://github.com/adamdburton/pointshop-documentation
 *
 * (c) Adam Burton <adam@equinox-studios.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

function recordEvent(category, action, label)
{
	ga('send', 'event', category, action, label);
}

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