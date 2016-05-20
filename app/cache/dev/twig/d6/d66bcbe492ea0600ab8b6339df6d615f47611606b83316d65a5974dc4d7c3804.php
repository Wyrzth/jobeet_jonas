<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_db6ebf84ca2734b1315daabb9814e34d768642615809592558e938f1a6e6f726 extends Twig_Template
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
        $__internal_0ac30396380654511e709f7e34bd689dfac4adc011483caeb5ab319d30d3f74d = $this->env->getExtension("native_profiler");
        $__internal_0ac30396380654511e709f7e34bd689dfac4adc011483caeb5ab319d30d3f74d->enter($__internal_0ac30396380654511e709f7e34bd689dfac4adc011483caeb5ab319d30d3f74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0ac30396380654511e709f7e34bd689dfac4adc011483caeb5ab319d30d3f74d->leave($__internal_0ac30396380654511e709f7e34bd689dfac4adc011483caeb5ab319d30d3f74d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
