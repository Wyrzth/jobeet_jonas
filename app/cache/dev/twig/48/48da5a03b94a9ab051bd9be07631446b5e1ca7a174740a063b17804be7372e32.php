<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_48ebfe1c107fd281ecb3c56ccaaa8703a056e26f74125224ccc2c218d65f2086 extends Twig_Template
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
        $__internal_4aabe5e00d692e5ec12f682d51366bc984525070623dcd047264d41ef1a8daef = $this->env->getExtension("native_profiler");
        $__internal_4aabe5e00d692e5ec12f682d51366bc984525070623dcd047264d41ef1a8daef->enter($__internal_4aabe5e00d692e5ec12f682d51366bc984525070623dcd047264d41ef1a8daef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4aabe5e00d692e5ec12f682d51366bc984525070623dcd047264d41ef1a8daef->leave($__internal_4aabe5e00d692e5ec12f682d51366bc984525070623dcd047264d41ef1a8daef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
