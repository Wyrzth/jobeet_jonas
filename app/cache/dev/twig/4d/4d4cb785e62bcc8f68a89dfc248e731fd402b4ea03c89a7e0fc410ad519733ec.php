<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_a0db290b6e8aeb13101f2d39f29d57ac2ee065ac19a93248b0485cdb0b522b6d extends Twig_Template
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
        $__internal_b498bc77c52baaaabc1eea8cf65f5fd8a2c40aa5b8ce0ef47580bae2d6fad018 = $this->env->getExtension("native_profiler");
        $__internal_b498bc77c52baaaabc1eea8cf65f5fd8a2c40aa5b8ce0ef47580bae2d6fad018->enter($__internal_b498bc77c52baaaabc1eea8cf65f5fd8a2c40aa5b8ce0ef47580bae2d6fad018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b498bc77c52baaaabc1eea8cf65f5fd8a2c40aa5b8ce0ef47580bae2d6fad018->leave($__internal_b498bc77c52baaaabc1eea8cf65f5fd8a2c40aa5b8ce0ef47580bae2d6fad018_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
