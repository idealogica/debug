<?php
class DebugTest extends PHPUnit_Framework_TestCase
{
    public function testTrace()
    {
        self::expectOutputRegex('%\[internal function\]%');
        trace();
    }

    public function testVarTrace()
    {
        self::expectOutputRegex('%\[internal function\]%');
        var_trace();
    }

    public function testJsDump()
    {
        self::expectOutputRegex('%script type="text/javascript">console\.log\("test"\)%');
        js_dump('test');
    }

    public function testJsTrace()
    {
        self::expectOutputRegex('%\[internal function\]%');
        js_trace();
    }

    public function testProfile()
    {
        self::assertEquals(0, profile());
        $val = profile();
        self::assertTrue(is_numeric($val));
        self::assertNotEquals(0, $val);
    }
    
    public function testDump()
    {
        dump('TEST VAR');
    }
}
