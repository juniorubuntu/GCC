<?php

/* RepGestionBundle:Rep:addBranche.html.twig */
class __TwigTemplate_bb67b8fec2ba188bc4763894b965dd1c9a90cee85cb8ab77b887327545440f4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RepGestionBundle:Rep:detail.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'branche' => array($this, 'block_branche'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RepGestionBundle:Rep:detail.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Ajout d'un nouveau démembrement";
    }

    // line 4
    public function block_branche($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $context["update"] = 0;
        // line 6
        echo "    ";
        if (array_key_exists("branched", $context)) {
            // line 7
            echo "        ";
            $context["update"] = 1;
            // line 8
            echo "    ";
        }
        // line 9
        echo "    <form class=\"col-md-12 form-inline panel panel-primary panel-body\" onload=\"test()\">
        <h4 class=\"col-md-12\"><b><u>";
        // line 10
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " Modification d'un démembrement ";
        } else {
            echo "Ajout d'un nouveau démembrement ";
        }
        echo "</u></b></h4>
        <div class=\"col-md-12 form-group nomCP\"
             style=\"margin-top: 5px;\">
            <label for=\"poste\" class=\"col-md-4 control-label\">Nom: <span style=\"color: red\">*</span></label>
            <b><input onfocus=\"editerFocus('nomCP', 'nom');\" ";
        // line 14
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["branched"]) ? $context["branched"] : $this->getContext($context, "branched")), "html", null, true);
            echo "\" ";
        }
        echo " type=\"text\" class=\"form-control\" id=\"nomP\" placeholder=\"Nom du démembrement\" style=\"font-size: 16px;\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide nom \"></b>
        </div>
        <div class=\"col-md-12 form-group dateCP\"
             style=\"margin-top: 5px;\">
            <label for=\"poste\" class=\"col-md-4 control-label\">Date Création <span style=\"color: red\">*</span></label>
            <b><input type=\"date\" class=\"form-control date-choose hide\" style=\"font-size: 16px;\" id=\"dateB\" onblur=\"cacheDate();\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide date \"></b>
            <b><input ";
        // line 20
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["branched"]) ? $context["branched"] : $this->getContext($context, "branched")), "dateCreation"), "m/d/Y"), "html", null, true);
            echo "\" ";
        }
        echo " type=\"text\" placeholder=\"Date de création\" class=\"form-control date-choose-aff\" onfocus=\"afficheDate(); editerFocus('dateCP', 'date');\" style=\"font-size: 16px;\"></b>
        </div>
        <div class=\"col-md-12\"
             style=\"margin-top: 5px;\">
            <label for=\"poste\" class=\"col-md-4\">Observation</label>
            <textarea type=\"\" class=\"form-control\" id=\"poste.id\" placeholder=\"Observations\" style=\"
                      margin: 0px; 
                      width: 240px; 
                      height: 151px;\">";
        // line 28
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["branched"]) ? $context["branched"] : $this->getContext($context, "branched")), "observation"), "html", null, true);
            echo " ";
        } else {
            echo " Observations";
        }
        echo "</textarea>
        </div>
        <div class=\"col-md-12\"
             style=\"margin-top: 5px;\">
            <label for=\"poste\" class=\"col-md-4\">Rataché à: <span style=\"color: red\">*</span></label>
            <nav type=\"\" class=\"form-control\" id=\"poste.id\" style=\"font-size: 16px;\"><b>";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "html", null, true);
        echo "</b></nav>
        </div>
    </form>
    <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_detail_direction", array("id" => $this->getAttribute((isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "id"))), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-success active col-md-2 col-md-offset-6\"><span class=\"glyphicon glyphicon-remove-circle\">Annuler</span></button></a>
    <a><button onclick=\"validationBranche();\" type=\"button\" class=\"btn btn-primary col-md-2 col-md-offset-2\"><span class=\"glyphicon glyphicon-plus-sign\">Ajouter</span></button></a>
";
    }

    public function getTemplateName()
    {
        return "RepGestionBundle:Rep:addBranche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  53 => 10,  81 => 25,  76 => 35,  124 => 62,  190 => 78,  186 => 76,  175 => 71,  148 => 56,  127 => 40,  90 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 52,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 38,  102 => 32,  71 => 32,  67 => 15,  63 => 15,  59 => 12,  38 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 70,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 57,  142 => 65,  138 => 45,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 48,  62 => 13,  49 => 12,  94 => 28,  89 => 27,  85 => 26,  75 => 33,  68 => 14,  56 => 18,  26 => 6,  28 => 3,  24 => 3,  87 => 36,  31 => 6,  25 => 5,  21 => 1,  19 => 1,  93 => 22,  88 => 6,  78 => 24,  46 => 8,  44 => 7,  27 => 5,  79 => 34,  72 => 16,  69 => 25,  47 => 8,  40 => 5,  37 => 4,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 64,  131 => 52,  123 => 39,  120 => 40,  115 => 37,  111 => 19,  108 => 18,  101 => 32,  98 => 30,  96 => 31,  83 => 35,  74 => 23,  66 => 25,  55 => 17,  52 => 18,  50 => 9,  43 => 8,  41 => 6,  35 => 4,  32 => 4,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 69,  164 => 68,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 97,  130 => 64,  125 => 44,  122 => 61,  116 => 58,  112 => 36,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 38,  92 => 28,  86 => 42,  82 => 22,  80 => 19,  73 => 56,  64 => 14,  60 => 6,  57 => 19,  54 => 20,  51 => 34,  48 => 8,  45 => 17,  42 => 7,  39 => 5,  36 => 4,  33 => 4,  30 => 2,);
    }
}
