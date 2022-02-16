jQuery(function($)
{
	var logo_img = "",
		logo_img_hover = "";

	$("header #site_logo img").on(
	{
		mouseenter: function()
		{
			$(this).attr({'src': script_child.logo_img_hover});
		},
		mouseleave: function()
		{
			$(this).attr({'src': script_child.logo_img});
		}
	});
});