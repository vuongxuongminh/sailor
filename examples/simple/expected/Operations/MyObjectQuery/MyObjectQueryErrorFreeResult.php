<?php

declare(strict_types=1);

namespace Spawnia\Sailor\Simple\Operations\MyObjectQuery;

class MyObjectQueryErrorFreeResult extends \Spawnia\Sailor\ErrorFreeResult
{
    public MyObjectQuery $data;

    public static function endpoint(): string
    {
        return 'simple';
    }
}
