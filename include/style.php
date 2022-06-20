<?php

if(!defined('ABSPATH'))
{
	header("Content-Type: text/css; charset=utf-8");

	$folder = str_replace("/wp-content/themes/m-2022-child/include", "/", dirname(__FILE__));

	require_once($folder."wp-load.php");
}

if(!isset($obj_theme_core))
{
	$obj_theme_core = new mf_theme_core();
}

$obj_theme_core->get_params();

$theme_include_url = get_stylesheet_directory_uri()."/";

echo "@font-face
{
	font-family: HelveticaNeue;
	src: url(".$theme_include_url."fonts/HelveticaNeue/HelveticaNeueLTStd-Hv.woff2) format('woff2'),
		url(".$theme_include_url."fonts/HelveticaNeue/HelveticaNeueLTStd-Hv.woff) format('woff');
	font-weight: 900;
	font-style: normal;
	font-display: auto;
}

@font-face
{
	font-family: HelveticaNeue;
	src: url(".$theme_include_url."fonts/HelveticaNeue/HelveticaNeueLTStd-Md.woff2) format('woff2'),
		url(".$theme_include_url."fonts/HelveticaNeue/HelveticaNeueLTStd-Md.woff) format('woff');
	font-weight: 500;
	font-style: normal;
	font-display: auto;
}

@font-face
{
	font-family: HelveticaNeue;
	src: url(".$theme_include_url."fonts/HelveticaNeue/HelveticaNeueLTStd-Roman.woff2) format('woff2'),
		url(".$theme_include_url."fonts/HelveticaNeue/HelveticaNeueLTStd-Roman.woff) format('woff');
	font-weight: 400;
	font-style: normal;
	font-display: auto;
}

@font-face
{
	font-family: HelveticaNeue;
	src: url(".$theme_include_url."fonts/HelveticaNeue/HelveticaNeueLTStd-Lt.woff2) format('woff2'),
		url(".$theme_include_url."fonts/HelveticaNeue/HelveticaNeueLTStd-Lt.woff) format('woff');
	font-weight: 300;
	font-style: normal;
	font-display: auto;
}

@font-face
{
	font-family: HelveticaNeue;
	src: url(".$theme_include_url."fonts/HelveticaNeue/HelveticaNeueLTStd-HvIt.woff2) format('woff2'),
		url(".$theme_include_url."fonts/HelveticaNeue/HelveticaNeueLTStd-HvIt.woff) format('woff');
	font-weight: 900;
	font-style: italic;
	font-display: auto;
}

@font-face
{
	font-family: HelveticaNeue;
	src: url(".$theme_include_url."fonts/HelveticaNeue/HelveticaNeueLTStd-It.woff2) format('woff2'),
		url(".$theme_include_url."fonts/HelveticaNeue/HelveticaNeueLTStd-It.woff) format('woff');
	font-weight: 400;
	font-style: italic;
	font-display: auto;
}

@font-face
{
	font-family: HelveticaNeue;
	src: url(".$theme_include_url."fonts/HelveticaNeue/HelveticaNeueLTStd-LtIt.woff2) format('woff2'),
		url(".$theme_include_url."fonts/HelveticaNeue/HelveticaNeueLTStd-LtIt.woff) format('woff');
	font-weight: 300;
	font-style: italic;
	font-display: auto
}

@media all
{
	body
	{
		font-family: HelveticaNeue;
	}

	header.full_width > div
	{
		max-width: none;
	}";

		if(isset($obj_theme_core->options['sub_nav_direction']) && $obj_theme_core->options['sub_nav_direction'] == 'horizontal')
		{
			echo "header
			{
				margin-bottom: 2em;
			}";
		}

		echo "header #site_logo span
		{
			display: none;
		}

		header #primary_nav
		{
			float: left;
			font-weight: 300;
			max-width: 82%;
		}

			header #primary_nav a:hover
			{
				text-decoration: underline;
			}

				header .theme_nav.is_mobile_ready .sub-menu
				{
					padding-top: .2em;
					padding-left: 5em;
					min-width: 12em;
				}

					header .theme_nav.is_mobile_ready .sub-menu:before
					{
						top: -1em;
					}

		header .searchform
		{
			margin: .6em 0 0 0;
		}

			.is_mobile header .searchform
			{
				margin: .3em 2em 0 0;
			}

	#mf-after-header
	{
		display: none !important;
	}

	#wrapper #mf-slide-nav
	{
		background: none;
	}

		#mf-slide-nav a:hover
		{
			text-decoration: underline;
		}

	#mf-pre-content.full_width > div, #mf-pre-content.full_width > div > .widget > div.has_image
	{
		max-width: none !important;
	}

		.widget.hero .has_text
		{";

			if(isset($obj_theme_core->options['website_max_width']) && $obj_theme_core->options['website_max_width'] > 0)
			{
				echo "padding: 0;
				max-width: ".$obj_theme_core->options['website_max_width']."px !important;";
			}

		echo "}";

			if(isset($obj_theme_core->options['heading_size']) && $obj_theme_core->options['heading_size'] > 0)
			{
				echo ".widget.hero h3
				{
					font-size: ".$obj_theme_core->options['heading_size']." !important;
				}";
			}

		echo ".widget.hero .align_right h3, .widget.hero .align_right .content, .widget.hero .align_left h3, .widget.hero .align_left .content
		{
			clear: none;
			float: none;
			width: 43%;
		}

			.widget.hero .content_container
			{
				color: #213a8f;
			}

			.widget.hero .align_ontop .image + .content_container
			{";

				if(isset($obj_theme_core->options['website_max_width']) && $obj_theme_core->options['website_max_width'] > 0)
				{
					echo "padding: 0;
					max-width: ".$obj_theme_core->options['website_max_width']."px !important;";
				}

			echo "}

				.widget.hero .align_ontop .image + .content_container .content a > p
				{
					background-color: #213a8f;
					border-radius: .4em;
					color: #93d5f6;
					display: inline-block;
					margin-top: 2em;
					padding: 1.5rem 2rem;
				}

					.widget.hero .align_ontop .image + .content_container .content a:hover > p
					{
						background-color: #f5b5d2;
						color: #213a8f;
					}

			.widget.hero .align_right h3, .widget.hero .align_right .content
			{
				margin-right: -10% !important;
			}

			.widget.hero .align_left h3, .widget.hero .align_left .content
			{
				margin-left: -10% !important;
			}

			.widget.hero .align_right .content, .widget.hero .align_left .content
			{
				width: 40%;
			}

				.is_mobile .widget.hero h3, .is_mobile .widget.hero .content
				{
					width: 100%;
				}

		.widget.hero h3 a, .widget.hero h3 span
		{
			line-height: 1.3;
		}

		#mf-content article h1 > a:hover
		{
			color: #702283;
			text-decoration: underline;
		}

		#mf-content article .meta > a
		{
			color: #702283;
			font-style: normal;
			text-decoration: underline;
		}

			article .meta > a:before
			{
				content: '#';
			}

		#mf-content ul li a:hover
		{
			color: #702283;
			text-decoration: underline;
		}

		#wrapper .login_form #loginform
		{
			background: rgba(147,213,246,.4);
			margin-bottom: 2em;
		}

		/* Typography and sizes on content */
		/* ########################### */
		#mf-content .has-small-font-size
		{
			font-size: 1.3em;
		}

		#mf-content .has-medium-font-size
		{
			font-size: 2em;
		}

		#mf-content .has-large-font-size
		{
			font-size: 3.6em;
		}
		/* ########################### */

		.custom_list
		{
			display: -webkit-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-flex-wrap: wrap;
			-webkit-flex-wrap: wrap;
			-ms-flex-wrap: wrap;
			flex-wrap: wrap;
		}

			.custom_list li
			{
				-webkit-box-flex: 0 1 auto;
				-webkit-flex: 0 1 auto;
				-ms-flex: 0 1 auto;
				flex: 0 1 auto;
				margin: 0 .5% 1em .5%;
				text-align: center;
				width: 24%;
			}

			.is_tablet .custom_list li
			{
				width: 32%;
			}

			.is_mobile .custom_list li
			{
				width: 99%;
			}

				.custom_list .image
				{
					height: 0;
					margin-bottom: .5em;
					padding-bottom: 100%;
					overflow: hidden;
				}

					.custom_list.custom_list_vara-politiker .image, .custom_list.custom_list_style_people .image
					{
						border-radius: 50%;
					}

						.custom_list.custom_list_vara-politiker .image img, .custom_list.custom_list_style_people .image img
						{
							height: auto;
							min-height: 100%;
							object-fit: cover;
							width: 100%;
						}

			.custom_list_one_col
			{
				list-style: none;
			}

				.custom_list_one_col li
				{
					overflow: hidden;
				}

					.custom_list_one_col .image
					{
						float: left;
						width: 30%;
					}

					.custom_list_one_col p
					{
						float: right;
						width: 65%;
					}

		.aside:not(.right) h3
		{
			font-size: 1.8em;
			text-align: center;
		}";

	//echo ".widget.social_feed{}";

		echo ".widget.social_feed h3
		{
			font-weight: normal;
			padding: .5em 0 1em;
			text-align: center;
		}

	footer .vcard .social.circle .fa, footer .vcard .social.circle .fab
	{
		font-size: 1.5em;
	}

	footer .vcard .social.colorize .fa, footer .vcard .social.colorize .fab
	{
		background: #213a8f;
		border-color: #213a8f;
		color: #93d5f6;
	}

		footer .vcard .social.colorize .fa:hover, footer .vcard .social.colorize .fab:hover
		{
			background: #702283;
			border-color: #702283;
			color: #93d5f6;
		}

		footer .vcard .social.colorize .fa:after, footer .vcard .social.colorize .fab:after
		{
			display: none;
		}

	footer a:hover
	{
		text-decoration: underline;
	}

	footer .widget h3
	{
		font-weight: 900;
	}

	footer .theme_logo
	{
		padding-top: 5em;
		text-align: center;
	}

	footer .theme_logo #site_logo
	{
		display: block;
		float: none;
		margin: 0 auto;
		width: 30%;
	}
}";