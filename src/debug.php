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

if(!function_exists('var_dd'))
{
    /**
     * Dumps given arguments using var_dump build-in function and stops execution.
     *
     * @param mixed $var
     */
    function var_dd($var)
    {
        call_user_func_array('var_dump', func_get_args());
        die();
    }
}

if(!function_exists('js_dump'))
{
    /**
     * Dumps given arguments using Javascript console::log.
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
     * Dumps given arguments using Javascript console::log and stops execution.
     *
     * @param mixed $var
     */
    function js_dd($var)
    {
        call_user_func_array('js_dump', func_get_args());
        die();
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
