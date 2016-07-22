<?php

/* RepGestionBundle:Rep:addPersonnel.html.twig */
class __TwigTemplate_baab5eb61a13d0cbcb29a31a313fa1e388fa4c1c48e023758f23f2b49a7afb49 extends Twig_Template
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
        if (array_key_exists("branched", $context)) {
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
            <strong style=\"font-size: 18px\"><u>Ajout d'un nouveau personnel</u></strong>
        </div>
        <form class=\"col-md-12 form-inline panel panel-primary panel-body\"
              style=\"
              margin-left: -15px;
              margin-right: -25px;\">
            <div class=\"col-md-12 form-group nomCP\"
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4 control-label\">Nom: <span style=\"color: red\">*</span></label>
                <b><input onfocus=\"editerFocus('nomCP', 'nom');\" type=\"text\" class=\"form-control\" id=\"nomP\" name=\"nomP\" placeholder=\"Nom du personnel\" style=\"font-size: 16px;\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide nom \"></span></b>
            </div>
            <div class=\"col-md-12 form-group preCP\" 
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4 control-label\">Prénom <span style=\"color: red\">*</span></label>
                <b><input onfocus=\"editerFocus('preCP', 'pren');\" type=\"text\" class=\"form-control\" id=\"prenP\" name=\"prenP\" placeholder=\"Nom du prénom\" style=\"font-size: 16px;\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide pren \"></b>
            </div>
            <div class=\"col-md-12 form-group matCP\" 
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4 control-label\">Matricule <span style=\"color: red\">*</span></label>
                <b><input onfocus=\"editerFocus('matCP', 'mat');\" type=\"text\" class=\"form-control\" id=\"matP\" name=\"matP\" placeholder=\"Matricule\" style=\"font-size: 16px;\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide mat \"></b>
            </div>
            <div class=\"col-md-12 form-group telCP\"
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4 control-label\">Téléphone <span style=\"color: red\">*</span></label>
                <b><input onfocus=\"editerFocus('telCP', 'tel');\" type=\"text\" class=\"form-control\" id=\"telP\" name=\"telP\" placeholder=\"Téléphone\" style=\"font-size: 16px;\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide tel \"></b>
            </div>
            <div class=\"col-md-12 emailCP\"
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4 control-label\">Email <span style=\"color: red\">*</span></label>
                <b><input onfocus=\"editerFocus('emailCP', 'email');\" type=\"text\" class=\"form-control\" name=\"emailP\" id=\"emailP\" placeholder=\"juniorubuntu@gmail.com\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide email \"></b>
            </div>
            <div class=\"col-md-12 dateCP\"
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4 control-label\">Date Recrutement <span style=\"color: red\">*</span></label>
                <b><input type=\"date\" class=\"form-control date-choose hide\" name=\"dateP\" id=\"dateP\" style=\"font-size: 16px;\" onblur=\"cacheDate();\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide date \"></b>
                <b><input ";
        // line 48
        if (((isset($context["update"]) ? $context["update"] : $this->getContext($context, "update")) == 1)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["branched"]) ? $context["branched"] : $this->getContext($context, "branched")), "dateCreation"), "m/d/Y"), "html", null, true);
            echo "\" ";
        }
        echo " type=\"text\" placeholder=\"Date de recrutement\" class=\"form-control date-choose-aff\" onfocus=\"afficheDate(); editerFocus('dateCP', 'date');\" id=\"dateP\" style=\"font-size: 16px;\"></b>
            </div>
            <div class=\"col-md-12 deciCP\"
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4 control-label\">Décison <span style=\"color: red\">*</span></label>
                <b><input onfocus=\"editerFocus('deciCP', 'deci');\" type=\"text\" class=\"form-control\" id=\"deciP\"  placeholder=\"Décision d'admission\" style=\"font-size: 16px;\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide deci \"></b>
            </div>
        </form>
        <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("list_tree_direction");
        echo "\"><button type=\"button\" class=\"btn btn-success active col-md-2 col-md-offset-6\"><span class=\"glyphicon glyphicon-remove-circle\">Annuler</span></button></a>
        <a><button type=\"button\" onclick=\"validationFormPersonnel();\" class=\"btn btn-primary col-md-2 col-md-offset-1\"><span class=\"glyphicon glyphicon-plus-sign\">Ajouter</span></button></a>
    </div>
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
        return array (  106 => 56,  91 => 48,  50 => 9,  47 => 8,  44 => 7,  41 => 6,  38 => 5,  35 => 4,  29 => 2,);
    }
}
