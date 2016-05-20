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
        $__internal_f7f290f542cc928e1bbbdf9701ab14a292ba91ecdb2ba9206e42a29aecf053e5 = $this->env->getExtension("native_profiler");
        $__internal_f7f290f542cc928e1bbbdf9701ab14a292ba91ecdb2ba9206e42a29aecf053e5->enter($__internal_f7f290f542cc928e1bbbdf9701ab14a292ba91ecdb2ba9206e42a29aecf053e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f7f290f542cc928e1bbbdf9701ab14a292ba91ecdb2ba9206e42a29aecf053e5->leave($__internal_f7f290f542cc928e1bbbdf9701ab14a292ba91ecdb2ba9206e42a29aecf053e5_prof);

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
