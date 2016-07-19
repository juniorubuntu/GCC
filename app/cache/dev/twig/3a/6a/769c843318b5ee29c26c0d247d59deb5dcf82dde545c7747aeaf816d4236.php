<?php

/* RepGestionBundle:Rep:addPoste.html.twig */
class __TwigTemplate_3a6a769c843318b5ee29c26c0d247d59deb5dcf82dde545c7747aeaf816d4236 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RepGestionBundle:Rep:detail.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'poste' => array($this, 'block_poste'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RepGestionBundle:Rep:detail.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Ajout d'un nouveau poste";
    }

    // line 4
    public function block_poste($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $context["update"] = 0;
        // line 6
        echo "    ";
        if (array_key_exists("posted", $context)) {
            // line 7
            echo "        ";
            $context["update"] = 1;
            // line 8
            echo "    ";
        }
        // line 9
        echo "    <h4 class=\"col-md-12\"><b><u>";
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " Modification d'un poste ";
        } else {
            echo "Ajout d'un nouveau poste ";
        }
        echo "</u></b></h4>
    <form class=\"col-md-12 form-inline panel panel-primary panel-body\">
        <div class=\"col-md-12\" 
             style=\"margin-top: 5px;\">
            <label for=\"poste\" class=\"col-md-4\">Nom du poste <span style=\"color: red\">*</span></label>
            <b><input ";
        // line 14
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["posted"]) ? $context["posted"] : $this->getContext($context, "posted")), "html", null, true);
            echo "\" ";
        }
        echo " type=\"text\" class=\"form-control poste-class\" id=\"posteid\" placeholder=\"Nom du poste\" style=\"font-size: 16px;\"></b>
        </div>
        <div class=\"col-md-12\"
             style=\"margin-top: 5px;\">
            <label for=\"categorie\" class=\"col-md-4\">Categorie <span style=\"color: red\">*</span></label>
            <b><select class=\"form-control\" style=\"font-size: 16px;\">
                    <option value=\"categorie.id\" class=\"form-control\" selected >";
        // line 20
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posted"]) ? $context["posted"] : $this->getContext($context, "posted")), "categorie"), "html", null, true);
            echo " ";
        } else {
            echo "Choisir sa categorie ";
        }
        echo "</option>
                    ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCategorie"]) ? $context["listCategorie"] : $this->getContext($context, "listCategorie")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 22
            echo "                        <option value=\"categorie.id\" class=\"form-control\" style=\"font-size: 16px; font-weight: bold; color: black;\">";
            echo twig_escape_filter($this->env, (isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                </select></b>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("add_categorie");
        echo "\" style=\"font-size: 16px; cursor: pointer; margin-left: 20px\" class=\"\"><span class=\"glyphicon glyphicon-exclamation-sign\"><u><b>Catégorie inexistante</b></u></span></a>
        </div>
        <div class=\"col-md-12\"
             style=\"margin-top: 5px;\">
            <label for=\"poste\" class=\"col-md-4\">Occupant <span style=\"color: red\">*</span></label>
            <b><select class=\"form-control\" style=\"font-size: 16px;\">
                    <option value=\"occupant.id\" class=\"form-control\" selected>";
        // line 31
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posted"]) ? $context["posted"] : $this->getContext($context, "posted")), "occupant"), "html", null, true);
            echo " ";
        } else {
            echo " Choisir l'occupant ";
        }
        echo "</option>
                    ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listOccupant"]) ? $context["listOccupant"] : $this->getContext($context, "listOccupant")));
        foreach ($context['_seq'] as $context["_key"] => $context["occupant"]) {
            // line 33
            echo "                        <option value=\"categorie.id\" class=\"form-control\" style=\"font-size: 16px; font-weight: bold; color: black;\">";
            echo twig_escape_filter($this->env, (isset($context["occupant"]) ? $context["occupant"] : $this->getContext($context, "occupant")), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['occupant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                </select>
            </b>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("add_personnel");
        echo "\" style=\"font-size: 16px; cursor: pointer; margin-left: 20px\" class=\"\"><span class=\"glyphicon glyphicon-plus-sign\"><u><b>Nouveau personnel</b></u></span></a>
        </div>
        <div class=\"col-md-12\"
             style=\"margin-top: 5px;\">
            <label for=\"poste\" class=\"col-md-4\">Observation</label>
            <textarea type=\"\" class=\"form-control\" id=\"poste.id\" placeholder=\"Observations\" style=\"
                      margin: 0px; 
                      width: 250px;
                      font-size: 16px;
                      height: 151px;\"> ";
        // line 46
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posted"]) ? $context["posted"] : $this->getContext($context, "posted")), "observation"), "html", null, true);
            echo " ";
        } else {
            echo " Observations";
        }
        echo " </textarea>
        </div>
        <div class=\"col-md-12\"
             style=\"margin-top: 5px;\">
            <label for=\"poste\" class=\"col-md-4\">Rataché à: <span style=\"color: red\">*</span></label>
            <nav type=\"\" class=\"form-control\" id=\"poste.id\" style=\"font-size: 16px;\"><b>";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "html", null, true);
        echo "</b></nav>
        </div>
    </form>
    <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_detail_direction", array("id" => $this->getAttribute((isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "id"))), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-success active col-md-2 col-md-offset-6\"><span class=\"glyphicon glyphicon-remove-circle\">Annuler</span></button></a>
    <a><button type=\"button\" class=\"btn btn-primary col-md-2 col-md-offset-2\"><span class=\"glyphicon glyphicon-plus-sign\">Ajouter</span></button></a>
";
    }

    public function getTemplateName()
    {
        return "RepGestionBundle:Rep:addPoste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 54,  150 => 46,  134 => 35,  100 => 29,  77 => 20,  53 => 10,  81 => 25,  76 => 20,  129 => 96,  126 => 63,  118 => 60,  190 => 78,  186 => 76,  175 => 71,  148 => 56,  127 => 40,  90 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 52,  61 => 26,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 63,  119 => 38,  102 => 25,  71 => 32,  67 => 15,  63 => 14,  59 => 12,  38 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 70,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 57,  142 => 47,  138 => 37,  136 => 56,  121 => 32,  117 => 44,  105 => 40,  91 => 48,  62 => 13,  49 => 12,  94 => 28,  89 => 27,  85 => 26,  75 => 33,  68 => 14,  56 => 13,  26 => 6,  28 => 3,  24 => 3,  87 => 25,  31 => 6,  25 => 5,  21 => 1,  19 => 1,  93 => 22,  88 => 18,  78 => 24,  46 => 8,  44 => 7,  27 => 5,  79 => 33,  72 => 16,  69 => 25,  47 => 8,  40 => 5,  37 => 4,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 39,  120 => 39,  115 => 37,  111 => 31,  108 => 34,  101 => 32,  98 => 30,  96 => 27,  83 => 24,  74 => 23,  66 => 25,  55 => 17,  52 => 18,  50 => 9,  43 => 8,  41 => 6,  35 => 4,  32 => 4,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 69,  164 => 51,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 42,  125 => 33,  122 => 43,  116 => 41,  112 => 36,  109 => 34,  106 => 33,  103 => 32,  99 => 24,  95 => 28,  92 => 28,  86 => 21,  82 => 8,  80 => 19,  73 => 23,  64 => 14,  60 => 6,  57 => 19,  54 => 20,  51 => 34,  48 => 8,  45 => 17,  42 => 7,  39 => 5,  36 => 4,  33 => 4,  30 => 2,);
    }
}
