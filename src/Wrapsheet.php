<?php

namespace Gtmassey\Wrapsheet;

use Gtmassey\Wrapsheet\Models\Sheet;

class Wrapsheet
{
    //    protected array $options = [];

    protected Client $client;

    public function __construct()
    {
        $this->client = new Client;
    }

    public static function make(): self
    {
        return new self;
    }

    //    public function withOptions(array $options = []): self
    //    {
    //        $this->options = $options;
    //
    //        return $this;
    //    }

    public static function getSheet(string|int $id): Sheet
    {

        $wrapper = new Wrapsheet;
        $data = $wrapper->client->get("sheets/{$id}");
        return Sheet::from($data);

        // first, send the GET request
        // then parse the data
        // then create a new Sheet object
        // return the Sheet object
    }
}
