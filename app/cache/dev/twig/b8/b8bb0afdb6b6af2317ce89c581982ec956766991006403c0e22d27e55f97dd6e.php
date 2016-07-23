<?php

/* RepGestionBundle:Rep:login.html.twig */
class __TwigTemplate_6894a17b35a75a032ec9338763cd0100749023efdbb4f3469943b8186d8a5320 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RepGestionBundle::layout.html.twig", "RepGestionBundle:Rep:login.html.twig", 1);
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
         style=\"border-radius: 100px 100px 100px 100px;
         font-family: fantasy;
         background: rgba(255, 255, 255, 0.23);\">
        <center>
            <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/login.png"), "html", null, true);
        echo "\"/>
            <h3><u>Authentification</u></h3>
        </center>
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
                <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("rep_gestion_homepage");
        echo "\">
                    <button type=\"button\" class=\"col-md-3 col-md-offset-3 btn btn-default\" 
                            style=\"border-radius: 10px;
                            font: 14px constantia;
                            color: #090e2f;\"
                            ><span class=\"glyphicon glyphicon-remove\"></span>Annuler</button>
                </a>
                <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("list_tree_direction");
        echo "\">
                    <button type=\"button\" class=\"col-md-3 col-md-offset-1 btn btn-primary\"
                            style=\"border-radius: 10px;
                            font: 14px constantia;
                            color: #090e2f;\"
                            ><span class=\"glyphicon glyphicon-ok-sign\"></span>Connecter</button>
                </a>
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
        return array (  86 => 42,  76 => 35,  56 => 18,  39 => 5,  36 => 4,  29 => 2,  11 => 1,);
    }
}
/* {% extends "RepGestionBundle::layout.html.twig" %}*/
/* {% block title %}{{ parent() }} - Login{% endblock %}*/
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
/*     <div class="login well col-md-4 col-md-offset-4"*/
/*          style="border-radius: 100px 100px 100px 100px;*/
/*          font-family: fantasy;*/
/*          background: rgba(255, 255, 255, 0.23);">*/
/*         <center>*/
/*             <img src="{{asset('images/login.png')}}"/>*/
/*             <h3><u>Authentification</u></h3>*/
/*         </center>*/
/*         <form class="form-horizontal">*/
/*             <div class="form-group">*/
/*                 <label for="login" class="col-sm-4 control-label">Login</label>*/
/*                 <div class="col-sm-6">*/
/*                     <input type="email" class="form-control" id="login" name="login" placeholder="Login">*/
/*                 </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label for="motpasse" class="col-sm-4 control-label">Mot de passe</label>*/
/*                 <div class="col-sm-6">*/
/*                     <input type="password" class="form-control" id="motpasse" name="motpasse" placeholder="Mot de passe">*/
/*                 </div>*/
/*             </div>*/
/*             <div>*/
/*                 <a href="{{ path('rep_gestion_homepage')}}">*/
/*                     <button type="button" class="col-md-3 col-md-offset-3 btn btn-default" */
/*                             style="border-radius: 10px;*/
/*                             font: 14px constantia;*/
/*                             color: #090e2f;"*/
/*                             ><span class="glyphicon glyphicon-remove"></span>Annuler</button>*/
/*                 </a>*/
/*                 <a href="{{ path('list_tree_direction')}}">*/
/*                     <button type="button" class="col-md-3 col-md-offset-1 btn btn-primary"*/
/*                             style="border-radius: 10px;*/
/*                             font: 14px constantia;*/
/*                             color: #090e2f;"*/
/*                             ><span class="glyphicon glyphicon-ok-sign"></span>Connecter</button>*/
/*                 </a>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
/* */
