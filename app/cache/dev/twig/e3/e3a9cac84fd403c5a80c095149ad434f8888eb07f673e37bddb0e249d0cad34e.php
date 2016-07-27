<?php

/* RepGestionBundle:Rep:listCategorie.html.twig */
class __TwigTemplate_ab1c57e5c44122c1c247304a96f729087a4cecf0e597bac2f1da63874b2e1c22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RepGestionBundle:Rep:accueil.html.twig", "RepGestionBundle:Rep:listCategorie.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'detail' => array($this, 'block_detail'),
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
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Categories";
    }

    // line 4
    public function block_detail($context, array $blocks = array())
    {
        // line 5
        echo "
    <div class=\"col-md-7  well panel-primary active\">
        <div class=\"panel panel-heading col-md-12\" style=\"
             margin-left: -15px;
             margin-right: -25px;\">
            <strong style=\"font-size: 18px\"><u>Gestion des Catégories</u></strong>
        </div>
        ";
        // line 12
        $this->displayBlock('poste', $context, $blocks);
        // line 46
        echo "        <div class=\"panel panel-primary col-md-12\" style=\"color: red; margin-top: 20px\">
            <b><u>NB:</u> Les actions sur les informations ci-dessus sont irréversibles. Soyez prudent lors des sélections.</b>
        </div>
    </div>
";
    }

    // line 12
    public function block_poste($context, array $blocks = array())
    {
        // line 13
        echo "            <table class=\"col-md-12 table table-bordered row-border cell-border display\" id=\"catego\">
                <h2 class=\"col-md-12\">Liste des différentes catégories</h2>
                <thead class=\"panel panel-primary alert-info active panel-heading\">
                    <tr>
                        <th>Intitulés</th>
                        <th>Quotas mensuel</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 25
            echo "                        <tr>
                            <td><b>";
            // line 26
            echo twig_escape_filter($this->env, $context["categorie"], "html", null, true);
            echo "</b></td>
                            <td><b>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "quota", array()), "html", null, true);
            echo "</b></td>
                            <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_categorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-edit\"></span></button></a></td>
                            <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_categorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span></button></a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                </tbody>
            </table>
            <script>
                \$('#catego').DataTable({
                    \"pagingType\": \"full_numbers\",
                    \"lengthMenu\": [[5, 10], [5, 10]],
                    \"language\": {
                        \"url\": \"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/French.json"), "html", null, true);
        echo "\"
                    }

                });
            </script>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("list_tree_direction");
        echo "\"><button type=\"button\" class=\"btn btn-primary col-md-3\"><span class=\"glyphicon glyphicon-arrow-left\"> Retour à l'accueil</span></button></a>
        ";
    }

    public function getTemplateName()
    {
        return "RepGestionBundle:Rep:listCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 44,  112 => 39,  103 => 32,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  79 => 25,  75 => 24,  62 => 13,  59 => 12,  51 => 46,  49 => 12,  40 => 5,  37 => 4,  30 => 2,  11 => 1,);
    }
}
/* {% extends "RepGestionBundle:Rep:accueil.html.twig" %}*/
/* {% block title %}{{ parent() }} - Categories{% endblock %}*/
/* */
/* {% block detail %}*/
/* */
/*     <div class="col-md-7  well panel-primary active">*/
/*         <div class="panel panel-heading col-md-12" style="*/
/*              margin-left: -15px;*/
/*              margin-right: -25px;">*/
/*             <strong style="font-size: 18px"><u>Gestion des Catégories</u></strong>*/
/*         </div>*/
/*         {% block poste %}*/
/*             <table class="col-md-12 table table-bordered row-border cell-border display" id="catego">*/
/*                 <h2 class="col-md-12">Liste des différentes catégories</h2>*/
/*                 <thead class="panel panel-primary alert-info active panel-heading">*/
/*                     <tr>*/
/*                         <th>Intitulés</th>*/
/*                         <th>Quotas mensuel</th>*/
/*                         <th>Modifier</th>*/
/*                         <th>Supprimer</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for categorie in categories %}*/
/*                         <tr>*/
/*                             <td><b>{{ categorie }}</b></td>*/
/*                             <td><b>{{ categorie.quota }}</b></td>*/
/*                             <td><a href="{{ path('update_categorie', {'id': categorie.id}) }}"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></button></a></td>*/
/*                             <td><a href="{{ path('delete_categorie', {'id': categorie.id}) }}"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             <script>*/
/*                 $('#catego').DataTable({*/
/*                     "pagingType": "full_numbers",*/
/*                     "lengthMenu": [[5, 10], [5, 10]],*/
/*                     "language": {*/
/*                         "url": "{{ asset('DataTables/French.json') }}"*/
/*                     }*/
/* */
/*                 });*/
/*             </script>*/
/*             <a href="{{ path('list_tree_direction') }}"><button type="button" class="btn btn-primary col-md-3"><span class="glyphicon glyphicon-arrow-left"> Retour à l'accueil</span></button></a>*/
/*         {% endblock %}*/
/*         <div class="panel panel-primary col-md-12" style="color: red; margin-top: 20px">*/
/*             <b><u>NB:</u> Les actions sur les informations ci-dessus sont irréversibles. Soyez prudent lors des sélections.</b>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
