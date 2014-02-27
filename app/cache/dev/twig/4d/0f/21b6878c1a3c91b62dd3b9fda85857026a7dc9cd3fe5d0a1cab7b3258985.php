<?php

/* PosdtaSiteBundle:Index:userIndex.html.twig */
class __TwigTemplate_4d0f21b6878c1a3c91b62dd3b9fda85857026a7dc9cd3fe5d0a1cab7b3258985 extends Twig_Template
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
\t<title>Inicio</title>
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

\$(document).ready(function(){
\t \$(\"#nav\").click(function(){
         \$('#dropDownOptions').toggle();
         if(\$('#arrow').attr(\"src\")==\"../appImages/flecha.png\")
         {
            \$('#arrow').attr(\"src\", \"../appImages/flechaclick.png\");
         }
         else
         {
            \$('#arrow').attr(\"src\", \"../appImages/flecha.png\");
         }
         
     });
});

</script>
<body>
\t<div class=\"header\">
\t\t<div class=\"container_12\">
\t\t\t<!-- Posdta Logo -->
\t\t\t<div class=\"grid_2 alpha\">
\t\t\t\t<img class=\"logo\" src=\"../appImages/logo.png\">
\t\t\t</div>
\t\t\t
\t\t\t<!-- Search Bar -->
\t\t\t<div class=\"grid_7 center\">
\t\t\t\t<div class=\"ui-widget\">
\t\t\t\t\t<input type=\"text\" class=\"searchBar\" id=\"searchBarInput\" onfocus=\"if (this.value=='Busca tu libro...') this.value = ''\" value=\"Busca tu libro...\" onblur=\"if (this.value=='') this.value = 'Busca tu libro...'\">
\t\t\t\t\t<img class=\"glass\" src=\"../appImages/busqueda.png\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"grid_3 omega\">
\t\t\t\t<table class=\"userPanel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div id=\"pictureFrame\" class=\"pictureFrame\" style=\"background-position: -1px -5px; background-image:url(";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "picture_thumb"), "html", null, true);
        echo ");\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "last_name"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div id=\"nav\">
\t\t\t\t\t\t\t<img id=\"arrow\"  class=\"badges\" src=\"../appImages/flecha.png\">
\t\t\t\t\t\t\t\t<div id=\"dropDownOptions\" style=\"display: none\">
\t\t\t\t\t\t\t\t\t<a class=\"loginTag\" href=\"amigos\" id=\"amigos\">Conocidos</a>
\t\t\t\t\t\t\t\t\t<br><a class=\"loginTag\" href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" id=\"salir\" >Salir</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
\t
\t<div class=\"container_12 clearfix\" id=\"contentContainer\">
\t
\t
\t\t<div class=\"grid_12 footer\">
\t\t\tSiguenos en <a class=\"followLink\" target=\"_blank\" href=\"http://www.facebook.com/posdta\">Facebook</a> | <a class=\"followLink\" target=\"_blank\" href=\"http://www.twitter.com/posdta\">Twitter</a> | Como funciona &nbsp; | Acerca de &nbsp; | Contacto | Copyright 2012
\t\t</div>
\t</div>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "PosdtaSiteBundle:Index:userIndex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 67,  137 => 61,  132 => 59,  91 => 20,  77 => 18,  73 => 16,  70 => 15,  50 => 13,  46 => 10,  43 => 9,  29 => 7,  25 => 6,  19 => 2,);
    }
}
