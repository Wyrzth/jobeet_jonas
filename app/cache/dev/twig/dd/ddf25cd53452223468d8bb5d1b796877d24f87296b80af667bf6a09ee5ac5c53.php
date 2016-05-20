<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_68cb7f2f1ce768dcd8e42ff0ee0a09a2dfe88125ab397b986e9bd9139abdf3a4 extends Twig_Template
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
        $__internal_d0789bdc3316ce0f312a1a3ccdb8516eea1efc48aac981b12cfb571c2d922fb1 = $this->env->getExtension("native_profiler");
        $__internal_d0789bdc3316ce0f312a1a3ccdb8516eea1efc48aac981b12cfb571c2d922fb1->enter($__internal_d0789bdc3316ce0f312a1a3ccdb8516eea1efc48aac981b12cfb571c2d922fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d0789bdc3316ce0f312a1a3ccdb8516eea1efc48aac981b12cfb571c2d922fb1->leave($__internal_d0789bdc3316ce0f312a1a3ccdb8516eea1efc48aac981b12cfb571c2d922fb1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
