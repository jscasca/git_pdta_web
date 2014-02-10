<?php

/* PosdtaSiteBundle:Registry:index.html.twig */
class __TwigTemplate_7d99b451ba04ac04e14f3a475506ce0eeefcfc349189789d836718441424bf1b extends Twig_Template
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
//createUser('fn','ln','sx','2001-10-10','','pw','mail@mail.com','true');
var dayHolder;
var yearHolder;
var monthHolder;
var fn,ln,sx,ml,pw,pwcheck,ui,sc;

\$(document).ready(function(){
\tinitialize();
\t\$('#bday_month').change(function(){ getDays(parseInt(\$(this).val()));});
\t
\t\$('#registration_submit').click(function(){registration();});
\t
\tpopulateYears(new Date().getFullYear());
});

function initialize() {
\t\$('#sc_validation').append(\"<td>No soy un robot: <span style='color:red;'>*</span></td>\").append(\"<td><input type='checkbox' id='sc' value='1' /></td>\");
\tdayHolder = \$('#bday_day');
\tyearHolder = \$('#bday_year');
\tmonthHolder = \$('#bday_month');
\tmonthHolder.val('00');
\tfn = \$('#fn'); ln = \$('#ln'); sx = \$('#sx'); ml = \$('#ml'); pw = \$('#pw'); pwcheck = \$('#pwcheck'); ui = \$('#ui'); sc = \$('#sc');
}

function getDays(month){
\tvar days = 0;
\tswitch(month){
\t\tcase 2: days = 29; break;
\t\tcase 4: days = 30; break;
\t\tcase 6: days = 30; break;
\t\tcase 9: days = 30; break;
\t\tcase 11: days = 30; break;
\t\tdefault: days = 31; break;
\t}
\tpopulateDays(days);
}

function populateYears(currentYear) {
\tfor(var i = currentYear - 120; i < currentYear; i++) {
\t\tyearHolder.append(\"<option value='\" + i + \"'>\" + i + \"</option>\");
\t}
}

function populateDays(days){
\tdayHolder.children().remove();
\tfor(var i = 1; i < 10 && i < days; i++){
\t\tdayHolder.append(\"<option value='0\" + i + \"'>\" + i +\"</option>\");
\t}
\tfor(var i=10; i<=days; i++){
\t\t
\t\tdayHolder.append(\"<option value='\" + i + \"'>\" + i + \"</option>\");
\t}
}

function validateEmail(email){
\tif(email == \"\") return false;
\treturn true;
}

function validatePasswords(pass, conf){
\treturn (pass == conf);
}

function registration(){
\tif(fn.val() == \"\"){
\t\tdisplayWarning(\"Por favor dinos tu nombre\",fn); return;
\t}
\tif(sx.val() == \"\"){
\t\tdisplayWarning(\"Por favor ind\\u00f3canos tu sexo\",sx); return;
\t}
\tif(yearHolder.val() == \"00\"){
\t\tdisplayWarning(\"Selecciona tu a\\u00f1o de nacimiento\",yearHolder); return;
\t}
\tif(monthHolder.val() == \"00\"){
\t\tdisplayWarning(\"Selecciona tu mes de nacimiento\",monthHolder); return;
\t}
\tif(!validateEmail(ui.val())){
\t\tdisplayWarning(\"Verifica el formato de tu correo electr\\u00F3nico\",ui); return;
\t}
\tif(pw.val().length < 6){
\t\tdisplayWarning(\"La contrase\\u00f1a debe contener al menos 6 caracteres.\",pw); return;
\t}
\tif(!validatePasswords(pw.val(),pwcheck.val())){
\t\tdisplayWarning(\"Las contrase\\u00f1as no coinciden.\",pwcheck); return;
\t}
\tif(!sc.is(':checked')){
\t\tdisplayWarning(\"Por favor dime que no eres un robot.\",sc); return; 
\t}
\t
\tcreateUser(fn.val(),ln.val(),sx.val(),joinDate(yearHolder.val(),monthHolder.val(),dayHolder.val()),ml.val(),pw.val(),ui.val(),sc.val());
}

function joinDate(year,month,day){
\treturn year + \"-\" + month + \"-\" +day;
}

function createUser(fn,ln,sx,bd,ml,pw,ui,sc){
\t\$.ajax({
\t\ttype: \"POST\",
\t\turl: \"";
        // line 121
        echo $this->env->getExtension('routing')->getPath("registry_create");
        echo "\",
\t\tdata: \"fn=\"+fn+\"&ln=\"+ln+\"&sx=\"+sx+\"&bd=\"+bd+\"&ml=\"+ml+\"&pw=\"+pw+\"&ui=\"+ui+\"&sc=\"+sc,
\t\tsuccess:function(data){
\t\t\tconsole.log(data);
\t\t\tvar obj = jQuery.parseJSON(data);
\t\t\tif(obj.code == '0000000' ){
\t\t\t\twindow.location.href = \"";
        // line 127
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
<body style=\"background-image:url('";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../app/Resources/public/img/frontCover.jpg"), "html", null, true);
        echo "');\">
<div class=\"container_12 clearfix\">
\t<div class=\"grid_12 registration_form registration_padding\" style=\"margin-top:70px;\">
\t\t<div class=\"grid_6 alpha\" style=\"padding-left:15px;\">
\t\t\t<div class=\"grid_6 registration_image\">
\t\t\t<a href=\"index.php\"><img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../app/Resources/public/img/logo.png"), "html", null, true);
        echo "\"></a><br/>
\t\t\t<img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../app/Resources/public/img/register.png"), "html", null, true);
        echo "\" style=\"padding-top:10px;\">
\t\t</div>
\t</div>
\t<div class=\"grid_5 omega registration_padding\">
\t\t<div id=\"registration_form\" >
\t\t\t<table class=\"registration_table\" >
\t\t\t\t<tr>
\t\t\t\t\t<td>Nombre: <span style=\"color:red;\">*</span></td>
\t\t\t\t\t<td><input type=\"text\" class=\"registration_input\" id=\"fn\" /></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Apellido:</td>
\t\t\t\t\t<td><input type=\"text\" class=\"registration_input\" id=\"ln\" /></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Sexo: <span style=\"color:red;\">*</span></td>
\t\t\t\t\t<td><select class=\"registration_input\" id=\"sx\" />
\t\t\t\t\t\t<option value=\"\">--</option>
\t\t\t\t\t\t<option value=\"1\">Masculino</option>
\t\t\t\t\t\t<option value=\"0\">Femenino</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Fecha de Nacimiento: <span style=\"color:red;\">*</span></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select class=\"registration_dropdown\" id=\"bday_year\" >
\t\t\t\t\t\t\t<option value=\"00\">--</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select class=\"registration_dropdwon\" id=\"bday_month\" >
\t\t\t\t\t\t\t<option value=\"00\">--</option>
\t\t\t\t\t\t\t<option value=\"01\" >Enero</option>
\t\t\t\t\t\t\t<option value=\"02\" >Febrero</option>
\t\t\t\t\t\t\t<option value=\"03\" >Marzo</option>
\t\t\t\t\t\t\t<option value=\"04\" >Abril</option>
\t\t\t\t\t\t\t<option value=\"05\" >Mayo</option>
\t\t\t\t\t\t\t<option value=\"06\" >Junio</option>
\t\t\t\t\t\t\t<option value=\"07\" >Julio</option>
\t\t\t\t\t\t\t<option value=\"08\" >Agosto</option>
\t\t\t\t\t\t\t<option value=\"09\" >Septiembre</option>
\t\t\t\t\t\t\t<option value=\"10\" >Octubre</option>
\t\t\t\t\t\t\t<option value=\"11\" >Noviembre</option>
\t\t\t\t\t\t\t<option value=\"12\" >Diciembre</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select class=\"registration_dropdown\" id=\"bday_day\" >
\t\t\t\t\t\t</select>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Correo: <span style=\"color:red;\">*</span></td>
\t\t\t\t\t<td><input type=\"text\" class=\"registration_input\" id=\"ui\" /></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Contrase&ntilde;a: <span style=\"color:red;\">*</span></td>
\t\t\t\t\t<td><input type=\"password\" class=\"registration_input\" id=\"pw\" /></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Repetir contrase&ntilde;a: <span style=\"color:red;\">*</span></td>
\t\t\t\t\t<td><input type=\"password\" class=\"registration_input\" id=\"pwcheck\" /></td>
\t\t\t\t</tr>
\t\t\t\t<tr id='sc_validation'>
\t\t\t\t</tr>
\t\t\t\t<tr id='hp_validation'>
\t\t\t\t\t<td style=\"vertical-align:top;\">Campo vac&iacute;o:</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type='text' id='ml' class=\"registration_input\" />
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button class=\"button_enter\" style=\"margin-top:5px;\" id=\"registration_submit\" >Registrate</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>
\t</div>
</div>
<div class=\"footer clearfix\">
\t<div class=\"container_12\">
\t
\t\t<div class=\"grid_12\" id=\"menu\" style=\"color:rgb(255,255,255); background-color:rgba(0,0,0,0.3); margin-top:15px; border-radius:3px;\">
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
        return "PosdtaSiteBundle:Registry:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 142,  223 => 141,  215 => 136,  203 => 127,  194 => 121,  91 => 20,  77 => 18,  73 => 16,  70 => 15,  50 => 13,  46 => 10,  43 => 9,  29 => 7,  25 => 6,  19 => 2,);
    }
}
