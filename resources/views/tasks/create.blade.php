@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    
     
       
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
        <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5  col-lg-4.5">
                        <div class="form-group">
                            {!! Form::label('status', 'ステータス:') !!}
                            {!! Form::text('status', null, ['class' => 'form-control']) !!}
                        </div>
            </div>
            <div class="col-xs-12 col-sm-offset-2 col-sm-5 col-md-offset-2 col-md-5 col-md-offset-3 col-lg-4.5">
                        <div class="form-group">
                            {!! Form::label('content', 'タスク:') !!}
                            {!! Form::text('content', null, ['class' => 'form-control']) !!}
                        </div>
            </div>
        </div>
                        {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
            
            {!! Form::close() !!}
        

@endsection