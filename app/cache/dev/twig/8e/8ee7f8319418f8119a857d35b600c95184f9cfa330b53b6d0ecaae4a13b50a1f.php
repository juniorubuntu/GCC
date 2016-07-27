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
                <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("list_tree_direction");
        echo "\"><button type=\"button\" class=\"btn btn-primary col-md-2\"><span class=\"glyphicon glyphicon-arrow-left\"> Retour à l'accueil</span></button></a><br>
                <table class=\"col-md-12 table table-bordered table-striped display cell-border row-border compact\" id=\"listQuota\">
                    <center><h2 class=\"col-md-12\">Récapitulatif des Quotas de : <b>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "html", null, true);
        echo "</b></h2></center>
                    <thead class=\"panel alert-info panel-primary active panel-heading\">
                        <tr>
                            <th style=\"width: 250px;\">Noms et prénoms</th>
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
                    <tfoot>
                        <tr>
                            <td colspan=\"8\"><center><h2>Total: <span style=\"color: green; font-size: 45px\"><b>";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "</b></span> FCFA</h2></center></td>
                    </tr>
                    </tfoot>
                    </tbody>
                </table>
                <script>
                    \$('#listQuota').DataTable({
                        \"pagingType\": \"full_numbers\",
                        \"lengthMenu\": [[10, 10], [10, 10]],
                        dom: 'Bfrtip',
                        lengthChange: true,
                        buttons: ['excel', 'pdf', 'print'],
                        \"language\": {
                            \"url\": \"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/French.json"), "html", null, true);
        echo "\"
                        }
                    });
                </script>
            </div>
            <div class=\"retour\">
                <div class=\"col-md-2 col-md-offset-9\">
                    <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("impression_data", array("id" => $this->getAttribute((isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "id", array()))), "html", null, true);
        echo "\"><b><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/excel.png"), "html", null, true);
        echo "\" style=\"height: 35px; font-size: 16px\"/>Excel</b></a>
                </div>
                <div class=\"col-md-1\">
                    <a href=\"#\"><b><img src=\"";
        // line 56
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
        return array (  112 => 56,  104 => 53,  94 => 46,  78 => 33,  72 => 30,  55 => 16,  50 => 14,  39 => 5,  36 => 4,  29 => 2,  11 => 1,);
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
/*                 <a href="{{ path('list_tree_direction') }}"><button type="button" class="btn btn-primary col-md-2"><span class="glyphicon glyphicon-arrow-left"> Retour à l'accueil</span></button></a><br>*/
/*                 <table class="col-md-12 table table-bordered table-striped display cell-border row-border compact" id="listQuota">*/
/*                     <center><h2 class="col-md-12">Récapitulatif des Quotas de : <b>{{ aDetailler }}</b></h2></center>*/
/*                     <thead class="panel alert-info panel-primary active panel-heading">*/
/*                         <tr>*/
/*                             <th style="width: 250px;">Noms et prénoms</th>*/
/*                             <th>Matricules</th>*/
/*                             <th>Téléphones</th>*/
/*                             <th>Quotas</th>*/
/*                             <th>Première attribution</th>*/
/*                             <th>Decision</th>*/
/*                             <th>Observations</th>*/
/*                             <th>Direction</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {{ export | raw }}*/
/*                     <tfoot>*/
/*                         <tr>*/
/*                             <td colspan="8"><center><h2>Total: <span style="color: green; font-size: 45px"><b>{{total}}</b></span> FCFA</h2></center></td>*/
/*                     </tr>*/
/*                     </tfoot>*/
/*                     </tbody>*/
/*                 </table>*/
/*                 <script>*/
/*                     $('#listQuota').DataTable({*/
/*                         "pagingType": "full_numbers",*/
/*                         "lengthMenu": [[10, 10], [10, 10]],*/
/*                         dom: 'Bfrtip',*/
/*                         lengthChange: true,*/
/*                         buttons: ['excel', 'pdf', 'print'],*/
/*                         "language": {*/
/*                             "url": "{{ asset('DataTables/French.json') }}"*/
/*                         }*/
/*                     });*/
/*                 </script>*/
/*             </div>*/
/*             <div class="retour">*/
/*                 <div class="col-md-2 col-md-offset-9">*/
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
