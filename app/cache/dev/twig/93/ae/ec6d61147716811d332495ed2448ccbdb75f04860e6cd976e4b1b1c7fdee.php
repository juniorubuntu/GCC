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
    <body style=\"background: #304154; height: auto\">
        <div style=\"height: 650px\">
            ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        </div>
        <footer class=\"col-md-8 col-md-offset-2 panel-footer page-header\" style=\"padding: 0px; font: 18px constantia\">
            <center>Dévellopé par: ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["webmaster"]) ? $context["webmaster"] : $this->getContext($context, "webmaster")), "html", null, true);
        echo "; Tous droits réservés Camtel 2016</center>
        </footer>
        <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascript/animation.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 25
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
        return array (  83 => 19,  80 => 18,  74 => 8,  67 => 25,  63 => 24,  58 => 22,  54 => 20,  52 => 18,  39 => 8,  35 => 7,  31 => 6,  27 => 5,  21 => 1,);
    }
}
