<?php

declare(strict_types=1);

namespace Rector\DeadCode\Tests\Rector\FunctionLike\RemoveDuplicatedIfReturnRector;

use Iterator;
use Rector\Core\Testing\PHPUnit\AbstractRectorTestCase;
use Rector\DeadCode\Rector\FunctionLike\RemoveDuplicatedIfReturnRector;
use Symplify\SmartFileSystem\SmartFileInfo;

final class RemoveDuplicatedIfReturnRectorTest extends AbstractRectorTestCase
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
        return RemoveDuplicatedIfReturnRector::class;
    }
}
