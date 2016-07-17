<?php

/* RepGestionBundle:Rep:detail.html.twig */
class __TwigTemplate_749238adfdead1e08f847221e2c584d6ca942a716b03abdcbc811f333d8e8e6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RepGestionBundle:Rep:accueil.html.twig");

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
            <button type=\"button\" class=\"btn btn-primary active pull-right\"><span class=\"glyphicon glyphicon-print\"></span> Exporter les données</button>
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
        // line 49
        echo "                ";
        $this->displayBlock('branche', $context, $blocks);
        // line 73
        echo "            </div>
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

    // line 21
    public function block_poste($context, array $blocks = array())
    {
        // line 22
        echo "                    <table class=\"col-md-12 table table-bordered\">
                        <h2 class=\"col-md-12\">Postes et occupants</h2>
                        <thead class=\"panel panel-primary active panel-heading\">
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listPoste"]) ? $context["listPoste"] : $this->getContext($context, "listPoste")));
        foreach ($context['_seq'] as $context["_key"] => $context["poste"]) {
            // line 36
            echo "                                <tr>
                                    <td><b>";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["poste"]) ? $context["poste"] : $this->getContext($context, "poste")), "html", null, true);
            echo "</b></td>
                                    <td><b>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["poste"]) ? $context["poste"] : $this->getContext($context, "poste")), "occupant"), "html", null, true);
            echo "</b></td>
                                    <td style=\"color: blue\"><b>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["poste"]) ? $context["poste"] : $this->getContext($context, "poste")), "categorie"), "quota"), "html", null, true);
            echo "</b></td>
                                    <td><a><button type=\"button\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-edit\">Modifier</span></button></a></td>
                                    <td><a><button type=\"button\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\">Supprimer</span></button></a></td>
                                    <td><a><button type=\"button\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-send\"> Mail</span></button></a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                        </tbody>
                    </table>
                    <a><button type=\"button\" class=\"btn btn-primary col-md-3\"><span class=\"glyphicon glyphicon-plus\">Ajouter un poste</span></button></a>
                ";
    }

    // line 49
    public function block_branche($context, array $blocks = array())
    {
        // line 50
        echo "                    <table class=\"col-md-12 table table-bordered\">
                        <h2 class=\"col-md-12\">Démenbrements directs</h2>
                        <thead class=\"panel panel-info active panel-heading\">
                            <tr>
                                <th>Démembrements</th>
                                <th>Modifier</th>
                                <th>Détacher de cette branche</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listSousDir"]) ? $context["listSousDir"] : $this->getContext($context, "listSousDir")));
        foreach ($context['_seq'] as $context["_key"] => $context["sousDir"]) {
            // line 62
            echo "                                <tr>
                                    <td><b>";
            // line 63
            echo twig_escape_filter($this->env, (isset($context["sousDir"]) ? $context["sousDir"] : $this->getContext($context, "sousDir")), "html", null, true);
            echo "</b></td>
                                    <td><a><button type=\"button\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-edit\">Modifier</span></button></a></td>
                                    <td><a><button type=\"button\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-minus\">Détacher</span></button></a></td>
                                    <td><a><button type=\"button\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\">Supprimer</span></button></a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousDir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                        </tbody>
                    </table>
                    <a><button type=\"button\" class=\"btn btn-primary col-md-4\"><span class=\"glyphicon glyphicon-plus\">Ajouter un démembrement</span></button></a>
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
        return array (  169 => 69,  157 => 63,  154 => 62,  150 => 61,  137 => 50,  134 => 49,  127 => 45,  115 => 39,  111 => 38,  107 => 37,  104 => 36,  100 => 35,  85 => 22,  82 => 21,  67 => 73,  64 => 49,  62 => 21,  57 => 19,  41 => 5,  38 => 4,  31 => 2,);
    }
}
