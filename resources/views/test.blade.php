@extends('layouts.app')

@section('content')
    {{$form->render()}}
    {{-- {{ $form->begin() }}

    {{ $form->fields['name']->render() }}
    {{ $form->fields['age']->render() }}
    {{ $form->fields['email']->render() }}

    {{ $form->submit() }}
    {{ $form->end() }} --}}
@endsection
