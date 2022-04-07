<?php

namespace App\MagicForms;

use Ibra\MagicForms\Fields\TextField;
use Ibra\MagicForms\Builder\Form\MagicForm;
use Ibra\MagicForms\Builder\Form\MagicFormInterface;
use Ibra\MagicForms\Fields\NumberField;
use Ibra\MagicForms\Fields\SelectField;
use stdClass;

class TestForm extends MagicForm implements MagicFormInterface
{
    public $id = "hahaha";

    public function build(): self
    {
        $user = new stdClass();
        $user->email = "user name";
        $this->model = $user;

        $this->add(SelectField::class, [
            'id' => 'hi1',
            'name' => 'names',
        ], [
            'options' => [
                '1' => 'One',
                '2' => 'Two',
                '3' => 'Three',
            ]
        ]);

        $this->add(TextField::class, [
            'name' => 'email',
            'placeholder' => "Enter Your Email",
            'class' => 'email-field',
            'required',
        ]);

        $this->add(NumberField::class, [
            'name' => 'number_field',
            'min' => 5,
            'max' => 20
        ]);

        return $this;
    }

    public function action(): string
    {
        return route('test.store');
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'age' => 'required',
            'email' => 'required|email'
        ];
    }
}
