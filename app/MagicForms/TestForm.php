<?php

namespace App\MagicForms;

use Ibra\MagicForms\Fields\TextField;
use Ibra\MagicForms\Builder\Form\MagicForm;
use stdClass;

class TestForm extends MagicForm
{
    public function build(): self
    {
        $user = new stdClass();
        $user->name = "user name";
        $this->model = $user;

        // @TODO: Try to set field options in more readable way.
        $this->add(TextField::class, [
            'id' => 'hi',
            'name' => 'name',
            'class' => 'hahaha',
            // 'disabled'
        ]);

        $this->add(TextField::class, [
            'name' => 'age',
            'placeholder' => "Test Placeholder",
            'required',
        ]);

        $this->add(TextField::class, [
            'name' => 'email',
        ]);

        $this->action = route('test.store');

        $this->method = "POST";

        $this->ajax = false;

        return $this;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'age' => 'required'
        ];
    }
}
