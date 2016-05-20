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
        $__internal_c62ba726257a6e4634f96e9a5593b3f30aac27d0541027b18ab57d8580d4376b = $this->env->getExtension("native_profiler");
        $__internal_c62ba726257a6e4634f96e9a5593b3f30aac27d0541027b18ab57d8580d4376b->enter($__internal_c62ba726257a6e4634f96e9a5593b3f30aac27d0541027b18ab57d8580d4376b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c62ba726257a6e4634f96e9a5593b3f30aac27d0541027b18ab57d8580d4376b->leave($__internal_c62ba726257a6e4634f96e9a5593b3f30aac27d0541027b18ab57d8580d4376b_prof);

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
