<?php

declare(strict_types=1);

namespace Rector\PHPOffice\Tests\Rector\MethodCall\IncreaseColumnIndexRector;

use Iterator;
use Rector\Core\Testing\PHPUnit\AbstractRectorTestCase;
use Rector\PHPOffice\Rector\MethodCall\IncreaseColumnIndexRector;
use Symplify\SmartFileSystem\SmartFileInfo;

final class IncreaseColumnIndexRectorTest extends AbstractRectorTestCase
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
        return IncreaseColumnIndexRector::class;
    }
}
