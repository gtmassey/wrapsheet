<?php

namespace Gtmassey\Wrapsheet\Types;

trait Statable
{
    final public static function getRandomValue(): string
    {
        $cases = self::cases();
        $count = count($cases);
        $random = rand(0, $count - 1);

        return $cases[$random]->value;
    }

    /**
     * @return mixed[]
     */
    final public static function getAll(): array
    {
        return self::cases();
    }

    /**
     * @return mixed[]
     */
    final public static function getOptions(): array
    {
        $cases = self::cases();
        $options = [];
        foreach ($cases as $case) {
            $options[$case->value] = ['label' => $case->value];
        }

        return $options;
    }

    /**
     * @return mixed[]
     */
    final public static function getValues(): array
    {
        $cases = self::cases();
        $values = [];
        foreach ($cases as $case) {
            $values[] = $case->value;
        }

        return $values;
    }

    /**
     * @return string[]
     */
    final public static function getLabels(): array
    {
        $cases = self::cases();
        $labels = [];
        foreach ($cases as $case) {
            $labels[] = $case->name;
        }

        return $labels;
    }
}
