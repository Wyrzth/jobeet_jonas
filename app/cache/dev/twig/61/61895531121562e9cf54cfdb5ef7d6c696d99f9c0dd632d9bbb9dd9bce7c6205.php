<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_4ee3db59bf3251c2713686252bb2747e3c47662e69f31183d5824d62b70764e7 extends Twig_Template
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
        $__internal_6f41172dc8b900385cbfc6735624bbe62b96abe3e5001175c17ca0d8e22570d2 = $this->env->getExtension("native_profiler");
        $__internal_6f41172dc8b900385cbfc6735624bbe62b96abe3e5001175c17ca0d8e22570d2->enter($__internal_6f41172dc8b900385cbfc6735624bbe62b96abe3e5001175c17ca0d8e22570d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6f41172dc8b900385cbfc6735624bbe62b96abe3e5001175c17ca0d8e22570d2->leave($__internal_6f41172dc8b900385cbfc6735624bbe62b96abe3e5001175c17ca0d8e22570d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
