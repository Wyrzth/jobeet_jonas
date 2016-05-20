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
        $__internal_040cf54ad1fb80361c1a603aa242e5e12c5cf7a9b4d2579c93709310c049e924 = $this->env->getExtension("native_profiler");
        $__internal_040cf54ad1fb80361c1a603aa242e5e12c5cf7a9b4d2579c93709310c049e924->enter($__internal_040cf54ad1fb80361c1a603aa242e5e12c5cf7a9b4d2579c93709310c049e924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_040cf54ad1fb80361c1a603aa242e5e12c5cf7a9b4d2579c93709310c049e924->leave($__internal_040cf54ad1fb80361c1a603aa242e5e12c5cf7a9b4d2579c93709310c049e924_prof);

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
