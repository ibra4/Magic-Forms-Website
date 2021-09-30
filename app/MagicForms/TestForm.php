<?php

namespace App\MagicForms;

use App\User;
use Ibra\MagicForms\Fields\TextField;
use Ibra\MagicForms\Builder\Form\MagicForm;

class TestForm extends MagicForm
{
    public function build(): self
    {
        // @TODO: Try to set field options in more readable way.
        $this->add(TextField::class, [
            'name' => 'name',
            'label' => 'Name',
            'rules' => 'required'
        ]);

        $this->add(TextField::class, [
            'name' => 'age',
            'label' => 'Age',
            'rules' => 'required'
        ]);

        $this->add(TextField::class, [
            'name' => 'email',
            'label' => 'Email',
            'rules' => 'required'
        ]);

        $this->action = route('test.store');

        $this->method = "POST";

        $this->ajax = false;

        $this->model = new User();

        return $this;
    }
}
