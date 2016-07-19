<?php

/* RepGestionBundle:Rep:Start.html.twig */
class __TwigTemplate_46a9be858a1a679b4ad7f7499e13d9a393416982c3be328380459652f84ebdf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RepGestionBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
        echo " - Index";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"col-md-7 col-md-offset-2\" style=\"background: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo ") no-repeat; height: 204px;\">
        <div class=\"col-md-8 col-md-offset-2\" 
             style=\"color: white;
             text-shadow: 2px 5px #132919;
             font-family: fantasy;\">
            <center><h1>Plateforme de gestion et de répartition du crédit de communication du personnel de la Camtel</h1></center>
        </div>
    </div>
    <div class=\"col-md-7\" style=\"height: 100px;\">

    </div>
    <div class=\"langue col-md-6 col-md-offset-3\">
        <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("rep_gestion_login");
        echo "\">
            <button type=\"button\" class=\"col-md-4 col-md-offset-1 btn btn-info\" 
                    style=\"height: 65px;
                    border-radius: 60px;
                    font: 32px constantia bolder;
                    color: #021082;\"
                    ><span class=\"glyphicon glyphicon-ok-sign\"></span>Welcome</button>
        </a>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("rep_gestion_login");
        echo "\">
            <button type=\"button\" class=\"col-md-4 col-md-offset-1 btn btn-primary\"
                    style=\"height: 65px;
                    border-radius: 60px;
                    font: 32px constantia bolder;
                    color: #021082;\"
                    ><span class=\"glyphicon glyphicon-ok-sign\"></span>Bienvenue</button>
        </a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "RepGestionBundle:Rep:Start.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 35,  129 => 96,  126 => 63,  118 => 60,  190 => 78,  186 => 76,  175 => 71,  148 => 56,  127 => 40,  90 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 52,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 63,  119 => 38,  102 => 32,  71 => 32,  67 => 15,  63 => 15,  59 => 14,  38 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 70,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 57,  142 => 47,  138 => 64,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 48,  62 => 21,  49 => 19,  94 => 28,  89 => 20,  85 => 25,  75 => 33,  68 => 14,  56 => 18,  26 => 6,  28 => 3,  24 => 3,  87 => 35,  31 => 6,  25 => 5,  21 => 1,  19 => 1,  93 => 22,  88 => 18,  78 => 21,  46 => 8,  44 => 7,  27 => 5,  79 => 33,  72 => 16,  69 => 25,  47 => 8,  40 => 5,  37 => 4,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 39,  120 => 61,  115 => 37,  111 => 37,  108 => 35,  101 => 32,  98 => 31,  96 => 31,  83 => 34,  74 => 14,  66 => 25,  55 => 17,  52 => 18,  50 => 9,  43 => 8,  41 => 6,  35 => 4,  32 => 4,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 69,  164 => 68,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 36,  109 => 34,  106 => 56,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 42,  82 => 8,  80 => 19,  73 => 56,  64 => 49,  60 => 6,  57 => 19,  54 => 20,  51 => 14,  48 => 8,  45 => 17,  42 => 7,  39 => 5,  36 => 4,  33 => 4,  30 => 2,);
    }
}
