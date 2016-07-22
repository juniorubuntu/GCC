<?php

/* RepGestionBundle:Rep:addCategorie.html.twig */
class __TwigTemplate_a48c52ad802c1ad7f98978b424d6c33bc9f667bcb1126e8f82329e45267403ba extends Twig_Template
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
        echo "Ajout d'une Categorie";
    }

    // line 4
    public function block_detail($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"col-md-7 panel-primary active\">
        <div class=\"panel panel-heading col-md-12\" style=\"
             margin-left: -15px;
             margin-right: -25px;\">
            <strong style=\"font-size: 18px\"><u>Ajout d'une nouvelle catégorie</u></strong>
        </div>
        <form class=\"col-md-12 form-inline panel panel-primary panel-body\"
              style=\"
              margin-left: -15px;
              margin-right: -25px;\">
            <div class=\"col-md-12 form-group nomCP\"
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4 control-label\">Nom: <span style=\"color: red\">*</span></label>
                <b><input type=\"text\" onfocus=\"editerFocus('nomCP', 'nom');\" class=\"form-control\" id=\"nomP\" placeholder=\"Intitule de la categorie\" style=\"font-size: 16px;\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide nom \"></b>
            </div>
            <div class=\"col-md-12 form-group preCP\"
                 style=\"margin-top: 5px;\">
                <label for=\"poste\" class=\"col-md-4 control-label\">Quota par mois <span style=\"color: red\">*</span></label>
                <b><input onfocus=\"editerFocus('preCP', 'pren');\" type=\"text\" class=\"form-control\" id=\"prenP\" placeholder=\"Quota du crédit par mois\" style=\"font-size: 16px;\"><span class=\"glyphicon glyphicon-remove form-control-feedback hide pren \"></b>
            </div>
        </form>
        <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("list_tree_direction");
        echo "\"><button type=\"button\" class=\"btn btn-success active col-md-2 col-md-offset-6\"><span class=\"glyphicon glyphicon-remove-circle\">Annuler</span></button></a>
        <a><button onclick=\"validationCategorie();\" type=\"button\" class=\"btn btn-primary col-md-2 col-md-offset-1\"><span class=\"glyphicon glyphicon-plus-sign\">Ajouter</span></button></a>
    </div>
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
        return array (  61 => 26,  38 => 5,  35 => 4,  29 => 2,);
    }
}
