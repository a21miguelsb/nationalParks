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

/* home/showPark.html.twig */
class __TwigTemplate_e4b8f3a20130bcb012a6bbe025b8debd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/showPark.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/showPark.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/showPark.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "parques
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrayParques"]) || array_key_exists("arrayParques", $context) ? $context["arrayParques"] : (function () { throw new RuntimeError('Variable "arrayParques" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["parque"]) {
            // line 10
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["parque"], "nombre", [], "any", false, false, false, 10) == (isset($context["nombreParque"]) || array_key_exists("nombreParque", $context) ? $context["nombreParque"] : (function () { throw new RuntimeError('Variable "nombreParque" does not exist.', 10, $this->source); })()))) {
                // line 11
                echo "
    <div class=\"container \">
        <div class=\"card park-container\">
        <div class=\"row\">
            <div class=\"col-12 \">
            <h1 class=\"titulo\">";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parque"], "nombre", [], "any", false, false, false, 16), "html", null, true);
                echo "</h1>
            </div>
            <div class=\"col-12 text-center \">
                <h3 class=\"card-text\">Provincia:</h3>
                <a>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parque"], "provincia", [], "any", false, false, false, 20), "html", null, true);
                echo "</a>         
                 <h3 class=\"card-text\">Ecosistema:</h3>
                <a>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parque"], "ecosistema", [], "any", false, false, false, 22), "html", null, true);
                echo "</a>
            </div>
            <div clas=\"row \">
            <div class=\"col-12 d-flex justify-content-center\" >
                <button ";
                // line 26
                echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusController($this->env, "parques");
                echo "  class=\"btn btn-primary mb-2\" id=\"btn-add\">Ocultar Imaxen</button>
            </div>
            </div>
            <div clas=\"row\">
            <div class=\"col-12 d-flex justify-content-center\" >
                <img  id=\"imagen\" class=\"img-fluid\" src=\"/imaxes/";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parque"], "fichero", [], "any", false, false, false, 31), "html", null, true);
                echo "\"  />
            </div>

        </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12 d-flex justify-content-center\">
                <a class=\"btn btn-primary mb-2 text-white\" href=";
                // line 38
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
                echo ">Volver</a>
            </div>
        </div>
    </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/showPark.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 44,  141 => 38,  131 => 31,  123 => 26,  116 => 22,  111 => 20,  104 => 16,  97 => 11,  94 => 10,  90 => 9,  80 => 8,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}
parques
{% endblock %}

{% block body %}
{% for parque in arrayParques %}
    {% if parque.nombre == nombreParque %}

    <div class=\"container \">
        <div class=\"card park-container\">
        <div class=\"row\">
            <div class=\"col-12 \">
            <h1 class=\"titulo\">{{parque.nombre}}</h1>
            </div>
            <div class=\"col-12 text-center \">
                <h3 class=\"card-text\">Provincia:</h3>
                <a>{{parque.provincia}}</a>         
                 <h3 class=\"card-text\">Ecosistema:</h3>
                <a>{{parque.ecosistema}}</a>
            </div>
            <div clas=\"row \">
            <div class=\"col-12 d-flex justify-content-center\" >
                <button {{stimulus_controller('parques')}}  class=\"btn btn-primary mb-2\" id=\"btn-add\">Ocultar Imaxen</button>
            </div>
            </div>
            <div clas=\"row\">
            <div class=\"col-12 d-flex justify-content-center\" >
                <img  id=\"imagen\" class=\"img-fluid\" src=\"/imaxes/{{parque.fichero}}\"  />
            </div>

        </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12 d-flex justify-content-center\">
                <a class=\"btn btn-primary mb-2 text-white\" href={{ path('home') }}>Volver</a>
            </div>
        </div>
    </div>
    {% endif %}
{% endfor %}


{% endblock %}", "home/showPark.html.twig", "/home/miguel/practicaSymfony/national_Parks2/templates/home/showPark.html.twig");
    }
}
