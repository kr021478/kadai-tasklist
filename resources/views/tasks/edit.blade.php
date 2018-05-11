@extends('layouts.app')

@section('content')

    <h1> id:{{$tasks->id}}のタスク編集ページ</h1>
    <div class="row">
        <div class="col-xs-12　col-sm-offset-8 col-md-offset-8 col-lg-offset-6">
            
    {!! Form::model($tasks, ['route' => ['tasks.update', $tasks->id], 'method' => 'put']) !!}
        <div class="form-group">
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status',null,['class'=>'form-control','placeholder'=>'値が入力されていません 例：休み']) !!}
        </div>
        <div class="form-group">
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content',null,['class'=>'form-control','placeholder'=>'値が入力されていません 例：整理']) !!}
        </div>
        
        {!! Form::submit('更新',['class'=>'btn btn-default']) !!}
        
         </div>
    </div>

    {!! Form::close() !!}

@endsection