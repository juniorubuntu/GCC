<?php

/* RepGestionBundle:Rep:detail.html.twig */
class __TwigTemplate_847b138c3c61dfd0d9bc5586df243f6c9729d23c97a214387b72ac04c55fe764 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RepGestionBundle:Rep:accueil.html.twig", "RepGestionBundle:Rep:detail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'detail' => array($this, 'block_detail'),
            'poste' => array($this, 'block_poste'),
            'branche' => array($this, 'block_branche'),
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
        echo " - Detail";
    }

    // line 4
    public function block_detail($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"col-md-7 panel-primary active\">
        <div class=\"panel panel-heading col-md-12\" style=\"
             margin-left: -15px;
             margin-right: -25px;\">
            <strong style=\"font-size: 18px\"><u>Détails sur la branche sélectionnée</u></strong>
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("export_data_branche", array("id" => $this->getAttribute((isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "id", array()))), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-primary active pull-right\"><span class=\"glyphicon glyphicon-print\"></span> Exporter les données</button></a>
        </div>
        <scroll class=\"well col-md-12\" style=\"
                color: #04101b;
                font-size: 16px;
                margin-left: -15px;
                margin-right: -25px;
                margin-top: -15px;
                margin-bottom: 2px;\">
            <marquee><h2><b>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "html", null, true);
        echo "</b></h2></marquee>
            <div class=\"poste\">
                ";
        // line 21
        $this->displayBlock('poste', $context, $blocks);
        // line 83
        echo "                <hr class=\"col-md-11\" style=\"
                    background: #1d2db9;
                    height: 2px;\">
                <hr class=\"col-md-11\" style=\"
                    background: #1d2db9;
                    height: 2px;
                    margin-top: -1%;\">
                ";
        // line 90
        $this->displayBlock('branche', $context, $blocks);
        // line 149
        echo "            </div>
            <div class=\"retour\">

            </div>
        </scroll>
        <div id=\"myModal\" class=\"modal fade\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h2 class=\"modal-title\" style=\"color: blue;\">Détachement d'une branche</h2>
                    </div>
                    <div class=\"modal-body\" style=\"background: #515163\">
                        <p style=\"
                           color: cyan;
                           font-size: large;\">Dérouler pour choisir sa nouvelle branche de rattachement</p>
                        <scroll class=\"panel-body\" style=\"
                                color: #04101b;
                                font-size: 16px;\">
                            ";
        // line 168
        if (array_key_exists("arbreDirectionBranche", $context)) {
            // line 169
            echo "                                ";
            echo (isset($context["arbreDirectionBranche"]) ? $context["arbreDirectionBranche"] : $this->getContext($context, "arbreDirectionBranche"));
            echo "
                            ";
        }
        // line 171
        echo "                            <b><nav class=\"form-control col-md-12\" id=\"newBranch\" style=\"
                                    background: #777777;
                                    color: #0d0e0e;
                                    font-size: 22px;
                                    margin-bottom: -30px;\"><b>Votre choix!!!</b></nav>
                            </b>
                        </scroll>
                    </div>
                    <div class=\"modal-footer\">
                        <form method=\"POST\" action=\"";
        // line 180
        echo $this->env->getExtension('routing')->getPath("update_direction_pere");
        echo "\">
                            <input type=\"text\" value=\"\" class=\"hide\" id=\"fils\" name=\"fils\"/>
                            <input type=\"text\" class=\"hide\" value=\"\" id=\"pere\" name=\"pere\"/>
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\">Annuler</span></button>
                            <button type=\"submit\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-ok-sign\">Valider</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"panel-footer col-md-12\" style=\"
             margin-left: -15px;
             margin-right: -25px;\">
            <b>Les informations ci-dessus sont modifiables. N'oubliez pas d'enregistrer en sortant sinon elle seront toutes perdues!</b>
        </div>
    </div>
";
    }

    // line 21
    public function block_poste($context, array $blocks = array())
    {
        // line 22
        echo "                    <table class=\"col-md-12 table table-striped table-bordered display cell-border row-border compact\" id=\"listPoste\">
                        <h2 class=\"col-md-12\">Postes et occupants</h2>
                        <thead class=\"panel panel-primary alert-info active panel-heading\">
                            <tr>
                                <th>Postes</th>
                                <th>Occupants</th>
                                <th>Quotas mensuel</th>
                                <th>Modifier</th>
                                <th>Supprimer</th>
                                <th>Informer</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listPoste"]) ? $context["listPoste"] : $this->getContext($context, "listPoste")));
        foreach ($context['_seq'] as $context["_key"] => $context["poste"]) {
            // line 36
            echo "                                <tr>
                                    <td><b>";
            // line 37
            echo twig_escape_filter($this->env, $context["poste"], "html", null, true);
            echo "</b></td>
                                    <td><b>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["poste"], "occupant", array()), "html", null, true);
            echo "</b></td>
                                    <td style=\"color: blue\"><b>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["poste"], "categorie", array()), "quota", array()), "html", null, true);
            echo "</b></td>
                                    <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_poste", array("id" => $this->getAttribute((isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "id", array()), "idPoste" => $this->getAttribute($context["poste"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-edit\"></span></button></a></td>
                                    <td>
                                        <button onclick=\"alertDeletePoste('";
            // line 42
            echo twig_escape_filter($this->env, $context["poste"], "html", null, true);
            echo "');\" type=\"button\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span></button>
                                        <div id=\"deletePosteModal\" class=\"modal fade\">
                                            <div class=\"modal-dialog modal-sm\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                        <h3 class=\"modal-title\" style=\"color: red;\">Suppression d'un poste</h3>
                                                    </div>
                                                    <div class=\"modal-body\" style=\"background: #1c2223; color: wheat\">
                                                        <center>
                                                            <h4 class=\"\"><b style=\"color: red\">? </b> Voulez vous supprimer le poste <b style=\"color: red\"> ?</b></h4>
                                                            <h3 id=\"posteToDelete\" style=\"color: white\"><b></b></h3>
                                                        </center>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\">Annuler</span></button>
                                                        <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_poste", array("id" => $this->getAttribute((isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "id", array()), "idPost" => $this->getAttribute($context["poste"], "id", array()))), "html", null, true);
            echo "\">
                                                            <button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-ok-sign\">Valider</span></button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><a><button type=\"button\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-send\"></span></button></a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                        </tbody>
                    </table>
                    <script>
                        \$('#listPoste').DataTable({
                            \"pagingType\": \"full_numbers\",
                            \"lengthMenu\": [[5, 10], [5, 10]],
                            \"language\": {
                                \"url\": \"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/French.json"), "html", null, true);
        echo "\"
                            }

                        });
                    </script>
                    <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_poste", array("id" => $this->getAttribute((isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "id", array()))), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-primary col-md-3\"><span class=\"glyphicon glyphicon-plus\">Ajouter un poste</span></button></a>
                ";
    }

    // line 90
    public function block_branche($context, array $blocks = array())
    {
        // line 91
        echo "                    <table class=\"col-md-12 table table-striped display cell-border row-border compact\" id=\"listBranche\">
                        <h2 class=\"col-md-12\">Démenbrements directs</h2>
                        <thead class=\"panel panel-info alert-info active panel-heading\">
                            <tr>
                                <th>Démembrements</th>
                                <th>Modifier</th>
                                <th>Détacher</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listSousDir"]) ? $context["listSousDir"] : $this->getContext($context, "listSousDir")));
        foreach ($context['_seq'] as $context["_key"] => $context["sousDir"]) {
            // line 103
            echo "                                <tr>
                                    <td><b>";
            // line 104
            echo twig_escape_filter($this->env, $context["sousDir"], "html", null, true);
            echo "</b></td>
                                    <td><a href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_direction", array("id" => $this->getAttribute((isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "id", array()), "idDir" => $this->getAttribute($context["sousDir"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-edit\"></span></button></a></td>
                                    <td><a><button type=\"button\" onclick=\"detacheBranche(";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["sousDir"], "id", array()), "html", null, true);
            echo ");\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-minus\"></span></button></a></td>
                                    <td>
                                        <a><button type=\"button\" onclick=\"alertDelete('";
            // line 108
            echo twig_escape_filter($this->env, $context["sousDir"], "html", null, true);
            echo "');\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span></button></a>
                                        <div id=\"deleteModal\" class=\"modal fade\">
                                            <div class=\"modal-dialog\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                        <h2 class=\"modal-title\" style=\"color: red;\">Suppression d'une branche</h2>
                                                    </div>
                                                    <div class=\"modal-body\" style=\"background: #1c2223; color: wheat\">
                                                        <center>
                                                            <h4 class=\"\"><b style=\"color: red\">? </b> Etes vous sur de vouloir supprimer le démembrement <b style=\"color: red\"> ?</b></h4>
                                                            <h3 id=\"toDelete\" style=\"color: white\"><b></b></h3>
                                                        </center>
                                                        <h4 class=\"\" style=\"color: red\">Cette suppression entrainera la suppression de toutes ses branches filles!</h4>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\">Annuler</span></button>
                                                        <a href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_direction", array("id" => $this->getAttribute((isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "id", array()), "idDir" => $this->getAttribute($context["sousDir"], "id", array()))), "html", null, true);
            echo "\">
                                                            <button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-ok-sign\">Poursuivre</span></button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousDir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                        </tbody>
                    </table>
                    <script>
                        \$('#listBranche').DataTable({
                            \"pagingType\": \"full_numbers\",
                            \"lengthMenu\": [[5, 10], [5, 10]],
                            \"language\": {
                                \"url\": \"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/French.json"), "html", null, true);
        echo "\"
                            }

                        });
                    </script>
                    <a href=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_branche", array("id" => $this->getAttribute((isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "id", array()))), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-primary col-md-4\"><span class=\"glyphicon glyphicon-plus\">Ajouter un démembrement</span></button></a>
                ";
    }

    public function getTemplateName()
    {
        return "RepGestionBundle:Rep:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 147,  321 => 142,  312 => 135,  296 => 125,  276 => 108,  271 => 106,  267 => 105,  263 => 104,  260 => 103,  256 => 102,  243 => 91,  240 => 90,  234 => 81,  226 => 76,  217 => 69,  200 => 58,  181 => 42,  176 => 40,  172 => 39,  168 => 38,  164 => 37,  161 => 36,  157 => 35,  142 => 22,  139 => 21,  118 => 180,  107 => 171,  101 => 169,  99 => 168,  78 => 149,  76 => 90,  67 => 83,  65 => 21,  60 => 19,  48 => 10,  41 => 5,  38 => 4,  31 => 2,  11 => 1,);
    }
}
/* {% extends "RepGestionBundle:Rep:accueil.html.twig" %}*/
/* {% block title %}{{ parent() }} - Detail{% endblock %}*/
/* */
/* {% block detail %}*/
/*     <div class="col-md-7 panel-primary active">*/
/*         <div class="panel panel-heading col-md-12" style="*/
/*              margin-left: -15px;*/
/*              margin-right: -25px;">*/
/*             <strong style="font-size: 18px"><u>Détails sur la branche sélectionnée</u></strong>*/
/*             <a href="{{ path('export_data_branche', {'id': aDetailler.id}) }}"><button type="button" class="btn btn-primary active pull-right"><span class="glyphicon glyphicon-print"></span> Exporter les données</button></a>*/
/*         </div>*/
/*         <scroll class="well col-md-12" style="*/
/*                 color: #04101b;*/
/*                 font-size: 16px;*/
/*                 margin-left: -15px;*/
/*                 margin-right: -25px;*/
/*                 margin-top: -15px;*/
/*                 margin-bottom: 2px;">*/
/*             <marquee><h2><b>{{ aDetailler }}</b></h2></marquee>*/
/*             <div class="poste">*/
/*                 {% block poste %}*/
/*                     <table class="col-md-12 table table-striped table-bordered display cell-border row-border compact" id="listPoste">*/
/*                         <h2 class="col-md-12">Postes et occupants</h2>*/
/*                         <thead class="panel panel-primary alert-info active panel-heading">*/
/*                             <tr>*/
/*                                 <th>Postes</th>*/
/*                                 <th>Occupants</th>*/
/*                                 <th>Quotas mensuel</th>*/
/*                                 <th>Modifier</th>*/
/*                                 <th>Supprimer</th>*/
/*                                 <th>Informer</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% for poste in listPoste %}*/
/*                                 <tr>*/
/*                                     <td><b>{{ poste }}</b></td>*/
/*                                     <td><b>{{ poste.occupant }}</b></td>*/
/*                                     <td style="color: blue"><b>{{ poste.categorie.quota }}</b></td>*/
/*                                     <td><a href="{{ path('update_poste', {'id': aDetailler.id, 'idPoste': poste.id}) }}"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></button></a></td>*/
/*                                     <td>*/
/*                                         <button onclick="alertDeletePoste('{{ poste }}');" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>*/
/*                                         <div id="deletePosteModal" class="modal fade">*/
/*                                             <div class="modal-dialog modal-sm">*/
/*                                                 <div class="modal-content">*/
/*                                                     <div class="modal-header">*/
/*                                                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                                                         <h3 class="modal-title" style="color: red;">Suppression d'un poste</h3>*/
/*                                                     </div>*/
/*                                                     <div class="modal-body" style="background: #1c2223; color: wheat">*/
/*                                                         <center>*/
/*                                                             <h4 class=""><b style="color: red">? </b> Voulez vous supprimer le poste <b style="color: red"> ?</b></h4>*/
/*                                                             <h3 id="posteToDelete" style="color: white"><b></b></h3>*/
/*                                                         </center>*/
/*                                                     </div>*/
/*                                                     <div class="modal-footer">*/
/*                                                         <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign">Annuler</span></button>*/
/*                                                         <a href="{{ path('delete_poste', {'id': aDetailler.id, 'idPost': poste.id}) }}">*/
/*                                                             <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign">Valider</span></button>*/
/*                                                         </a>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </td>*/
/*                                     <td><a><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-send"></span></button></a></td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                     <script>*/
/*                         $('#listPoste').DataTable({*/
/*                             "pagingType": "full_numbers",*/
/*                             "lengthMenu": [[5, 10], [5, 10]],*/
/*                             "language": {*/
/*                                 "url": "{{ asset('DataTables/French.json') }}"*/
/*                             }*/
/* */
/*                         });*/
/*                     </script>*/
/*                     <a href="{{ path('add_poste', {'id': aDetailler.id}) }}"><button type="button" class="btn btn-primary col-md-3"><span class="glyphicon glyphicon-plus">Ajouter un poste</span></button></a>*/
/*                 {% endblock %}*/
/*                 <hr class="col-md-11" style="*/
/*                     background: #1d2db9;*/
/*                     height: 2px;">*/
/*                 <hr class="col-md-11" style="*/
/*                     background: #1d2db9;*/
/*                     height: 2px;*/
/*                     margin-top: -1%;">*/
/*                 {% block branche %}*/
/*                     <table class="col-md-12 table table-striped display cell-border row-border compact" id="listBranche">*/
/*                         <h2 class="col-md-12">Démenbrements directs</h2>*/
/*                         <thead class="panel panel-info alert-info active panel-heading">*/
/*                             <tr>*/
/*                                 <th>Démembrements</th>*/
/*                                 <th>Modifier</th>*/
/*                                 <th>Détacher</th>*/
/*                                 <th>Supprimer</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% for sousDir in listSousDir %}*/
/*                                 <tr>*/
/*                                     <td><b>{{ sousDir }}</b></td>*/
/*                                     <td><a href="{{ path('update_direction', {'id':aDetailler.id, 'idDir':sousDir.id }) }}"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></button></a></td>*/
/*                                     <td><a><button type="button" onclick="detacheBranche({{sousDir.id}});" class="btn btn-warning"><span class="glyphicon glyphicon-minus"></span></button></a></td>*/
/*                                     <td>*/
/*                                         <a><button type="button" onclick="alertDelete('{{ sousDir }}');" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a>*/
/*                                         <div id="deleteModal" class="modal fade">*/
/*                                             <div class="modal-dialog">*/
/*                                                 <div class="modal-content">*/
/*                                                     <div class="modal-header">*/
/*                                                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                                                         <h2 class="modal-title" style="color: red;">Suppression d'une branche</h2>*/
/*                                                     </div>*/
/*                                                     <div class="modal-body" style="background: #1c2223; color: wheat">*/
/*                                                         <center>*/
/*                                                             <h4 class=""><b style="color: red">? </b> Etes vous sur de vouloir supprimer le démembrement <b style="color: red"> ?</b></h4>*/
/*                                                             <h3 id="toDelete" style="color: white"><b></b></h3>*/
/*                                                         </center>*/
/*                                                         <h4 class="" style="color: red">Cette suppression entrainera la suppression de toutes ses branches filles!</h4>*/
/*                                                     </div>*/
/*                                                     <div class="modal-footer">*/
/*                                                         <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign">Annuler</span></button>*/
/*                                                         <a href="{{ path('delete_direction', {'id':aDetailler.id, 'idDir':sousDir.id }) }}">*/
/*                                                             <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign">Poursuivre</span></button>*/
/*                                                         </a>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                     <script>*/
/*                         $('#listBranche').DataTable({*/
/*                             "pagingType": "full_numbers",*/
/*                             "lengthMenu": [[5, 10], [5, 10]],*/
/*                             "language": {*/
/*                                 "url": "{{ asset('DataTables/French.json') }}"*/
/*                             }*/
/* */
/*                         });*/
/*                     </script>*/
/*                     <a href="{{ path('add_branche', {'id': aDetailler.id}) }}"><button type="button" class="btn btn-primary col-md-4"><span class="glyphicon glyphicon-plus">Ajouter un démembrement</span></button></a>*/
/*                 {% endblock%}*/
/*             </div>*/
/*             <div class="retour">*/
/* */
/*             </div>*/
/*         </scroll>*/
/*         <div id="myModal" class="modal fade">*/
/*             <div class="modal-dialog">*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                         <h2 class="modal-title" style="color: blue;">Détachement d'une branche</h2>*/
/*                     </div>*/
/*                     <div class="modal-body" style="background: #515163">*/
/*                         <p style="*/
/*                            color: cyan;*/
/*                            font-size: large;">Dérouler pour choisir sa nouvelle branche de rattachement</p>*/
/*                         <scroll class="panel-body" style="*/
/*                                 color: #04101b;*/
/*                                 font-size: 16px;">*/
/*                             {% if arbreDirectionBranche is defined %}*/
/*                                 {{ arbreDirectionBranche | raw }}*/
/*                             {% endif %}*/
/*                             <b><nav class="form-control col-md-12" id="newBranch" style="*/
/*                                     background: #777777;*/
/*                                     color: #0d0e0e;*/
/*                                     font-size: 22px;*/
/*                                     margin-bottom: -30px;"><b>Votre choix!!!</b></nav>*/
/*                             </b>*/
/*                         </scroll>*/
/*                     </div>*/
/*                     <div class="modal-footer">*/
/*                         <form method="POST" action="{{ path('update_direction_pere') }}">*/
/*                             <input type="text" value="" class="hide" id="fils" name="fils"/>*/
/*                             <input type="text" class="hide" value="" id="pere" name="pere"/>*/
/*                             <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign">Annuler</span></button>*/
/*                             <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign">Valider</span></button>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="panel-footer col-md-12" style="*/
/*              margin-left: -15px;*/
/*              margin-right: -25px;">*/
/*             <b>Les informations ci-dessus sont modifiables. N'oubliez pas d'enregistrer en sortant sinon elle seront toutes perdues!</b>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
