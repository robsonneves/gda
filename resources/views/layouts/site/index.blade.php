<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" ng-app="App" >

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>GDA Mobile</title>

		<!-- CSS -->
                           <link rel="stylesheet" type="text/css" media="screen" href="{{elixir("assets/site/css/everything.css")}}">

                	<!-- LIB JS -->
                            <script src="{{asset('site/requirejs/require.js')}}" data-main="{{asset("site/requirejs/main.js")}}"></script>
                            <script src="{{asset("assets/site/libs/jquery-2.1.3.min.js")}}"></script>
                            <script src="{{asset("assets/site/libs/angular-1.3.15.min.js")}}"></script>
                            <script src="{{asset("assets/site/requirejs/controllers.js")}}"></script>

    </head>

	<!--

	TABLE OF CONTENTS.

	Use search to find needed section.

	===================================================================

	|  01. #MENU                                                      |
	|  02. #INTRO                                                     |
	|  03. #PRICING                                                   |
	|  04. #TEAM                                                      |
	|  05. #FEATURES                                                  |
	|  06. #SCREENSHOT                                                |
	|  07. #UPDATES                                                   |
	|  08. #QUOTES                                                    |
	|  09. #CONTACT                                                   |
	|  10. #BOTTOM CONTENT                                            |
	|  11. #FOOTER                                                    |
	|  12. #Core Javascript                                           |
	|  13. #REVOLUITION SLIDER                                        |
	|  14. #PAGE SCRIPT                                               |

	===================================================================

	-->

	<body ng-controller="appController" class="desktop-detected menu-on-top">

		@include('layouts.site.menu')

		<div ng-show="loading">
		    <div class="container">
		  		<div class="modal-backdrop fade in" id="myModal">
				    <div class="modal-dialog">
					    <div class="modal-content" style="margin: 250px 200px; background: black">
					        <div class="modal-body text-align-center" >
					        	<i class="fa fa-refresh fa-4x fa-spin txt-color-black"></i>
					        </div>
				        </div>
					</div>
			    </div>
			</div>
		</div>

		<div style="padding-bottom: 250px;">

        @yield('content')

		</div>
        <!-- Dynamic Modal -->
        <div class="modal fade" id="remoteModal" tabindex="-1" role="dialog" aria-labelledby="remoteModalLabel" aria-hidden="true">
			<div class="modal-dialog">
                <div class="modal-content">

                </div>
            </div>
        </div>

        <div class="modal fade" id="remoteModal2" tabindex="-1" role="dialog" aria-labelledby="remoteModalLabel" aria-hidden="true">
			<div class="modal-dialog">
                <div class="modal-content">

                </div>
            </div>
        </div>
        <!-- /.modal -->

		 <!-- #FOOTER -->
		@include('layouts.site.footer')
        <!-- / #FOOTER -->

        <script src="{{elixir("assets/site/js/everything.js")}}"></script>



		<!-- #PAGE SCRIPT -->
		<script type="text/javascript">
			jQuery(document).ready(function() {

             jQuery('.tp-banner').show().revolution({
					dottedOverlay : "none",
					delay : 8000,
					startwidth : 1170,
					startheight : 700,
					hideThumbs : 200,

					thumbWidth : 100,
					thumbHeight : 50,
					thumbAmount : 5,

					navigationType : "bullet",
					navigationArrows : "solo",
					navigationStyle : "preview4",

					touchenabled : "on",
					onHoverStop : "off",

					swipe_velocity : 0.7,
					swipe_min_touches : 1,
					swipe_max_touches : 1,
					drag_block_vertical : false,

					parallax : "mouse",
					parallaxBgFreeze : "on",
					parallaxLevels : [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],

					keyboardNavigation : "off",

					navigationHAlign : "center",
					navigationVAlign : "bottom",
					navigationHOffset : 0,
					navigationVOffset : 20,

					soloArrowLeftHalign : "left",
					soloArrowLeftValign : "center",
					soloArrowLeftHOffset : 20,
					soloArrowLeftVOffset : 0,

					soloArrowRightHalign : "right",
					soloArrowRightValign : "center",
					soloArrowRightHOffset : 20,
					soloArrowRightVOffset : 0,

					shadow : 0,
					fullWidth : "off",
					fullScreen : "on",

					spinner : "spinner4",

					stopLoop : "off",
					stopAfterLoops : -1,
					stopAtSlide : -1,

					shuffle : "off",

					autoHeight : "off",
					forceFullWidth : "off",

					hideThumbsOnMobile : "off",
					hideNavDelayOnMobile : 1500,
					hideBulletsOnMobile : "off",
					hideArrowsOnMobile : "off",
					hideThumbsUnderResolution : 0,

					hideSliderAtLimit : 0,
					hideCaptionAtLimit : 0,
					hideAllCaptionAtLilmit : 0,
					startWithSlide : 0,
					fullScreenOffsetContainer : ""
				});

			});

			$.scrollUp();

            $('a.load').click( function() {

                var url  = $(this).data('url');
                $('#'+url).find('.timeline-centered').html("Carregando" );
                $.get( "/site/"+url, function( data ) {
                    $('#'+url).find('.timeline-centered').html(data );
                });

            });


            $('.modal')
                    .on({
                        'show.bs.modal': function() {
                            var idx = $('.modal:visible').length;
                            $(this).css('z-index', 1040 + (10 * idx));
                        },
                        'shown.bs.modal': function() {
                            var idx = ($('.modal:visible').length) - 1; // raise backdrop after animation.
                            $('.modal-backdrop').not('.stacked')
                                    .css('z-index', 1039 + (10 * idx))
                                    .addClass('stacked');
                        },
                        'hidden.bs.modal': function() {
                            if ($('.modal:visible').length > 0) {
                                // restore the modal-open class to the body element, so that scrolling works
                                // properly after de-stacking a modal.
                                setTimeout(function() {
                                    $(document.body).addClass('modal-open');
                                }, 0);
                            }
                        }
                    });

		</script>
	</body>
</html>


