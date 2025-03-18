<?php

namespace Gtmassey\Wrapsheet\Models;

class Workspace
{
    /**
     * @param  mixed[]  $data
     */
    public static function from(array $data): Workspace
    {
        return new self;
    }
}
