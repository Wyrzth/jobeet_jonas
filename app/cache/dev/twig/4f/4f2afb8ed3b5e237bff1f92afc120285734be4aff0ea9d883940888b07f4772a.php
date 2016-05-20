<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_3f91bd16e5b49826267d77abfb8b57f76a4291bdf4672bd197ab045420f14d17 extends Twig_Template
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
        $__internal_6ad2e431457d97966ef300c3457c39ad9915b002087e4cc2bca9f26404b37cf7 = $this->env->getExtension("native_profiler");
        $__internal_6ad2e431457d97966ef300c3457c39ad9915b002087e4cc2bca9f26404b37cf7->enter($__internal_6ad2e431457d97966ef300c3457c39ad9915b002087e4cc2bca9f26404b37cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6ad2e431457d97966ef300c3457c39ad9915b002087e4cc2bca9f26404b37cf7->leave($__internal_6ad2e431457d97966ef300c3457c39ad9915b002087e4cc2bca9f26404b37cf7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
