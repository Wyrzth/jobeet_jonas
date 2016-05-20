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
        $__internal_7ad1a0b49a9c249d8b28d9e215c037728e5eb08c193a9efcb6e796c5a5a7a96e = $this->env->getExtension("native_profiler");
        $__internal_7ad1a0b49a9c249d8b28d9e215c037728e5eb08c193a9efcb6e796c5a5a7a96e->enter($__internal_7ad1a0b49a9c249d8b28d9e215c037728e5eb08c193a9efcb6e796c5a5a7a96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7ad1a0b49a9c249d8b28d9e215c037728e5eb08c193a9efcb6e796c5a5a7a96e->leave($__internal_7ad1a0b49a9c249d8b28d9e215c037728e5eb08c193a9efcb6e796c5a5a7a96e_prof);

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
