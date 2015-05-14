<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>GDA Mobile</title>

		<!-- CSS -->
        <link rel="stylesheet" type="text/css" media="screen" href="{{elixir("site/css/everything.css")}}">
   
        <!-- LIB JS -->
        

        <script src="{{secure_asset('site/requirejs/require.js')}}" data-main="{{asset("site/requirejs/main.js")}}"></script>





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

	<body ng-app="App" class="desktop-detected menu-on-top">

       	@include('layouts.site.menu')
        

        @if(Auth::guest())

            <!-- Section: #INTRO -->
	        <section class="intro">
				@include('layouts.site.intro')
			</section>
	        <!-- /Section: INTRO -->
			<!-- Section: #CONTACT -->
            <section id="contact" class="home-section text-center">
                <div class="heading-contact marginbot-50">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
								<div class="section-heading">
                                    <h2>Entre em contato</h2>
								</div>
							</div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-offset-2">
                            <div class="boxed-grey">
                                <form id="form-controller" data-type="post" method="post" action="/site/contato">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name"> Nome</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Entre com seu nome" required="required" />
                                            </div>
                                            <div class="form-group">
                                                <label for="email"> Endereço de email</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-envelope-o"></span> </span>
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Entre com seu email" required="required" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="subject"> Opções</label>
                                                <select id="subject" name="subject" class="form-control" required="required">
                                                    <option value=""></option>
                                                    <option value="contatc">Contato</option>
                                                    <option value="service">Primeiro Acesso</option>
												</select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name"> Mensagem</label>
                                                <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Digite sua mensagem"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-large pull-right">
                                                Enviar mensagem
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Section: CONTACT -->


        @else
            <div class="container" style="width: 100%">
            @yield('content')
            </div>
            
        @endif

        <!-- Dynamic Modal -->
        <div class="modal fade" id="remoteModal" tabindex="-1" role="dialog" aria-labelledby="remoteModalLabel" aria-hidden="true">

            <div class="modal-dialog">
                <div class="modal-content">

                </div>
            </div>
        </div>
        <!-- /.modal -->

		<!-- Section: #login-->
    	@include('layouts.site.login')
        <!-- /Section: Login -->

		 <!-- #FOOTER -->
        @include('layouts.site.footer')
        <!-- / #FOOTER -->

        <script src="{{elixir("site/js/everything.js")}}"></script>

        <script src="{{secure_asset("/site/js/formController.js")}}"> </script>

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

		</script>
	</body>
</html>


