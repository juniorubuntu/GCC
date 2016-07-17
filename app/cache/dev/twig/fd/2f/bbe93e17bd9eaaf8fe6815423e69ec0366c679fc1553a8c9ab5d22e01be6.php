<?php

/* RepGestionBundle:Rep:accueil.html.twig */
class __TwigTemplate_fd2fbbe93e17bd9eaaf8fe6815423e69ec0366c679fc1553a8c9ab5d22e01be6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RepGestionBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'detail' => array($this, 'block_detail'),
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
        echo " - Accueil";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"col-md-12 \">
        <div class=\"col-md-12\">
            <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoAcc.png"), "html", null, true);
        echo "\" style=\"height: 79px;\"/>
            <span style=\"
                  color: wheat;
                  font-size: 35px;
                  font-family: serif;\">
                Bienvenue dans l'application de gestion et répartition des crédits de communication
            </span>
            <img class=\"pull-right\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoAccD.png"), "html", null, true);
        echo "\" style=\"height: 79px;\"/>
        </div>
        <div class=\"pull-right\">
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("rep_gestion_homepage");
        echo "\">
                <div class=\"col-md-12 ll\" 
                     style=\"border-radius: 10px;
                     font: 18px constantia;
                     color: #286090;
                     font-weight: bold;\"
                     ><u>Déconnexion</u></div>
            </a>
        </div>
        <div class=\"col-md-12 test\">
            <div class=\"panel-primary col-md-5\">
                <div class=\"panel panel-heading col-md-12\" style=\"
                     margin-left: -15px;
                     margin-right: -25px;\">
                    <strong style=\"font-size: 18px\"><u>Choisir ou dérouler la branche à manipuler</u></strong>
                    <button type=\"button\" class=\"btn btn-success pull-right\"><span class=\"glyphicon glyphicon-refresh\"></span>Actualiser</button>
                </div>
                <scroll class=\"panel-body\" style=\"
                        color: #04101b;
                        font-size: 16px;\">
                    ";
        // line 37
        echo (isset($context["arbreDirection"]) ? $context["arbreDirection"] : $this->getContext($context, "arbreDirection"));
        echo "
                </scroll>
                <div class=\"panel-footer col-md-12\" style=\"
                     margin-left: -15px;
                     margin-right: -25px;\">
                    <button class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-save\"> Importer des données</span></button>
                </div>
            </div>

            ";
        // line 46
        $this->displayBlock('detail', $context, $blocks);
        // line 79
        echo "        </div>
    </div>
";
    }

    // line 46
    public function block_detail($context, array $blocks = array())
    {
        // line 47
        echo "                <div class=\"col-md-7 panel-primary active\">
                    <div class=\"panel panel-heading col-md-12\" style=\"
                         margin-left: -15px;
                         margin-right: -25px;\">
                        <strong style=\"font-size: 18px\"><u>Détails sur la branche sélectionnée</u></strong>
                        <button type=\"button\" class=\"btn btn-primary active pull-right\"><span class=\"glyphicon glyphicon-print\"></span> Exporter les données</button>
                    </div>
                    <scroll class=\"well col-md-12\" style=\"
                            color: #04101b;
                            font-size: 16px;
                            margin-left: -15px;
                            margin-right: -25px;
                            margin-top: -15px;
                            margin-bottom: 2px;\">
                        <center><h4>Vous êtes au niveau de: <b>Example de branche</b></h4></center>
                        <div class=\"chef\">

                        </div>
                        <div class=\"poste\">

                        </div>
                        <div class=\"retour\">

                        </div>
                    </scroll>
                    <div class=\"panel-footer col-md-12\" style=\"
                         margin-left: -15px;
                         margin-right: -25px;\">
                        <b>Les informations ci-dessus sont modifiables. N'oubliez pas d'enregistrer en sortant sinon elle seront toutes perdues!</b>
                    </div>
                </div>
            ";
    }

    public function getTemplateName()
    {
        return "RepGestionBundle:Rep:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 47,  103 => 46,  97 => 79,  95 => 46,  83 => 37,  60 => 17,  54 => 14,  44 => 7,  40 => 5,  37 => 4,  30 => 2,);
    }
}
