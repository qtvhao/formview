<?php


namespace App\Helpers\Wilson\Form;


use App\Helpers\Wilson\Form\Collection\Actions;
use App\Helpers\Wilson\Form\Collection\Fields;
use App\Helpers\Wilson\Helper;

class Form extends Helper
{

    private $id;
    /**
     * @var Fields
     */
    private $fields;
    /**
     * @var Actions
     */
    private $actions;

    public function __toString() {
        return $this->getHtml();
    }

    public function getHtml()
    {
        $id = $this->getId();
        $form = $this->getOuterFormHtml();
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
        $fields = $this->getFields();
        $actions = $this->getActions();

        return "$fields $actions";
    }

    private function getOuterFormHtml()
    {
        $id = $this->getId();
        $innerForm = $this->getInnerFormHtml();
        return <<<HTML
<form id="$id" class="ws-form ws-form-$id">
$innerForm
</form>
HTML;
    }

    /**
     * @param mixed ...$args
     * @return Form
     */
    public static function create(...$args)
    {
        return new static(...$args);
    }

    public function __construct($id)
    {
        $this->setId($id);
        $this->setFields(new Fields());
        $this->setActions(new Actions());
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

    /**
     * @return Actions
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @param Actions $actions
     * @return Form
     */
    public function setActions($actions)
    {
        $this->actions = $actions;
        return $this;
    }
}
