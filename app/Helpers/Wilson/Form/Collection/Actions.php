<?php


namespace App\Helpers\Wilson\Form\Collection;


class Actions extends BaseCollection
{
    public function __toString()
    {
        return implode('', array_map(function($field) {
            return (string)$field;
        }, $this->items));
    }

}
