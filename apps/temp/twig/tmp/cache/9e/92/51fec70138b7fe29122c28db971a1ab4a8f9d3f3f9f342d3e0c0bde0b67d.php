<?php

/* blog\index.html.twig */
class __TwigTemplate_9e9251fec70138b7fe29122c28db971a1ab4a8f9d3f3f9f342d3e0c0bde0b67d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("layout/main/base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/main/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Cygnite Framework - Simple Crud Operation
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
    ";
        // line 10
        echo "
    ";
        // line 11
        echo (isset($context["flashMessage"]) ? $context["flashMessage"] : null);
        echo "

    <div class=\"page-header\">
    \t<h3>CRUD Application
            <div class=\"pull-right\">
            <!--<span class=\"glyphicon glyphicon-plus-sign\">-->
            ";
        // line 17
        echo call_user_func_array($this->env->getFunction('link')->getCallable(), array("blog/add", "Add Blog", array("class" => "btn btn-small btn-info cboxElement")));
        echo "
            </div>
    \t</h3>
    </div>

<table  id=\"dataGrid\" class=\"table table-striped table-hover\">
    <thead>
        <tr>
            <th>Sl No.</th>
            \t\t\t<th>Name</th>
\t\t\t<th>Created At</th>
\t\t\t<th>Updated At</th>


            <th class=\"sorter-false\">Action</th>
        </tr>
    </thead>

    <tbody>
    ";
        // line 36
        if ((twig_length_filter($this->env, (isset($context["records"]) ? $context["records"] : null)) > 0)) {
            // line 37
            echo "
        ";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["row"]) {
                // line 39
                echo "
            ";
                // line 40
                if ((($this->getAttribute($context["loop"], "index", array()) % 2) == 0)) {
                    // line 41
                    echo "                ";
                    $context["rowType"] = "even";
                    // line 42
                    echo "            ";
                } else {
                    // line 43
                    echo "                ";
                    $context["rowType"] = "odd";
                    // line 44
                    echo "            ";
                }
                // line 45
                echo "
            <tr class='";
                // line 46
                echo twig_escape_filter($this->env, (isset($context["rowType"]) ? $context["rowType"] : null), "html", null, true);
                echo "'>
                <td> ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>

                \t\t\t<td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "created_at", array()), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "updated_at", array()), "html", null, true);
                echo "</td>



                <td>

                    ";
                // line 57
                echo call_user_func_array($this->env->getFunction('link')->getCallable(), array(("blog.show." . $this->getAttribute($context["row"], "id", array())), "View", array("class" => "btn btn btn-info btn-xs")));
                echo "
                    ";
                // line 58
                echo call_user_func_array($this->env->getFunction('link')->getCallable(), array(("blog.edit." . $this->getAttribute($context["row"], "id", array())), "Edit", array("class" => "btn btn-default btn-xs")));
                echo "
                    ";
                // line 59
                echo call_user_func_array($this->env->getFunction('link')->getCallable(), array(("blog.delete." . $this->getAttribute($context["row"], "id", array())), "Delete", array("class" => "btn btn-danger btn-xs")));
                echo "

                </td>
            </tr>

        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "    ";
        } else {
            // line 66
            echo "        No records found !
    ";
        }
        // line 68
        echo "    </tbody>


</table>

<nav > ";
        // line 73
        echo " </nav>


";
    }

    // line 78
    public function block_footer($context, array $blocks = array())
    {
        // line 79
        echo "
";
    }

    public function getTemplateName()
    {
        return "blog\\index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 79,  203 => 78,  196 => 73,  189 => 68,  185 => 66,  182 => 65,  162 => 59,  158 => 58,  154 => 57,  145 => 51,  141 => 50,  137 => 49,  132 => 47,  128 => 46,  125 => 45,  122 => 44,  119 => 43,  116 => 42,  113 => 41,  111 => 40,  108 => 39,  91 => 38,  88 => 37,  86 => 36,  64 => 17,  55 => 11,  52 => 10,  49 => 8,  46 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
