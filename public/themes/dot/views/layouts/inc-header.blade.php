<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="robot" content="index, follow" />
<meta name="generator" content="Brackets">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="google" content="notranslate">

<!-- Global site tag (gtag.js) - Google Analytics -->
{{-- <script async src="https://www.googletagmanager.com/gtag/js?id={{ setting('site.google_analytics_tracking_id') }}"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '{{ setting("site.google_analytics_tracking_id") }}');
</script> --}}


<!-- meta share facebook -->
<!-- $_SERVER['REQUEST_URI'] -->

{{-- @if( strstr($_SERVER['REQUEST_URI'],"/content-sharing/content-sharing-detail/") )
<meta property="og:url"           content="http://172.25.1.27/content-sharing/content-sharing-detail/{{$dataContentById[0]['id']}}" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{{$dataContentById[0]['title']}}" />
<meta property="og:description"   content="@if($dataContentById[0]['short_description']){!!strip_tags($dataContentById[0]['short_description'])!!}  @else $dataContentById[0]['title'] @endif" />
<meta property="og:image"         content="http://172.25.1.27/storage/content-sharings/October2018/{{$dataContentById[0]['id']}}.jpg" />
<!-- end meta share facebook -->
@endif

<!-- meta share social library-detail page -->
@if( strstr($_SERVER['REQUEST_URI'],"/library/detail/") )
<meta property="og:url"           content="http://172.25.1.27/library/detail/{{$detail['id']}}" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{{$detail['title']}}" />
<meta property="og:description"   content="@if($detail['short_description']){!!strip_tags($detail['short_description'])!!}  @else $detail['title'] @endif" />
<meta property="og:image"         content="http://172.25.1.27/storage/{{$detail['image']}}" />
@endif
<!-- end meta share library-detail page -->

<!-- meta share mission-statement -->
@if( strstr($_SERVER['REQUEST_URI'],"/mission-statement") )
@if(!empty($alldata))
<meta property="og:url"           content="http://172.25.1.27/mission-statement" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{{$alldata[0]['title']}}" />
<meta property="og:description"   content="@if($alldata[0]['short_description']){!!strip_tags($alldata[0]['short_description'])!!}  @else $alldata[0]['title'] @endif" />
<meta property="og:image"         content="http://172.25.1.27/storage/{{$alldata[0]['image']}}" />
<!-- end meta share facebook -->
@endif
@endif

<!-- meta share mission-authority -->
@if( strstr($_SERVER['REQUEST_URI'],"/mission-and-authority") )
@if(!empty($alldata))
<meta property="og:url"           content="http://172.25.1.27/mission-and-authority" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{{$alldata[0]['title']}}" />
<meta property="og:description"   content="@if($alldata[0]['title']){!!strip_tags($alldata[0]['title'])!!}  @else $alldata[0]['title'] @endif" />
<meta property="og:image"         content="http://172.25.1.27/storage/{{$alldata[0]['image']}}" />
<!-- end meta share facebook -->
@endif
@endif

<!-- meta share news-inform -->
@if( strstr($_SERVER['REQUEST_URI'],"/news/inform/detail") )
@if(!empty($alldata))
<meta property="og:url"           content="http://172.25.1.27/news/inform/detail/{{$alldata['id']}}" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{{$alldata['title']}}" />
<meta property="og:description"   content="@if($alldata['title']){!!strip_tags($alldata['title'])!!}  @else $alldata['title'] @endif" />
<meta property="og:image"         content="http://172.25.1.27/storage/{{$alldata['image']}}" />
<!-- end meta share facebook -->
@endif
@endif

<!-- meta share news-manager -->
@if( strstr($_SERVER['REQUEST_URI'],"/news/manager/detail") )
@if(!empty($alldata))
<meta property="og:url"           content="http://172.25.1.27/news/manager/detail/{{$alldata['id']}}" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{{$alldata['title']}}" />
<meta property="og:description"   content="@if($alldata['title']){!!strip_tags($alldata['title'])!!}  @else $alldata['title'] @endif" />
<meta property="og:image"         content="http://172.25.1.27/storage/{{$alldata['image']}}" />
<!-- end meta share facebook -->
@endif
@endif

<!-- meta share news-procurement -->
@if( strstr($_SERVER['REQUEST_URI'],"/news/procurement-detail") )
@if(!empty($alldata))
<meta property="og:url"           content="http://172.25.1.27/news/procurement-detail/{{$alldata['id']}}" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{{$alldata['title']}}" />
<meta property="og:description"   content="@if($alldata['title']){!!strip_tags($alldata['title'])!!}  @else $alldata['title'] @endif" />
<meta property="og:image"         content="http://172.25.1.27/storage/{{$alldata['image']}}" />
<!-- end meta share facebook -->
@endif
@endif

<!-- meta share news-procurement -->
@if( strstr($_SERVER['REQUEST_URI'],"/news/internal-audit-plan/detail") )
@if(!empty($alldata))
<meta property="og:url"           content="http://172.25.1.27/news/internal-audit-plan/detail/{{$alldata['id']}}/$category['id']" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{{$alldata['title']}}" />
<meta property="og:description"   content="@if($alldata['title']){!!strip_tags($alldata['title'])!!}  @else $alldata['title'] @endif" />
<meta property="og:image"         content="http://172.25.1.27/storage/{{$alldata['image']}}" />
<!-- end meta share facebook -->
@endif
@endif --}}

<link type="image/ico" rel="shortcut icon" href="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/images/favicon.ico') }}">
<link href="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/css/bootstrap.min.css') }}"  rel="stylesheet">
<link href="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/css/bootstrap-theme.min.css') }}"  rel="stylesheet">
<link type="text/css" rel="stylesheet" href="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/css/layout.css') }}"/>
{{-- <link type="text/css" rel="stylesheet" href="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/css/responsive.css') }}"/> --}}
<link type="text/css" rel="stylesheet" href="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/css/bootstrap-datepicker.css') }}"/>

<script src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/js/jquery.min.js') }}"></script>
<script src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/js/jquery-ui.min.js') }}"></script>
<script src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/js/bootstrap.min.js') }}"></script>
<script src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/js/bootstrap-datepicker.js') }}"></script>

<!-- script app -->
<link rel="stylesheet" href="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/owlcarousel/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/owlcarousel/owl.theme.default.min.css') }}">
<script src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/owlcarousel/owl.carousel.min.js') }}"></script>
<link rel="stylesheet" href="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/flexslider/flexslider.css') }}" type="text/css" media="screen" />
<script defer src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/flexslider/jquery.flexslider.js') }}"></script>
<script type="text/javascript" src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/flexslider/shCore.js') }}"></script>
<script type="text/javascript" src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/flexslider/shBrushJScript.js') }}"></script>

<!-- end script app -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Modernizr -->
    <script src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/flexslider/modernizr.js') }}"></script>



	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/fancybox/jquery.mousewheel-3.0.6.pack.js') }}"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/fancybox/jquery.fancybox.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/fancybox/jquery.fancybox.css') }}" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/fancybox/jquery.fancybox-buttons.css') }}" />
	<script type="text/javascript" src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/fancybox/jquery.fancybox-buttons.js') }}"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/fancybox/jquery.fancybox-thumbs.css') }}" />
	<script type="text/javascript" src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/fancybox/jquery.fancybox-thumbs.js') }}"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/fancybox/jquery.fancybox-media.js') }}"></script>

    <script type="text/javascript" language="javascript" src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/dotdotdot-master/jquery.dotdotdot.js') }}"></script>
		<script type="text/javascript" language="javascript">
			$(function() {
				$('.dotmaster').dotdotdot({
					watch: 'window'
				});
			});
		</script>


    <link rel="stylesheet" href="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/css/wow-master/animate.css') }}">
    <script src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/js/wow-master/wow.js') }}"></script>

    <script>
		wow = new WOW(
		  {
			animateClass: 'animated',
			offset:       100
		  }
		);
		wow.init();


	</script>

	<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.min.css" type="text/css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.2/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.min.js"></script>




{{-- <script src="{{url('/')}}{{'/'}}{{ ThemeService::path('assets/tpso/jquery-placeholder/jquery.placeholder.js') }}"></script>
<script>
    // To test the @id toggling on password inputs in browsers that don’t support changing an input’s @type dynamically (e.g. Firefox 3.6 or IE), uncomment this:
    // $.fn.hide = function() { return this; }
    // Then uncomment the last rule in the <style> element (in the <head>).
    $(function() {
        // Invoke the plugin
        $('input, textarea').placeholder({customClass:'my-placeholder'});
        // That’s it, really.
    });
</script> --}}

<script>
		$(document).ready(function(){

			$( '.service_toggle' ).click(function (event) {
				$('.wrap_menuservice').slideToggle();
			});

			$(function(){
			SyntaxHighlighter.all();
			});
			$(window).on( "load", function() {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: false,
				start: function(slider){
					$(".dotmaster").trigger("update.dot");
				}
			});
			});

			$('.owl-calendar').on('initialized.owl.carousel', function(event){
				//$(".dotmaster").trigger("update.dot");
				$('.wrap_calendar > span').css('top', $('.item_calendar h1').outerHeight(true)+4);
			}).owlCarousel({
				loop:true,
				margin:20,
				nav:true,
				dots:false,
				autoplay:true,
				autoplayTimeout:6000,
				slideBy: 1,
				navText: ["<img class='svg' src='images/left-chevron.svg'>","<img class='svg' src='images/right-chevron.svg'>"],
				responsive:{
					0:{
						items:2,
						margin:15,
						//slideBy: 3
					},
					500:{
						items:2
					},
					768:{
						margin:30,
						items:4
					},
					992:{
						margin:80,
						items:4
					},
					1025:{
						margin:100,
						items:5
					}
				}
			});

			$('.owl-photo').owlCarousel({
				loop:true,
				margin:0,
				nav:false,
				dots:true,
				autoplay:true,
				autoplayTimeout:6000,
				slideBy: 1,
				//navText: ["<img class='svg' src='images/left-chevron.svg'>","<img class='svg' src='images/right-chevron.svg'>"],
				responsive:{
					0:{
						items:1,
						margin:0,
						//slideBy: 3
					}
				}
			});

			$('.owl-ebook').owlCarousel({
				loop:true,
				margin:0,
				nav:false,
				dots:true,
				autoplay:true,
				autoplayTimeout:6000,
				slideBy: 1,
				//navText: ["<img class='svg' src='images/left-chevron.svg'>","<img class='svg' src='images/right-chevron.svg'>"],
				responsive:{
					0:{
						items:1,
						margin:0,
						//slideBy: 3
					}
				}
			});

			$('.owl-content').owlCarousel({
				loop:true,
				margin:0,
				nav:false,
				dots:true,
				autoplay:true,
				autoplayTimeout:6000,
				slideBy: 1,
				//navText: ["<img class='svg' src='images/left-chevron.svg'>","<img class='svg' src='images/right-chevron.svg'>"],
				responsive:{
					0:{
						items:1,
						margin:0,
						//slideBy: 3
					}
				}
			});

			$('.owl-indepartment').owlCarousel({
				loop:true,
				margin:0,
				nav:false,
				dots:true,
				autoplay:true,
				autoplayTimeout:6000,
				slideBy: 1,
				//navText: ["<img class='svg' src='images/left-chevron.svg'>","<img class='svg' src='images/right-chevron.svg'>"],
				responsive:{
					0:{
						items:1,
						margin:0,
						//slideBy: 3
					}
				}
			});

			$('.owl-exdepartment').owlCarousel({
				loop:true,
				margin:0,
				nav:true,
				dots:false,
				autoplay:true,
				autoplayTimeout:6000,
				slideBy: 1,
				navText: ["<img class='svg' src='images/left-chevron.svg'>","<img class='svg' src='images/right-chevron.svg'>"],
				responsive:{
					0:{
						items:1,
						margin:15,
						//slideBy: 3
					},
					500:{
						items:2
					},
					768:{
						margin:30,
						items:2
					},
					992:{
						margin:30,
						items:3
					},
					1025:{
						margin:30,
						items:3
					}
				}
			});

			$(function(){
				jQuery('img.svg').each(function(){
					var $img = jQuery(this);
					var imgID = $img.attr('id');
					var imgClass = $img.attr('class');
					var imgURL = $img.attr('src');

					jQuery.get(imgURL, function(data) {
						// Get the SVG tag, ignore the rest
						var $svg = jQuery(data).find('svg');

						// Add replaced image's ID to the new SVG
						if(typeof imgID !== 'undefined') {
							$svg = $svg.attr('id', imgID);
						}
						// Add replaced image's classes to the new SVG
						if(typeof imgClass !== 'undefined') {
							$svg = $svg.attr('class', imgClass+' replaced-svg');
						}

						// Remove any invalid XML tags as per http://validator.w3.org
						$svg = $svg.removeAttr('xmlns:a');

						// Check if the viewport is set, else we gonna set it if we can.
						if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
							$svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
						}

						// Replace image with new SVG
						$img.replaceWith($svg);

					}, 'xml');

				});
			});

			 $('.input-group.date').datepicker();
		});
		</script>
