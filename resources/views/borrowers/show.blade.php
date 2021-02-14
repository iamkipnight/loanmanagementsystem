@extends('layouts.app3')

@section('title', 'Borrower')

@push('styles')
    <link href="{{ asset('css/user.css') }}" rel="stylesheet" />
@endpush

@section('content')

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="{{ asset('images/profile/placeholder.png') }}" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
                    <i class="far fa-id-card"></i>
					<div class="profile-usertitle-name" style="font-family:'Marcellus SC', serif;">
						<h4>{{ $borrower->first_name }} {{ '  ' }}{{ '  ' }}{{ $borrower->second_name }} {{ '  ' }}{{ '  ' }}{{ $borrower->last_name }}</h4>
					</div>
					<div class="profile-usertitle-job">

					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->

				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Details</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Loans</button>
                        </li>

                    </ul>


				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9" style="border-left-width: 0.25rem;border-left-style: solid;  border-color :blue;">
            <div class="profile-content">
                <div class="tab-content" id="pills-tabContent" >
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                        <div>
                            <span><strong> Names :</strong> </span>  {{ $borrower->first_name }} {!! "&nbsp;" !!}{{ $borrower->second_name }}{!! "&nbsp;" !!}{{ $borrower->last_name }}
                        </div>

                        <div>
                            <span><strong>Email :</strong>  </span>  {{ $borrower->email_address }}

                        </div>

                        <div>
                            <span><strong>Phone Number :</strong>  </span>  {{ $borrower->phone_number }}

                        </div>

                        <div>
                            <span> <strong>City :</strong> </span>  {{ $borrower->city }}

                        </div>

                        <div>
                            <span> <strong>Address :</strong> </span>  {{ $borrower->address }}

                        </div>


                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <table class="table table-success table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">Loan ID#</th>
                                    <th scope="col">Pricipal Amount</th>
                                    <th scope="col">Loan Date</th>
                                    <th scope="col">Loan Balance</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>KES 100,000</td>
                                    <td>13/07/2020</td>
                                    <td>KES 0</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>KES 20,000</td>
                                    <td>30/12/2017</td>
                                    <td>KES 0</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>KES 100,000 </td>
                                    <td>13/02/2021</td>
                                    <td>KES 35000</td>
                                  </tr>
                                </tbody>

                            ...
                        </table>
                    </div>

            </div>
		</div>
	</div>
</div>
@endsection


