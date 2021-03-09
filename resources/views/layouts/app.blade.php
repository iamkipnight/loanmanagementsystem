<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="This is an example dashboard created using build-in elements and components.">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @stack('meta')
        @stack('styles')

        <title>{{ config('app.name', 'LoanMan') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/architect.css') }}">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>


    </head>
    <body class="font-sans antialiased">

        <div class="app-container app-theme-white body-tabs-shadow " style="background:rgb(224, 244, 255)">

            @include('layouts.navigation')
            @include('borrowers.modal')

            <div class="app-main" id='app-main' style="margin-top: 70px">

            <div class="col-lg-3">
                @include('layouts.side-menu')

            </div>

                <div class="col-lg-9">

                    <div class="app-main__outer">
                            <div class="app-main__inner" style="background-color: white" style="padding-top:2000px">

                                @yield('content')
                            </div>
                    </div>
                </div>
            </div>

            @include('layouts.footer')
        </div>

        <script src="{{ asset('js/architect.js') }}" defer></script>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
   <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
 $(function () {
     $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
   });
   var table = $('#borrowers-table').DataTable({
       processing: true,
       serverSide: true,
       ajax: "{{ route('borrowers.index') }}",
       columns: [
           {data: 'DT_RowIndex', name: 'DT_RowIndex'},
           {data: 'first_name', name: 'first_name'},
           {data: 'second_name', name: 'second_name'},
           {data: 'last_name', name: 'last_name'},
           {data: 'id_number', name: 'id_number'},
           {data: 'phone_number', name: 'phone_number'},
           {data: 'email_address', name: 'email_address'},
           {data: 'action', name: 'action', orderable: false, searchable: false},
       ]
   });
   $('#add-new-borrower-button').click(function () {
       $('#saveBtn').val("create-book");
       $('#id').val('');
       $('#add-new-borrower-form').trigger("reset");
       $('#modelHeading').html("Add New Borrower");
       $('#add-new-borrower-modal').modal('show');
   });
   $('body').on('click', '.editBorrower', function () {

        var borrower_id = $(this).data('id');
        alert(borrower_id);
        $.get("{{ route('borrowers.index') }}" +'/' + borrower_id +'/edit', function (data) {
            $('#modelHeading').html("Edit Book");
            $('#saveBtn').val("edit-book");
            $('#ajaxModel').modal('show');
            $('#book_id').val(data.id);
            $('#title').val(data.title);
            $('#author').val(data.author);
        })
    });
   $('#saveBtn').click(function (e) {
       e.preventDefault();
       $(this).html('Save');

        var id = $("#id").val();
        var first_name = $("#first_name").val();
        var second_name = $("#second_name").val();
        var last_name = $("#last_name").val();
        var id_number = $("#id_number").val();
        var email_address = $("#email_address").val();
        var phone_number = $("#phone_number").val();
        var nationality = $("#nationality").val();
        var description = $("#description").val();
        var city = $("#city").val();
        var address = $("#address").val();

       $.ajax({
         data: {  id:id,
             first_name: first_name,
             second_name :second_name,
             last_name:last_name,
             id_number: id_number,
             email_address:email_address,
             phone_number: phone_number,
             nationality:nationality,
             description: description,
             city:city,
             address:address },
         url: "{{ route('borrowers.store') }}",
         type: "POST",
         dataType: 'json',
         success: function (data) {

             $('#add-new-borrower-form').trigger("reset");
             $('#add-new-borrower-modal').modal('hide');
             table.draw();

         },
         error: function (data) {
             console.log('Error:', data);
             $('#saveBtn').html('Save Changes');
         }
     });

   });

   $('body').on('click', '.deleteBook', function () {

       var book_id = $(this).data("id");
       confirm("Are You sure want to delete !");

       $.ajax({
           type: "DELETE",
           url: "{{ route('borrowers.store') }}"+'/'+book_id,
           success: function (data) {
               table.draw();
           },
           error: function (data) {
               console.log('Error:', data);
           }
       });
   });

 });
</script>



        <style type="text/css">
            #main{
                min-height: 400px;
            }
        </script>


        @stack('scripts')


    </body>
</html>
