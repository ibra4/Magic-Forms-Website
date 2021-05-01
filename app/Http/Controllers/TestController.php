<?php

namespace App\Http\Controllers;

use App\MagicForms\TestForm;
use Ibra\MagicForms\MagicFormBiulder;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(MagicFormBiulder $fb) {
        $form = $fb->create(TestForm::class);

        return view('test', ['form' => $form->render()]);
    }

    public function store(Request $request, MagicFormBiulder $fb) {
        $form = $fb->get(TestForm::class);

        $validator = $form->simpleValidate($request);

        return back()->withInput()->withErrors($validator->errors());
    }
}
