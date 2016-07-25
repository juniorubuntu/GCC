<?php

/* RepGestionBundle:Rep:addPersonnel.html.twig */
class __TwigTemplate_7e935977b674f7e5624e0c064ce29b5fda9d1b0713873a9fb6f319daaf680e4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RepGestionBundle:Rep:detail.html.twig", "RepGestionBundle:Rep:addPersonnel.html.twig", 1);
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
        echo "Ajout d'un Personnel";
    }

    // line 4
    public function block_detail($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $context["update"] = 0;
        // line 6
        echo "    ";
        if (array_key_exists("personnel", $context)) {
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
            echo " Modification d'un personnel ";
        } else {
            echo " Ajout d'un nouveau personnel ";
        }
        echo "</u></strong>
        </div>
        <form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("save_personnel");
        echo "\" method=\"POST\" class=\"col-md-12 form-inline panel panel-primary panel-body\"
              style=\"
              margin-left: -15px;
              margin-right: -25px;\">
            ";
        // line 19
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            // line 20
            echo "                <input type=\"text\" class=\"hide\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnel"]) ? $context["personnel"] : $this->getContext($context, "personnel")), "id", array()), "html", null, true);
            echo "\" name=\"idP\">
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnel"]) ? $context["personnel"] : $this->getContext($context, "personnel")), "nom", array()), "html", null, true);
            echo "\" ";
        }
        echo " onfocus=\"editerFocus('nomCP', 'nom');\" type=\"text\" class=\"form-control\" id=\"nomP\" name=\"nomP\" placeholder=\"Nom du personnel\" style=\"font-size: 16px;\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide nom \"></span></b>
            </div>
            <div class=\"col-md-12 form-group preCP\" 
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4 control-label\">Prénom <span style=\"color: red\">*</span></label>
                <b><input ";
        // line 30
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnel"]) ? $context["personnel"] : $this->getContext($context, "personnel")), "prenom", array()), "html", null, true);
            echo "\" ";
        }
        echo " onfocus=\"editerFocus('preCP', 'pren');\" type=\"text\" class=\"form-control\" id=\"prenP\" name=\"prenP\" placeholder=\"Nom du prénom\" style=\"font-size: 16px;\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide pren \"></b>
            </div>
            <div class=\"col-md-12 form-group matCP\" 
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4 control-label\">Matricule <span style=\"color: red\">*</span></label>
                <b><input ";
        // line 35
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnel"]) ? $context["personnel"] : $this->getContext($context, "personnel")), "matricule", array()), "html", null, true);
            echo "\" ";
        }
        echo " onfocus=\"editerFocus('matCP', 'mat');\" type=\"text\" class=\"form-control\" id=\"matP\" name=\"matP\" placeholder=\"Matricule\" style=\"font-size: 16px;\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide mat \"></b>
            </div>
            <div class=\"col-md-12 form-group telCP\"
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4 control-label\">Téléphone <span style=\"color: red\">*</span></label>
                <b><input ";
        // line 40
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnel"]) ? $context["personnel"] : $this->getContext($context, "personnel")), "numTel", array()), "html", null, true);
            echo "\" ";
        }
        echo " onfocus=\"editerFocus('telCP', 'tel');\" type=\"text\" class=\"form-control\" id=\"telP\" name=\"telP\" placeholder=\"Téléphone\" style=\"font-size: 16px;\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide tel \"></b>
            </div>
            <div class=\"col-md-12 emailCP\"
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4 control-label\">Email <span style=\"color: red\">*</span></label>
                <b><input ";
        // line 45
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnel"]) ? $context["personnel"] : $this->getContext($context, "personnel")), "email", array()), "html", null, true);
            echo "\" ";
        }
        echo " onfocus=\"editerFocus('emailCP', 'email');\" type=\"text\" class=\"form-control\" name=\"emailP\" id=\"emailP\" placeholder=\"juniorubuntu@gmail.com\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide email \"></b>
            </div>
            <div class=\"col-md-12 dateCP\"
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4 control-label\">Date Recrutement <span style=\"color: red\">*</span></label>
                <b><input ";
        // line 50
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["personnel"]) ? $context["personnel"] : $this->getContext($context, "personnel")), "dateRecru", array()), "m/d/Y"), "html", null, true);
            echo "\" ";
        }
        echo " type=\"date\" class=\"form-control date-choose hide\" id=\"\" style=\"font-size: 16px;\" onblur=\"cacheDate();\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide date \"></b>
                <b><input ";
        // line 51
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["personnel"]) ? $context["personnel"] : $this->getContext($context, "personnel")), "dateRecru", array()), "m/d/Y"), "html", null, true);
            echo "\" ";
        }
        echo " type=\"text\" placeholder=\"Date de recrutement\" name=\"dateP\" class=\"form-control date-choose-aff\" onfocus=\"afficheDate();
                        editerFocus('dateCP', 'date');\" id=\"dateP\" style=\"font-size: 16px;\"></b>
            </div>
            <div class=\"col-md-12 deciCP\"
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4 control-label\">Décison <span style=\"color: red\">*</span></label>
                <b><input ";
        // line 57
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnel"]) ? $context["personnel"] : $this->getContext($context, "personnel")), "refDecision", array()), "html", null, true);
            echo "\" ";
        }
        echo " onfocus=\"editerFocus('deciCP', 'deci');\" type=\"text\" class=\"form-control\" name=\"deciP\" id=\"deciP\"  placeholder=\"Décision d'admission\" style=\"font-size: 16px;\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide deci \"></b>
            </div>
            <div class=\"col-md-12\" style=\"margin-top: 12px\">
                <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("list_all_personnel");
        echo "\"><button type=\"button\" class=\"btn btn-success active col-md-2 col-md-offset-1\"><span class=\"glyphicon glyphicon-remove-circle\">Annuler</span></button></a>

                ";
        // line 62
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " 
                    <a><button type=\"submit\" class=\"btn btn-primary col-md-2 col-md-offset-1\"><span class=\"glyphicon glyphicon-plus-sign\">Modifier</span></button></a>
                ";
        } else {
            // line 65
            echo "                    <a><button type=\"submit\" class=\"btn btn-primary col-md-2 col-md-offset-1\"><span class=\"glyphicon glyphicon-plus-sign\">Ajouter</span></button></a>
                ";
        }
        // line 67
        echo "
            </div>
        </form>
        ";
        // line 70
        if (array_key_exists("error", $context)) {
            // line 71
            echo "            <script>
                validationFormPersonnel();
            </script>
        ";
        }
        // line 75
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "RepGestionBundle:Rep:addPersonnel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 75,  198 => 71,  196 => 70,  191 => 67,  187 => 65,  181 => 62,  176 => 60,  166 => 57,  153 => 51,  145 => 50,  133 => 45,  121 => 40,  109 => 35,  97 => 30,  85 => 25,  80 => 22,  74 => 20,  72 => 19,  65 => 15,  56 => 13,  50 => 9,  47 => 8,  44 => 7,  41 => 6,  38 => 5,  35 => 4,  29 => 2,  11 => 1,);
    }
}
/* {% extends "RepGestionBundle:Rep:detail.html.twig" %}*/
/* {% block title %}Ajout d'un Personnel{% endblock %}*/
/* */
/* {% block detail %}*/
/*     {% set update = 0 %}*/
/*     {% if personnel is defined %}*/
/*         {% set update = 1 %}*/
/*     {% endif %}*/
/*     <div class="col-md-7 panel-primary active">*/
/*         <div class="panel panel-heading col-md-12" style="*/
/*              margin-left: -15px;*/
/*              margin-right: -25px;">*/
/*             <strong style="font-size: 18px"><u>{% if update == 1 %} Modification d'un personnel {% else %} Ajout d'un nouveau personnel {% endif %}</u></strong>*/
/*         </div>*/
/*         <form action="{{ path('save_personnel') }}" method="POST" class="col-md-12 form-inline panel panel-primary panel-body"*/
/*               style="*/
/*               margin-left: -15px;*/
/*               margin-right: -25px;">*/
/*             {% if update == 1 %}*/
/*                 <input type="text" class="hide"  value="{{personnel.id}}" name="idP">*/
/*             {% endif %}*/
/*             <div class="col-md-12 form-group nomCP"*/
/*                  style="margin-top: 5px;">*/
/*                 <label for="poste" class="col-md-4 control-label">Nom: <span style="color: red">*</span></label>*/
/*                 <b><input {% if update == 1 %} value="{{personnel.nom}}" {% endif %} onfocus="editerFocus('nomCP', 'nom');" type="text" class="form-control" id="nomP" name="nomP" placeholder="Nom du personnel" style="font-size: 16px;"><span class="glyphicon glyphicon-remove form-control-feedback hide nom "></span></b>*/
/*             </div>*/
/*             <div class="col-md-12 form-group preCP" */
/*                  style="margin-top: 5px;">*/
/*                 <label for="poste" class="col-md-4 control-label">Prénom <span style="color: red">*</span></label>*/
/*                 <b><input {% if update == 1 %} value="{{personnel.prenom}}" {% endif %} onfocus="editerFocus('preCP', 'pren');" type="text" class="form-control" id="prenP" name="prenP" placeholder="Nom du prénom" style="font-size: 16px;"><span class="glyphicon glyphicon-remove form-control-feedback hide pren "></b>*/
/*             </div>*/
/*             <div class="col-md-12 form-group matCP" */
/*                  style="margin-top: 5px;">*/
/*                 <label for="poste" class="col-md-4 control-label">Matricule <span style="color: red">*</span></label>*/
/*                 <b><input {% if update == 1 %} value="{{personnel.matricule}}" {% endif %} onfocus="editerFocus('matCP', 'mat');" type="text" class="form-control" id="matP" name="matP" placeholder="Matricule" style="font-size: 16px;"><span class="glyphicon glyphicon-remove form-control-feedback hide mat "></b>*/
/*             </div>*/
/*             <div class="col-md-12 form-group telCP"*/
/*                  style="margin-top: 5px;">*/
/*                 <label for="poste" class="col-md-4 control-label">Téléphone <span style="color: red">*</span></label>*/
/*                 <b><input {% if update == 1 %} value="{{personnel.numTel}}" {% endif %} onfocus="editerFocus('telCP', 'tel');" type="text" class="form-control" id="telP" name="telP" placeholder="Téléphone" style="font-size: 16px;"><span class="glyphicon glyphicon-remove form-control-feedback hide tel "></b>*/
/*             </div>*/
/*             <div class="col-md-12 emailCP"*/
/*                  style="margin-top: 5px;">*/
/*                 <label for="poste" class="col-md-4 control-label">Email <span style="color: red">*</span></label>*/
/*                 <b><input {% if update == 1 %} value="{{personnel.email}}" {% endif %} onfocus="editerFocus('emailCP', 'email');" type="text" class="form-control" name="emailP" id="emailP" placeholder="juniorubuntu@gmail.com"><span class="glyphicon glyphicon-remove form-control-feedback hide email "></b>*/
/*             </div>*/
/*             <div class="col-md-12 dateCP"*/
/*                  style="margin-top: 5px;">*/
/*                 <label for="poste" class="col-md-4 control-label">Date Recrutement <span style="color: red">*</span></label>*/
/*                 <b><input {% if update == 1 %} value="{{personnel.dateRecru | date("m/d/Y") }}" {% endif %} type="date" class="form-control date-choose hide" id="" style="font-size: 16px;" onblur="cacheDate();"><span class="glyphicon glyphicon-remove form-control-feedback hide date "></b>*/
/*                 <b><input {% if update == 1 %} value="{{personnel.dateRecru | date("m/d/Y") }}" {% endif %} type="text" placeholder="Date de recrutement" name="dateP" class="form-control date-choose-aff" onfocus="afficheDate();*/
/*                         editerFocus('dateCP', 'date');" id="dateP" style="font-size: 16px;"></b>*/
/*             </div>*/
/*             <div class="col-md-12 deciCP"*/
/*                  style="margin-top: 5px;">*/
/*                 <label for="poste" class="col-md-4 control-label">Décison <span style="color: red">*</span></label>*/
/*                 <b><input {% if update == 1 %} value="{{personnel.refDecision}}" {% endif %} onfocus="editerFocus('deciCP', 'deci');" type="text" class="form-control" name="deciP" id="deciP"  placeholder="Décision d'admission" style="font-size: 16px;"><span class="glyphicon glyphicon-remove form-control-feedback hide deci "></b>*/
/*             </div>*/
/*             <div class="col-md-12" style="margin-top: 12px">*/
/*                 <a href="{{ path('list_all_personnel') }}"><button type="button" class="btn btn-success active col-md-2 col-md-offset-1"><span class="glyphicon glyphicon-remove-circle">Annuler</span></button></a>*/
/* */
/*                 {% if update == 1 %} */
/*                     <a><button type="submit" class="btn btn-primary col-md-2 col-md-offset-1"><span class="glyphicon glyphicon-plus-sign">Modifier</span></button></a>*/
/*                 {% else %}*/
/*                     <a><button type="submit" class="btn btn-primary col-md-2 col-md-offset-1"><span class="glyphicon glyphicon-plus-sign">Ajouter</span></button></a>*/
/*                 {% endif %}*/
/* */
/*             </div>*/
/*         </form>*/
/*         {% if error is defined %}*/
/*             <script>*/
/*                 validationFormPersonnel();*/
/*             </script>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
