    <div class="widget-toolbar" role="menu">
        <a data-toggle="dropdown" class="dropdown-toggle color-box selector" href="javascript:void(0);" aria-expanded="false"></a>
        <ul class="dropdown-menu arrow-box-up-right color-select pull-right">
            <li>
                <span data-color="#356e35" class="bg-color-green addColor" rel="tooltip" data-placement="left" data-original-title="Verde"></span>
            </li>
            <li>
                <span data-color="#496949" class="bg-color-greenDark addColor" rel="tooltip" data-placement="top" data-original-title="Verde escuro"></span>
            </li>
            <li>
                <span data-color="#71843f" class="bg-color-greenLight addColor" rel="tooltip" data-placement="top" data-original-title="Verde claro"></span>
            </li>
            <li>
                <span data-color="#6e587a" class="bg-color-purple addColor" rel="tooltip" data-placement="top" data-original-title="Roxo"></span>
            </li>
            <li>
                <span data-color="#6e3671" class="bg-color-magenta addColor" rel="tooltip" data-placement="top" data-original-title="Roxo escuro"></span>
            </li>
            <li>
                <span data-color="#ac5287" class="bg-color-pink addColor" rel="tooltip" data-placement="top" data-original-title="Rosa"></span>
            </li>
            <li>
                <span data-color="#a8829f" class="bg-color-pinkDark addColor" rel="tooltip" data-placement="left" data-original-title="Rosa claro"></span>
            </li>
            <li>
                <span data-color="#92a2a8" class="bg-color-blueLight addColor" rel="tooltip" data-placement="top" data-original-title="Azul claro"></span>
            </li>
            <li>
                <span data-color="#57889c" class="bg-color-teal addColor" rel="tooltip" data-placement="top" data-original-title="Azul escuro"></span>
            </li>
            <li>
                <span data-color="#57889c" class="bg-color-blue addColor" rel="tooltip" data-placement="top" data-original-title="Azul oceano"></span>
            </li>
            <li>
                <span data-color="#4c4f53" class="bg-color-blueDark addColor" rel="tooltip" data-placement="top" data-original-title="Preto Céu"></span>
            </li>
            <li>
                <span data-color="#404040" class="bg-color-darken addColor" rel="tooltip" data-placement="top" data-original-title="Noite"></span>
            </li>
            <li>
                <span data-color="#b09b5b" class="bg-color-yellow addColor" rel="tooltip" data-placement="left" data-original-title="Dia claro"></span>
            </li>
            <li>
                <span data-color="#c79121" class="bg-color-orange addColor" rel="tooltip" data-placement="top" data-original-title="Laranja"></span>
            </li>
            <li>
                <span data-color="#a57225" class="bg-color-orangeDark addColor" rel="tooltip" data-placement="top" data-original-title="Laranja escuro"></span>
            </li>
            <li>
                <span data-color="#a90329" class="bg-color-red addColor" rel="tooltip" data-placement="top" data-original-title="Vermelho"></span>
            </li>
            <li>
                <span data-color="#a65858" class="bg-color-redLight addColor" rel="tooltip" data-placement="top" data-original-title="Vermelho claro"></span>
            </li>
            <li>
                <span data-color="#ffffff" class="bg-color-white addColor"  rel="tooltip" data-placement="top" data-original-title="Branco"></span>
            </li>
            <li>
                <a  id="delColor" rel="tooltip" data-placement="bottom" data-original-title="Deixar cor padrão">Remover cor
                </a>
            </li>
        </ul>
    </div>

<script type="text/javascript">
    
    $(document).ready(function(){
        $("#box").css("background", $.cookie('color'));
    });

    $(".addColor" ).click(function() {
        $.cookie('color', $(this).data('color'));
        $("#box").css("background",$(this).data('color'));
    });

    $("#delColor").click(function() {
        $.removeCookie ('color');
        $("#box").css("background","#cccccc");
    });
        
</script>


