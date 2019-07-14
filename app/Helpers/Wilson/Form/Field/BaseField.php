<?php


namespace App\Helpers\Wilson\Form\Field;


class BaseField
{
    protected $id;

    public function __toString()
    {
        return "No __toString implemented for this field";
    }

    public static function text()
    {
        return new TextField();
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return BaseField
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

}
