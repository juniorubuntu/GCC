<?php

/* RepGestionBundle:Rep:listCompte.html.twig */
class __TwigTemplate_0fb9483b1c4109b5d6a96f82cad8a1db2f21fee89be68112e2b86bbcd24be815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RepGestionBundle:Rep:accueil.html.twig");

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
        echo " - Comptes";
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
            <strong style=\"font-size: 18px\"><u>Gestion des comptes</u></strong>
        </div>
        ";
        // line 12
        $this->displayBlock('poste', $context, $blocks);
        // line 34
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
        echo "            <table class=\"col-md-12 table table-bordered\">
                <h2 class=\"col-md-12\">Titulaires des différents comptes</h2>
                <thead class=\"panel panel-primary active panel-heading\">
                    <tr>
                        <th>Titulaires</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comptes"]) ? $context["comptes"] : $this->getContext($context, "comptes")));
        foreach ($context['_seq'] as $context["_key"] => $context["compte"]) {
            // line 24
            echo "                        <tr>
                            <td><b>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "personnel"), "html", null, true);
            echo "</b></td>
                            <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_compte", array("id" => $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "id"))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-edit\">Modifier</span></button></a></td>
                            <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_compte", array("id" => $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "id"))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\">Supprimer</span></button></a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </tbody>
            </table>
            <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("list_tree_direction");
        echo "\"><button type=\"button\" class=\"btn btn-primary col-md-3\"><span class=\"glyphicon glyphicon-arrow-left\"> Retour à l'accueil</span></button></a>
        ";
    }

    public function getTemplateName()
    {
        return "RepGestionBundle:Rep:listCompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 32,  98 => 30,  89 => 27,  85 => 26,  81 => 25,  78 => 24,  74 => 23,  62 => 13,  59 => 12,  51 => 34,  49 => 12,  40 => 5,  37 => 4,  30 => 2,);
    }
}
