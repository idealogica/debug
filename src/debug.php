<?php

if(!function_exists('dd'))
{
    /**
     * Dumps given arguments using symfony/var-dumper and stops execution.
     *
     * @param mixed $var
     */
    function dd($var)
    {
        call_user_func_array('dump', func_get_args());
        die();
    }
}

if(!function_exists('_dump'))
{
    /**
     * Alias to dd().
     *
     * @param mixed $var
     */
    function _dump($var)
    {
        call_user_func_array('dd', func_get_args());
    }
}

if(!function_exists('trace'))
{
    /**
     * Prints backtrace using symfony/var-dumper.
     *
     * @param mixed $var
     */
    function trace()
    {
        $e = new Exception;
        dump($e->getTraceAsString());
    }
}

if(!function_exists('var_dd'))
{
    /**
     * Dumps given arguments using var_dump (build-in PHP function) and stops execution.
     *
     * @param mixed $var
     */
    function var_dd($var)
    {
        call_user_func_array('var_dump', func_get_args());
        die();
    }
}

if(!function_exists('_var_dump'))
{
    /**
     * Alias to var_dd().
     *
     * @param mixed $var
     */
    function _var_dump($var)
    {
        call_user_func_array('var_dd', func_get_args());
    }
}

if(!function_exists('var_trace'))
{
    /**
     * Prints backtrace using built-in print_r function.
     *
     * @param mixed $var
     */
    function var_trace()
    {
        $e = new Exception;
        print_r($e->getTraceAsString());
    }
}

if(!function_exists('js_dump'))
{
    /**
     * Dumps given arguments using Javascript (console::log).
     *
     * @param mixed $var
     */
    function js_dump($var)
    {
        $vars = func_get_args();
        echo('<script>');
        foreach($vars as $var)
        {
            echo('console.log('.json_encode($var).');');
        }
        echo('</script>');
    }
}

if(!function_exists('js_dd'))
{
    /**
     * Dumps given arguments using Javascript (console::log) and stops execution.
     *
     * @param mixed $var
     */
    function js_dd($var)
    {
        call_user_func_array('js_dump', func_get_args());
        die();
    }
}

if(!function_exists('_js_dump'))
{
    /**
     * Alias to js_dd().
     *
     * @param mixed $var
     */
    function _js_dump($var)
    {
        call_user_func_array('js_dd', func_get_args());
    }
}

if(!function_exists('js_trace'))
{
    /**
     * Prints backtrace using Javascript (console::log).
     *
     * @param mixed $var
     */
    function js_trace()
    {
        $e = new Exception;
        js_dump($e->getTraceAsString());
    }
}


if(!function_exists('fb_dump'))
{
    /**
     * Dumps given arguments using FirePHP.
     *
     * @param mixed $var
     */
    function fb_dump($var)
    {
        $vars = func_get_args();
        foreach($vars as $var)
        {
            FB::log($var);
        }
    }
}

if(!function_exists('fb_dd'))
{
    /**
     * Dumps given arguments using FirePHP and stops execution.
     *
     * @param mixed $var
     */
    function fb_dd($var)
    {
        call_user_func_array('fb_dump', func_get_args());
        die();
    }
}

if(!function_exists('_fb_dump'))
{
    /**
     * Alias to fb_dd().
     *
     * @param mixed $var
     */
    function _fb_dump($var)
    {
        call_user_func_array('fb_dump', func_get_args());
    }
}

if(!function_exists('fb_trace'))
{
    /**
     * Prints backtrace using using FirePHP.
     *
     * @param mixed $var
     */
    function fb_trace()
    {
        FB::trace('Backtrace');
    }
}
