<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6564f8d03e64d70c0314391637432c9039ba2769b343ef3a9be1ecb269585a04 extends Twig_Template
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
        $__internal_7c0ebac2a38de88dc6a5fd34188b15ed24b5a9c66c51a6af414de79fdbaa8c46 = $this->env->getExtension("native_profiler");
        $__internal_7c0ebac2a38de88dc6a5fd34188b15ed24b5a9c66c51a6af414de79fdbaa8c46->enter($__internal_7c0ebac2a38de88dc6a5fd34188b15ed24b5a9c66c51a6af414de79fdbaa8c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7c0ebac2a38de88dc6a5fd34188b15ed24b5a9c66c51a6af414de79fdbaa8c46->leave($__internal_7c0ebac2a38de88dc6a5fd34188b15ed24b5a9c66c51a6af414de79fdbaa8c46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
