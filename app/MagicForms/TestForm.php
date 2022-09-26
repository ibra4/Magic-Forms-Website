<?php

namespace App\MagicForms;

use Ibra\MagicForms\Fields\TextField;
use Ibra\MagicForms\Builder\Form\MagicForm;
use Ibra\MagicForms\Builder\Form\MagicFormInterface;
use Ibra\MagicForms\Fields\CheckboxesField;
use Ibra\MagicForms\Fields\CheckboxField;
use Ibra\MagicForms\Fields\DateField;
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
        $user->names = 3;
        $user->testcheckboxes = [1, 3];
        $this->model = $user;

        // $this->add(CheckboxField::class, [
        //     'name' => 'singlecheckbox'
        // ]);
        
        $this->add(CheckboxesField::class, [
            'name' => 'testcheckboxes',
            // 'value' => [1, 2],
        ], [
            'options' => [
                '1' => 'One',
                '2' => 'Two',
                '3' => 'Three',
            ]
        ]);

        $this->add(DateField::class, [
            'name' => 'testdate'
        ]);

        $this->add(SelectField::class, [
            'id' => 'hi1',
            'name' => 'names',
            // 'value' => 2
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
            'max' => 20,
            'value' => 15
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
