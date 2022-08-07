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

/* weather/index.html.twig */
class __TwigTemplate_8d1f939a36a7e3a32c1f99cb7ab94c39003fe512c93563dd139355a7bab4226a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "weather/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "weather/index.html.twig", 2);
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
        echo "    <div id=\"header\">
        <b>Welcome on my weather forecast website! Click on map to add forecast</b><br>
        <a class=\"btn\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_weather_forecasts", ["currentPage" => 1]);
        echo "\">Go to record list</a>
        <a class=\"btn\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_weather");
        echo "\">Refresh map to default</a>
    </div>
    <div id=\"map\"></div>
    <script async=\"\" defer=\"\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyA7TqK1SThyAMUmPGEfTUrU0dny-_bPa6U&callback=addRecord\"></script>

    <div class=\"modal fade\" id=\"NewWeatherModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"NewWeatherModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"NewWeatherModalLabel\">Modal title</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    ...
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary close\">Great!</button>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "    <style>
        #map {
            height: 550px; width: 100%;
        }
        #header {
            padding: 5px; text-align: center;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "    <script>
        
        // w wiekszej ilości czasu warto by przenieśc metodu js do osobnego pliku a tutaj tylko przenieść tagi script //
        
        function initMap() {
            debugger
            let map = new google.maps.Map(document.getElementById(\"map\"), {
                zoom: 12,
                center: {lat: 50.0, lng: 19.0},
            });
            map.addListener(\"click\", (mapsMouseEvent) => { handleRecordAdd(mapsMouseEvent) });
        }

        function handleRecordAdd(mapsMouseEvent) {
            const coordinates = mapsMouseEvent.latLng.toJSON();
            \$.ajax({
                type: \"POST\",
                url: \"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_weather_forecast");
        echo "\",
                data: JSON.stringify(coordinates),
                dataType: 'json',
                callback: (response) => {
                    if (response.error) {
                        alert(response.error_msg);
                        return false;
                    } 
                    if (response.new_record_data === undefined || response.new_record_data === NULL) {
                        alert(\"No data has returned\");
                        return false;
                    }
                    \$('#NewWeatherModal').modal('show');
                    \$(\"#NewWeatherModal .close\").click(() => {\$('#NewWeatherModal').modal('hide')})
                },
            })
        }
        window.initMap = initMap;
    </script>

    <script
      src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyA7TqK1SThyAMUmPGEfTUrU0dny-_bPa6U&callback=initMap\"
      defer
    ></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "weather/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 63,  130 => 46,  123 => 45,  108 => 35,  101 => 34,  69 => 8,  65 => 7,  61 => 5,  54 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"header\">
        <b>Welcome on my weather forecast website! Click on map to add forecast</b><br>
        <a class=\"btn\" href=\"{{ path('app_weather_forecasts', {'currentPage': 1}) }}\">Go to record list</a>
        <a class=\"btn\" href=\"{{ path('app_weather') }}\">Refresh map to default</a>
    </div>
    <div id=\"map\"></div>
    <script async=\"\" defer=\"\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyA7TqK1SThyAMUmPGEfTUrU0dny-_bPa6U&callback=addRecord\"></script>

    <div class=\"modal fade\" id=\"NewWeatherModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"NewWeatherModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"NewWeatherModalLabel\">Modal title</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    ...
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary close\">Great!</button>
                </div>
            </div>
        </div>
    </div>

{% endblock %}

{% block stylesheets %}
    <style>
        #map {
            height: 550px; width: 100%;
        }
        #header {
            padding: 5px; text-align: center;
        }
    </style>
{% endblock %}

{% block javascripts %}
    <script>
        
        // w wiekszej ilości czasu warto by przenieśc metodu js do osobnego pliku a tutaj tylko przenieść tagi script //
        
        function initMap() {
            debugger
            let map = new google.maps.Map(document.getElementById(\"map\"), {
                zoom: 12,
                center: {lat: 50.0, lng: 19.0},
            });
            map.addListener(\"click\", (mapsMouseEvent) => { handleRecordAdd(mapsMouseEvent) });
        }

        function handleRecordAdd(mapsMouseEvent) {
            const coordinates = mapsMouseEvent.latLng.toJSON();
            \$.ajax({
                type: \"POST\",
                url: \"{{ path('app_add_weather_forecast') }}\",
                data: JSON.stringify(coordinates),
                dataType: 'json',
                callback: (response) => {
                    if (response.error) {
                        alert(response.error_msg);
                        return false;
                    } 
                    if (response.new_record_data === undefined || response.new_record_data === NULL) {
                        alert(\"No data has returned\");
                        return false;
                    }
                    \$('#NewWeatherModal').modal('show');
                    \$(\"#NewWeatherModal .close\").click(() => {\$('#NewWeatherModal').modal('hide')})
                },
            })
        }
        window.initMap = initMap;
    </script>

    <script
      src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyA7TqK1SThyAMUmPGEfTUrU0dny-_bPa6U&callback=initMap\"
      defer
    ></script>
{% endblock %}


", "weather/index.html.twig", "C:\\MS_PV\\web-makers\\templates\\weather\\index.html.twig");
    }
}
