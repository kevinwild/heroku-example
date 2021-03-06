@extends('layout')

@section('content')
        <form action="{{$task->id}}/edit" method="post" class="col-sm-8">

            <div class="form-group">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <label for="taskTitle">Task Title</label>
                <input type="text" class="form-control" id="taskTitle" name="body" value="{{$task->name}}">
            </div>
            <div class="form-group">
                <label for="taskStatus">Task Status</label>
                <select class="form-control" id="taskStatus" name="completed" value="{{$task->complete}}">
                    <option value="1">Complete</option>
                    <option value="2">Incomplete</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>

        </form>
        <p>
        <form action="{{$task->id}}/delete" method="post" class="col-sm-8">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-primary" style="margin-left: 25px;">Delete</button>


        </form>
        <div>
        Created at: {{date("F d, Y h:i:s", strtotime($task->created_at))}}</br>
        Updated at: {{$task->updated_at}}</br>
        </p>
@endsection