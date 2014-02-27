<?php

/* PosdtaSiteBundle:Login:index.html.twig */
class __TwigTemplate_87874f139dd52087c24e7e49851a74e6dffc3824cf696a35b86e2dd954590322 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>Registrate</title>
\t";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b0e4b15_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b0e4b15_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/b0e4b15_favicon_1.png");
            // line 7
            echo "\t<link rel=\"shortcut icon\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
\t";
        } else {
            // asset "b0e4b15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b0e4b15") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/b0e4b15.png");
            echo "\t<link rel=\"shortcut icon\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
\t";
        }
        unset($context["asset_url"]);
        // line 9
        echo "\t
\t";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "76c252b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76c252b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/76c252b_errorHandling_1.js");
            // line 13
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "76c252b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76c252b_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/76c252b_jquery_2.js");
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "76c252b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76c252b") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/76c252b.js");
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        // line 15
        echo "\t
\t";
        // line 16
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "44bc276_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_44bc276_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/44bc276_style2_1.css");
            // line 18
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        } else {
            // asset "44bc276"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_44bc276") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/44bc276.css");
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        }
        unset($context["asset_url"]);
        // line 20
        echo "</head>
<script type=\"text/javascript\" >
var ml, ps;
\$(document).ready(function(){
\tinitialize();
\t
});

\$(document).keypress(function(e){
\tif(e.which == 13){
\t\tif(ps.is(':focus')){
\t\t\t//do login
\t\t\tloginPosdta();
\t\t}
\t\tif(ml.is(':focus')){
\t\t\t//tab instead
\t\t\tps.focus();
\t\t}
\t}
\t
});

function initialize() {
\tml = \$('#posdtaUser');
\tps = \$('#posdtaPass');
}

function loginPosdta() {
\tif(ml.val() == \"\") {
\t\tdisplayWarning(\"Ingresa tu correo.\",ml); return; 
\t}
\tif(ps.val() == \"\") {
\t\tdisplayWarning(\"Ingresa tu pass.\",ps); return; 
\t}
\tlogin(ml.val(), ps.val());
}

function login(user, pass) {
\t\$.ajax({
\t\ttype: \"POST\",
\t\turl: \"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("posdta_login");
        echo "\",
\t\tdata: \"ml=\"+user+\"&pw=\"+pass,
\t\tsuccess:function(data){
\t\t\tconsole.log(data);
\t\t\tvar obj = jQuery.parseJSON(data);
\t\t\tif(obj.code == '0000000' ){
\t\t\t\twindow.location.href = \"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\";
\t\t\t} else { displayWarningByCode(obj.code);}
\t\t},
\t\terror:function(xhr, status, text){
\t\t\tdisplayErrorByCode(xhr.status);
\t\t}
\t});
}
</script>
<body>
<div id=\"fb-root\"></div>
<!--<script type=\"text/javascript\" src=\"../js/facebook_login_tool.js\"></script>-->
<div class=\"outside clearfix\">
\t<div class=\"container_12\">
\t
\t\t<div class=\"grid_12\" id=\"menu\">
\t\t<div class=\"grid_4 alpha translucent_black\">
\t\t<img class=\"logo\" src=\"http://www.posdta.com/web/img/logo1.png\">
\t\t\t<div class=\"white\">Mas de</br><label id=\"counter\">700</label></br>libros leidos.</br></br>Mas de</br><label id=\"counter\">800</label></br>libros siendo leidos.</br></br><a href=\"http://www.youtube.com/watch?v=LriWwcv3aOU\" class=\"conoce_mas\">Conoce mas</a></div>
\t\t</div>
\t\t\t<div class=\"grid_5 prefix_2 omega\">
\t\t\t\t<div class=\"translucent_black_description title\" style=\"text-align:center;\">
\t\t\t\t\t<div class=\"posdtaLogin\" id=\"dropDownPosdtaLogin\">
\t\t\t\t\t\t<table style=\"width:200px; margin-right:auto; margin-left:auto;\">
\t\t\t\t\t\t<tr><td><input class=\"login_fields\" type=\"text\" id=\"posdtaUser\" placeholder=\"Usuario\"/></td></tr>
\t\t\t\t\t\t<tr><td><input class=\"login_fields\" type=\"password\" id=\"posdtaPass\" placeholder=\"Contraseña\"/></td></tr>
\t\t\t\t\t\t<tr><td colspan=\"2\" style=\"text-align:right; padding-top:5px;\"><button class=\"button_enter\" onclick=\"loginPosdta();\">Entrar</button></td></tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<p style=\"font-size:10px; line-height:15px; margin-top:15px; margin-left:50px; text-align:left;\">&iquest;A&uacute;n no tienes una cuenta? <a href=\"registro.php\" style=\"color:rgb(230,157,41); font-size:10px; text-decoration:none;\">Registrate</a><a href=\"\" style=\"color:rgb(255,255,255); font-size:12px; text-decoration:none; margin-top:-10px;\"></a>
\t\t\t\t\t\t<br>&iquest;Olvidaste tu contrase&ntilde;a?</a></p>
\t\t\t\t\t\t
\t\t\t\t\t</div><p style=\"font-size:15px;\">Ingresar con:</p>
\t\t\t\t\t<button class=\"facebook\" onclick=\"doLogin()\"><img src=\"../appImages/rf.png\" width=\"100\" height=\"29\"></button>
\t\t\t\t\t<button class=\"twitter\" onclick=\"goTo('<?echo \$twitter_url;?>');\" ><img src=\"../appImages/rt.png\" width=\"100\" height=\"29\"></button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"suggestions clearfix\" style=\"height:400px;\">
\t<div class=\"container_12 clearfix\">
\t
\t\t<div class=\"grid_12\" id=\"menu\">
\t\t\t\t<div class=\"grid_4 alpha feature_image\"><img class=\"suggestionsFeature\" src=\"../appImages/suggestionsFeature.png\"></div>
\t\t\t\t<div class=\"grid_5 push_3 featureContent omega translucent_white\"><h1 class=\"featureTitle\">Encuentra tu pr&oacute;xima gran historia.</h1><p class=\"feature_description\">S&oacute;lo preoc&uacute;pate por leer, nosotros hacemos el resto. Cada que marques un libro, nosotros lo recordaremos para recomendarte siempre los mejores t&iacute;tulos seg&uacute;n tus gustos e intereses.</p></div>
\t\t</div>
\t</div>
</div>
<div class=\"mobilePresence clearfix\" style=\"height:400px;\">
\t<div class=\"container_12\">
\t
\t\t<div class=\"grid_12\" id=\"menu\">
\t\t\t\t<div class=\"grid_5 featureContent translucent_white\">
\t\t\t\t<h1 class=\"featureTitle\">Ll&eacute;valo contigo</h1><p class=\"feature_description\">Nunca sabes cu&aacute;ndo puedes terminar un libro y necesitar una recomendaci&oacute;n. Posdta est&aacute; disponible en tu dispositivo m&oacute;vil para que nunca pares de leer.</p>
\t\t\t\t<div style=\"margin-top:10px !important;\">
\t\t\t\t\t<button style=\"border:none; background-color:transparent;\"><img src=\"../appImages/appstore.png\" class=\"appStore\"></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid_4 alpha push_1 feature_image\">
\t\t\t\t<img src=\"../appImages/mobilePresence.png\" class=\"mobilePresencePhone\">
\t\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"footer clearfix\">
\t<div class=\"container_12\">
\t
\t\t<div class=\"grid_12\" id=\"menu\">
\t\tAcerca | Contacto | Twitter | Facebook | Posdta (c) 2012. Todos los derechos reservados.
\t\t</div>
\t</div>
</div>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "PosdtaSiteBundle:Login:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 66,  133 => 60,  91 => 20,  77 => 18,  73 => 16,  70 => 15,  50 => 13,  46 => 10,  43 => 9,  29 => 7,  25 => 6,  19 => 2,);
    }
}
