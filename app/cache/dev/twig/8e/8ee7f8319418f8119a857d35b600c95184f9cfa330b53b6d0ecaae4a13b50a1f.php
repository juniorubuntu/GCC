<?php

/* RepGestionBundle:Rep:exportData.html.twig */
class __TwigTemplate_5f2312b048575f3d9605d5b683250ea900692c24a8f83c0f5d21af65c3e86f0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RepGestionBundle:Rep:accueil.html.twig", "RepGestionBundle:Rep:exportData.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'quota' => array($this, 'block_quota'),
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
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Exportation";
    }

    // line 4
    public function block_quota($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"col-md-12 panel-primary active well\">
        <div class=\"panel panel-heading col-md-12\" style=\"\">
            <center><strong style=\"font-size: 20px; color: black; font-family: constantia;\">EXPORTATION DES DONNEES POUR LA REPARTITION DU CREDIT DE COMMUNICATION HEBDOMADAIRE DU PERSONNEL</strong></center>
        </div>
        <scroll class=\"col-md-12\" style=\"
                color: #04101b;
                font-family: constantia;
                font-size: 16px;\">
            <div class=\"poste\">
                <table class=\"col-md-12 table table-bordered\">
                    <h2 class=\"col-md-12\">Récapitulatif des Quotas de : <b>";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "html", null, true);
        echo "</b></h2>
                    <thead class=\"panel panel-primary active panel-heading\">
                        <tr>
                            <th>N<u><sup>0</sup></u></th>
                    <th>Noms et prénoms</th>
                    <th>Matricules</th>
                    <th>Téléphones</th>
                    <th>Quotas</th>
                    <th>Première attribution</th>
                    <th>Decision</th>
                    <th>Observations</th>
                    <th>Direction</th>
                    </tr>
                    </thead>
                    <tbody>
                        ";
        // line 30
        echo (isset($context["export"]) ? $context["export"] : $this->getContext($context, "export"));
        echo "
                        <tr>
                            <td colspan=\"9\"><center><h2>Total: <span style=\"color: green; font-size: 45px\"><b>";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "</b></span> FCFA</h2></center></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class=\"retour\">
                <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("list_tree_direction");
        echo "\"><button type=\"button\" class=\"btn btn-primary col-md-2\"><span class=\"glyphicon glyphicon-arrow-left\"> Retour à l'accueil</span></button></a>
                <div class=\"col-md-2 col-md-offset-7\">
                    <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("impression_data", array("id" => $this->getAttribute((isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "id", array()))), "html", null, true);
        echo "\"><b><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/excel.png"), "html", null, true);
        echo "\" style=\"height: 35px; font-size: 16px\"/>Excel</b></a>
                </div>
                <div class=\"col-md-1\">
                    <a href=\"#\"><b><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pdf.png"), "html", null, true);
        echo "\" style=\"height: 40px; font-size: 16px\"/>Pdf</b></a>
                </div>
            </div>
        </scroll>
    </div>
";
    }

    public function getTemplateName()
    {
        return "RepGestionBundle:Rep:exportData.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 43,  88 => 40,  83 => 38,  74 => 32,  69 => 30,  51 => 15,  39 => 5,  36 => 4,  29 => 2,  11 => 1,);
    }
}
/* {% extends "RepGestionBundle:Rep:accueil.html.twig" %}*/
/* {% block title %}{{ parent() }} - Exportation{% endblock %}*/
/* */
/* {% block quota %}*/
/*     <div class="col-md-12 panel-primary active well">*/
/*         <div class="panel panel-heading col-md-12" style="">*/
/*             <center><strong style="font-size: 20px; color: black; font-family: constantia;">EXPORTATION DES DONNEES POUR LA REPARTITION DU CREDIT DE COMMUNICATION HEBDOMADAIRE DU PERSONNEL</strong></center>*/
/*         </div>*/
/*         <scroll class="col-md-12" style="*/
/*                 color: #04101b;*/
/*                 font-family: constantia;*/
/*                 font-size: 16px;">*/
/*             <div class="poste">*/
/*                 <table class="col-md-12 table table-bordered">*/
/*                     <h2 class="col-md-12">Récapitulatif des Quotas de : <b>{{ aDetailler }}</b></h2>*/
/*                     <thead class="panel panel-primary active panel-heading">*/
/*                         <tr>*/
/*                             <th>N<u><sup>0</sup></u></th>*/
/*                     <th>Noms et prénoms</th>*/
/*                     <th>Matricules</th>*/
/*                     <th>Téléphones</th>*/
/*                     <th>Quotas</th>*/
/*                     <th>Première attribution</th>*/
/*                     <th>Decision</th>*/
/*                     <th>Observations</th>*/
/*                     <th>Direction</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {{ export | raw }}*/
/*                         <tr>*/
/*                             <td colspan="9"><center><h2>Total: <span style="color: green; font-size: 45px"><b>{{total}}</b></span> FCFA</h2></center></td>*/
/*                         </tr>*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*             <div class="retour">*/
/*                 <a href="{{ path('list_tree_direction') }}"><button type="button" class="btn btn-primary col-md-2"><span class="glyphicon glyphicon-arrow-left"> Retour à l'accueil</span></button></a>*/
/*                 <div class="col-md-2 col-md-offset-7">*/
/*                     <a href="{{ path('impression_data', {'id': aDetailler.id}) }}"><b><img src="{{ asset('images/excel.png') }}" style="height: 35px; font-size: 16px"/>Excel</b></a>*/
/*                 </div>*/
/*                 <div class="col-md-1">*/
/*                     <a href="#"><b><img src="{{ asset('images/pdf.png') }}" style="height: 40px; font-size: 16px"/>Pdf</b></a>*/
/*                 </div>*/
/*             </div>*/
/*         </scroll>*/
/*     </div>*/
/* {% endblock %}*/
/* */
