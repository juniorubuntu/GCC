<?php

/* RepGestionBundle:Rep:login.html.twig */
class __TwigTemplate_684a3aeec87146b58d6779b18cb13416148a1f5858e5af11514d3ecec8c0316e extends Twig_Template
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
        echo " - Login";
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
    <div class=\"login well col-md-4 col-md-offset-4\"
         style=\"border-radius: 50px 50px 50px 50px;
         font-family: fantasy;\">
        <center><h3><u>Authentification</u></h3></center>
        <form class=\"form-horizontal\">
            <div class=\"form-group\">
                <label for=\"login\" class=\"col-sm-4 control-label\">Login</label>
                <div class=\"col-sm-6\">
                    <input type=\"email\" class=\"form-control\" id=\"login\" name=\"login\" placeholder=\"Login\">
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"motpasse\" class=\"col-sm-4 control-label\">Mot de passe</label>
                <div class=\"col-sm-6\">
                    <input type=\"password\" class=\"form-control\" id=\"motpasse\" name=\"motpasse\" placeholder=\"Mot de passe\">
                </div>
            </div>
            <div>
                <button type=\"button\" class=\"col-md-3 col-md-offset-3 btn btn-default\" 
                        style=\"border-radius: 10px;
                        font: 18px constantia;
                        color: #090e2f;\"
                        ><span class=\"glyphicon glyphicon-remove\"></span>Annuler</button>
                <button type=\"button\" class=\"col-md-3 col-md-offset-1 btn btn-primary\"
                        style=\"border-radius: 10px;
                        font: 18px constantia;
                        color: #090e2f;\"
                        ><span class=\"glyphicon glyphicon-ok-sign\"></span>Valider</button>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "RepGestionBundle:Rep:login.html.twig";
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