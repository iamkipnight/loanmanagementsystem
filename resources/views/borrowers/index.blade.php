@extends('layouts.app')



@section('content')


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }} </p>
        </div>
    @endif

    <div class="row">
                <a class="btn btn-sm btn-success mb" href="javascript:void(0)" id="add-new-borrower-button"> Add New Borower</a>
    </div>

    <div class="table-responsive">

        <table id="borrowers-table" class="compact table table-hover table-striped" >
            <thead>
                <tr>
                    <th>No</th>
                    <th>First Name</th>
                    <th>Second Name</th>
                    <th>Last Name</th>
                    <th>ID </th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th width="170">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

        @include('borrowers.modal')
    </div>


@endsection

@push('ajax_crud')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="/js/ajax.js"></script>



@endpush
