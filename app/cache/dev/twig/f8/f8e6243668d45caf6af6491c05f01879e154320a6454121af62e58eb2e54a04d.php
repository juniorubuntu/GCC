<?php

/* RepGestionBundle::test.html.twig */
class __TwigTemplate_5e4ffc1b5a8720883c62ad65ab5912738177fc923491c20e3574d17f37d787d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RepGestionBundle::layout.html.twig", "RepGestionBundle::test.html.twig", 1);
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
        echo "Ajout d'un nouveau poste";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"well col-md-12\">
        <a><button type=\"button\" class=\"btn btn-success active col-md-2 \"><span class=\"glyphicon glyphicon-remove-circle\">Annuler</span></button></a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "RepGestionBundle::test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  35 => 4,  29 => 2,  11 => 1,);
    }
}
/* {% extends "RepGestionBundle::layout.html.twig" %}*/
/* {% block title %}Ajout d'un nouveau poste{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="well col-md-12">*/
/*         <a><button type="button" class="btn btn-success active col-md-2 "><span class="glyphicon glyphicon-remove-circle">Annuler</span></button></a>*/
/*     </div>*/
/* {% endblock %}*/
