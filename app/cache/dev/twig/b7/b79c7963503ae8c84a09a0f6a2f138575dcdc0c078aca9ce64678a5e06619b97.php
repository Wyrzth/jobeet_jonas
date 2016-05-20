<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_3e41418bc5cc7fc774cf3bab443300fd54106d438e462305d003b71ac2e7f3ed extends Twig_Template
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
        $__internal_db790a7a12aae095922b8470cc1ed6eaf525cfc62ceb1e7fbd7883e98bc49005 = $this->env->getExtension("native_profiler");
        $__internal_db790a7a12aae095922b8470cc1ed6eaf525cfc62ceb1e7fbd7883e98bc49005->enter($__internal_db790a7a12aae095922b8470cc1ed6eaf525cfc62ceb1e7fbd7883e98bc49005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_db790a7a12aae095922b8470cc1ed6eaf525cfc62ceb1e7fbd7883e98bc49005->leave($__internal_db790a7a12aae095922b8470cc1ed6eaf525cfc62ceb1e7fbd7883e98bc49005_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
