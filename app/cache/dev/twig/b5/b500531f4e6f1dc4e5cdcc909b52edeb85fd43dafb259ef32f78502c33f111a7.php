<?php

/* RepGestionBundle:Rep:accueil.html.twig */
class __TwigTemplate_1091d4ecbbd35d9586604363d5c941f99039bcf167f853c69fd03ff01f488000 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RepGestionBundle::layout.html.twig", "RepGestionBundle:Rep:accueil.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'quota' => array($this, 'block_quota'),
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
        <div class=\"pull-right col-md-2\">

            <div class=\"col-md-12 ll\" 
                 style=\"border-radius: 10px;
                 font: 14px constantia;
                 color: #286090;
                 font-weight: bold;\"
                 ><a href=\"#\" onclick=\"afficheMenu();\"><u style=\"padding: 2px; font-size: 16px;\">Gestion des comptes</u></a>
                <div class=\"row col-md-12\" style=\"
                     position: absolute;
                     z-index: 1;
                     opacity: 1;\">
                    <div class=\"col-md-12 dropdown-menu compte well\" style=\"
                         margin-top: 2px;
                         background: rgba(0, 0, 0, 0.82);
                         border-radius: 22px;\">
                        <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("add_compte");
        echo "\"><button class=\"btn btn-primary btn-sm col-md-11\" style=\"text-align: left; margin-bottom: 5px; margin-top: -10px;\"><span class=\"glyphicon glyphicon-plus-sign\">Créer un nouveau</span></button></a>
                        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("list_all_compte");
        echo "\"><button class=\"btn btn-info btn-sm col-md-6\" style=\"text-align: left; margin-bottom: 5px;\"><span class=\"glyphicon glyphicon-edit\">Modifier</span></button></a>
                        <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("list_all_compte");
        echo "\"<button class=\"btn btn-danger btn-sm col-md-7\" style=\"text-align: left; margin-bottom: 10px;\"><span class=\"glyphicon glyphicon-remove-sign\">Supprimer</span></button></a>
                        <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("rep_gestion_homepage");
        echo "\" class=\"col-md-12\"><u style=\"border: 1px solid wheat; padding: 2px; border-radius: 5px;\">Vous déconnecter</u></a>
                    </div>
                </div>
            </div>

        </div>
        ";
        // line 41
        $this->displayBlock('quota', $context, $blocks);
        // line 101
        echo "    </div>
";
    }

    // line 41
    public function block_quota($context, array $blocks = array())
    {
        // line 42
        echo "            <div class=\"col-md-12 test\">
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
        // line 53
        echo (isset($context["arbreDirection"]) ? $context["arbreDirection"] : $this->getContext($context, "arbreDirection"));
        echo "
                    </scroll>
                    <div class=\"panel-footer col-md-12\" style=\"
                         margin-left: -15px;
                         margin-right: -25px;
                         font-size: 16px;\">
                        <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("list_all_personnel");
        echo "\"><button class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-user\"><b> Gérer le personnel</b></span></button></a>
                        <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("list_all_categorie");
        echo "\"><button class=\"btn btn-primary pull-right\"><span class=\"glyphicon glyphicon-align-center\"><b> Gestion des Categorie</b></span></button></a>
                    </div>
                </div>
                ";
        // line 63
        if (array_key_exists("aDetailler", $context)) {
            // line 64
            echo "                    <nav class=\"hide\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "id", array()), "html", null, true);
            echo "</nav>
                    ";
        }
        // line 66
        echo "                    ";
        $this->displayBlock('detail', $context, $blocks);
        // line 99
        echo "            </div>
        ";
    }

    // line 66
    public function block_detail($context, array $blocks = array())
    {
        // line 67
        echo "                    <div class=\"col-md-7 panel-primary active\">
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
        return array (  158 => 67,  155 => 66,  150 => 99,  147 => 66,  141 => 64,  139 => 63,  133 => 60,  129 => 59,  120 => 53,  107 => 42,  104 => 41,  99 => 101,  97 => 41,  88 => 35,  84 => 34,  80 => 33,  76 => 32,  55 => 14,  45 => 7,  41 => 5,  38 => 4,  31 => 2,  11 => 1,);
    }
}
/* {% extends "RepGestionBundle::layout.html.twig" %}*/
/* {% block title %}{{ parent() }} - Accueil{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="col-md-12 ">*/
/*         <div class="col-md-12">*/
/*             <img src="{{ asset('images/logoAcc.png') }}" style="height: 79px;"/>*/
/*             <span style="*/
/*                   color: wheat;*/
/*                   font-size: 35px;*/
/*                   font-family: serif;">*/
/*                 Bienvenue dans l'application de gestion et répartition des crédits de communication*/
/*             </span>*/
/*             <img class="pull-right" src="{{ asset('images/logoAccD.png') }}" style="height: 79px;"/>*/
/*         </div>*/
/*         <div class="pull-right col-md-2">*/
/* */
/*             <div class="col-md-12 ll" */
/*                  style="border-radius: 10px;*/
/*                  font: 14px constantia;*/
/*                  color: #286090;*/
/*                  font-weight: bold;"*/
/*                  ><a href="#" onclick="afficheMenu();"><u style="padding: 2px; font-size: 16px;">Gestion des comptes</u></a>*/
/*                 <div class="row col-md-12" style="*/
/*                      position: absolute;*/
/*                      z-index: 1;*/
/*                      opacity: 1;">*/
/*                     <div class="col-md-12 dropdown-menu compte well" style="*/
/*                          margin-top: 2px;*/
/*                          background: rgba(0, 0, 0, 0.82);*/
/*                          border-radius: 22px;">*/
/*                         <a href="{{ path('add_compte')}}"><button class="btn btn-primary btn-sm col-md-11" style="text-align: left; margin-bottom: 5px; margin-top: -10px;"><span class="glyphicon glyphicon-plus-sign">Créer un nouveau</span></button></a>*/
/*                         <a href="{{ path('list_all_compte')}}"><button class="btn btn-info btn-sm col-md-6" style="text-align: left; margin-bottom: 5px;"><span class="glyphicon glyphicon-edit">Modifier</span></button></a>*/
/*                         <a href="{{ path('list_all_compte')}}"<button class="btn btn-danger btn-sm col-md-7" style="text-align: left; margin-bottom: 10px;"><span class="glyphicon glyphicon-remove-sign">Supprimer</span></button></a>*/
/*                         <a href="{{ path('rep_gestion_homepage')}}" class="col-md-12"><u style="border: 1px solid wheat; padding: 2px; border-radius: 5px;">Vous déconnecter</u></a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*         {% block quota %}*/
/*             <div class="col-md-12 test">*/
/*                 <div class="panel-primary col-md-5">*/
/*                     <div class="panel panel-heading col-md-12" style="*/
/*                          margin-left: -15px;*/
/*                          margin-right: -25px;">*/
/*                         <strong style="font-size: 18px"><u>Choisir ou dérouler la branche à manipuler</u></strong>*/
/*                         <button type="button" class="btn btn-success pull-right"><span class="glyphicon glyphicon-refresh"></span>Actualiser</button>*/
/*                     </div>*/
/*                     <scroll class="panel-body" style="*/
/*                             color: #04101b;*/
/*                             font-size: 16px;">*/
/*                         {{arbreDirection | raw}}*/
/*                     </scroll>*/
/*                     <div class="panel-footer col-md-12" style="*/
/*                          margin-left: -15px;*/
/*                          margin-right: -25px;*/
/*                          font-size: 16px;">*/
/*                         <a href="{{ path('list_all_personnel') }}"><button class="btn btn-primary"><span class="glyphicon glyphicon-user"><b> Gérer le personnel</b></span></button></a>*/
/*                         <a href="{{ path('list_all_categorie') }}"><button class="btn btn-primary pull-right"><span class="glyphicon glyphicon-align-center"><b> Gestion des Categorie</b></span></button></a>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% if aDetailler is defined %}*/
/*                     <nav class="hide">{{ aDetailler.id }}</nav>*/
/*                     {%  endif %}*/
/*                     {% block detail %}*/
/*                     <div class="col-md-7 panel-primary active">*/
/*                         <div class="panel panel-heading col-md-12" style="*/
/*                              margin-left: -15px;*/
/*                              margin-right: -25px;">*/
/*                             <strong style="font-size: 18px"><u>Détails sur la branche sélectionnée</u></strong>*/
/*                             <button type="button" class="btn btn-primary active pull-right"><span class="glyphicon glyphicon-print"></span> Exporter les données</button>*/
/*                         </div>*/
/*                         <scroll class="well col-md-12" style="*/
/*                                 color: #04101b;*/
/*                                 font-size: 16px;*/
/*                                 margin-left: -15px;*/
/*                                 margin-right: -25px;*/
/*                                 margin-top: -15px;*/
/*                                 margin-bottom: 2px;">*/
/*                             <center><h4>Vous êtes au niveau de: <b>Example de branche</b></h4></center>*/
/*                             <div class="chef">*/
/* */
/*                             </div>*/
/*                             <div class="poste">*/
/* */
/*                             </div>*/
/*                             <div class="retour">*/
/* */
/*                             </div>*/
/*                         </scroll>*/
/*                         <div class="panel-footer col-md-12" style="*/
/*                              margin-left: -15px;*/
/*                              margin-right: -25px;">*/
/*                             <b>Les informations ci-dessus sont modifiables. N'oubliez pas d'enregistrer en sortant sinon elle seront toutes perdues!</b>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endblock %}*/
/*             </div>*/
/*         {% endblock %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
