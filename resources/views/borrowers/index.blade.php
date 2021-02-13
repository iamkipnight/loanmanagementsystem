@extends('layouts.app')


<div id="content-area">
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch - laravelcode.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('borrowers.create') }}"> Add New Borower</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="table-responsive">
    <table class="table mb-0 table table-dark table-hover table-striped">
        <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Second Name</th>
            <th>Last Name</th>
            <th>ID Number</th>
            <th>Description</th>
            <th width="200px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->first_name }}</td>
            <td>{{ $value->second_name }}</td>
            <td>{{ $value->last_name }}</td>
            <td>{{ $value->id_number }}</td>


            <td>{{ \Str::limit($value->description, 100) }}</td>
            <td>
                <form action="{{ route('borrowers.destroy',$value->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('borrowers.show',$value->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('borrowers.edit',$value->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
    {!! $data->links() !!}






@endsection
</div>
