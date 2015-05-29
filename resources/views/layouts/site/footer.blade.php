<style type="text/css">.fixa { position: fixed; bottom: 0px; width: 100%;} </style> <!-- FIXA RODAPÉ-->

<footer class="fixa">
    <div class="footer-content clearfix">
        <div class="container custom-container">
            <div class="row-fluid">
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <font color="e25450">Matriz - PR</font>
                    <p>
                      Av. Manoel Ribas n° 857, Mercês
                    Curitiba - PR  
                    Cep 80510-346
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
                    Campinas - SP  
                    Cep 13070-160
                    <abbr title="Phone">Tel</abbr> (19) 3368-9568 
                    </p>
                </div>
                
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <font color="e25450">Filial - PB</font>
                    <p>
                      Av. Francisca Moura n° 434/505, Centro
                    João Pessoa - PB  
                    Cep 58013-440
                    <abbr title="Phone">Tel</abbr> (83) 3578-8835 
                    </p>
                </div>

                <div ng-controller="ShowSocialRecents" class="col-md-6 col-sm-6 col-xs-12">
                    <a href="/social/all"><font color="b9b9b9"><b>Usuários</b></font><p></p></a>
                    
                    <ul ng-repeat="social in recents" class="list-inline friends-list col-sm-1">

                        <li  ng-if="social.avatar == null"> <a href="@{{social.link}}" target="_blank"><img src="{{asset("assets/site/img/avatars/male.png")}}" width="35" height="35" title="@{{$social.name}}"> </a> </li>
                        <li  ng-if="social.avatar != null"> <a href="@{{social.link}}" target="_blank"><img src="@{{social.avatar}}" width="35" height="35" title="@{{$social.name}}"> </a> </li>

                    </ul>
                    
                    <a href="{{route('social.all')}}" > ..mais</a>
                </div>  
            </div>
        </div>
    </div>

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

                <div class="pull-right testes" style="margin-top: -40px;">
                    <div class="fb-share-button" data-href="http://gda.aag.adv.br" data-layout="button_count"></div>

                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://gda.aag.adv.br" data-via="AagAdvogados" data-lang="pt" data-dnt="true">Tweetar</a>

                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
                    </script>

                    <script>
                            (function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                    </script>
                    
                    <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: pt_BR</script>
                    <script type="IN/Share" data-url="www.gda.aag.adv.br" data-counter="right"></script>
                </div>
            </div>
        </div>
    </div>
</footer>




