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
        return array (  134 => 43,  130 => 42,  120 => 39,  108 => 34,  100 => 29,  96 => 27,  87 => 25,  83 => 24,  73 => 23,  56 => 13,  50 => 9,  47 => 8,  44 => 7,  41 => 6,  38 => 5,  35 => 4,  29 => 2,);
    }
}
