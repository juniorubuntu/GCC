<?php

/* RepGestionBundle:Rep:listPersonnel.html.twig */
class __TwigTemplate_84c401b1357b414ba9e5e97af0ba00b1d074af1f3e33436cd61549e78f23848e extends Twig_Template
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
        echo " Gestion - Personnels (Liste)";
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
            <strong style=\"font-size: 18px\"><u>Gestion du Personnel</u></strong>
        </div>
        ";
        // line 12
        $this->displayBlock('poste', $context, $blocks);
        // line 51
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
        echo "            <table class=\"col-md-12 table table-bordered\" style=\"
                   margin-left: -15px;
                   margin-right: -25px;\">
                <div class=\"form-group col-md-12\">
                    <u class=\"col-md-12\" style=\"
                         font-weight: bold;
                         font-size: 28px; \">Personnel travaillant à la Camtel</u>
                    <input type=\"text\" class=\"has-success\" style=\"border-radius: 5px; font-size: 18px; height: 30px;\" placeholder=\"Rechercher\"/>
                </div>
                <thead class=\"panel panel-primary active panel-heading\">
                    <tr>
                        <th>Noms et prénoms</th>
                        <th>Matricules</th>
                        <th>Contacts</th>
                        <th>Emails</th>
                        <th>Dates d'entrée</th>
                        <th>Decisions</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnels"]) ? $context["personnels"] : $this->getContext($context, "personnels")));
        foreach ($context['_seq'] as $context["_key"] => $context["personnel"]) {
            // line 36
            echo "                        <tr>
                            <td><b>";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["personnel"]) ? $context["personnel"] : $this->getContext($context, "personnel")), "html", null, true);
            echo "</b></td>
                            <td><b>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnel"]) ? $context["personnel"] : $this->getContext($context, "personnel")), "matricule"), "html", null, true);
            echo "</b></td>
                            <td><b>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnel"]) ? $context["personnel"] : $this->getContext($context, "personnel")), "numTel"), "html", null, true);
            echo "</b></td>
                            <td><b>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnel"]) ? $context["personnel"] : $this->getContext($context, "personnel")), "email"), "html", null, true);
            echo "</b></td>
                            <td><b>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["personnel"]) ? $context["personnel"] : $this->getContext($context, "personnel")), "dateRecru"), "m/d/Y"), "html", null, true);
            echo "</b></td>
                            <td><b>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnel"]) ? $context["personnel"] : $this->getContext($context, "personnel")), "refDecision"), "html", null, true);
            echo "</b></td>
                            <td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_personnel", array("id" => $this->getAttribute((isset($context["personnel"]) ? $context["personnel"] : $this->getContext($context, "personnel")), "id"))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-edit\"></span></button></a></td>
                            <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_personnel", array("id" => $this->getAttribute((isset($context["personnel"]) ? $context["personnel"] : $this->getContext($context, "personnel")), "id"))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span></button></a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personnel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </tbody>
            </table>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("list_tree_direction");
        echo "\"><button type=\"button\" class=\"btn btn-primary col-md-3\"><span class=\"glyphicon glyphicon-arrow-left\"> Retour à l'accueil</span></button></a>
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
        return array (  129 => 47,  104 => 40,  100 => 39,  58 => 12,  77 => 20,  53 => 10,  81 => 25,  76 => 35,  124 => 62,  190 => 78,  186 => 76,  175 => 71,  148 => 56,  127 => 40,  90 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 52,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 38,  102 => 32,  71 => 32,  67 => 15,  63 => 15,  59 => 12,  38 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 70,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 57,  142 => 65,  138 => 45,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 48,  62 => 13,  49 => 12,  94 => 28,  89 => 36,  85 => 35,  75 => 33,  68 => 14,  56 => 18,  26 => 6,  28 => 3,  24 => 3,  87 => 36,  31 => 6,  25 => 5,  21 => 1,  19 => 1,  93 => 22,  88 => 6,  78 => 24,  46 => 8,  44 => 7,  27 => 5,  79 => 34,  72 => 16,  69 => 25,  47 => 8,  40 => 5,  37 => 4,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 64,  131 => 52,  123 => 39,  120 => 44,  115 => 37,  111 => 19,  108 => 41,  101 => 32,  98 => 30,  96 => 38,  83 => 35,  74 => 23,  66 => 25,  55 => 17,  52 => 18,  50 => 51,  43 => 8,  41 => 6,  35 => 4,  32 => 4,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 69,  164 => 68,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 49,  130 => 64,  125 => 44,  122 => 61,  116 => 43,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 38,  92 => 37,  86 => 42,  82 => 22,  80 => 19,  73 => 56,  64 => 14,  60 => 6,  57 => 19,  54 => 20,  51 => 34,  48 => 12,  45 => 17,  42 => 7,  39 => 5,  36 => 4,  33 => 4,  30 => 2,);
    }
}
