@extends('layouts.app')

@section('content')
<div class="row" style="background:#E7EBE0FF">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h4 style="font-family:'Marcellus SC', serif;">Add New Borrower</h4>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('borrowers.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Opps!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<form action="{{ route('borrowers.store') }}" method="POST" class="" style="">
    @csrf

    <div class="row">

        <div class="col-lg-3">
            <label class="visually-hidden" for="autoSizingInput">First Name</label>
            <input type="text" class="form-control" name="first_name" placeholder="Jane">
        </div>

        <div class="col-lg-3">
            <label class="visually-hidden" for="autoSizingInput">Second Name</label>
            <input type="text" class="form-control" name="second_name" placeholder="Doe">
        </div>

        <div class="col-lg-3">
            <label class="visually-hidden" for="autoSizingInput">Last Name</label>
            <input type="text" class="form-control" name="last_name" placeholder="Jane Doe">
        </div>
    </div>


    <div class="row" style="padding-top: 1rem">

        <div class="col-lg-3">
            <label class="visually-hidden" for="autoSizingInput">ID Number</label>
            <input type="text" class="form-control" name="id_number" placeholder="Identification Number">
        </div>

        <div class="col-lg-3">
            <label class="visually-hidden" for="autoSizingInput">Email Address</label>
            <input type="text" class="form-control" name="email_address" placeholder="johndoe@example.com">
        </div>

        <div class="col-lg-3">
            <label class="visually-hidden" for="autoSizingInput">Phone NUmber</label>
            <input type="text" class="form-control" name="phone_number" placeholder="+254-(7XXX)-(XXX)-(XXX)">
        </div>
    </div>


    <div class="row" style="padding-top: 1rem">

        <div class="col-lg-3">
            <label class="visually-hidden" for="autoSizingInput">Nationality</label>
            <input type="text" class="form-control" name="nationality" placeholder="Nationality">
        </div>

        <div class="col-lg-3">
            <label class="visually-hidden" for="autoSizingInput">City</label>
            <input type="text" class="form-control" name="city" placeholder="City">
        </div>

        <div class="col-lg-3">
            <label class="visually-hidden" for="autoSizingInput">Address</label>
            <input type="text" class="form-control" name="address" placeholder="Address">
        </div>
    </div>

    <div class="row" style="padding-top: 1rem">

        <div class="col-lg-9">
            <label class="visually-hidden" for="autoSizingInput">Description</label>
            <textarea class="form-control" name="description" placeholder="Enter Description"></textarea>
        </div>

    </div>

    <div class="row" style="padding-top: 1rem" style="padding-bottom: 2rem">

        <div class="col-lg-12">
            <button type="submit" class="btn btn-lg btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
