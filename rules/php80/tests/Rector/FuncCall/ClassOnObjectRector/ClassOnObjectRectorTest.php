<?php

declare(strict_types=1);

namespace Rector\Php80\Tests\Rector\FuncCall\ClassOnObjectRector;

use Iterator;
use Rector\Core\Testing\PHPUnit\AbstractRectorTestCase;
use Rector\Php80\Rector\FuncCall\ClassOnObjectRector;
use Symplify\SmartFileSystem\SmartFileInfo;

final class ClassOnObjectRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(SmartFileInfo $file): void
    {
        $this->doTestFileInfo($file);
    }

    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    protected function getRectorClass(): string
    {
        return ClassOnObjectRector::class;
    }
}
