<?php

/* company.twig */
class __TwigTemplate_b6979ddbe4b2ab0e0cf629a62a3ad33cf2be286d52e7bcac5e9154e13a76dce3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("with_sidebar.twig", "company.twig", 1);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "with_sidebar.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sidebar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
    <h2>Yep !</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid at dolores eaque hic, illo incidunt iste itaque molestiae qui.</p>
";
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "    <h1>Company</h1>
    <p>";
        // line 11
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('MyExtension')->markdownParse("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad alias atque cum debitis doloribus eaque eos et harum,
    laborum molestiae nihil numquam officia optio perspiciatis quidem quod? Animi blanditiis commodi culpa debitis dolorem dolorum,
    ducimus est harum illo ipsam maxime minus molestias nesciunt, quidem unde ut voluptates voluptatibus. Ab accusantium aliquam aperiam
    architecto consequatur dignissimos dolorem doloremque dolorum eum, exercitationem iure molestiae perferendis, reiciendis, tempora
    tenetur veniam voluptatibus? Ad aliquid aperiam assumenda autem deleniti dolores ducimus facere harum impedit, incidunt magni non quo
    repellendus sed voluptates! Assumenda atque cupiditate, dolore eum laboriosam laudantium, necessitatibus odit quae quam repudiandae
    sed totam unde. Adipisci at corporis delectus necessitatibus recusandae ullam. A accusamus corporis dolore eaque et exercitationem
    facere id impedit incidunt laborum, magnam magni minima, mollitia nisi obcaecati officiis provident quibusdam. Aspernatur aut expedita
    fuga hic minus temporibus voluptatum. Aliquam aut exercitationem id quaerat repellendus, rerum ut. Accusantium ad autem consequuntur debitis dignissimos.")), "html", null, true);
        // line 19
        echo "
    </p>
";
    }

    public function getTemplateName()
    {
        return "company.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 19,  47 => 11,  44 => 10,  41 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'with_sidebar.twig' %}

{% block sidebar %}
    {{ parent() }}
    <h2>Yep !</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid at dolores eaque hic, illo incidunt iste itaque molestiae qui.</p>
{% endblock %}

{% block main %}
    <h1>Company</h1>
    <p>{{ 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad alias atque cum debitis doloribus eaque eos et harum,
    laborum molestiae nihil numquam officia optio perspiciatis quidem quod? Animi blanditiis commodi culpa debitis dolorem dolorum,
    ducimus est harum illo ipsam maxime minus molestias nesciunt, quidem unde ut voluptates voluptatibus. Ab accusantium aliquam aperiam
    architecto consequatur dignissimos dolorem doloremque dolorum eum, exercitationem iure molestiae perferendis, reiciendis, tempora
    tenetur veniam voluptatibus? Ad aliquid aperiam assumenda autem deleniti dolores ducimus facere harum impedit, incidunt magni non quo
    repellendus sed voluptates! Assumenda atque cupiditate, dolore eum laboriosam laudantium, necessitatibus odit quae quam repudiandae
    sed totam unde. Adipisci at corporis delectus necessitatibus recusandae ullam. A accusamus corporis dolore eaque et exercitationem
    facere id impedit incidunt laborum, magnam magni minima, mollitia nisi obcaecati officiis provident quibusdam. Aspernatur aut expedita
    fuga hic minus temporibus voluptatum. Aliquam aut exercitationem id quaerat repellendus, rerum ut. Accusantium ad autem consequuntur debitis dignissimos.' | markdown | striptags }}
    </p>
{% endblock %}", "company.twig", "C:\\xampp\\htdocs\\projects\\OMGstocks\\OMGstocks\\templates\\company.twig");
    }
}
