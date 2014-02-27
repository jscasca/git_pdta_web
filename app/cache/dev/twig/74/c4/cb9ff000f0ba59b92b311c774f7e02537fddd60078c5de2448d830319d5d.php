<?php

/* PosdtaSiteBundle:Reader:readPublication.html.twig */
class __TwigTemplate_74c4cb9ff000f0ba59b92b311c774f7e02537fddd60078c5de2448d830319d5d extends Twig_Template
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
            // asset "c15f12f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c15f12f_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c15f12f_monocore_1.js");
            // line 15
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "c15f12f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c15f12f_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c15f12f_monoctrl_2.js");
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "c15f12f_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c15f12f_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c15f12f_errorHandling_3.js");
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "c15f12f_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c15f12f_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c15f12f_jquery_4.js");
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "c15f12f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c15f12f") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c15f12f.js");
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        // line 17
        echo "\t
\t";
        // line 18
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "66cc442_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_66cc442_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/66cc442_monocore_1.css");
            // line 22
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
            // asset "66cc442_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_66cc442_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/66cc442_monoctrl_2.css");
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
            // asset "66cc442_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_66cc442_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/66cc442_style2_3.css");
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        } else {
            // asset "66cc442"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_66cc442") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/66cc442.css");
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        }
        unset($context["asset_url"]);
        // line 24
        echo "\t
\t<style>
\t\t#reader { width: 450px; height: 600px; border: 1px solid #000;}
\t</style>
</head>
<script type=\"text/javascript\" >
var componentUrlBase = \"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("reader_components", array("componentId" => "componentId"));
        echo "\";
//alert(componentUrl);

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

var bookData = {
  getComponents: function () {
    return [
      ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "components"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["component"]) {
            // line 52
            echo "\t\t";
            if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                // line 53
                echo "\t\t\t'";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["component"]) ? $context["component"] : $this->getContext($context, "component")), "id"), "html", null, true);
                echo "',
\t\t";
            } else {
                // line 55
                echo "\t\t\t'";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["component"]) ? $context["component"] : $this->getContext($context, "component")), "id"), "html", null, true);
                echo "'
\t\t";
            }
            // line 57
            echo "      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    ];
  },
  getContents: function () {
    return [
      {
        title: 'Chapter 1',
        src: 'component1.xhtml'
      },
      {
        title: 'Chapter 2',
        src: 'component3.xhtml'
      }
    ]
  },
  getComponent: function (componentId) {
    return getBookComponent(componentId);
  },
  getMetaData: function(key) {
    return {
      title: 'A book',
      creator: 'Inventive Labs'
    }[key];
  }
};

function getBookComponent(componentId) {
\tcomponentUrl = componentUrlBase.replace('componentId',componentId);
\tvar response = \$.ajax({
\t\ttype: \"GET\",
\t\turl: componentUrl,
\t\terror:function(xhr, status, text){
\t\t\tdisplayErrorByCode(xhr.status);
\t\t},
\t\tasync: false
\t}).responseText;
\treturn response;
}

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
\t\t\t\t\t\t\t<div id=\"pictureFrame\" class=\"pictureFrame\" style=\"\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div id=\"nav\">
\t\t\t\t\t\t\t<img id=\"arrow\"  class=\"badges\" src=\"../appImages/flecha.png\">
\t\t\t\t\t\t\t\t<div id=\"dropDownOptions\" style=\"display: none\">
\t\t\t\t\t\t\t\t\t<a class=\"loginTag\" href=\"amigos\" id=\"amigos\">Conocidos</a>
\t\t\t\t\t\t\t\t\t<br><a class=\"loginTag\" href=\"";
        // line 125
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
\t\t
\t\t<div id=\"reader\">
\t\t\t<h1>Reader</h1>
\t\t</div>
\t\t<script>Monocle.Reader('reader', bookData/*, {}, function(reader) {/*reader.moveTo({ page: 3});}*/);</script>
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
        return "PosdtaSiteBundle:Reader:readPublication.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 125,  193 => 58,  179 => 57,  173 => 55,  167 => 53,  164 => 52,  147 => 51,  123 => 30,  115 => 24,  89 => 22,  85 => 18,  82 => 17,  50 => 15,  46 => 10,  43 => 9,  29 => 7,  25 => 6,  19 => 2,);
    }
}
