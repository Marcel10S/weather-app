<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* weather/weatherForecasts.html.twig */
class __TwigTemplate_96ed607dc253f151f26861de0f94a6e1eb3dc79b83661f6309657672ccd0bc66 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "weather/weatherForecasts.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "weather/weatherForecasts.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\">
    <div class=\"weather_list\">
        ";
        // line 7
        if ((1 === twig_compare((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 7, $this->source); })()), 1))) {
            // line 8
            echo "            <a class=\"btn\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_weather_forecasts", ["currentPage" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 8, $this->source); })()) - 1)]), "html", null, true);
            echo "\">Newer records</a>
        ";
        }
        // line 10
        echo "        ";
        if ((1 === twig_compare((isset($context["pagesCount"]) || array_key_exists("pagesCount", $context) ? $context["pagesCount"] : (function () { throw new RuntimeError('Variable "pagesCount" does not exist.', 10, $this->source); })()), (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 10, $this->source); })())))) {
            // line 11
            echo "            <a class=\"btn\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_weather_forecasts", ["currentPage" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 11, $this->source); })()) + 1)]), "html", null, true);
            echo "\">Older records</a>
        ";
        }
        // line 13
        echo "        <a class=\"btn\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_weather");
        echo "\">Return to main page</a>
        <table class=\"table table-striped\" id=\"weather_list\">
        <thead>
            <tr>
            <th scope=\"col\">Date entered</th>
            <th scope=\"col\">Temperature</th>
            <th scope=\"col\">Cloudy</th>
            <th scope=\"col\">Wind</th>
            <th scope=\"col\">City name</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weatherData"]) || array_key_exists("weatherData", $context) ? $context["weatherData"] : (function () { throw new RuntimeError('Variable "weatherData" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["weather"]) {
            // line 26
            echo "                <tr>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["weather"], "date_entered", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["weather"], "temperature", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["weather"], "cloudy", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["weather"], "wind", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["weather"], "city_name", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weather'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
        </table>
    </div>
    <div class=\"weather_summary\">
        ";
        // line 56
        echo "    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "weather/weatherForecasts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 56,  128 => 34,  119 => 31,  115 => 30,  111 => 29,  107 => 28,  103 => 27,  100 => 26,  96 => 25,  80 => 13,  74 => 11,  71 => 10,  65 => 8,  63 => 7,  59 => 5,  52 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
    <div class=\"weather_list\">
        {% if currentPage > 1 %}
            <a class=\"btn\" href=\"{{ path('app_weather_forecasts', {'currentPage': currentPage - 1}) }}\">Newer records</a>
        {% endif %}
        {% if pagesCount > currentPage %}
            <a class=\"btn\" href=\"{{ path('app_weather_forecasts', {'currentPage': currentPage + 1}) }}\">Older records</a>
        {% endif %}
        <a class=\"btn\" href=\"{{ path('app_weather') }}\">Return to main page</a>
        <table class=\"table table-striped\" id=\"weather_list\">
        <thead>
            <tr>
            <th scope=\"col\">Date entered</th>
            <th scope=\"col\">Temperature</th>
            <th scope=\"col\">Cloudy</th>
            <th scope=\"col\">Wind</th>
            <th scope=\"col\">City name</th>
            </tr>
        </thead>
        <tbody>
            {% for weather in weatherData %}
                <tr>
                    <td>{{ weather.date_entered }}</td>
                    <td>{{ weather.temperature }}</td>
                    <td>{{ weather.cloudy }}</td>
                    <td>{{ weather.wind }}</td>
                    <td>{{ weather.city_name }}</td>
                </tr>
            {% endfor %}
        </tbody>
        </table>
    </div>
    <div class=\"weather_summary\">
        {# <table class=\"table table-striped\" id=\"weather_summary\">
        <thead>
            <tr>
            <th scope=\"col\">Max temperature</th>
            <th scope=\"col\">Min temperature</th>
            <th scope=\"col\">Avg temperature</th>
            <th scope=\"col\">Most search city</th>
            <th scope=\"col\">Search count</th>
            </tr>
        </thead>
        <tbody>
            <th scope=\"col\">{{ weatherSummaryData.max_temperature }}</th>
            <th scope=\"col\">{{ weatherSummaryData.min_temperature }}</th>
            <th scope=\"col\">{{ weatherSummaryData.avg_temperature }}</th>
            <th scope=\"col\">{{ weatherSummaryData.most_search_city }}</th>
            <th scope=\"col\">{{ weatherSummaryData.search_count }}</th>
        </tbody>
        </table> #}
    </div>
</div>
{% endblock %}
", "weather/weatherForecasts.html.twig", "C:\\MS_PV\\web-makers\\templates\\weather\\weatherForecasts.html.twig");
    }
}
