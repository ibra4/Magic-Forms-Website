<?php

namespace App\MagicForms;

use Ibra\MagicForms\Fields\TextField;
use Ibra\MagicForms\MagicForm;

class TestForm extends MagicForm
{
    public function build()
    {
        $this->add(TextField::class, [
            'name' => 'hahah',
            'label' => 'hahah',
            'rules' => 'required'
        ]);

        $this->action = route('test.store');

        return $this;
    }
}
