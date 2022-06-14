<?php

namespace CureDAO\Tests;

use PHPUnit\Framework\TestCase;
use Strikebit\Util\PhpGenerator;

class BaseTestCase extends TestCase
{
    /**
     * @param string $className
     * @param $body
     * @return void
     */
    protected function generateModels(string $className, $body): void{
        $generator = new PhpGenerator(true, true, __NAMESPACE__ . "\\Model");
        $classes = $generator->fromJson($className, json_encode($body));
        foreach ($classes as $className => $content) {
            file_put_contents($className.".php", $content);
        }
    }
}
