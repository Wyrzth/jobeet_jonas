<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_7d97c84dcfd174034c06ba8f44c5e14a3a6b84588298f310ee691328006101df extends Twig_Template
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
        $__internal_6427cfbfa3ce5feb489cf7ab9655a85ec28fc8aed4a43ab1240e07d81570a8d4 = $this->env->getExtension("native_profiler");
        $__internal_6427cfbfa3ce5feb489cf7ab9655a85ec28fc8aed4a43ab1240e07d81570a8d4->enter($__internal_6427cfbfa3ce5feb489cf7ab9655a85ec28fc8aed4a43ab1240e07d81570a8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_6427cfbfa3ce5feb489cf7ab9655a85ec28fc8aed4a43ab1240e07d81570a8d4->leave($__internal_6427cfbfa3ce5feb489cf7ab9655a85ec28fc8aed4a43ab1240e07d81570a8d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
