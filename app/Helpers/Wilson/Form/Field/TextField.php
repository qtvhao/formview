<?php


namespace App\Helpers\Wilson\Form\Field;


class TextField extends BaseField
{

    public function __toString()
    {
        $id = 'ws-field-' . $this->getId();
        return <<<HTML
<div class="form-group">
    <div class="col-sm-10">
      <input type="email" class="form-control" id="$id" placeholder="">
    </div>
  </div>
HTML;
    }

}
