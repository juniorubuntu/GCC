<?php

/* RepGestionBundle:Rep:accueil.html.twig */
class __TwigTemplate_fd2fbbe93e17bd9eaaf8fe6815423e69ec0366c679fc1553a8c9ab5d22e01be6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RepGestionBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'detail' => array($this, 'block_detail'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RepGestionBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"col-md-12 \">
        <div class=\"col-md-12\">
            <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoAcc.png"), "html", null, true);
        echo "\" style=\"height: 79px;\"/>
            <span style=\"
                  color: wheat;
                  font-size: 35px;
                  font-family: serif;\">
                Bienvenue dans l'application de gestion et répartition des crédits de communication
            </span>
            <img class=\"pull-right\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoAccD.png"), "html", null, true);
        echo "\" style=\"height: 79px;\"/>
        </div>
        <div class=\"pull-right col-md-2\">

            <div class=\"col-md-12 ll\" 
                 style=\"border-radius: 10px;
                 font: 14px constantia;
                 color: #286090;
                 font-weight: bold;\"
                 ><a href=\"#\" onclick=\"afficheMenu();\"><u style=\"padding: 2px; font-size: 16px;\">Gestion des comptes</u></a>
                <div class=\"row col-md-12\" style=\"
                     position: absolute;
                     z-index: 1;
                     opacity: 1;\">
                    <div class=\"col-md-12 dropdown-menu compte well\" style=\"
                         margin-top: 2px;
                         background: rgba(0, 0, 0, 0.82);
                         border-radius: 22px;\">
                        <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("add_compte");
        echo "\"><button class=\"btn btn-primary btn-sm col-md-11\" style=\"text-align: left; margin-bottom: 5px; margin-top: -10px;\"><span class=\"glyphicon glyphicon-plus-sign\">Créer un nouveau</span></button></a>
                        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("list_all_compte");
        echo "\"><button class=\"btn btn-info btn-sm col-md-6\" style=\"text-align: left; margin-bottom: 5px;\"><span class=\"glyphicon glyphicon-edit\">Modifier</span></button></a>
                        <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("list_all_compte");
        echo "\"<button class=\"btn btn-danger btn-sm col-md-7\" style=\"text-align: left; margin-bottom: 10px;\"><span class=\"glyphicon glyphicon-remove-sign\">Supprimer</span></button></a>
                        <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("rep_gestion_homepage");
        echo "\" class=\"col-md-12\"><u style=\"border: 1px solid wheat; padding: 2px; border-radius: 5px;\">Vous déconnecter</u></a>
                    </div>
                </div>
            </div>

        </div>
        <div class=\"col-md-12 test\">
            <div class=\"panel-primary col-md-5\">
                <div class=\"panel panel-heading col-md-12\" style=\"
                     margin-left: -15px;
                     margin-right: -25px;\">
                    <strong style=\"font-size: 18px\"><u>Choisir ou dérouler la branche à manipuler</u></strong>
                    <button type=\"button\" class=\"btn btn-success pull-right\"><span class=\"glyphicon glyphicon-refresh\"></span>Actualiser</button>
                </div>
                <scroll class=\"panel-body\" style=\"
                        color: #04101b;
                        font-size: 16px;\">
                    ";
        // line 52
        echo (isset($context["arbreDirection"]) ? $context["arbreDirection"] : $this->getContext($context, "arbreDirection"));
        echo "
                </scroll>
                <div class=\"panel-footer col-md-12\" style=\"
                     margin-left: -15px;
                     margin-right: -25px;
                     font-size: 16px;\">
                    <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("list_all_personnel");
        echo "\"><button class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-user\"><b> Gérer le personnel</b></span></button></a>
                </div>
            </div>
            ";
        // line 61
        if (array_key_exists("aDetailler", $context)) {
            // line 62
            echo "                <nav class=\"hide\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "id"), "html", null, true);
            echo "</nav>
                ";
        }
        // line 64
        echo "                ";
        $this->displayBlock('detail', $context, $blocks);
        // line 97
        echo "        </div>
    </div>
";
    }

    // line 64
    public function block_detail($context, array $blocks = array())
    {
        // line 65
        echo "                <div class=\"col-md-7 panel-primary active\">
                    <div class=\"panel panel-heading col-md-12\" style=\"
                         margin-left: -15px;
                         margin-right: -25px;\">
                        <strong style=\"font-size: 18px\"><u>Détails sur la branche sélectionnée</u></strong>
                        <button type=\"button\" class=\"btn btn-primary active pull-right\"><span class=\"glyphicon glyphicon-print\"></span> Exporter les données</button>
                    </div>
                    <scroll class=\"well col-md-12\" style=\"
                            color: #04101b;
                            font-size: 16px;
                            margin-left: -15px;
                            margin-right: -25px;
                            margin-top: -15px;
                            margin-bottom: 2px;\">
                        <center><h4>Vous êtes au niveau de: <b>Example de branche</b></h4></center>
                        <div class=\"chef\">

                        </div>
                        <div class=\"poste\">

                        </div>
                        <div class=\"retour\">

                        </div>
                    </scroll>
                    <div class=\"panel-footer col-md-12\" style=\"
                         margin-left: -15px;
                         margin-right: -25px;\">
                        <b>Les informations ci-dessus sont modifiables. N'oubliez pas d'enregistrer en sortant sinon elle seront toutes perdues!</b>
                    </div>
                </div>
            ";
    }

    public function getTemplateName()
    {
        return "RepGestionBundle:Rep:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 62,  190 => 78,  186 => 76,  175 => 71,  148 => 56,  127 => 40,  90 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 52,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 38,  102 => 32,  71 => 17,  67 => 15,  63 => 15,  59 => 14,  38 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 70,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 57,  142 => 65,  138 => 45,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 21,  49 => 19,  94 => 28,  89 => 20,  85 => 25,  75 => 32,  68 => 14,  56 => 9,  26 => 6,  28 => 3,  24 => 3,  87 => 35,  31 => 2,  25 => 5,  21 => 2,  19 => 1,  93 => 22,  88 => 6,  78 => 21,  46 => 8,  44 => 7,  27 => 4,  79 => 33,  72 => 16,  69 => 25,  47 => 9,  40 => 5,  37 => 4,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 64,  131 => 52,  123 => 39,  120 => 40,  115 => 37,  111 => 37,  108 => 35,  101 => 32,  98 => 31,  96 => 31,  83 => 34,  74 => 14,  66 => 24,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 5,  35 => 4,  32 => 4,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 69,  164 => 68,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 97,  130 => 64,  125 => 44,  122 => 61,  116 => 58,  112 => 36,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 56,  64 => 49,  60 => 6,  57 => 19,  54 => 14,  51 => 14,  48 => 8,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 2,);
    }
}
