<?php

namespace Gtmassey\Wrapsheet;

use Gtmassey\Wrapsheet\Concerns\InteractsWithSheets;

class Wrapsheet
{
    use InteractsWithSheets;

    public static function make(): self
    {
        return new self();
    }

    public function withOptions(array $options = [])
    {
    }

    public function execute()
    {
    }

}
