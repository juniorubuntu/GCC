<?php

/* RepGestionBundle:Rep:addCategorie.html.twig */
class __TwigTemplate_e102635c6d8e27e1a0247e2e75bf808309a8aad265dfd5013d28fea4903be1d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RepGestionBundle:Rep:detail.html.twig", "RepGestionBundle:Rep:addCategorie.html.twig", 1);
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
        echo "Ajout d'une Categorie";
    }

    // line 4
    public function block_detail($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $context["update"] = 0;
        // line 6
        echo "    ";
        if (array_key_exists("categorie", $context)) {
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
            <strong style=\"font-size: 18px\"><u>Ajout d'une nouvelle catégorie</u></strong>
        </div>
        <form method=\"POST\" action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("save_categorie");
        echo "\" class=\"col-md-12 form-inline panel panel-primary panel-body\"
              style=\"
              margin-left: -15px;
              margin-right: -25px;\">
            ";
        // line 19
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            // line 20
            echo "                <input type=\"text\" class=\"hide\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id", array()), "html", null, true);
            echo "\" name=\"idC\">
            ";
        }
        // line 22
        echo "            <div class=\"col-md-12 form-group nomCP\"
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4 control-label\">Nom: <span style=\"color: red\">*</span></label>
                <b><input ";
        // line 25
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "nomCategorie", array()), "html", null, true);
            echo "\" ";
        }
        echo " type=\"text\" onfocus=\"editerFocus('nomCP', 'nom');\" class=\"form-control\" id=\"nomP\" name=\"nomP\" placeholder=\"Intitule de la categorie\" style=\"font-size: 16px;\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide nom \"></b>
            </div>
            <div class=\"col-md-12 form-group preCP\"
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4 control-label\">Quota par mois <span style=\"color: red\">*</span></label>
                <b><input ";
        // line 30
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "quota", array()), "html", null, true);
            echo "\" ";
        }
        echo " onfocus=\"editerFocus('preCP', 'pren');\" type=\"text\" class=\"form-control\" id=\"prenP\" name=\"prenP\" placeholder=\"Quota du crédit par mois\" style=\"font-size: 16px;\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide pren \"></b>
            </div>
            <div class=\"col-md-12\" style=\"margin-top: 12px\">
                <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("list_all_categorie");
        echo "\"><button type=\"button\" class=\"btn btn-success active col-md-2 col-md-offset-6\"><span class=\"glyphicon glyphicon-remove-circle\">Annuler</span></button></a>
                ";
        // line 34
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " 
                    <a><button type=\"submit\" class=\"btn btn-primary col-md-2 col-md-offset-1\"><span class=\"glyphicon glyphicon-plus-sign\">Modifier</span></button></a>
                ";
        } else {
            // line 37
            echo "                    <a><button type=\"submit\" class=\"btn btn-primary col-md-2 col-md-offset-1\"><span class=\"glyphicon glyphicon-plus-sign\">Ajouter</span></button></a>
                ";
        }
        // line 39
        echo "            </div>
        </form>
        ";
        // line 41
        if (array_key_exists("error", $context)) {
            // line 42
            echo "            <script>
                validationCategorie();
            </script>
        ";
        }
        // line 46
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "RepGestionBundle:Rep:addCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 46,  120 => 42,  118 => 41,  114 => 39,  110 => 37,  104 => 34,  100 => 33,  90 => 30,  78 => 25,  73 => 22,  67 => 20,  65 => 19,  58 => 15,  50 => 9,  47 => 8,  44 => 7,  41 => 6,  38 => 5,  35 => 4,  29 => 2,  11 => 1,);
    }
}
/* {% extends "RepGestionBundle:Rep:detail.html.twig" %}*/
/* {% block title %}Ajout d'une Categorie{% endblock %}*/
/* */
/* {% block detail %}*/
/*     {% set update = 0 %}*/
/*     {% if categorie is defined %}*/
/*         {% set update = 1 %}*/
/*     {% endif %}*/
/*     <div class="col-md-7 panel-primary active">*/
/*         <div class="panel panel-heading col-md-12" style="*/
/*              margin-left: -15px;*/
/*              margin-right: -25px;">*/
/*             <strong style="font-size: 18px"><u>Ajout d'une nouvelle catégorie</u></strong>*/
/*         </div>*/
/*         <form method="POST" action="{{ path('save_categorie') }}" class="col-md-12 form-inline panel panel-primary panel-body"*/
/*               style="*/
/*               margin-left: -15px;*/
/*               margin-right: -25px;">*/
/*             {% if update == 1 %}*/
/*                 <input type="text" class="hide"  value="{{categorie.id}}" name="idC">*/
/*             {% endif %}*/
/*             <div class="col-md-12 form-group nomCP"*/
/*                  style="margin-top: 5px;">*/
/*                 <label for="poste" class="col-md-4 control-label">Nom: <span style="color: red">*</span></label>*/
/*                 <b><input {% if update == 1 %} value="{{categorie.nomCategorie}}" {% endif %} type="text" onfocus="editerFocus('nomCP', 'nom');" class="form-control" id="nomP" name="nomP" placeholder="Intitule de la categorie" style="font-size: 16px;"><span class="glyphicon glyphicon-remove form-control-feedback hide nom "></b>*/
/*             </div>*/
/*             <div class="col-md-12 form-group preCP"*/
/*                  style="margin-top: 5px;">*/
/*                 <label for="poste" class="col-md-4 control-label">Quota par mois <span style="color: red">*</span></label>*/
/*                 <b><input {% if update == 1 %} value="{{categorie.quota}}" {% endif %} onfocus="editerFocus('preCP', 'pren');" type="text" class="form-control" id="prenP" name="prenP" placeholder="Quota du crédit par mois" style="font-size: 16px;"><span class="glyphicon glyphicon-remove form-control-feedback hide pren "></b>*/
/*             </div>*/
/*             <div class="col-md-12" style="margin-top: 12px">*/
/*                 <a href="{{ path('list_all_categorie') }}"><button type="button" class="btn btn-success active col-md-2 col-md-offset-6"><span class="glyphicon glyphicon-remove-circle">Annuler</span></button></a>*/
/*                 {% if update == 1 %} */
/*                     <a><button type="submit" class="btn btn-primary col-md-2 col-md-offset-1"><span class="glyphicon glyphicon-plus-sign">Modifier</span></button></a>*/
/*                 {% else %}*/
/*                     <a><button type="submit" class="btn btn-primary col-md-2 col-md-offset-1"><span class="glyphicon glyphicon-plus-sign">Ajouter</span></button></a>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </form>*/
/*         {% if error is defined %}*/
/*             <script>*/
/*                 validationCategorie();*/
/*             </script>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
