<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_a13e1644e89a87781af369da3f5d9b812ecd98bd6dec9110660b39772eb38921 extends Twig_Template
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
        $__internal_a4d2ce460facb2961db30dbcea6b62d791c74ffea07867c465e18fff7d41d741 = $this->env->getExtension("native_profiler");
        $__internal_a4d2ce460facb2961db30dbcea6b62d791c74ffea07867c465e18fff7d41d741->enter($__internal_a4d2ce460facb2961db30dbcea6b62d791c74ffea07867c465e18fff7d41d741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a4d2ce460facb2961db30dbcea6b62d791c74ffea07867c465e18fff7d41d741->leave($__internal_a4d2ce460facb2961db30dbcea6b62d791c74ffea07867c465e18fff7d41d741_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
