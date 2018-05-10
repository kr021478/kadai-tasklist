    <style>
        li {
            color: red;
        }
    </style>
@if (count($errors)>0)
    @foreach($errors->all() as $error)
    <ul>
        @if ($error == "The status field is required.")
        <li class="glyphicon glyphicon-ok">{{"状態が入力されていません"}}</li>
        @else 
        <li class="glyphicon glyphicon-ok">{{"タスクが入力されていません"}}</li>
        @endif
    </ul>
    @endforeach
@endif
