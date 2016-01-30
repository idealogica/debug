# Debugging tools: Symfony VarDumper and FirePHP in one package

## How to use?

There are few global functions provided by this package that can be used for any kind of debugging:

#### dump($var)
Dumps given arguments using symfony/var-dumper.

#### dd($var)
Dumps given arguments using symfony/var-dumper and stops execution.

#### var_dump($var)
Build-in PHP function.

#### var_dd($var)
Dumps given arguments using var_dump build-in function and stops execution.

#### js_dump($var)
Dumps given arguments using Javascript console::log.

#### js_dd($var)
Dumps given arguments using Javascript console::log and stops execution.

#### fb_dump($var)
Dumps given arguments using FirePHP.

#### fb_dd($var)
Dumps given arguments using FirePHP and stops execution.

## License

InDI is licensed under a [MIT License](https://opensource.org/licenses/MIT).