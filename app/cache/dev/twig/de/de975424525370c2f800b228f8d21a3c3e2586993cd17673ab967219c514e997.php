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
        $__internal_5906f830fc05cb5e27f976a80a0a8ee0ab307aa3bc80e48d49f1bc5bd127ebe2 = $this->env->getExtension("native_profiler");
        $__internal_5906f830fc05cb5e27f976a80a0a8ee0ab307aa3bc80e48d49f1bc5bd127ebe2->enter($__internal_5906f830fc05cb5e27f976a80a0a8ee0ab307aa3bc80e48d49f1bc5bd127ebe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5906f830fc05cb5e27f976a80a0a8ee0ab307aa3bc80e48d49f1bc5bd127ebe2->leave($__internal_5906f830fc05cb5e27f976a80a0a8ee0ab307aa3bc80e48d49f1bc5bd127ebe2_prof);

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
