@extends('layouts.app')

@section('content')

        <h1>新規タスク作製ページ</h1>
       {!! Form::model($tasks, ['route' => 'tasks.store']) !!}
        
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('作製') !!}

    {!! Form::close() !!}
   


@endsection