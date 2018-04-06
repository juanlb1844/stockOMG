<?php

/* layout.twig */
class __TwigTemplate_58dea64c07e677ae79bbe65c902cf844886974692b2e19ec97a4e1a6ddf6d3c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <title>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seo"]) ? $context["seo"] : null), "title", array()), "html", null, true);
        echo "</title>
</head>
<body>

<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"/\">Twig testing</a>
        </div>
        <ul class=\"nav navbar-nav\">
            <li class=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('MyExtension')->activeClass($context, "home"), "html", null, true);
        echo "\"><a href=\"/\">Home</a></li>
            <li class=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('MyExtension')->activeClass($context, "presentation"), "html", null, true);
        echo "\"><a href=\"?p=presentation\">Presentation</a></li>
            <li class=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('MyExtension')->activeClass($context, "societe"), "html", null, true);
        echo "\"><a href=\"?p=company\">Company</a></li>
            <li class=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('MyExtension')->activeClass($context, "contact"), "html", null, true);
        echo "\"><a href=\"?p=contact\">Contact</a></li>
        </ul>
    </div>
</nav>

<div class=\"container\">
    ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "</div>

<script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
</body>
</html>";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "    ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 29,  74 => 28,  66 => 30,  64 => 28,  55 => 22,  51 => 21,  47 => 20,  43 => 19,  30 => 9,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <title>{{ seo.title }}</title>
</head>
<body>

<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"/\">Twig testing</a>
        </div>
        <ul class=\"nav navbar-nav\">
            <li class=\"{{ activeClass('home') }}\"><a href=\"/\">Home</a></li>
            <li class=\"{{ activeClass('presentation') }}\"><a href=\"?p=presentation\">Presentation</a></li>
            <li class=\"{{ activeClass('societe') }}\"><a href=\"?p=company\">Company</a></li>
            <li class=\"{{ activeClass('contact') }}\"><a href=\"?p=contact\">Contact</a></li>
        </ul>
    </div>
</nav>

<div class=\"container\">
    {% block content %}
    {% endblock %}
</div>

<script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
</body>
</html>", "layout.twig", "C:\\xampp\\htdocs\\projects\\OMGstocks\\OMGstocks\\templates\\layout.twig");
    }
}
