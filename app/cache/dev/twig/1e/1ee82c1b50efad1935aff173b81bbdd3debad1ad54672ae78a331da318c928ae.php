<?php

/* RepGestionBundle::layout.html.twig */
class __TwigTemplate_4bf174c67a353172dda225ea74e0f53fc41f204313a767e5e38a2163a8a64574 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap-theme.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascript/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <style>
            .test>div{
                margin-top: 10px;
                font-family: constantia;
            }
        </style>
    </head>
    <body style=\"background: #384546; height: auto\">
        <div style=\"height: 650px\">
            ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        </div>
        <footer class=\"col-md-12\"
                style=\"
                bottom: 0;
                height: 30px;
                background: #3175b0;
                color: white;
                border-top: 1px solid;
                padding: 0px;
                font-size: 18px;\">
            Dévellopé par: ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["webmaster"]) ? $context["webmaster"] : $this->getContext($context, "webmaster")), "html", null, true);
        echo "; Tous droits réservés Camtel 2016, dirigé par: M. Bayonmbong Clément
        </footer>
        <script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascript/animation.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascript/validationFormPersonnel.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascript/validationFormPoste.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascript/validationFormBranche.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascript/validationFormCategorie.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascript/validationFormCompte.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "GCC_Camtel";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "            ";
    }

    public function getTemplateName()
    {
        return "RepGestionBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 22,  113 => 21,  107 => 11,  100 => 40,  96 => 39,  92 => 38,  88 => 37,  84 => 36,  80 => 35,  75 => 33,  63 => 23,  61 => 21,  48 => 11,  43 => 9,  39 => 8,  35 => 7,  31 => 6,  27 => 5,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}" type="text/css" />*/
/*         <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.css') }}" type="text/css" />*/
/*         <script type="text/javascript" src="{{ asset('javascript/jquery.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>*/
/* */
/*         <title>{% block title %}GCC_Camtel{% endblock %}</title>*/
/*         <style>*/
/*             .test>div{*/
/*                 margin-top: 10px;*/
/*                 font-family: constantia;*/
/*             }*/
/*         </style>*/
/*     </head>*/
/*     <body style="background: #384546; height: auto">*/
/*         <div style="height: 650px">*/
/*             {% block body %}*/
/*             {% endblock %}*/
/*         </div>*/
/*         <footer class="col-md-12"*/
/*                 style="*/
/*                 bottom: 0;*/
/*                 height: 30px;*/
/*                 background: #3175b0;*/
/*                 color: white;*/
/*                 border-top: 1px solid;*/
/*                 padding: 0px;*/
/*                 font-size: 18px;">*/
/*             Dévellopé par: {{webmaster}}; Tous droits réservés Camtel 2016, dirigé par: M. Bayonmbong Clément*/
/*         </footer>*/
/*         <script type="text/javascript" src="{{ asset('javascript/animation.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('javascript/validationFormPersonnel.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('javascript/validationFormPoste.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('javascript/validationFormBranche.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('javascript/validationFormCategorie.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('javascript/validationFormCompte.js') }}"></script>*/
/*     </body>*/
/* </html>*/