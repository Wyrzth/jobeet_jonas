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
        $__internal_6d239e01ffdb6dee4707ad361c6e55d3a286d22b7fbec2ec76a3ee9cb45710d0 = $this->env->getExtension("native_profiler");
        $__internal_6d239e01ffdb6dee4707ad361c6e55d3a286d22b7fbec2ec76a3ee9cb45710d0->enter($__internal_6d239e01ffdb6dee4707ad361c6e55d3a286d22b7fbec2ec76a3ee9cb45710d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_6d239e01ffdb6dee4707ad361c6e55d3a286d22b7fbec2ec76a3ee9cb45710d0->leave($__internal_6d239e01ffdb6dee4707ad361c6e55d3a286d22b7fbec2ec76a3ee9cb45710d0_prof);

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
