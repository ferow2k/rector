<?php

namespace Rector\CodeQuality\Tests\Rector\If_\RemoveAlwaysTrueConditionSetInConstructorRector\Fixture;

final class SkipOptionalArgumentValue
{
    /**
     * @var bool
     */
    private $should = true;

    public function __construct(bool $should = false)
    {
        $this->should = $should;
    }

    public function go()
    {
        if ($this->should) {
            $maybe = 'yes';
            return 'she says ' . $maybe;
        }
    }
}
