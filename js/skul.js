/*-------ajax control----*/
$('.notes_button').click(function()
{
	$('.ajax_back').fadeIn(1000);
	$('.ajax_box').load('notes.html').fadeIn(1000);
});

$('#close').click(function()
{
	$('.ajax_back').fadeOut(1000);
	$('.ajax_box').fadeOut(1000);
});

/*--------mobile menu control----------*/
$('.mob_menu_nav').on("click", function()
{
	$('.mob_menu').slideToggle(800).toggleClass('visib');
});

$('#acad_button').click(function()
{
	$('#acad_button ul').slideToggle(800).toggleClass('visib');
});

/*-----entering animation in index page--------*/

$(document).scroll(function()
{
	var posn = $(document).scrollTop();
	
	
	var skul_title_posn = $('.skul_title').offset().top/1.8;
	var skul_posn = $('.skul').offset().top/1.8;
	
	if(posn>skul_title_posn)
	{
		$('.skul_title').removeClass('top_entry');
	}
	
	if(posn>skul_posn)
	{
		$('.skul').removeClass('bottom_entry');
	}
	
	
	var direct_msg_posn = $('.direct_msg').offset().top/1.5;
	
	if(posn> direct_msg_posn)
	{
		$('.direct_msg').removeClass('right_entry');
	}
	
	
	var prin_msg_posn = $('.prin_msg').offset().top/1.4;
	
	if(posn> prin_msg_posn)
	{
		$('.prin_msg').removeClass('left_entry');
	}
	
	
	var disc_posn = $('.disc').offset().top/1.3;
	
	if(posn > disc_posn)
	{
		$('.disc').removeClass('top_entry');
	}
	
	
	var notes_posn = $('#notes').offset().top/1.2;
	
	if(posn> notes_posn)
	{
		$('#notes').removeClass('top_entry');
	}
	
});