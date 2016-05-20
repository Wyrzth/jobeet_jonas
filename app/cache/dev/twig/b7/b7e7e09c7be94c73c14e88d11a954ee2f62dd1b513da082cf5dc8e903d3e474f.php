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
        $__internal_823028c62f2f88cf516b8e641f23978a486977989fc8132520dfc68f8420dfb7 = $this->env->getExtension("native_profiler");
        $__internal_823028c62f2f88cf516b8e641f23978a486977989fc8132520dfc68f8420dfb7->enter($__internal_823028c62f2f88cf516b8e641f23978a486977989fc8132520dfc68f8420dfb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_823028c62f2f88cf516b8e641f23978a486977989fc8132520dfc68f8420dfb7->leave($__internal_823028c62f2f88cf516b8e641f23978a486977989fc8132520dfc68f8420dfb7_prof);

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
