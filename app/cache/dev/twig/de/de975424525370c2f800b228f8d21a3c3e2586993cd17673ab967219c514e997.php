<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_7ef11fff34abb48b815a3e948825feb015bb7c1820483c0354f832c67378bf7f extends Twig_Template
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
        $__internal_e56bde30919eeb224d2753922746a77f37675ddf72f6a6e0d2978a6f200fbb37 = $this->env->getExtension("native_profiler");
        $__internal_e56bde30919eeb224d2753922746a77f37675ddf72f6a6e0d2978a6f200fbb37->enter($__internal_e56bde30919eeb224d2753922746a77f37675ddf72f6a6e0d2978a6f200fbb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e56bde30919eeb224d2753922746a77f37675ddf72f6a6e0d2978a6f200fbb37->leave($__internal_e56bde30919eeb224d2753922746a77f37675ddf72f6a6e0d2978a6f200fbb37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
