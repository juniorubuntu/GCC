<?php

/* RepGestionBundle:Rep:listPersonnel.html.twig */
class __TwigTemplate_1ddab9f1b78a86edf6a6676bba3130f516ec8d8b97af5232d3ed25867f891552 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RepGestionBundle:Rep:accueil.html.twig", "RepGestionBundle:Rep:listPersonnel.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'quota' => array($this, 'block_quota'),
            'poste' => array($this, 'block_poste'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RepGestionBundle:Rep:accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Gestion - Personnels (Liste)";
    }

    // line 4
    public function block_quota($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"col-md-12  well panel-primary active\" style=\"font-family: constantia\">
        <div class=\"panel panel-heading col-md-12\" style=\"\">
            <strong style=\"font-size: 18px\"><u>Gestion du Personnel</u></strong>
        </div>
        ";
        // line 9
        $this->displayBlock('poste', $context, $blocks);
        // line 46
        echo "        <div class=\"panel panel-primary col-md-12\" style=\"color: red; margin-top: 20px\">
            <b><u>NB:</u> Les actions sur les informations ci-dessus sont irréversibles. Soyez prudent lors des sélections.</b>
        </div>
    </div>
";
    }

    // line 9
    public function block_poste($context, array $blocks = array())
    {
        // line 10
        echo "            <table class=\"col-md-12 table table-bordered\" style=\"\">
                <div class=\"form-group col-md-12\">
                    <u class=\"col-md-12\" style=\"
                       font-weight: bold;
                       font-size: 28px; \">Personnel travaillant à la Camtel</u>
                    <input type=\"text\" class=\"has-success\" style=\"border-radius: 5px; font-size: 18px; height: 30px;\" placeholder=\"Rechercher\"/>
                    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("list_tree_direction");
        echo "\"><button type=\"button\" class=\"btn btn-primary pull-right\"><span class=\"glyphicon glyphicon-arrow-left\"> Retour à l'accueil</span></button></a>
                </div>
                <thead class=\"panel panel-primary active panel-heading\">
                    <tr>
                        <th style=\"font-size: 18px;\">Noms et prénoms</th>
                        <th>Matricules</th>
                        <th>Contacts</th>
                        <th>Emails</th>
                        <th>Dates d'entrée</th>
                        <th>Decisions</th>
                        <th>Modifier</th>
                        <th>Suppr.</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnels"]) ? $context["personnels"] : $this->getContext($context, "personnels")));
        foreach ($context['_seq'] as $context["_key"] => $context["personnel"]) {
            // line 32
            echo "                        <tr>
                            <td style=\"font-size: 18px;\"><b>";
            // line 33
            echo twig_escape_filter($this->env, $context["personnel"], "html", null, true);
            echo "</b></td>
                            <td><b>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["personnel"], "matricule", array()), "html", null, true);
            echo "</b></td>
                            <td><b>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["personnel"], "numTel", array()), "html", null, true);
            echo "</b></td>
                            <td><b>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["personnel"], "email", array()), "html", null, true);
            echo "</b></td>
                            <td><b>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["personnel"], "dateRecru", array()), "m/d/Y"), "html", null, true);
            echo "</b></td>
                            <td><b>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["personnel"], "refDecision", array()), "html", null, true);
            echo "</b></td>
                            <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_personnel", array("id" => $this->getAttribute($context["personnel"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-edit\"></span></button></a></td>
                            <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_personnel", array("id" => $this->getAttribute($context["personnel"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span></button></a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personnel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                </tbody>
            </table>
        ";
    }

    public function getTemplateName()
    {
        return "RepGestionBundle:Rep:listPersonnel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 43,  119 => 40,  115 => 39,  111 => 38,  107 => 37,  103 => 36,  99 => 35,  95 => 34,  91 => 33,  88 => 32,  84 => 31,  66 => 16,  58 => 10,  55 => 9,  47 => 46,  45 => 9,  39 => 5,  36 => 4,  30 => 2,  11 => 1,);
    }
}
/* {% extends "RepGestionBundle:Rep:accueil.html.twig" %}*/
/* {% block title %} Gestion - Personnels (Liste){% endblock %}*/
/* */
/* {% block quota %}*/
/*     <div class="col-md-12  well panel-primary active" style="font-family: constantia">*/
/*         <div class="panel panel-heading col-md-12" style="">*/
/*             <strong style="font-size: 18px"><u>Gestion du Personnel</u></strong>*/
/*         </div>*/
/*         {% block poste %}*/
/*             <table class="col-md-12 table table-bordered" style="">*/
/*                 <div class="form-group col-md-12">*/
/*                     <u class="col-md-12" style="*/
/*                        font-weight: bold;*/
/*                        font-size: 28px; ">Personnel travaillant à la Camtel</u>*/
/*                     <input type="text" class="has-success" style="border-radius: 5px; font-size: 18px; height: 30px;" placeholder="Rechercher"/>*/
/*                     <a href="{{ path('list_tree_direction') }}"><button type="button" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-arrow-left"> Retour à l'accueil</span></button></a>*/
/*                 </div>*/
/*                 <thead class="panel panel-primary active panel-heading">*/
/*                     <tr>*/
/*                         <th style="font-size: 18px;">Noms et prénoms</th>*/
/*                         <th>Matricules</th>*/
/*                         <th>Contacts</th>*/
/*                         <th>Emails</th>*/
/*                         <th>Dates d'entrée</th>*/
/*                         <th>Decisions</th>*/
/*                         <th>Modifier</th>*/
/*                         <th>Suppr.</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for personnel in personnels %}*/
/*                         <tr>*/
/*                             <td style="font-size: 18px;"><b>{{ personnel }}</b></td>*/
/*                             <td><b>{{ personnel.matricule }}</b></td>*/
/*                             <td><b>{{ personnel.numTel }}</b></td>*/
/*                             <td><b>{{ personnel.email }}</b></td>*/
/*                             <td><b>{{ personnel.dateRecru | date("m/d/Y") }}</b></td>*/
/*                             <td><b>{{ personnel.refDecision }}</b></td>*/
/*                             <td><a href="{{ path('update_personnel', {'id': personnel.id}) }}"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></button></a></td>*/
/*                             <td><a href="{{ path('delete_personnel', {'id': personnel.id}) }}"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         {% endblock %}*/
/*         <div class="panel panel-primary col-md-12" style="color: red; margin-top: 20px">*/
/*             <b><u>NB:</u> Les actions sur les informations ci-dessus sont irréversibles. Soyez prudent lors des sélections.</b>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
