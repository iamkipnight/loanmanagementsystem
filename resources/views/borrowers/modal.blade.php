
    <div class="modal fade" id="add-new-borrower-modal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelHeading"></h4>
                </div>
                <div class="modal-body">
                    <form id="add-new-borrower-form" name="add-new-borrower-form" class="form-horizontal">
                        @csrf
                        <div class="row">
                            <input type="hidden" name="id" id="id">
                            <div class="form-group col-lg-4">
                                <label for="first_name" class="col-sm-2 control-label">First Name</label>
                                <div class="">
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                                </div>
                            </div>


                            <div class="form-group col-lg-4">
                                <label for="second_name" class="col-sm-2 control-label">Second Name</label>
                                <div class="">
                                    <input type="text" class="form-control" id="second_name" name="second_name" placeholder="Second Name">
                                </div>
                            </div>

                            <div class="form-group col-lg-4">
                                <label for="last_name" class="col-sm-2 control-label">Last Name</label>
                                <div class="">
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label for="id_number" class="col-sm-2 control-label">ID#</label>
                                <div>
                                    <input type="text" class="form-control" id="id_number" name="id_number" placeholder="ID Number">
                                </div>
                            </div>

                            <div class="form-group col-lg-4">
                                <label for="email_address" class="col-sm-2 control-label">Email</label>
                                <div>
                                    <input type="text" class="form-control" id="email_address" name="email_address" placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group col-lg-4">
                                <label for="phone_number" class="col-sm-2 control-label">Phone</label>
                                <div>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label for="nationality" class="col-sm-2 control-label">Nationality</label>
                                <div class="">
                                    <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Nationality">
                                </div>
                            </div>


                            <div class="form-group col-lg-4">
                                <label for="city" class="col-sm-2 control-label">City</label>
                                <div class="">
                                    <input type="text" class="form-control" id="city" name="city" placeholder="City" maxlength="50">
                                </div>
                            </div>

                            <div class="form-group col-lg-4">
                                <label for="address" class="col-sm-2 control-label">Address</label>
                                <div class="">
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="description" class="col-sm-2 control-label">Description</label>
                            <div class="">
                                <input type="text" class="form-control" id="description" name="description" placeholder="Descrption">
                            </div>
                        </div>


                        <div class="col-sm-offset-2 col-sm-10">
                         <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                         </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

