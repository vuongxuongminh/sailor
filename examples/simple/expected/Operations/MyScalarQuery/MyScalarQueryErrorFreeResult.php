<?php

declare(strict_types=1);

namespace Spawnia\Sailor\Simple\Operations\MyScalarQuery;

class MyScalarQueryErrorFreeResult extends \Spawnia\Sailor\ErrorFreeResult
{
    public MyScalarQuery $data;

    public static function endpoint(): string
    {
        return 'simple';
    }
}
