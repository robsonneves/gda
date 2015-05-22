<style type="text/css">.p-ico1{margin: 0px 0px 40px 20px;}.p-ico2{margin: -52px 0px 40px 90px;}.p-ico3{margin: -14px 0px 40px 10px;}
.linkModulo a:hover {color:#999999 !important;background-color: #ffffff !important;}
</style> <!-- AJUSTA A POSIÇÃO DOS ICONES, DENTRO DE MENU MODULOS/ A COR DO LINK DO ICONE DO MODULO-->

<header id="header">
    <div id="logo-group">
         <!-- PLACE YOUR LOGO HERE -->
         <span id="logo"> <a href="/site"><img src="{{asset("assets/site/img/logoGDA.png")}}" alt="Gda"> </a></span>
         <!-- END LOGO PLACEHOLDER -->

        @if (Auth::check())

            {{-- ABA MSG MENU LEFT
                <span id="activity"  data-toggle="dropdown">
                    <span ><i class="fa fa-user"></i><b class="badge"> 21 </b>
                </span>
                </span>
                    <div class="dropdown-menu">
                        <div class="custom-scroll">
                            <div class="alert alert-transparent">
                                <h4>Click a button to show messages here</h4>
                                This blank page message helps protect your privacy, or you can show the first message here automatically.
                            </div>
                            <a href="javascript:void(0);"><i class="fa fa-power-off"></i> Fechar </a>
                        </div>
                    </div>
            --}}
        @endif

    </div>


        @if(Auth::guest())

    <!-- pulled right: nav area -->
    {{--<div class="pull-right">
        <!-- Top menu profile link : this shows only when top menu is active -->
        <ul id="mobile-profile-img" class="header-dropdown-list hidden-lg padding-5">
            <li class="">
                <a href="{{url('/auth/login')}}" data-toggle="modal" data-target="#remoteModal" id="dialog-modal">
                    <img class="img-circle" src="{{asset("assets/site/img/entrar.png")}}" width="40" height="40">
                </a>
            </li>
        </ul>
    </div>
    --}}
        @else
    {{--    ABA MSG 2 MENU LEFT
            <!-- #PROJECTS: projects dropdown -->
            <div class="project-context hidden-xs">
                <span class="label">Projects:</span>
                <span class="project-selector dropdown-toggle" data-toggle="dropdown">Recent projects <i class="fa fa-angle-down"></i></span>
                <!-- Suggestion: populate this list with fetch and push technique -->
                <ul class="dropdown-menu">
                    <li>
                        <a href="javascript:void(0);">Online e-merchant management system - attaching integration with the iOS</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">Notes on pipeline upgradee</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">Assesment Report for merchant account</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:void(0);"><i class="fa fa-power-off"></i> Clear</a>
                    </li>
                </ul>
                <!-- end dropdown-menu-->
            </div>
    --}}<!-- end projects dropdown -->

    <!-- pulled right: nav area -->
    <div class="pull-right">
        <!-- collapse menu button -->
        <div id="hide-menu" class="btn-header pull-right">
            <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
        </div>
        <!-- end collapse menu -->

        <!-- Top menu profile link : this shows only when top menu is active -->
        <ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
            <li class="" ng-controller="ShowSocialProfile">
                <a href="#" class="dropdown-toggle no-margin" data-toggle="dropdown">
                    <img class="online img-circle"  ng-if="social !== '' " src="@{{social.avatar}}"  width="40" height="40" >
                    <img class="online img-circle"  ng-if="social === '' " src="{{asset("assets/site/img/avatars/male.png")}}"  width="40" height="40" >
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="{{ url('/site/profile') }}" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-user fa-lg"></i> Perfil </a>
                    </li>
                    <li>
                        <a href="{{ url('/auth/logout') }}" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>S</u>air</strong></a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- search mobile button (this is hidden till mobile view port) -->
        <div id="search-mobile" class="btn-header transparent pull-right">
            <span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
        </div>
        <!-- end search mobile button -->

        <!-- MENU_MODULOS -->
        <div class="pull-right">
            <div class="btn-header">
                <div class="widget-toolbar" role="menu">
                    <a data-toggle="dropdown" class="dropdown-toggle color-box selector" aria-expanded="false">
                        <i class="fa fa-th txt-color-blue"></i>
                    </a>
                    <ul class="dropdown-menu arrow-box-up-right pull-right" style="margin-top:18px; width:250px;" >
                        <li class="jumbotron-icon linkModulo ">
                            <a href="/site/processos" class="fa fa-file-text-o txt-color-red icon-3 p-ico1" rel="tooltip" data-placement="top" data-original-title="Processos">
                            </a>
                            <a href="{{route('uploads.index')}}" class="fa fa-download txt-color-black icon-3 p-ico2" rel="tooltip" data-placement="top" data-original-title="Processos">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- multiple lang dropdown : find all flags in the flags page -->
        {{-- Linguagem portugues/ingles
            <ul class="header-dropdown-list hidden-xs">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset("assets/site/img/blank.gif")}}" class="flag flag-br" alt="Brasil"/>
                        <span> BR </span> <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li class="active">
                            <a href="javascript:void(0);"><img src="{{asset("assets/site/img/blank.gif")}}" class="flag flag-br" alt="Brasil"/> Português (BR)</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{asset("assets/site/img/blank.gif")}}" class="flag flag-us" alt="United States"/> English (US)</a>
                        </li>
                    </ul>
                </li>
            </ul>
        --}}
        <!-- end multiple lang -->
    </div>

        @endif

</header>
<!-- END HEADER -->




