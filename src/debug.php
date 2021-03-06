<?php

if (!function_exists('dd')) {

    /**
     * Dumps given arguments using symfony/var-dumper and stops execution.
     *
     * @param mixed $var
     */
    function dd($var = null)
    {
        $args = func_get_args();
        if ($args) {
            call_user_func_array('dump', $args);
        }
        die();
    }
}

if (!function_exists('_dump')) {

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

if (!function_exists('trace')) {

    /**
     * Prints backtrace in HTML or CLI mode.
     */
    function trace()
    {
        $output = '';
        $e = new Exception;
        $cli = php_sapi_name() === 'cli';
        $output .= !$cli ?
            '<pre style="background-color: black; color: white; padding: 5px; font: 12px Menlo,Monaco,Consolas,monospace;">' :
            '';
        $output .= $e->getTraceAsString();
        $output .= !$cli ? '</pre>' : '';
        echo($output."\n");
    }
}

if (!function_exists('var_dd')) {

    /**
     * Dumps given arguments using var_dump (build-in PHP function) and stops execution.
     *
     * @param mixed $var
     */
    function var_dd($var = null)
    {
        $args = func_get_args();
        if ($args) {
            call_user_func_array('var_dump', $args);
        }
        die();
    }
}

if (!function_exists('_var_dump')) {

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

if (!function_exists('var_trace')) {

    /**
     * Prints backtrace.
     */
    function var_trace()
    {
        $e = new Exception;
        echo($e->getTraceAsString()."\n");
    }
}

if (!function_exists('js_dump')) {

    /**
     * Dumps given arguments using Javascript (console::log).
     *
     * @param mixed $var
     */
    function js_dump($var)
    {
        $vars = func_get_args();
        echo('<script type="text/javascript">');
        foreach ($vars as $var) {
            echo('console.log('.json_encode($var).');');
        }
        echo('</script>');
    }
}

if (!function_exists('js_dd')) {

    /**
     * Dumps given arguments using Javascript (console::log) and stops execution.
     *
     * @param mixed $var
     */
    function js_dd($var = null)
    {
        $args = func_get_args();
        if ($args) {
            call_user_func_array('js_dump', $args);
        }
        die();
    }
}

if (!function_exists('_js_dump')) {

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

if (!function_exists('js_trace')) {

    /**
     * Sends backtrace using Javascript (console::log).
     */
    function js_trace()
    {
        $e = new Exception;
        js_dump($e->getTraceAsString());
    }
}

if (!function_exists('cl_dump')) {

    /**
     * Dumps given arguments using Chrome Logger.
     *
     * @param mixed $var
     */
    function cl_dump($var)
    {
        $vars = func_get_args();
        foreach ($vars as $var) {
            if (is_string($var)) {
                foreach (preg_split('/\R/', $var) as $line) {
                    ChromePhp::log($line);
                }
            } else {
                ChromePhp::log($var);
            }
        }
    }
}

if (!function_exists('cl_dd')) {

    /**
     * Dumps given arguments using Chrome Logger and stops execution.
     *
     * @param mixed $var
     */
    function cl_dd($var = null)
    {
        $args = func_get_args();
        if ($args) {
            call_user_func_array('cl_dump', $args);
        }
        die();
    }
}

if (!function_exists('_cl_dump')) {

    /**
     * Alias to cl_dd().
     *
     * @param mixed $var
     */
    function _cl_dump($var)
    {
        call_user_func_array('cl_dd', func_get_args());
    }
}

if (!function_exists('cl_trace')) {

    /**
     * Sends backtrace using using Chrome Logger.
     */
    function cl_trace()
    {
        $e = new Exception;
        cl_dump($e->getTraceAsString());
    }
}

if (!function_exists('profile')) {

    /**
     * Calculates code execution time. Call it twice to get time in seconds between these calls.
     *
     * @return string
     */
    function profile()
    {
        static $before = 0;
        $current = microtime(true);
        $delta = $before ? number_format($current - $before, 4) : 0;
        $before = $current;
        return $delta;
    }
}
