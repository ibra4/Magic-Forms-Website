<?php

namespace App\Http\Controllers;

use App\MagicForms\TestForm;
use Ibra\MagicForms\MagicFormBuilder;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(MagicFormBuilder $fb)
    {
        $form = $fb->create(TestForm::class);

        return view('test', ['form' => $form]);
        // return view('test', ['form' => $form->render()]);
    }

    public function store(Request $request, MagicFormBuilder $fb)
    {
        $form = $fb->get(TestForm::class);

        $validator = $form->simpleValidate($request);

        return back()->withInput()->withErrors($validator->errors());
    }
}
