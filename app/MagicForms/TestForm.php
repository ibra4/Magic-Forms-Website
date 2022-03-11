<?php

namespace App\MagicForms;

use App\User;
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
            'name' => 'name',
            'label' => 'Name',
            'rules' => 'required',
            'value' => "haha"
        ]);

        $this->add(TextField::class, [
            'name' => 'age',
            'label' => 'Age',
            'rules' => 'required',
            'placeholder' => "mmmm"
        ]);

        $this->add(TextField::class, [
            'name' => 'email',
            'label' => 'Email',
            'rules' => 'required'
        ]);

        $this->action = route('test.store');

        $this->method = "POST";

        $this->ajax = false;

        return $this;
    }

    public function rules(): array
    {
        return [];
    }
}
