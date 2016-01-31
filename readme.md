# Debugging tools: Symfony VarDumper and FirePHP in one package

## Installation

`composer require idealogica/debug:~1.0.0`

## How to use?

There are few global functions provided by this package that can be used for any kind of debugging:

#### dump()
Dumps given arguments using symfony/var-dumper.

#### dd(), _dump()
Dumps given arguments using symfony/var-dumper and stops execution.

#### trace()
Prints backtrace using symfony/var-dumper.

#### var_dump()
Build-in PHP function.

#### var_dd(), _var_dump()
Dumps given arguments using var_dump (build-in PHP function) and stops execution.

#### var_trace()
Prints backtrace using built-in print_r function.

#### js_dump()
Dumps given arguments using Javascript (console::log).

#### js_dd(), _js_dump()
Dumps given arguments using Javascript (console::log) and stops execution.

#### js_trace()
Prints backtrace using Javascript (console::log).

#### fb_dump()
Dumps given arguments using FirePHP.

#### fb_dd(), _fb_dump()
Dumps given arguments using FirePHP and stops execution.

#### fb_trace()
Prints backtrace using using FirePHP.

## License

Licensed under a [MIT License](https://opensource.org/licenses/MIT).