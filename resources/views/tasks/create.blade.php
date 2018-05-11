@extends('layouts.app')

@section('content')
    
        <h1>新規タスク作製ページ</h1>
        <div class="row">
           <div class="col-xs-12　col-sm-offset-8 col-md-offset-8 col-lg-offset-6">
           {!! Form::model($tasks, ['route' => 'tasks.store']) !!}
                   <div class="form-group">
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::text('status',null,['class'=>'form-control','placeholder'=>'例：休み']) !!}
                    </div>
                    
                    <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content',null,['class'=>'form-control','placeholder'=>'例：整理']) !!}
                    </div>
                    {!! Form::submit('作製',['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
           </div>
       </div>

@endsection