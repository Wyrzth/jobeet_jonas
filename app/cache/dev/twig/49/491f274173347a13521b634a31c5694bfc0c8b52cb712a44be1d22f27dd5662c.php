<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4965f5a6f7e657813b3654cfd49414e3b511a7cf2bcea52a628fd4a4e408a511 extends Twig_Template
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
        $__internal_c061e8f1247fa963efb3715385361d4d730cf20211cd4aa8e1663408b7b3a740 = $this->env->getExtension("native_profiler");
        $__internal_c061e8f1247fa963efb3715385361d4d730cf20211cd4aa8e1663408b7b3a740->enter($__internal_c061e8f1247fa963efb3715385361d4d730cf20211cd4aa8e1663408b7b3a740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c061e8f1247fa963efb3715385361d4d730cf20211cd4aa8e1663408b7b3a740->leave($__internal_c061e8f1247fa963efb3715385361d4d730cf20211cd4aa8e1663408b7b3a740_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */