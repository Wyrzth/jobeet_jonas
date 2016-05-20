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
        $__internal_a5bee520f3373028600715d259d68f686684c9405fecb2239df388746b7cf732 = $this->env->getExtension("native_profiler");
        $__internal_a5bee520f3373028600715d259d68f686684c9405fecb2239df388746b7cf732->enter($__internal_a5bee520f3373028600715d259d68f686684c9405fecb2239df388746b7cf732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_a5bee520f3373028600715d259d68f686684c9405fecb2239df388746b7cf732->leave($__internal_a5bee520f3373028600715d259d68f686684c9405fecb2239df388746b7cf732_prof);

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
