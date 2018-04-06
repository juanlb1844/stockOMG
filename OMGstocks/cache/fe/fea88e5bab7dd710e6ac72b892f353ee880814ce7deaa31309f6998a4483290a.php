<?php

/* form.twig */
class __TwigTemplate_2f0c9a38eb193745a7c9c013d1a0943a0d2329a8b65038936df238ad579d5a70 extends Twig_Template
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
        // line 7
        echo "
";
    }

    // line 1
    public function getinput($__name__ = null, $__label__ = null, $__value__ = null, $__options__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "label" => $__label__,
            "value" => $__value__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "class", array()), "html", null, true);
            echo "\">
        <label for=\"";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</label>
        <input placeholder=\"";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" type=\"";
            echo ((((isset($context["name"]) ? $context["name"] : null) == "email")) ? ("email") : ("text"));
            echo "\" class=\"form-control\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\">
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 8
    public function gettextarea($__name__ = null, $__label__ = null, $__value__ = null, $__options__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "label" => $__label__,
            "value" => $__value__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 9
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "class", array()), "html", null, true);
            echo "\">
        <label for=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</label>
        <textarea type=\"text\" class=\"form-control\" id=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"></textarea>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 11,  94 => 10,  89 => 9,  74 => 8,  50 => 4,  44 => 3,  39 => 2,  24 => 1,  19 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro input(name, label, value = null, options = []) %}
    <div class=\"form-group {{ options.class }}\">
        <label for=\"{{ name }}\"> {{ label }}</label>
        <input placeholder=\"{{ value }}\" type=\"{{ name == 'email' ? 'email' : 'text' }}\" class=\"form-control\" id=\"{{ name }}\" name=\"{{ name }}\">
    </div>
{% endmacro %}

{% macro textarea(name, label, value = null, options = []) %}
    <div class=\"form-group {{ options.class }}\">
        <label for=\"{{ name }}\"> {{ label }}</label>
        <textarea type=\"text\" class=\"form-control\" id=\"{{ name }}\" name=\"{{ name }}\"></textarea>
    </div>
{% endmacro %}", "form.twig", "C:\\xampp\\htdocs\\projects\\OMGstocks\\OMGstocks\\templates\\form.twig");
    }
}
