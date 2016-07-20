<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_74e037a7654f9096a03f65d02d702a9c5f1bfe8b5cf89e1062a30718cc2e0d79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 41,  110 => 22,  84 => 29,  137 => 36,  134 => 35,  129 => 47,  104 => 40,  100 => 29,  58 => 17,  77 => 20,  53 => 11,  81 => 25,  76 => 28,  124 => 62,  190 => 78,  186 => 76,  175 => 71,  148 => 56,  127 => 60,  90 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 53,  140 => 55,  132 => 51,  128 => 49,  107 => 52,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 62,  119 => 38,  102 => 17,  71 => 32,  67 => 15,  63 => 19,  59 => 13,  38 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 70,  166 => 71,  163 => 50,  158 => 79,  156 => 66,  151 => 57,  142 => 65,  138 => 45,  136 => 56,  121 => 32,  117 => 19,  105 => 18,  91 => 48,  62 => 13,  49 => 10,  94 => 34,  89 => 36,  85 => 32,  75 => 33,  68 => 14,  56 => 11,  26 => 9,  28 => 3,  24 => 3,  87 => 25,  31 => 3,  25 => 35,  21 => 1,  19 => 1,  93 => 22,  88 => 31,  78 => 26,  46 => 8,  44 => 7,  27 => 5,  79 => 34,  72 => 16,  69 => 25,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 37,  111 => 31,  108 => 19,  101 => 43,  98 => 30,  96 => 27,  83 => 24,  74 => 27,  66 => 25,  55 => 17,  52 => 10,  50 => 9,  43 => 7,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 69,  164 => 68,  162 => 57,  154 => 58,  149 => 45,  147 => 58,  144 => 49,  141 => 48,  133 => 49,  130 => 42,  125 => 33,  122 => 61,  116 => 43,  112 => 42,  109 => 34,  106 => 45,  103 => 32,  99 => 24,  95 => 38,  92 => 37,  86 => 21,  82 => 28,  80 => 30,  73 => 16,  64 => 13,  60 => 6,  57 => 12,  54 => 20,  51 => 34,  48 => 9,  45 => 8,  42 => 7,  39 => 5,  36 => 5,  33 => 3,  30 => 3,);
    }
}
