<?php

/* RepGestionBundle:Rep:addPersonnel.html.twig */
class __TwigTemplate_baab5eb61a13d0cbcb29a31a313fa1e388fa4c1c48e023758f23f2b49a7afb49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RepGestionBundle:Rep:detail.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'detail' => array($this, 'block_detail'),
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
        echo "Ajout d'un Personnel";
    }

    // line 4
    public function block_detail($context, array $blocks = array())
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
        echo "    <div class=\"col-md-7 panel-primary active\">
        <div class=\"panel panel-heading col-md-12\" style=\"
             margin-left: -15px;
             margin-right: -25px;\">
            <strong style=\"font-size: 18px\"><u>Ajout d'un nouveau personnel</u></strong>
        </div>
        <form class=\"col-md-12 form-inline panel panel-primary panel-body\"
              style=\"
              margin-left: -15px;
              margin-right: -25px;\">
            <div class=\"col-md-12 form-group nomCP\"
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4 control-label\">Nom: <span style=\"color: red\">*</span></label>
                <b><input onfocus=\"editerFocus('nomCP', 'nom');\" type=\"text\" class=\"form-control\" id=\"nomP\" name=\"nomP\" placeholder=\"Nom du personnel\" style=\"font-size: 16px;\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide nom \"></span></b>
            </div>
            <div class=\"col-md-12 form-group preCP\" 
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4 control-label\">Prénom <span style=\"color: red\">*</span></label>
                <b><input onfocus=\"editerFocus('preCP', 'pren');\" type=\"text\" class=\"form-control\" id=\"prenP\" name=\"prenP\" placeholder=\"Nom du prénom\" style=\"font-size: 16px;\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide pren \"></b>
            </div>
            <div class=\"col-md-12 form-group matCP\" 
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4 control-label\">Matricule <span style=\"color: red\">*</span></label>
                <b><input onfocus=\"editerFocus('matCP', 'mat');\" type=\"text\" class=\"form-control\" id=\"matP\" name=\"matP\" placeholder=\"Matricule\" style=\"font-size: 16px;\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide mat \"></b>
            </div>
            <div class=\"col-md-12 form-group telCP\"
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4 control-label\">Téléphone <span style=\"color: red\">*</span></label>
                <b><input onfocus=\"editerFocus('telCP', 'tel');\" type=\"text\" class=\"form-control\" id=\"telP\" name=\"telP\" placeholder=\"Téléphone\" style=\"font-size: 16px;\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide tel \"></b>
            </div>
            <div class=\"col-md-12 emailCP\"
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4 control-label\">Email <span style=\"color: red\">*</span></label>
                <b><input onfocus=\"editerFocus('emailCP', 'email');\" type=\"text\" class=\"form-control\" name=\"emailP\" id=\"emailP\" placeholder=\"juniorubuntu@gmail.com\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide email \"></b>
            </div>
            <div class=\"col-md-12 dateCP\"
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4 control-label\">Date Recrutement <span style=\"color: red\">*</span></label>
                <b><input type=\"date\" class=\"form-control date-choose hide\" name=\"dateP\" id=\"dateP\" style=\"font-size: 16px;\" onblur=\"cacheDate();\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide date \"></b>
                <b><input ";
        // line 48
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["branched"]) ? $context["branched"] : $this->getContext($context, "branched")), "dateCreation"), "m/d/Y"), "html", null, true);
            echo "\" ";
        }
        echo " type=\"text\" placeholder=\"Date de recrutement\" class=\"form-control date-choose-aff\" onfocus=\"afficheDate(); editerFocus('dateCP', 'date');\" id=\"dateP\" style=\"font-size: 16px;\"></b>
            </div>
            <div class=\"col-md-12 deciCP\"
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4 control-label\">Décison <span style=\"color: red\">*</span></label>
                <b><input onfocus=\"editerFocus('deciCP', 'deci');\" type=\"text\" class=\"form-control\" id=\"deciP\"  placeholder=\"Décision d'admission\" style=\"font-size: 16px;\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide deci \"></b>
            </div>
        </form>
        <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("list_tree_direction");
        echo "\"><button type=\"button\" class=\"btn btn-success active col-md-2 col-md-offset-6\"><span class=\"glyphicon glyphicon-remove-circle\">Annuler</span></button></a>
        <a><button type=\"button\" onclick=\"validationFormPersonnel();\" class=\"btn btn-primary col-md-2 col-md-offset-1\"><span class=\"glyphicon glyphicon-plus-sign\">Ajouter</span></button></a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "RepGestionBundle:Rep:addPersonnel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 35,  124 => 62,  190 => 78,  186 => 76,  175 => 71,  148 => 56,  127 => 40,  90 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 52,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 38,  102 => 8,  71 => 32,  67 => 15,  63 => 15,  59 => 14,  38 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 70,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 57,  142 => 65,  138 => 45,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 48,  62 => 21,  49 => 19,  94 => 28,  89 => 20,  85 => 25,  75 => 33,  68 => 14,  56 => 18,  26 => 6,  28 => 3,  24 => 3,  87 => 36,  31 => 6,  25 => 5,  21 => 1,  19 => 1,  93 => 22,  88 => 6,  78 => 21,  46 => 8,  44 => 7,  27 => 5,  79 => 34,  72 => 16,  69 => 25,  47 => 8,  40 => 5,  37 => 4,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 64,  131 => 52,  123 => 39,  120 => 40,  115 => 37,  111 => 19,  108 => 18,  101 => 32,  98 => 31,  96 => 31,  83 => 35,  74 => 14,  66 => 30,  55 => 15,  52 => 18,  50 => 9,  43 => 8,  41 => 6,  35 => 4,  32 => 4,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 69,  164 => 68,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 97,  130 => 64,  125 => 44,  122 => 61,  116 => 58,  112 => 36,  109 => 34,  106 => 56,  103 => 32,  99 => 31,  95 => 38,  92 => 21,  86 => 42,  82 => 22,  80 => 19,  73 => 56,  64 => 49,  60 => 6,  57 => 19,  54 => 20,  51 => 14,  48 => 8,  45 => 17,  42 => 7,  39 => 5,  36 => 4,  33 => 4,  30 => 2,);
    }
}
