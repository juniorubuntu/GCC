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
        <div class=\"col-md-12 form-group nomCP\" 
             style=\"margin-top: 5px;\">
            <label for=\"poste\" class=\"col-md-4 control-label\">Nom du poste <span style=\"color: red\">*</span></label>
            <b><input onfocus=\"editerFocus('nomCP', 'nom');\" ";
        // line 14
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["posted"]) ? $context["posted"] : $this->getContext($context, "posted")), "html", null, true);
            echo "\" ";
        }
        echo " type=\"text\" class=\"form-control poste-class\" id=\"nomP\" placeholder=\"Nom du poste\" style=\"font-size: 16px;\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide nom \"></b>
        </div>
        <div class=\"col-md-12 form-group preCP\"
             style=\"margin-top: 5px;\">
            <label for=\"categorie\" class=\"col-md-4 control-label\">Categorie <span style=\"color: red\">*</span></label>
            <b><select onfocus=\"editerFocus('preCP', 'pren');\" id=\"prenP\" class=\"form-control\" style=\"font-size: 16px;\">
                    <option value=\"\" class=\"form-control\" selected >";
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
        echo "                </select><span class=\"glyphicon glyphicon-remove form-control-feedback hide pren \"></b>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("add_categorie");
        echo "\" style=\"font-size: 16px; cursor: pointer; margin-left: 20px\" class=\"\"><span class=\"glyphicon glyphicon-exclamation-sign\"><u><b>Catégorie inexistante</b></u></span></a>
        </div>
        <div class=\"col-md-12 form-group matCP\"
             style=\"margin-top: 5px;\">
            <label for=\"poste\" class=\"col-md-4 control-label\">Occupant <span style=\"color: red\">*</span></label>
            <b><select onfocus=\"editerFocus('matCP', 'mat');\" id=\"matP\" class=\"form-control\" style=\"font-size: 16px;\">
                    <option value=\"\" class=\"form-control\" selected>";
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
        echo "                </select><span class=\"glyphicon glyphicon-remove form-control-feedback hide mat \"></b>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("add_personnel");
        echo "\" style=\"font-size: 16px; cursor: pointer; margin-left: 20px\" class=\"\"><span class=\"glyphicon glyphicon-plus-sign\"><u><b>Nouveau personnel</b></u></span></a>
        </div>
        <div class=\"col-md-12 form-group\"
             style=\"margin-top: 5px;\">
            <label for=\"poste\" class=\"col-md-4\">Observation</label>
            <textarea type=\"\" class=\"form-control\" id=\"poste.id\" placeholder=\"Observations\" style=\"
                      margin: 0px; 
                      width: 250px;
                      font-size: 16px;
                      height: 151px;\"> ";
        // line 45
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posted"]) ? $context["posted"] : $this->getContext($context, "posted")), "observation"), "html", null, true);
            echo " ";
        } else {
            echo " Observations";
        }
        echo " </textarea>
        </div>
        <div class=\"col-md-12 form-group\"
             style=\"margin-top: 5px;\">
            <label for=\"poste\" class=\"col-md-4\">Rataché à: <span style=\"color: red\">*</span></label>
            <nav type=\"\" class=\"form-control\" id=\"poste.id\" style=\"font-size: 16px;\"><b>";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "html", null, true);
        echo "</b></nav>
        </div>
    </form>
    <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_detail_direction", array("id" => $this->getAttribute((isset($context["aDetailler"]) ? $context["aDetailler"] : $this->getContext($context, "aDetailler")), "id"))), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-success active col-md-2 col-md-offset-6\"><span class=\"glyphicon glyphicon-remove-circle\">Annuler</span></button></a>
    <a><button onclick=\"validationFormPoste();\" type=\"button\" class=\"btn btn-primary col-md-2 col-md-offset-2\"><span class=\"glyphicon glyphicon-plus-sign\">Ajouter</span></button></a>
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
        return array (  169 => 53,  163 => 50,  149 => 45,  137 => 36,  134 => 35,  125 => 33,  121 => 32,  111 => 31,  102 => 25,  99 => 24,  90 => 22,  86 => 21,  76 => 20,  63 => 14,  50 => 9,  47 => 8,  44 => 7,  41 => 6,  38 => 5,  35 => 4,  29 => 2,);
    }
}
