<?php

/* RepGestionBundle::layout.html.twig */
class __TwigTemplate_93aeec6d61147716811d332495ed2448ccbdb75f04860e6cd976e4b1b1c7fdee extends Twig_Template
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
        <title>";
        // line 8
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
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        </div>
        <footer class=\"col-md-12\"
                style=\"position: fixed;
                bottom: 0;
                height: 30px;
                background: #3175b0;
                color: white;
                border-top: 1px solid;
                padding: 0px;
                font-size: 18px;\">
            Dévellopé par: ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["webmaster"]) ? $context["webmaster"] : $this->getContext($context, "webmaster")), "html", null, true);
        echo "; Tous droits réservés Camtel 2016, dirigé par: M. Bayonmbong Clément
        </footer>
        <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascript/animation.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascript/validationFormPersonnel.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascript/validationFormPoste.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascript/validationFormBranche.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascript/validationFormCategorie.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascript/validationFormCompte.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascript/jquery.min.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "GCC_Camtel";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
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
        return array (  111 => 19,  102 => 8,  95 => 38,  91 => 37,  71 => 32,  66 => 30,  52 => 18,  35 => 7,  31 => 6,  27 => 5,  21 => 1,  142 => 65,  139 => 64,  130 => 64,  124 => 62,  122 => 61,  107 => 52,  87 => 36,  83 => 35,  79 => 34,  75 => 33,  54 => 20,  44 => 7,  40 => 5,  37 => 4,  133 => 97,  129 => 47,  120 => 44,  116 => 58,  112 => 42,  108 => 18,  104 => 40,  100 => 39,  96 => 38,  92 => 37,  89 => 36,  85 => 35,  61 => 13,  58 => 12,  50 => 51,  48 => 12,  39 => 8,  36 => 4,  30 => 2,);
    }
}
