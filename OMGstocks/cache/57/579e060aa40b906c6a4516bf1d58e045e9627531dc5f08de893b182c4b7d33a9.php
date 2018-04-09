<?php

/* content.html.twig */
class __TwigTemplate_e719c41a956cc4bf90b3bfdce89a86c3b835098f9a6385e84d1ae7b3d9e9cacf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "content.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        echo " 
\t";
        // line 4
        $this->displayParentBlock("content", $context, $blocks);
        echo " 
\t<div class=\"col-md-9\">
\t\t<h1 class=\"title-template\">Dashbard</h1>
\t\t <h1 style=\"font-weight: 100;\">
\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.
\t\t </h1>\t\t
\t</div>
\t<div class=\"col-md-3\">
\t\t";
        // line 17
        echo twig_include($this->env, $context, "sidebar.html.twig");
        echo "
\t</div>
";
    }

    public function getTemplateName()
    {
        return "content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  33 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block content %} 
\t{{parent()}} 
\t<div class=\"col-md-9\">
\t\t<h1 class=\"title-template\">Dashbard</h1>
\t\t <h1 style=\"font-weight: 100;\">
\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.
\t\t </h1>\t\t
\t</div>
\t<div class=\"col-md-3\">
\t\t{{ include('sidebar.html.twig') }}
\t</div>
{% endblock %}
", "content.html.twig", "C:\\xampp\\htdocs\\GIT\\OMGstock\\stockOMG\\OMGstocks\\templates\\content.html.twig");
    }
}
