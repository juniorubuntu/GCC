<?php

/* RepGestionBundle:Rep:addCompte.html.twig */
class __TwigTemplate_a29e5a880af2f5483a750904f2709be5404751a14e447eb09ff3c5843ee2eca5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RepGestionBundle:Rep:detail.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'detail' => array($this, 'block_detail'),
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
        echo "Ajout d'un Compte";
    }

    // line 4
    public function block_detail($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $context["update"] = 0;
        // line 6
        echo "    ";
        if (array_key_exists("compte", $context)) {
            // line 7
            echo "        ";
            $context["update"] = 1;
            // line 8
            echo "    ";
        }
        // line 9
        echo "    <div class=\"col-md-7 panel-primary active\">
        <div class=\"panel panel-heading col-md-12\" style=\"
             margin-left: -15px;
             margin-right: -25px;\">
            <strong style=\"font-size: 18px\"><u>";
        // line 13
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " Modification d'un Compte ";
        } else {
            echo "Ajout d'un nouveau Compte ";
        }
        echo "</u></b></h4></u></strong>
        </div>
        <form class=\"col-md-12 form-inline panel panel-primary panel-body\"
              style=\"
              margin-left: -15px;
              margin-right: -25px;\">
            <div class=\"col-md-12 form-group preCP\"
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4\">Titulaire <span style=\"color: red\">*</span></label>
                <b><select onfocus=\"editerFocus('preCP', 'pren');\" id=\"prenP\" class=\"form-control\" style=\"font-size: 16px;\">
                        <option value=\"\" class=\"form-control\" selected>";
        // line 23
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "personnel"), "html", null, true);
            echo " ";
        } else {
            echo " Choisir le titulaire ";
        }
        echo "</option>
                        ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listOccupant"]) ? $context["listOccupant"] : $this->getContext($context, "listOccupant")));
        foreach ($context['_seq'] as $context["_key"] => $context["occupant"]) {
            // line 25
            echo "                            <option value=\"categorie.id\" class=\"form-control\" style=\"font-size: 16px; font-weight: bold; color: black;\">";
            echo twig_escape_filter($this->env, (isset($context["occupant"]) ? $context["occupant"] : $this->getContext($context, "occupant")), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['occupant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                    </select><span class=\"glyphicon glyphicon-remove form-control-feedback hide pren \">
                </b>
                <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("add_personnel");
        echo "\" style=\"font-size: 16px; cursor: pointer; margin-left: 20px\" class=\"\"><span class=\"glyphicon glyphicon-plus-sign\"><u><b>Titulaire innexistant</b></u></span></a>
            </div>
            <div class=\"col-md-12 form-group matCP\"
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4 control-label\">Login <span style=\"color: red\">*</span></label>
                <b><input onfocus=\"editerFocus('matCP', 'mat');\" type=\"text\" ";
        // line 34
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "login"), "html", null, true);
            echo "\" ";
        }
        echo "class=\"form-control\" id=\"matP\" placeholder=\"Login du compte\" style=\"font-size: 16px;\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide mat \"></b>
            </div>
            <div class=\"col-md-12 form-group telCP\"
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4\">Mot de passe <span style=\"color: red\">*</span></label>
                <b><input onfocus=\"editerFocus('telCP', 'tel');\" type=\"text\" ";
        // line 39
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "motPasse"), "html", null, true);
            echo "\" ";
        }
        echo " class=\"form-control\" id=\"telP\" placeholder=\"Mot de passe\" style=\"font-size: 16px;\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide tel \"></b>
            </div>
        </form>
        <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("list_tree_direction");
        echo "\"><button type=\"button\" class=\"btn btn-success active col-md-2 col-md-offset-6\"><span class=\"glyphicon glyphicon-remove-circle\">Annuler</span></button></a>
        <a><button onclick=\"validationCompte();\" type=\"button\" class=\"btn btn-primary col-md-2 col-md-offset-1\"><span class=\"glyphicon glyphicon-plus-sign\">";
        // line 43
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo "Modifier";
        } else {
            echo "Ajouter";
        }
        echo "</span></button></a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "RepGestionBundle:Rep:addCompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 43,  129 => 47,  104 => 40,  100 => 29,  58 => 12,  77 => 20,  53 => 10,  81 => 25,  76 => 35,  124 => 62,  190 => 78,  186 => 76,  175 => 71,  148 => 56,  127 => 40,  90 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 52,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 38,  102 => 32,  71 => 32,  67 => 15,  63 => 15,  59 => 12,  38 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 70,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 57,  142 => 65,  138 => 45,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 48,  62 => 13,  49 => 12,  94 => 28,  89 => 36,  85 => 35,  75 => 33,  68 => 14,  56 => 13,  26 => 6,  28 => 3,  24 => 3,  87 => 25,  31 => 6,  25 => 5,  21 => 1,  19 => 1,  93 => 22,  88 => 6,  78 => 24,  46 => 8,  44 => 7,  27 => 5,  79 => 34,  72 => 16,  69 => 25,  47 => 8,  40 => 5,  37 => 4,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 64,  131 => 52,  123 => 39,  120 => 39,  115 => 37,  111 => 19,  108 => 34,  101 => 32,  98 => 30,  96 => 27,  83 => 24,  74 => 23,  66 => 25,  55 => 17,  52 => 18,  50 => 9,  43 => 8,  41 => 6,  35 => 4,  32 => 4,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 69,  164 => 68,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 49,  130 => 42,  125 => 44,  122 => 61,  116 => 43,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 38,  92 => 37,  86 => 42,  82 => 22,  80 => 19,  73 => 23,  64 => 14,  60 => 6,  57 => 19,  54 => 20,  51 => 34,  48 => 12,  45 => 17,  42 => 7,  39 => 5,  36 => 4,  33 => 4,  30 => 2,);
    }
}
