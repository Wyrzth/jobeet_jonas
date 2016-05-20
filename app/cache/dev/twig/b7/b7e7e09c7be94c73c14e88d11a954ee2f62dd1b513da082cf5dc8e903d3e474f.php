<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_daa674cba0f479d87d7d1fb61d6087b259f509fe6ec71a7490b67d3299fd3ffd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae407e3ee88409a51fb1a0ec6d8d0a8719b3b009ec3690f3d984c38b32062ec9 = $this->env->getExtension("native_profiler");
        $__internal_ae407e3ee88409a51fb1a0ec6d8d0a8719b3b009ec3690f3d984c38b32062ec9->enter($__internal_ae407e3ee88409a51fb1a0ec6d8d0a8719b3b009ec3690f3d984c38b32062ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ae407e3ee88409a51fb1a0ec6d8d0a8719b3b009ec3690f3d984c38b32062ec9->leave($__internal_ae407e3ee88409a51fb1a0ec6d8d0a8719b3b009ec3690f3d984c38b32062ec9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
