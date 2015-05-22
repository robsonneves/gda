<style type="text/css">.fixa { position: fixed; bottom: 0px; width: 100%;} </style> <!-- FIXA RODAPÉ-->

<footer class="fixa">
    <div class="footer-content clearfix">
        <div class="container custom-container">
            <div class="row-fluid">
                <div class="col-md-2 col-sm-6 col-xs-12">
                    
                    <font color="e25450">Matriz - PR</font>
                    <p>
                      Av. Manoel Ribas n° 857, Mercês
                    <br>
                    Curitiba - PR  
                    <br>
                    Cep 80510-346
                    <br>
                    <abbr title="Phone">Tel</abbr> (41) 3072-7500 
                    </p>


                    <a href="{{ url('/contato') }}">
                        <font color="e25450" size="20">Contato</font>
                    </a>



                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    
                    <font color="e25450">Filial - SP</font>
                    <p>
                      Av. Ten. Haroldo Egídio S. Santos n° 365, 
                    <br>
                    Campinas - SP  
                    <br>
                    Cep 13070-160
                    <br>
                    <abbr title="Phone">Tel</abbr> (19) 3368-9568 
                    </p>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    
                    <font color="e25450">Filial - PB</font>
                    <p>
                      Av. Francisca Moura n° 434/505, Centro
                    <br>
                    João Pessoa - PB  
                    <br>
                    Cep 58013-440
                    <br>
                    <abbr title="Phone">Tel</abbr> (83) 3578-8835 
                    </p>
                </div>

                <div ng-controller="ShowSocialRecents" class="col-md-2 col-sm-3 col-xs-3">
                    <font color="b9b9b9"><b>Usuários</b></font><p>
                    <ul ng-repeat="social in recents" class="list-inline friends-list col-sm-4">
                        <li> <a href="@{{social.link}}" target="_blank"><img src="@{{social.avatar}}" width="35" height="35" title="@{{$social.nome}}"> </a> </l>
                    </ul>
                </div>

                <div id="fb-root" class="col-md-2 col-sm-3 col-xs-12"></div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>

                <div class="fb-page" data-href="https://www.facebook.com/pages/A-Augusto-Grellert-Advogados/189678004403266?fref=ts" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>

             </div>
        </div>
    </div>
    {{--
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <p>
                    <a href="http://www.aag.adv.br/" target="_blank">A. Augusto Grellert Advogados Associados.</a>   
                    <br>
                    <a href="https://www.facebook.com/pages/A-Augusto-Grellert-Advogados/189678004403266?fref=ts" target="_blank"> <i class="fa fa-facebook-square fa-lg txt-color-blue"></i>  </a>
                    <a href="https://br.linkedin.com/"     target="_blank"> <i class="fa fa-linkedin-square fa-lg txt-color-white"></i> </a>
                    <a href="https://twitter.com/?lang=pt" target="_blank"> <i class="fa fa-twitter-square fa-lg txt-color-blueLight"></i>  </a>
                    <a href="https://plus.google.com/"     target="_blank"> <i class="fa fa-google-plus-square fa-lg txt-color-redLight"></i> </a>
                    </p>
                </div>
            </div>
        </div>
    </div>--}}
</footer>




