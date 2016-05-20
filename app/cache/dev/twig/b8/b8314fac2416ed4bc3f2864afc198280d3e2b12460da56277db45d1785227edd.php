<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_1e7dc1e8699a6a30178bf5df5eff4f1aa559dbfbdb3402720623905f7ff4e79d extends Twig_Template
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
        $__internal_c17990541dd30c0b9102a604719361b700886d6265c92494efcbea346207d30b = $this->env->getExtension("native_profiler");
        $__internal_c17990541dd30c0b9102a604719361b700886d6265c92494efcbea346207d30b->enter($__internal_c17990541dd30c0b9102a604719361b700886d6265c92494efcbea346207d30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c17990541dd30c0b9102a604719361b700886d6265c92494efcbea346207d30b->leave($__internal_c17990541dd30c0b9102a604719361b700886d6265c92494efcbea346207d30b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
