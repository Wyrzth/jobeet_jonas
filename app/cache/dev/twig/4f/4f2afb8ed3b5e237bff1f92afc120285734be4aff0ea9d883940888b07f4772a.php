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
        $__internal_065902787543585add696f60f50b03268a6131dd179df7bb85a67b9d80fd3f09 = $this->env->getExtension("native_profiler");
        $__internal_065902787543585add696f60f50b03268a6131dd179df7bb85a67b9d80fd3f09->enter($__internal_065902787543585add696f60f50b03268a6131dd179df7bb85a67b9d80fd3f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_065902787543585add696f60f50b03268a6131dd179df7bb85a67b9d80fd3f09->leave($__internal_065902787543585add696f60f50b03268a6131dd179df7bb85a67b9d80fd3f09_prof);

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
