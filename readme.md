# Debugging tools: Symfony VarDumper and FirePHP in one package

## How to use?

There are few global functions provided by this package that can be used for any kind of debugging:

#### dump()
Dumps given arguments using symfony/var-dumper.

#### dd()
Dumps given arguments using symfony/var-dumper and stops execution.

#### var_dump()
Build-in PHP function.

#### var_dd()
Dumps given arguments using var_dump (build-in PHP function) and stops execution.

#### js_dump()
Dumps given arguments using Javascript (console::log).

#### js_dd()
Dumps given arguments using Javascript (console::log) and stops execution.

#### fb_dump()
Dumps given arguments using FirePHP.

#### fb_dd()
Dumps given arguments using FirePHP and stops execution.

## License

Licensed under a [MIT License](https://opensource.org/licenses/MIT).