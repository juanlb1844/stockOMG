<?php

/* contact.twig */
class __TwigTemplate_38c18c5c11bc8e5e067015e3611dba0b74b65c72792fd2c20179537bc48ba17f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "contact.twig", 1);
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
        // line 3
        $context["form"] = $this->loadTemplate("form.twig", "contact.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Contact</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi aperiam architecto blanditiis commodi
        consequatur culpa cumque cupiditate delectus distinctio doloremque eaque enim eos esse ex exercitationem fuga
        id, illum inventore iste iusto laudantium libero maiores nam necessitatibus odio officiis perspiciatis possimus
        provident quas quo repellat reprehenderit repudiandae sapiente vitae.</p>
    <form action=\"?p=contact\" method=\"post\">
        ";
        // line 12
        echo $context["form"]->getinput("name", "Your name", $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "name", array()), array("class" => "superclass"));
        echo "
        ";
        // line 13
        echo $context["form"]->getinput("email", "Email", $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "email", array()));
        echo "
        ";
        // line 14
        echo $context["form"]->gettextarea("message", "Message");
        echo "
        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-primary\">Send</button>
        </div>
    </form>
    </form>
";
    }

    public function getTemplateName()
    {
        return "contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  46 => 13,  42 => 12,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
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

{% import 'form.twig' as form %}

{% block content %}
    <h1>Contact</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi aperiam architecto blanditiis commodi
        consequatur culpa cumque cupiditate delectus distinctio doloremque eaque enim eos esse ex exercitationem fuga
        id, illum inventore iste iusto laudantium libero maiores nam necessitatibus odio officiis perspiciatis possimus
        provident quas quo repellat reprehenderit repudiandae sapiente vitae.</p>
    <form action=\"?p=contact\" method=\"post\">
        {{ form.input('name', 'Your name', contact.name, {class: 'superclass'}) }}
        {{ form.input('email', 'Email', contact.email) }}
        {{ form.textarea('message', 'Message') }}
        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-primary\">Send</button>
        </div>
    </form>
    </form>
{% endblock %}", "contact.twig", "C:\\xampp\\htdocs\\projects\\OMGstocks\\OMGstocks\\templates\\contact.twig");
    }
}
