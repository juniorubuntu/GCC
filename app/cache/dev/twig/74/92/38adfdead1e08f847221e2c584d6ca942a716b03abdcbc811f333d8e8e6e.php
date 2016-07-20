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
        echo "                <hr class=\"col-md-11\" style=\"
                    background: #1d2db9;
                    height: 2px;\">
                <hr class=\"col-md-11\" style=\"
                    background: #1d2db9;
                    height: 2px;
                    margin-top: -1%;\">
                ";
        // line 56
        $this->displayBlock('branche', $context, $blocks);
        // line 80
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
                                    <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_poste", array("id" => $this->getAttribute((isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "id"), "idPoste" => $this->getAttribute((isset($context["poste"]) ? $context["poste"] : $this->getContext($context, "poste")), "id"))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-edit\"></span></button></a></td>
                                    <td><a><button type=\"button\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span></button></a></td>
                                    <td><a><button type=\"button\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-send\"></span></button></a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                        </tbody>
                    </table>
                    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_poste", array("id" => $this->getAttribute((isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "id"))), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-primary col-md-3\"><span class=\"glyphicon glyphicon-plus\">Ajouter un poste</span></button></a>
                ";
    }

    // line 56
    public function block_branche($context, array $blocks = array())
    {
        // line 57
        echo "                    <table class=\"col-md-12 table table-bordered\">
                        <h2 class=\"col-md-12\">Démenbrements directs</h2>
                        <thead class=\"panel panel-info active panel-heading\">
                            <tr>
                                <th>Démembrements</th>
                                <th>Modifier</th>
                                <th>Détacher</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listSousDir"]) ? $context["listSousDir"] : $this->getContext($context, "listSousDir")));
        foreach ($context['_seq'] as $context["_key"] => $context["sousDir"]) {
            // line 69
            echo "                                <tr>
                                    <td><b>";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["sousDir"]) ? $context["sousDir"] : $this->getContext($context, "sousDir")), "html", null, true);
            echo "</b></td>
                                    <td><a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_direction", array("id" => $this->getAttribute((isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "id"), "idDir" => $this->getAttribute((isset($context["sousDir"]) ? $context["sousDir"] : $this->getContext($context, "sousDir")), "id"))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-edit\"></span></button></a></td>
                                    <td><a><button type=\"button\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-minus\"></span></button></a></td>
                                    <td><a><button type=\"button\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span></button></a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousDir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                        </tbody>
                    </table>
                    <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_branche", array("id" => $this->getAttribute((isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "id"))), "html", null, true);
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
        return array (  190 => 78,  186 => 76,  175 => 71,  148 => 56,  127 => 40,  90 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 38,  102 => 32,  71 => 17,  67 => 15,  63 => 15,  59 => 14,  38 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 70,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 57,  142 => 47,  138 => 45,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 21,  49 => 19,  94 => 28,  89 => 20,  85 => 25,  75 => 80,  68 => 14,  56 => 9,  26 => 6,  28 => 3,  24 => 3,  87 => 25,  31 => 2,  25 => 5,  21 => 2,  19 => 1,  93 => 22,  88 => 6,  78 => 21,  46 => 8,  44 => 12,  27 => 4,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 7,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 39,  120 => 40,  115 => 37,  111 => 37,  108 => 35,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 5,  35 => 4,  32 => 4,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 69,  164 => 68,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 36,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 56,  64 => 49,  60 => 6,  57 => 19,  54 => 10,  51 => 14,  48 => 8,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
