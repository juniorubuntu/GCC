<?php

/* RepGestionBundle:Rep:Start.html.twig */
class __TwigTemplate_5e89421d9e9fc02923b0ca0521625a52ab122da5e89126916c209efbe0dc8af9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RepGestionBundle::layout.html.twig", "RepGestionBundle:Rep:Start.html.twig", 1);
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
        return array (  66 => 25,  55 => 17,  39 => 5,  36 => 4,  29 => 2,  11 => 1,);
    }
}
/* {% extends "RepGestionBundle::layout.html.twig" %}*/
/* {% block title %}{{ parent() }} - Index{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="col-md-7 col-md-offset-2" style="background: url({{ asset('images/logo.png') }}) no-repeat; height: 204px;">*/
/*         <div class="col-md-8 col-md-offset-2" */
/*              style="color: white;*/
/*              text-shadow: 2px 5px #132919;*/
/*              font-family: fantasy;">*/
/*             <center><h1>Plateforme de gestion et de répartition du crédit de communication du personnel de la Camtel</h1></center>*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-md-7" style="height: 100px;">*/
/* */
/*     </div>*/
/*     <div class="langue col-md-6 col-md-offset-3">*/
/*         <a href="{{ path('rep_gestion_login')}}">*/
/*             <button type="button" class="col-md-4 col-md-offset-1 btn btn-info" */
/*                     style="height: 65px;*/
/*                     border-radius: 60px;*/
/*                     font: 32px constantia bolder;*/
/*                     color: #021082;"*/
/*                     ><span class="glyphicon glyphicon-ok-sign"></span>Welcome</button>*/
/*         </a>*/
/*         <a href="{{ path('rep_gestion_login')}}">*/
/*             <button type="button" class="col-md-4 col-md-offset-1 btn btn-primary"*/
/*                     style="height: 65px;*/
/*                     border-radius: 60px;*/
/*                     font: 32px constantia bolder;*/
/*                     color: #021082;"*/
/*                     ><span class="glyphicon glyphicon-ok-sign"></span>Bienvenue</button>*/
/*         </a>*/
/*     </div>*/
/* {% endblock %}*/
/* */
