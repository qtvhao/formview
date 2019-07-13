<?php


namespace App\Helpers\Wilson\Form\Field;


class BaseField
{
    public static function text()
    {
        return new TextField();
    }
}
