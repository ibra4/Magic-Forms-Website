@extends('layouts.app')

@section('magic_form_css')
    {!! $form['css'] !!}
@endsection

@section('content')
    {!! $form['html'] !!}
@endsection

@section('magic_form_js')
    {!! $form['js'] !!}
@endsection
