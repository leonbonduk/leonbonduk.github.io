<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Drop-Down Navigation: Touch-Friendly and Responsive demo by Osvaldas Valutis</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Demo of Drop-Down Navigation: Touch-Friendly and Responsive" />
	<meta name="robots" content="all">
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<link rel="canonical" href="https://www.evolving.money/">
	<!-- <link rel="icon" href="https://www.evolving.money/favicon.ico" /> !-->
	<link rel="stylesheet" href="https://www.evolving.money/css/new-header.css" />
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400">
	<style>

		body
		{
			background-color: #f7efeb;
			padding: 0em; /* 1.25em */
			margin-left: 0em; 
			margin-right: 0em;		
		}

		#nav
		{
			width: 100%; /* 1000 */
			font-family: 'Open Sans', sans-serif;
			font-weight: 400;
			/* position: absolute; */
			float: left;
			top: 0%; /* 25% */
			left: 0%;   /* 50% */
			margin-left: 0em; /* -30em */
			margin-right: 0em;
		}

			#nav > a
			{
				display: none;
			}

			#nav li
			{
				position: relative;
			}
				#nav li a
				{
					color: #fff;
					display: block;
				}
				#nav li a:active
				{
					background-color: #315084 !important;  /* hovered over top barw*/
				}

			#nav span:after
			{
				width: 0;
				height: 0;
				border: 0.313em solid transparent; /* 5 */
				border-bottom: none;
				border-top-color: #4772bb; /* sub-menu arrow*/
				content: '';
				vertical-align: middle;
				display: inline-block;
				position: relative;
				right: -0.313em; /* 5 */
			}

			/* first level */

			#nav > ul
			{
				height: 3.75em; /* 60 */
				background-color: #274168; /* #4772bb inactive top box color */
			}
				#nav > ul > li
				{
					width: 25%;
					height: 100%;
					float: left;
				}
					#nav > ul > li > a
					{
						height: 100%;
						font-size: 1.5em; /* 24 */
						line-height: 2.5em; /* 60 (24) */
						text-align: center;
					}
						#nav > ul > li:not( :last-child ) > a
						{
							border-right: 1px solid #315084;
						}
						#nav > ul > li:hover > a,
						#nav > ul:not( :hover ) > li.active > a
						{
							background-color: #315084;
						}


				/* second level */

				#nav li ul
				{
					background-color: #315084; /* sub-menu unselected */
					display: none;
					position: absolute;
					top: 100%;
				}
					#nav li:hover ul
					{
						display: block;
						left: 0;
						right: 0;
					}
						#nav li:not( :first-child ):hover ul
						{
							left: -1px;
						}
						#nav li ul a
						{
							font-size: 1.25em; /* 20 */
							border-top: 1px solid #274168;
							padding: 0.75em; /* 15 (20) */
						}
							#nav li ul li a:hover,
							#nav li ul:not( :hover ) li.active a
							{
								background-color: #274168;
							}


		@media only screen and ( max-width: 62.5em ) /* 1000 */
		{
			#nav
			{
				width: 100%;
				position: static;
				margin: 0;
			}
		}

		@media only screen and ( max-width: 40em ) /* 640 */
		{
			html
			{
				font-size: 75%; /* 12 */
			}

			#nav
			{
				position: relative;
				top: auto;
				left: auto;
			}
				#nav > a
				{
					width: 100%; /* 3.125em or 50 */
					height: 3.125em; /* 3.125em or 50*/
					text-align: left;
					text-indent: -9999px;
					background-color: #274168; /*  #f47e29 back ground to burger */
					position: relative;
				}
					#nav > a:before,
					#nav > a:after
					{
						position: absolute;
						border: 2px solid #fff; /*#fff */
						top: 35%; /* 35% top part of burger */
						left: 12px; /* 25% */
						width: 20px;
						/*right: 25%; /* 25% */
						content: '';
					}
					#nav > a:after
					{
						top: 60%; /* 60% bottom part of burger */

					}

				#nav:not( :target ) > a:first-of-type,
				#nav:target > a:last-of-type
				{
					display: block;
				} 

			/* first level */

			#nav > ul
			{
				height: auto;
				display: none;
				position: absolute;
				left: 0;
				right: 0;
			}
				#nav:target > ul
				{
					display: block;
				}
				#nav > ul > li
				{
					width: 100%;
					float: none;
				}
					#nav > ul > li > a
					{
						height: auto;
						text-align: left;
						padding: 0 0.833em; /* 20 (24) */
					}
						#nav > ul > li:not( :last-child ) > a
						{
							border-right: none;
							border-bottom: 1px solid #315084; /* not sure */
						}


				/* second level */

				#nav li ul
				{
					position: static;
					padding: 1.25em; /* 20 */
					padding-top: 0;
				}
		}

	</style>
</head>

<body>




<nav id="nav" role="navigation">
	<a href="#nav" title="Show navigation">Show navigation</a>
	<a href="#" title="Hide navigation">Hide navigation</a>
	<ul class="clearfix">
		<li><a href="?home">Home</a></li>
		<li>
			<a href="?blog" aria-haspopup="true"><span>Blog</span></a>
			<ul>
				<li><a href="?design">Design</a></li>
				<li><a href="?html">HTML</a></li>
				<li><a href="?css">CSS</a></li>
				<li><a href="?javascript">JavaScript</a></li>
			</ul>
		</li>
		<li>
			<a href="?work" aria-haspopup="true"><span>Work</span></a>
			<ul>
				<li><a href="?webdesign">Web Design</a></li>
				<li><a href="?typography">Typography</a></li>
				<li><a href="?frontend">Front-End</a></li>
			</ul>
		</li>
		<li><a href="?about">About</a></li>
	</ul>
</nav>

<script src="https://www.evolving.money/navbar-nodejs/jquery.min.js"></script>
<script src="https://www.evolving.money/navbar-nodejs/doubletaptogo.js"></script>
<script>
	$( function()
	{
		$( '#nav li:has(ul)' ).doubleTapToGo();
	});
</script>




<!--
	STUFF
-->


<script src="https://www.evolving.money/navbar-nodejs/main.js"></script>
<!--<script>var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-7572727-1']); _gaq.push(['_trackPageview']); (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s); })();</script>
!-->



</body>

</html>
