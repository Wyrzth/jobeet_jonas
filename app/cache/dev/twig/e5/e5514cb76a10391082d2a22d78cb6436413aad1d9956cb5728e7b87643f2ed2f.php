<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_fa136ecc8ac9d03a8c45e85cbd8bb637e620a39942671a4d35cd163cc4919454 extends Twig_Template
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
        $__internal_70c276b927a4cedc3c0c2ec3b80a5c137cb277787b16fd6b6500081ee5a1f071 = $this->env->getExtension("native_profiler");
        $__internal_70c276b927a4cedc3c0c2ec3b80a5c137cb277787b16fd6b6500081ee5a1f071->enter($__internal_70c276b927a4cedc3c0c2ec3b80a5c137cb277787b16fd6b6500081ee5a1f071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_70c276b927a4cedc3c0c2ec3b80a5c137cb277787b16fd6b6500081ee5a1f071->leave($__internal_70c276b927a4cedc3c0c2ec3b80a5c137cb277787b16fd6b6500081ee5a1f071_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
