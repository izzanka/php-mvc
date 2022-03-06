<?php 

namespace MVC\PHP;

use PHPUnit\Framework\TestCase;

class RegexTest extends TestCase
{
    public function testRegex()
    {
        $path = "/products/1232/categories/dwadaw";

        $pattern = "#^/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)$#";

        $result = preg_match($pattern, $path, $variables);

        self::assertEquals(1,$result);
        
        array_shift($variables);

        var_dump($variables);
    }
}

?>