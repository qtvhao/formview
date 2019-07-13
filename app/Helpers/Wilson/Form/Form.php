<?php


namespace App\Helpers\Wilson\Form;


use App\Helpers\Wilson\Form\Collection\Fields;
use App\Helpers\Wilson\Helper;

class Form extends Helper
{

    private $id;
    /**
     * @var Fields
     */
    private $fields;
    private $buttons;

    public function __toString() {
        return $this->getFormHtml();
    }

    public function getFormHtml()
    {
        $id = $this->getId();
        $form = $this->getInnerFormHtml();
        return <<<HTML
<div class="ws-form-container ws-form-container-$id">
    <div class="ws-form-wrapper ws-form-wrapper-$id">
        $form
    </div>
</div>
HTML;
    }

    private function getInnerFormHtml()
    {
        $id = $this->getId();
        $fields = $this->getFields();
        $buttons = $this->buttons;
        return <<<HTML
<form id="$id" class="ws-form ws-form-$id">
$fields
$buttons
</form>
HTML;
    }

    public static function create(...$args)
    {
        return new static(...$args);
    }

    public function __construct($id)
    {
        $this->setId($id);
        $this->setFields(new Fields());
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
     * @return Form
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
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
     * @return Form
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
        return $this;
    }
}
