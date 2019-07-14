<?php

namespace App\Helpers\Wilson\Form\Collection;

use App\Helpers\Wilson\Form\Field\BaseField;

class Fields extends BaseCollection
{
    public function __toString()
    {
        return implode('', array_map(function($field) {
            /** @var BaseField|Fields $field */
            return (string)$field->__toString();
        }, $this->items));
    }

}
