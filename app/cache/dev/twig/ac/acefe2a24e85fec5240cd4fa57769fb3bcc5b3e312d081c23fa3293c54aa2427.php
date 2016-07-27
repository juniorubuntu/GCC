<?php

/* RepGestionBundle:Rep:addBranche.html.twig */
class __TwigTemplate_0a67b4ad4c94b2ac87f70e8038b7c94b2cfd570693bed8bfa420c69e76328a26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RepGestionBundle:Rep:detail.html.twig", "RepGestionBundle:Rep:addBranche.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'branche' => array($this, 'block_branche'),
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
        echo "Branches(Ajout | Modif)";
    }

    // line 4
    public function block_branche($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $context["update"] = 0;
        // line 6
        echo "    ";
        if (array_key_exists("branched", $context)) {
            // line 7
            echo "        ";
            $context["update"] = 1;
            // line 8
            echo "    ";
        }
        // line 9
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("save_branche");
        echo "\" method=\"POST\" class=\"col-md-12 form-inline panel panel-primary panel-body\">
        <h4 class=\"col-md-12\">
            <b><u>
                    ";
        // line 12
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " 
                        Modification d'un démembrement 
                    ";
        } else {
            // line 15
            echo "                        Ajout d'un nouveau démembrement 
                    ";
        }
        // line 17
        echo "                </u></b>
        </h4>
        ";
        // line 19
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            // line 20
            echo "            <input type=\"text\" class=\"hide\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["branched"]) ? $context["branched"] : $this->getContext($context, "branched")), "id", array()), "html", null, true);
            echo "\" name=\"idB\">
        ";
        }
        // line 22
        echo "        <div class=\"col-md-12 form-group nomCP\"
             style=\"margin-top: 5px;\">
            <label for=\"poste\" class=\"col-md-4 control-label\">Nom: <span style=\"color: red\">*</span></label>
            <b><input onfocus=\"editerFocus('nomCP', 'nom');\" ";
        // line 25
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["branched"]) ? $context["branched"] : $this->getContext($context, "branched")), "html", null, true);
            echo "\" ";
        }
        echo " type=\"text\" class=\"form-control\" id=\"nomP\" name=\"nomB\" placeholder=\"Nom du démembrement\" style=\"font-size: 16px;\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide nom \"></b>
        </div>
        <div class=\"col-md-12 form-group dateCP\"
             style=\"margin-top: 5px;\">
            <label for=\"poste\" class=\"col-md-4 control-label\">Date Création <span style=\"color: red\">*</span></label>
            <b><input ";
        // line 30
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["branched"]) ? $context["branched"] : $this->getContext($context, "branched")), "dateCreation", array()), "m/d/Y"), "html", null, true);
            echo "\" ";
        }
        echo " type=\"date\" class=\"form-control date-choose hide\" style=\"font-size: 16px;\" id=\"dateB\" onblur=\"cacheDate();\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide date \"></b>
            <b><input ";
        // line 31
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["branched"]) ? $context["branched"] : $this->getContext($context, "branched")), "dateCreation", array()), "m/d/Y"), "html", null, true);
            echo "\" ";
        }
        echo " name=\"dateB\" type=\"text\" placeholder=\"Date de création\" class=\"form-control date-choose-aff\" onfocus=\"afficheDate();
                    editerFocus('dateCP', 'date');\" id=\"dateB\" style=\"font-size: 16px;\"></b>
        </div>
        <div class=\"col-md-12\"
             style=\"margin-top: 5px;\">
            <label for=\"poste\" class=\"col-md-4\">Observation</label>
            <textarea type=\"\" class=\"form-control\" id=\"poste.id\" placeholder=\"Observations\" style=\"
                      margin: 0px; 
                      width: 240px; 
                      height: 151px;\" name=\"observ\">";
        // line 40
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["branched"]) ? $context["branched"] : $this->getContext($context, "branched")), "observation", array()), "html", null, true);
        }
        echo "</textarea>
        </div>
        <div class=\"col-md-12\"
             style=\"margin-top: 5px;\">
            <label for=\"poste\" class=\"col-md-4\">Rataché à: <span style=\"color: red\">*</span></label>
            <nav type=\"\" class=\"form-control\" id=\"poste.id\" style=\"font-size: 16px;\"><b>";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "html", null, true);
        echo "</b></nav>
            <input type=\"text\" name=\"DirId\" class=\"hide\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "id", array()), "html", null, true);
        echo "\" />
        </div>
        <div class=\"col-md-12\" style=\"margin-top: 12px\">
            <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_detail_direction", array("id" => $this->getAttribute((isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "id", array()))), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-success active col-md-2 col-md-offset-4\"><span class=\"glyphicon glyphicon-remove-circle\">Annuler</span></button></a>
            ";
        // line 50
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " 
                <a><button type=\"submit\" class=\"btn btn-primary col-md-2 col-md-offset-1\"><span class=\"glyphicon glyphicon-plus-sign\">Modifier</span></button></a>
            ";
        } else {
            // line 53
            echo "                <a><button type=\"submit\" class=\"btn btn-primary col-md-2 col-md-offset-1\"><span class=\"glyphicon glyphicon-plus-sign\">Ajouter</span></button></a>
            ";
        }
        // line 55
        echo "        </div>
    </form>
    ";
        // line 57
        if (array_key_exists("error", $context)) {
            // line 58
            echo "        <script>
            validationBranche();
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "RepGestionBundle:Rep:addBranche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 58,  159 => 57,  155 => 55,  151 => 53,  145 => 50,  141 => 49,  135 => 46,  131 => 45,  120 => 40,  104 => 31,  96 => 30,  84 => 25,  79 => 22,  73 => 20,  71 => 19,  67 => 17,  63 => 15,  57 => 12,  50 => 9,  47 => 8,  44 => 7,  41 => 6,  38 => 5,  35 => 4,  29 => 2,  11 => 1,);
    }
}
/* {% extends "RepGestionBundle:Rep:detail.html.twig" %}*/
/* {% block title %}Branches(Ajout | Modif){% endblock %}*/
/* */
/* {% block branche %}*/
/*     {% set update = 0 %}*/
/*     {% if branched is defined %}*/
/*         {% set update = 1 %}*/
/*     {% endif %}*/
/*     <form action="{{ path('save_branche') }}" method="POST" class="col-md-12 form-inline panel panel-primary panel-body">*/
/*         <h4 class="col-md-12">*/
/*             <b><u>*/
/*                     {% if update == 1 %} */
/*                         Modification d'un démembrement */
/*                     {% else %}*/
/*                         Ajout d'un nouveau démembrement */
/*                     {% endif %}*/
/*                 </u></b>*/
/*         </h4>*/
/*         {% if update == 1 %}*/
/*             <input type="text" class="hide"  value="{{branched.id}}" name="idB">*/
/*         {% endif %}*/
/*         <div class="col-md-12 form-group nomCP"*/
/*              style="margin-top: 5px;">*/
/*             <label for="poste" class="col-md-4 control-label">Nom: <span style="color: red">*</span></label>*/
/*             <b><input onfocus="editerFocus('nomCP', 'nom');" {% if update == 1 %} value="{{branched }}" {% endif %} type="text" class="form-control" id="nomP" name="nomB" placeholder="Nom du démembrement" style="font-size: 16px;"><span class="glyphicon glyphicon-remove form-control-feedback hide nom "></b>*/
/*         </div>*/
/*         <div class="col-md-12 form-group dateCP"*/
/*              style="margin-top: 5px;">*/
/*             <label for="poste" class="col-md-4 control-label">Date Création <span style="color: red">*</span></label>*/
/*             <b><input {% if update == 1 %} value="{{branched.dateCreation | date("m/d/Y") }}" {% endif %} type="date" class="form-control date-choose hide" style="font-size: 16px;" id="dateB" onblur="cacheDate();"><span class="glyphicon glyphicon-remove form-control-feedback hide date "></b>*/
/*             <b><input {% if update == 1 %} value="{{branched.dateCreation | date("m/d/Y") }}" {% endif %} name="dateB" type="text" placeholder="Date de création" class="form-control date-choose-aff" onfocus="afficheDate();*/
/*                     editerFocus('dateCP', 'date');" id="dateB" style="font-size: 16px;"></b>*/
/*         </div>*/
/*         <div class="col-md-12"*/
/*              style="margin-top: 5px;">*/
/*             <label for="poste" class="col-md-4">Observation</label>*/
/*             <textarea type="" class="form-control" id="poste.id" placeholder="Observations" style="*/
/*                       margin: 0px; */
/*                       width: 240px; */
/*                       height: 151px;" name="observ">{% if update == 1 %} {{branched.observation }}{% endif %}</textarea>*/
/*         </div>*/
/*         <div class="col-md-12"*/
/*              style="margin-top: 5px;">*/
/*             <label for="poste" class="col-md-4">Rataché à: <span style="color: red">*</span></label>*/
/*             <nav type="" class="form-control" id="poste.id" style="font-size: 16px;"><b>{{aDetailler}}</b></nav>*/
/*             <input type="text" name="DirId" class="hide" value="{{aDetailler.id }}" />*/
/*         </div>*/
/*         <div class="col-md-12" style="margin-top: 12px">*/
/*             <a href="{{ path('list_detail_direction', {'id': aDetailler.id}) }}"><button type="button" class="btn btn-success active col-md-2 col-md-offset-4"><span class="glyphicon glyphicon-remove-circle">Annuler</span></button></a>*/
/*             {% if update == 1 %} */
/*                 <a><button type="submit" class="btn btn-primary col-md-2 col-md-offset-1"><span class="glyphicon glyphicon-plus-sign">Modifier</span></button></a>*/
/*             {% else %}*/
/*                 <a><button type="submit" class="btn btn-primary col-md-2 col-md-offset-1"><span class="glyphicon glyphicon-plus-sign">Ajouter</span></button></a>*/
/*             {% endif %}*/
/*         </div>*/
/*     </form>*/
/*     {% if error is defined %}*/
/*         <script>*/
/*             validationBranche();*/
/*         </script>*/
/*     {% endif %}*/
/* {% endblock %}*/
