@extends('layouts.app')



@section('content')


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }} </p>
        </div>
    @endif

    <div class="row">
        <div class="col-md-9">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('borrowers.create') }}"> Add New Borower</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
            <input type="text" name="serach" id="serach" class="form-control" />
            </div>
        </div>
    </div>

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
                    <form action="" method="POST">
                        <a class="btn btn-info" href="{{ route('borrowers.show',$value->id) }}"><i class="fas fa-eye text-white-300"></i></a>



                        <a class="btn btn-primary" href="{{ route('borrowers.edit',$value->id) }}"><i class="fas fa-edit text-white-300"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"> <i class="fas fa-trash text-white-300"></i></button>
                    </form>




                </td>
            </tr>
            @endforeach
        </table>

        @include('borrowers.modal')
    </div>
    {!! $data->links() !!}

@endsection

@push('ajax_crud')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="/js/ajax.js"></script>

@endpush
