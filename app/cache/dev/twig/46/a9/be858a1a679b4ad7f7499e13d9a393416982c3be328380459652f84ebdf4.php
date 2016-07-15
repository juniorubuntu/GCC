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
        <button type=\"button\" class=\"col-md-4 col-md-offset-1 btn btn-info\" 
                style=\"height: 65px;
                border-radius: 60px;
                font: 32px constantia bolder;
                color: #021082;\"
                ><span class=\"glyphicon glyphicon-ok-sign\"></span>Welcome</button>
        <button type=\"button\" class=\"col-md-4 col-md-offset-1 btn btn-primary\"
                style=\"height: 65px;
                border-radius: 60px;
                font: 32px constantia bolder;
                color: #021082;\"
                ><span class=\"glyphicon glyphicon-ok-sign\"></span>Bienvenue</button>
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
        return array (  39 => 5,  36 => 4,  29 => 2,);
    }
}
