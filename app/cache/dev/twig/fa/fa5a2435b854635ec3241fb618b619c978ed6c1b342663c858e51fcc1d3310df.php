<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_4cf881dde7b5efae3db92107b45bce9569f7110f0650cde742e6a18d469041b0 extends Twig_Template
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
        $__internal_f8155f3f441a9a539907b675469b597e208b65f82f59cbf45089a2c77f43298e = $this->env->getExtension("native_profiler");
        $__internal_f8155f3f441a9a539907b675469b597e208b65f82f59cbf45089a2c77f43298e->enter($__internal_f8155f3f441a9a539907b675469b597e208b65f82f59cbf45089a2c77f43298e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f8155f3f441a9a539907b675469b597e208b65f82f59cbf45089a2c77f43298e->leave($__internal_f8155f3f441a9a539907b675469b597e208b65f82f59cbf45089a2c77f43298e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
