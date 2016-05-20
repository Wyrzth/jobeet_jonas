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
        $__internal_c2843c4f2f52c8ba58c084863b746c43e16b72ffdeb339f73a13ebac0b507d9b = $this->env->getExtension("native_profiler");
        $__internal_c2843c4f2f52c8ba58c084863b746c43e16b72ffdeb339f73a13ebac0b507d9b->enter($__internal_c2843c4f2f52c8ba58c084863b746c43e16b72ffdeb339f73a13ebac0b507d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_c2843c4f2f52c8ba58c084863b746c43e16b72ffdeb339f73a13ebac0b507d9b->leave($__internal_c2843c4f2f52c8ba58c084863b746c43e16b72ffdeb339f73a13ebac0b507d9b_prof);

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
