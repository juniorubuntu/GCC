<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_880f5db74bc247c1c602d76b20a6d5f1c86ae895c265aa4665b41382f29cace6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 22,  84 => 29,  58 => 17,  170 => 54,  150 => 46,  134 => 35,  100 => 29,  77 => 20,  53 => 10,  81 => 25,  76 => 17,  129 => 96,  126 => 63,  118 => 60,  190 => 78,  186 => 76,  175 => 71,  148 => 56,  127 => 28,  90 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 52,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 63,  119 => 38,  102 => 17,  71 => 32,  67 => 15,  63 => 14,  59 => 12,  38 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 70,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 57,  142 => 47,  138 => 37,  136 => 56,  121 => 32,  117 => 19,  105 => 18,  91 => 48,  62 => 13,  49 => 13,  94 => 34,  89 => 27,  85 => 26,  75 => 33,  68 => 14,  56 => 11,  26 => 11,  28 => 3,  24 => 3,  87 => 25,  31 => 3,  25 => 35,  21 => 1,  19 => 1,  93 => 22,  88 => 31,  78 => 26,  46 => 8,  44 => 7,  27 => 5,  79 => 33,  72 => 16,  69 => 25,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 39,  120 => 20,  115 => 37,  111 => 31,  108 => 19,  101 => 32,  98 => 30,  96 => 27,  83 => 24,  74 => 23,  66 => 25,  55 => 17,  52 => 14,  50 => 9,  43 => 11,  41 => 5,  35 => 4,  32 => 4,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 69,  164 => 51,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 42,  125 => 33,  122 => 43,  116 => 41,  112 => 36,  109 => 34,  106 => 33,  103 => 32,  99 => 24,  95 => 28,  92 => 28,  86 => 21,  82 => 28,  80 => 19,  73 => 16,  64 => 13,  60 => 6,  57 => 19,  54 => 20,  51 => 34,  48 => 8,  45 => 17,  42 => 7,  39 => 5,  36 => 5,  33 => 3,  30 => 3,);
    }
}
