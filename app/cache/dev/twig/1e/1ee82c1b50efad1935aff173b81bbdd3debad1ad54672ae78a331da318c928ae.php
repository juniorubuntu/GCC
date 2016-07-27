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

        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/media/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/extensions/Buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/extensions/Buttons/js/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/extensions/Buttons/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/extensions/Buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/extensions/Buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/extensions/Buttons/js/buttons.colVis.min.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/jszip.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/vfs_fonts.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascript/validationFormPersonnel.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascript/validationFormPoste.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascript/validationFormBranche.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascript/validationFormCategorie.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascript/validationFormCompte.js"), "html", null, true);
        echo "\"></script>

        <title>";
        // line 30
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <style>
            .test>div{
                margin-top: 10px;
                font-family: constantia;
            }
        </style>
    </head>
    <body style=\"background: #4f4558; height: auto\">
        <div style=\"height: 650px\">
            ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 42
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
        // line 52
        echo twig_escape_filter($this->env, (isset($context["webmaster"]) ? $context["webmaster"] : $this->getContext($context, "webmaster")), "html", null, true);
        echo "; Tous droits réservés Camtel 2016, dirigé par: M. Bayonmbong Clément
        </footer>
        <script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascript/animation.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
    }

    // line 30
    public function block_title($context, array $blocks = array())
    {
        echo "GCC_Camtel";
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        // line 41
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
        return array (  163 => 41,  160 => 40,  154 => 30,  147 => 54,  142 => 52,  130 => 42,  128 => 40,  115 => 30,  110 => 28,  106 => 27,  102 => 26,  98 => 25,  94 => 24,  89 => 22,  85 => 21,  81 => 20,  76 => 18,  72 => 17,  68 => 16,  64 => 15,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  43 => 9,  39 => 8,  35 => 7,  31 => 6,  27 => 5,  21 => 1,);
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
/*         <script type="text/javascript" src="{{ asset('DataTables/media/js/jquery.dataTables.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('DataTables/extensions/Buttons/js/dataTables.buttons.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('DataTables/extensions/Buttons/js/buttons.bootstrap.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('DataTables/extensions/Buttons/js/buttons.flash.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('DataTables/extensions/Buttons/js/buttons.html5.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('DataTables/extensions/Buttons/js/buttons.print.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('DataTables/extensions/Buttons/js/buttons.colVis.min.js') }}"></script>*/
/* */
/*         <script type="text/javascript" src="{{ asset('DataTables/jszip.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('DataTables/pdfmake.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('DataTables/vfs_fonts.js') }}"></script>*/
/* */
/*         <script type="text/javascript" src="{{ asset('javascript/validationFormPersonnel.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('javascript/validationFormPoste.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('javascript/validationFormBranche.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('javascript/validationFormCategorie.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('javascript/validationFormCompte.js') }}"></script>*/
/* */
/*         <title>{% block title %}GCC_Camtel{% endblock %}</title>*/
/*         <style>*/
/*             .test>div{*/
/*                 margin-top: 10px;*/
/*                 font-family: constantia;*/
/*             }*/
/*         </style>*/
/*     </head>*/
/*     <body style="background: #4f4558; height: auto">*/
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
/*     </body>*/
/* </html>*/
