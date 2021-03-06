<?php

declare(strict_types=1);

namespace Rector\DeadCode\Tests\Rector\MethodCall\RemoveDefaultArgumentValueRector;

use Iterator;
use Rector\Core\Testing\PHPUnit\AbstractRectorTestCase;
use Rector\DeadCode\Rector\MethodCall\RemoveDefaultArgumentValueRector;
use Symplify\SmartFileSystem\SmartFileInfo;

final class RemoveDefaultArgumentValueRectorTest extends AbstractRectorTestCase
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
        return RemoveDefaultArgumentValueRector::class;
    }
}
