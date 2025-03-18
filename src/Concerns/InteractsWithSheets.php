<?php

namespace Gtmassey\Wrapsheet\Concerns;

trait InteractsWithSheets
{
    public function listSheets() {}

    public function getSheet(string $sheetId)
    {
        return $this;
    }
}
