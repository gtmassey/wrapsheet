<?php

namespace Gtmassey\Wrapsheet\Models;

use Gtmassey\Wrapsheet\Types\ColumnTypes;

class Column
{
    public int $id;

    public int $version;

    public int $index;

    public string $symbol;

    public string $title;

    public ColumnTypes $type;

    // public ColumnTypes $systemColumnType;
    public bool $validation;

    public int $width = 0;

    /**
     * @var string[]
     */
    public array $options = [];

    /**
     * @param  array<string, mixed>  $data
     */
    public function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->version = $data['version'];
        $this->index = $data['index'];
        $this->title = $data['title'];
        $this->symbol = $data['symbol'] ?? '';
        $this->type = ColumnTypes::fromString($data['type']);
        // $this->systemColumnType = ColumnTypes::fromString()
        $this->validation = $data['validation'];
        $this->width = $data['width'] ?? 0;
        if ($data['options']) {
            $this->options = $data['options'];
        }
    }

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function setSymbol(string $symbol): Column
    {
        $this->symbol = $symbol;

        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Column
    {
        $this->id = $id;

        return $this;
    }

    public function getVersion(): int
    {
        return $this->version;
    }

    public function setVersion(int $version): Column
    {
        $this->version = $version;

        return $this;
    }

    public function getIndex(): int
    {
        return $this->index;
    }

    public function setIndex(int $index): Column
    {
        $this->index = $index;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): Column
    {
        $this->title = $title;

        return $this;
    }

    public function getType(): ColumnTypes
    {
        return $this->type;
    }

    public function setType(ColumnTypes $type): Column
    {
        $this->type = $type;

        return $this;
    }

    public function hasValidation(): bool
    {
        return $this->validation;
    }

    public function setValidation(bool $validation): Column
    {
        $this->validation = $validation;

        return $this;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setWidth(int $width): Column
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @param  string[]  $options
     * @return $this
     */
    public function setOptions(array $options): Column
    {
        $this->options = $options;

        return $this;
    }
}
