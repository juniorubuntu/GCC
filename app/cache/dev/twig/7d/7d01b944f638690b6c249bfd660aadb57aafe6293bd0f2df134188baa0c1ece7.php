<?php

/* RepGestionBundle:Rep:addPoste.html.twig */
class __TwigTemplate_fe237c38f5bba13317986a2b73e58204a0b7a45c7a7a418ecf6d5d71094e7750 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RepGestionBundle:Rep:detail.html.twig", "RepGestionBundle:Rep:addPoste.html.twig", 1);
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
        echo "Poste(Ajout | Modification) ";
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
    <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("save_poste");
        echo "\" method=\"POST\" class=\"col-md-12 form-inline panel panel-primary panel-body\">
        ";
        // line 11
        if ((((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1) && $this->getAttribute($this->getAttribute((isset($context["posted"]) ? $context["posted"] : null), "categorie", array(), "any", false, true), "id", array(), "any", true, true))) {
            // line 12
            echo "            <input type=\"text\" class=\"hide\"  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posted"]) ? $context["posted"] : $this->getContext($context, "posted")), "id", array()), "html", null, true);
            echo "\" name=\"idP\">
        ";
        }
        // line 14
        echo "        <div class=\"col-md-12 form-group nomCP\" 
             style=\"margin-top: 5px;\">
            <label for=\"poste\" class=\"col-md-4 control-label\">Nom du poste <span style=\"color: red\">*</span></label>
            <b><input onfocus=\"editerFocus('nomCP', 'nom');\" ";
        // line 17
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["posted"]) ? $context["posted"] : $this->getContext($context, "posted")), "html", null, true);
            echo "\" ";
        }
        echo " type=\"text\" class=\"form-control poste-class\" id=\"nomP\" name=\"nomP\" placeholder=\"Nom du poste\" style=\"font-size: 16px;\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide nom \"></b>
        </div>
        <div class=\"col-md-12 form-group preCP\"
             style=\"margin-top: 5px;\">
            <label for=\"categorie\" class=\"col-md-4 control-label\">Categorie <span style=\"color: red\">*</span></label>
            <b><select onfocus=\"editerFocus('preCP', 'pren');\" id=\"prenP\" class=\"form-control\" name=\"prenP\" style=\"font-size: 16px;\">
                    <option 
                        ";
        // line 24
        if ((((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1) && $this->getAttribute($this->getAttribute((isset($context["posted"]) ? $context["posted"] : null), "categorie", array(), "any", false, true), "id", array(), "any", true, true))) {
            // line 25
            echo "                            value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["posted"]) ? $context["posted"] : $this->getContext($context, "posted")), "categorie", array()), "id", array()), "html", null, true);
            echo "\"
                        ";
        } else {
            // line 27
            echo "                            value=\"-1\"
                        ";
        }
        // line 28
        echo " class=\"form-control\" selected >
                        ";
        // line 29
        if ((((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1) && $this->getAttribute($this->getAttribute((isset($context["posted"]) ? $context["posted"] : null), "categorie", array(), "any", false, true), "id", array(), "any", true, true))) {
            echo " 
                            ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posted"]) ? $context["posted"] : $this->getContext($context, "posted")), "categorie", array()), "html", null, true);
            echo " 
                        ";
        } else {
            // line 32
            echo "                            Choisir sa categorie 
                        ";
        }
        // line 34
        echo "                    </option>
                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCategorie"]) ? $context["listCategorie"] : $this->getContext($context, "listCategorie")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 36
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo "\" class=\"form-control\" style=\"font-size: 16px; font-weight: bold; color: black;\">";
            echo twig_escape_filter($this->env, $context["categorie"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </select><span class=\"glyphicon glyphicon-remove form-control-feedback hide pren \"></b>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("add_categorie");
        echo "\" style=\"font-size: 16px; cursor: pointer; margin-left: 20px\" class=\"\"><span class=\"glyphicon glyphicon-exclamation-sign\"><u><b>Catégorie inexistante</b></u></span></a>
        </div>
        <div class=\"col-md-12 form-group matCP\"
             style=\"margin-top: 5px;\">
            <label for=\"poste\" class=\"col-md-4 control-label\">Occupant <span style=\"color: red\">*</span></label>
            <b><select onfocus=\"editerFocus('matCP', 'mat');\" id=\"matP\" class=\"form-control\" name=\"matP\" style=\"font-size: 16px;\">
                    <option 
                        ";
        // line 46
        if ((((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1) && $this->getAttribute($this->getAttribute((isset($context["posted"]) ? $context["posted"] : null), "occupant", array(), "any", false, true), "id", array(), "any", true, true))) {
            // line 47
            echo "                            value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["posted"]) ? $context["posted"] : $this->getContext($context, "posted")), "occupant", array()), "id", array()), "html", null, true);
            echo "\"
                        ";
        } else {
            // line 49
            echo "                            value=\"-1\" 
                        ";
        }
        // line 50
        echo " class=\"form-control\" selected>
                        ";
        // line 51
        if ((((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1) && $this->getAttribute($this->getAttribute((isset($context["posted"]) ? $context["posted"] : null), "occupant", array(), "any", false, true), "id", array(), "any", true, true))) {
            echo " 
                            ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posted"]) ? $context["posted"] : $this->getContext($context, "posted")), "occupant", array()), "html", null, true);
            echo " 
                        ";
        } else {
            // line 53
            echo " 
                            Choisir l'occupant 
                        ";
        }
        // line 56
        echo "                    </option>
                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listOccupant"]) ? $context["listOccupant"] : $this->getContext($context, "listOccupant")));
        foreach ($context['_seq'] as $context["_key"] => $context["occupant"]) {
            // line 58
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["occupant"], "id", array()), "html", null, true);
            echo "\" class=\"form-control\" style=\"font-size: 16px; font-weight: bold; color: black;\">";
            echo twig_escape_filter($this->env, $context["occupant"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['occupant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                </select><span class=\"glyphicon glyphicon-remove form-control-feedback hide mat \"></b>
            <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("add_personnel");
        echo "\" style=\"font-size: 16px; cursor: pointer; margin-left: 5px\" class=\"\"><span class=\"glyphicon glyphicon-exclamation-sign\"><u><b>Nouveau personnel </b></u></span></a>
        </div>
        <div class=\"col-md-12 form-group\"
             style=\"margin-top: 5px;\">
            <label for=\"poste\" class=\"col-md-4\">Observation</label>
            <textarea type=\"\" name=\"observ\" class=\"form-control\" id=\"poste.id\" placeholder=\"Observations\" style=\"
                      margin: 0px; 
                      width: 250px;
                      font-size: 16px;
                      height: 151px;\"> ";
        // line 70
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posted"]) ? $context["posted"] : $this->getContext($context, "posted")), "observation", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
        }
        echo " </textarea>
        </div>
        <div class=\"col-md-12 form-group\"
             style=\"margin-top: 5px;\">
            <label for=\"poste\" class=\"col-md-4\">Rataché à: <span style=\"color: red\">*</span></label>
            <nav type=\"\" class=\"form-control\" id=\"poste.id\" style=\"font-size: 16px;\"><b>";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "html", null, true);
        echo "</b></nav>
            <input type=\"text\" name=\"DirId\" class=\"hide\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "id", array()), "html", null, true);
        echo "\" />
        </div>
        <label style=\"color: red;margin-top: 5px\" class=\"hide err\">Les champs avec * sont obligatoires.</label>
        <div class=\"col-md-12\" style=\"margin-top: 12px\">
            <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_detail_direction", array("id" => $this->getAttribute((isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "id", array()))), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-success active col-md-2 col-md-offset-4\"><span class=\"glyphicon glyphicon-remove-circle\">Annuler</span></button></a>
            <a><button type=\"submit\" class=\"btn btn-primary col-md-2 col-md-offset-1\"><span class=\"glyphicon glyphicon-plus-sign\">";
        // line 81
        if ((((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1) && $this->getAttribute($this->getAttribute((isset($context["posted"]) ? $context["posted"] : null), "occupant", array(), "any", false, true), "id", array(), "any", true, true))) {
            echo "Modifier ";
        } else {
            echo "Ajouter ";
        }
        echo "</span></button></a>
        </div>
    </form>
    ";
        // line 84
        if (array_key_exists("error", $context)) {
            // line 85
            echo "        <script>
            validationFormPoste();
            \$('.err').removeClass('hide');
        </script>
    ";
        }
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
        return array (  252 => 85,  250 => 84,  240 => 81,  236 => 80,  229 => 76,  225 => 75,  211 => 70,  199 => 61,  196 => 60,  185 => 58,  181 => 57,  178 => 56,  173 => 53,  168 => 52,  164 => 51,  161 => 50,  157 => 49,  151 => 47,  149 => 46,  139 => 39,  136 => 38,  125 => 36,  121 => 35,  118 => 34,  114 => 32,  109 => 30,  105 => 29,  102 => 28,  98 => 27,  92 => 25,  90 => 24,  76 => 17,  71 => 14,  65 => 12,  63 => 11,  59 => 10,  50 => 9,  47 => 8,  44 => 7,  41 => 6,  38 => 5,  35 => 4,  29 => 2,  11 => 1,);
    }
}
/* {% extends "RepGestionBundle:Rep:detail.html.twig" %}*/
/* {% block title %}Poste(Ajout | Modification) {% endblock %}*/
/* */
/* {% block poste %}*/
/*     {% set update = 0 %}*/
/*     {% if posted is defined %}*/
/*         {% set update = 1 %}*/
/*     {% endif %}*/
/*     <h4 class="col-md-12"><b><u>{% if update == 1 %} Modification d'un poste {% else %}Ajout d'un nouveau poste {% endif %}</u></b></h4>*/
/*     <form action="{{ path('save_poste') }}" method="POST" class="col-md-12 form-inline panel panel-primary panel-body">*/
/*         {% if update == 1 and posted.categorie.id is defined  %}*/
/*             <input type="text" class="hide"  value="{{posted.id}}" name="idP">*/
/*         {% endif %}*/
/*         <div class="col-md-12 form-group nomCP" */
/*              style="margin-top: 5px;">*/
/*             <label for="poste" class="col-md-4 control-label">Nom du poste <span style="color: red">*</span></label>*/
/*             <b><input onfocus="editerFocus('nomCP', 'nom');" {% if update == 1 %} value="{{posted }}" {% endif %} type="text" class="form-control poste-class" id="nomP" name="nomP" placeholder="Nom du poste" style="font-size: 16px;"><span class="glyphicon glyphicon-remove form-control-feedback hide nom "></b>*/
/*         </div>*/
/*         <div class="col-md-12 form-group preCP"*/
/*              style="margin-top: 5px;">*/
/*             <label for="categorie" class="col-md-4 control-label">Categorie <span style="color: red">*</span></label>*/
/*             <b><select onfocus="editerFocus('preCP', 'pren');" id="prenP" class="form-control" name="prenP" style="font-size: 16px;">*/
/*                     <option */
/*                         {% if update == 1 and posted.categorie.id is defined %}*/
/*                             value="{{posted.categorie.id}}"*/
/*                         {% else %}*/
/*                             value="-1"*/
/*                         {% endif %} class="form-control" selected >*/
/*                         {% if update == 1 and posted.categorie.id is defined %} */
/*                             {{posted.categorie }} */
/*                         {% else %}*/
/*                             Choisir sa categorie */
/*                         {% endif %}*/
/*                     </option>*/
/*                     {% for categorie in listCategorie %}*/
/*                         <option value="{{categorie.id }}" class="form-control" style="font-size: 16px; font-weight: bold; color: black;">{{categorie}}</option>*/
/*                     {% endfor %}*/
/*                 </select><span class="glyphicon glyphicon-remove form-control-feedback hide pren "></b>*/
/*             <a href="{{ path('add_categorie') }}" style="font-size: 16px; cursor: pointer; margin-left: 20px" class=""><span class="glyphicon glyphicon-exclamation-sign"><u><b>Catégorie inexistante</b></u></span></a>*/
/*         </div>*/
/*         <div class="col-md-12 form-group matCP"*/
/*              style="margin-top: 5px;">*/
/*             <label for="poste" class="col-md-4 control-label">Occupant <span style="color: red">*</span></label>*/
/*             <b><select onfocus="editerFocus('matCP', 'mat');" id="matP" class="form-control" name="matP" style="font-size: 16px;">*/
/*                     <option */
/*                         {% if update == 1 and posted.occupant.id is defined %}*/
/*                             value="{{posted.occupant.id}}"*/
/*                         {% else %}*/
/*                             value="-1" */
/*                         {% endif %} class="form-control" selected>*/
/*                         {% if update == 1 and posted.occupant.id is defined%} */
/*                             {{posted.occupant }} */
/*                         {% else %} */
/*                             Choisir l'occupant */
/*                         {% endif %}*/
/*                     </option>*/
/*                     {% for occupant in listOccupant %}*/
/*                         <option value="{{occupant.id }}" class="form-control" style="font-size: 16px; font-weight: bold; color: black;">{{occupant}}</option>*/
/*                     {% endfor %}*/
/*                 </select><span class="glyphicon glyphicon-remove form-control-feedback hide mat "></b>*/
/*             <a href="{{ path('add_personnel') }}" style="font-size: 16px; cursor: pointer; margin-left: 5px" class=""><span class="glyphicon glyphicon-exclamation-sign"><u><b>Nouveau personnel </b></u></span></a>*/
/*         </div>*/
/*         <div class="col-md-12 form-group"*/
/*              style="margin-top: 5px;">*/
/*             <label for="poste" class="col-md-4">Observation</label>*/
/*             <textarea type="" name="observ" class="form-control" id="poste.id" placeholder="Observations" style="*/
/*                       margin: 0px; */
/*                       width: 250px;*/
/*                       font-size: 16px;*/
/*                       height: 151px;"> {% if update == 1 %} {{posted.observation }} {% else %} {% endif %} </textarea>*/
/*         </div>*/
/*         <div class="col-md-12 form-group"*/
/*              style="margin-top: 5px;">*/
/*             <label for="poste" class="col-md-4">Rataché à: <span style="color: red">*</span></label>*/
/*             <nav type="" class="form-control" id="poste.id" style="font-size: 16px;"><b>{{aDetailler}}</b></nav>*/
/*             <input type="text" name="DirId" class="hide" value="{{aDetailler.id }}" />*/
/*         </div>*/
/*         <label style="color: red;margin-top: 5px" class="hide err">Les champs avec * sont obligatoires.</label>*/
/*         <div class="col-md-12" style="margin-top: 12px">*/
/*             <a href="{{ path('list_detail_direction', {'id': aDetailler.id}) }}"><button type="button" class="btn btn-success active col-md-2 col-md-offset-4"><span class="glyphicon glyphicon-remove-circle">Annuler</span></button></a>*/
/*             <a><button type="submit" class="btn btn-primary col-md-2 col-md-offset-1"><span class="glyphicon glyphicon-plus-sign">{% if update == 1 and posted.occupant.id is defined %}Modifier {% else %}Ajouter {% endif %}</span></button></a>*/
/*         </div>*/
/*     </form>*/
/*     {% if error is defined %}*/
/*         <script>*/
/*             validationFormPoste();*/
/*             $('.err').removeClass('hide');*/
/*         </script>*/
/*     {% endif %}*/
/* {% endblock %}*/
