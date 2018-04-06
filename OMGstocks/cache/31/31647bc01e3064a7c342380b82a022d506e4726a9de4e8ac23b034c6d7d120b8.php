<?php

/* home.twig */
class __TwigTemplate_272d58727736d1dc26236989688fbd9105c91d6ef9a48ef2d0b43267e7d9ff77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "home.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Hi ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : null), "name", array()), "html", null, true);
        echo " !</h1>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, strip_tags($this->env->getExtension('MyExtension')->markdownParse("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto asperiores autem blanditiis
        consequuntur doloremque eligendi facere illo illum incidunt ipsam iste itaque labore laborum magnam minima minus
        modi natus nesciunt quaerat qui quidem, reiciendis repudiandae suscipit temporibus vero voluptas voluptates?
        Aliquid architecto asperiores at beatae consequatur consequuntur dolor dolore dolorem dolorum eligendi eos
        explicabo harum itaque iure laborum modi molestias natus non nulla numquam officia placeat quo saepe, sapiente
        sed tempore velit voluptate. Ad aspernatur assumenda debitis deleniti deserunt dignissimos ducimus eos eveniet
        harum illum iste laborum laudantium, libero maiores molestiae nostrum odit omnis pariatur perferendis,
        perspiciatis quaerat quibusdam quod repudiandae similique sit tenetur ullam voluptates! Earum magnam, quia.
        Error illum incidunt itaque? Ab adipisci, aliquam aperiam autem eaque eveniet facere illum ipsa itaque libero,
        necessitatibus odit quasi, ratione sapiente sint vero voluptas. Aliquid autem consequatur doloremque eos id ipsa
        libero mollitia nulla sit veritatis? Quod rem sapiente vel! Ab aliquam aliquid aspernatur atque beatae
        blanditiis consequuntur cum dignissimos, distinctio dolore eligendi error eum excepturi expedita id, impedit
        iste laudantium magnam magni maiores maxime minima placeat quaerat quidem quisquam ratione reiciendis
        reprehenderit repudiandae rerum sapiente sunt tempora temporibus ullam velit veniam voluptatem voluptatum?
        Aliquid aspernatur perferendis quo totam vel.")), 200, true, "..."), "html", null, true);
        // line 19
        echo "</p>
        <a href=\"/?p=presentation\">See more</a>
";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 19,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}

{% block content %}
    <h1>Hi {{ person.name }} !</h1>
    <p>{{ 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto asperiores autem blanditiis
        consequuntur doloremque eligendi facere illo illum incidunt ipsam iste itaque labore laborum magnam minima minus
        modi natus nesciunt quaerat qui quidem, reiciendis repudiandae suscipit temporibus vero voluptas voluptates?
        Aliquid architecto asperiores at beatae consequatur consequuntur dolor dolore dolorem dolorum eligendi eos
        explicabo harum itaque iure laborum modi molestias natus non nulla numquam officia placeat quo saepe, sapiente
        sed tempore velit voluptate. Ad aspernatur assumenda debitis deleniti deserunt dignissimos ducimus eos eveniet
        harum illum iste laborum laudantium, libero maiores molestiae nostrum odit omnis pariatur perferendis,
        perspiciatis quaerat quibusdam quod repudiandae similique sit tenetur ullam voluptates! Earum magnam, quia.
        Error illum incidunt itaque? Ab adipisci, aliquam aperiam autem eaque eveniet facere illum ipsa itaque libero,
        necessitatibus odit quasi, ratione sapiente sint vero voluptas. Aliquid autem consequatur doloremque eos id ipsa
        libero mollitia nulla sit veritatis? Quod rem sapiente vel! Ab aliquam aliquid aspernatur atque beatae
        blanditiis consequuntur cum dignissimos, distinctio dolore eligendi error eum excepturi expedita id, impedit
        iste laudantium magnam magni maiores maxime minima placeat quaerat quidem quisquam ratione reiciendis
        reprehenderit repudiandae rerum sapiente sunt tempora temporibus ullam velit veniam voluptatem voluptatum?
        Aliquid aspernatur perferendis quo totam vel.' | markdown | striptags | truncate(200, true, '...')}}</p>
        <a href=\"/?p=presentation\">See more</a>
{% endblock %}", "home.twig", "C:\\xampp\\htdocs\\projects\\OMGstocks\\OMGstocks\\templates\\home.twig");
    }
}
