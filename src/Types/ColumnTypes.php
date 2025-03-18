<?php

namespace Gtmassey\Wrapsheet\Types;

enum ColumnTypes: string
{
    use Statable;

    case CHECKBOX = 'Checkbox';
    case CONTACT_LIST = 'Contact List';
    case MULTI_CONTACT_LIST = 'Multi-Contact List';
    case DATETIME = 'Date';
    case PICKLIST = 'Dropdown List';
    case MULTI_PICKLIST = 'Multiselect List';
    case DURATION = 'Duration';
    case PREDECESSOR = 'Predecessor';
    case TEXT_NUMBER = 'Text/Number';

    public static function fromString(string $value): self
    {
        return match ($value) {
            'CONTACT_LIST', 'CREATED_BY', 'MODIFIED_BY' => self::CONTACT_LIST,
            'MULTI_CONTACT_LIST' => self::MULTI_CONTACT_LIST,
            'DATE', 'ABSTRACT_DATETIME', 'DATETIME', 'CREATED_DATE', 'MODIFIED_DATE' => self::DATETIME,
            'PICKLIST' => self::PICKLIST,
            'MULTI_PICKLIST' => self::MULTI_PICKLIST,
            'DURATION' => self::DURATION,
            'PREDECESSOR' => self::PREDECESSOR,
            default => self::TEXT_NUMBER,
        };
    }
}
