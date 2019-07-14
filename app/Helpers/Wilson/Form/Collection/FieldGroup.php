<?php


namespace App\Helpers\Wilson\Form\Collection;


class FieldGroup
{

    /**
     * @var string
     */
    private $id;
    /**
     * @var Fields
     */
    public $fields;

    public function __toString()
    {
        $fields = $this->getFields();
        $fieldsHtml = $fields->__toString();
        $id = $this->getId();
        return <<<HTML
<div class="ws-field-group ws-field-group-$id">
<h4></h4>
<div class="fields">$fieldsHtml</div>
</div>
HTML;
    }

    public function __construct($id)
    {
        $this->setId($id);
        $this->setFields(new Fields());
    }

    /**
     * @return Fields
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param Fields $fields
     * @return FieldGroup
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return FieldGroup
     */
    public function setId(string $id)
    {
        $this->id = $id;
        return $this;
    }

}
