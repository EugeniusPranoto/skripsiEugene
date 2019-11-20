        <div id="custom-width-modal<?php echo $id_user; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" style="width:25%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="custom-width-modalLabel">Account Information</h4>
                    </div>
                    <div class="modal-body">
                        <p><b>Username: </b><?php echo $user_username ?></p>
                        <hr style="margin-top:-2%">
                        <p><b>Position: </b><?php echo $user_type_role ?></p>
                        <hr style="margin-top:-2%">
                        
                        <h4>Personal Information</h4>
                        <hr style="margin-top:-2%">
                        <p><b>First Name: </b><?php echo $user_fname ?></p>
                        <hr style="margin-top:-2%">
                        <p><b>Last Name: </b><?php echo $user_lname ?></p>
                        <hr style="margin-top:-2%">
                        <p><b>Gender: </b><?php echo $user_gender ?></p>
                        <hr style="margin-top:-2%">
                        <p><b>Email: </b><?php echo $user_email ?></p>
                        <hr style="margin-top:-2%">
                        <p><b>Phone: </b><?php echo $user_phone ?></p>
                        <hr style="margin-top:-2%">
                    
                        <h4>Address Information</h4>
                        <hr style="margin-top:-2%">
                        <p><b>Address: </b><?php echo $user_address ?></p>
                        <hr style="margin-top:-2%">
                        <p><b>State: </b><?php echo $user_state ?></p>
                        <hr style="margin-top:-2%">
                        <p><b>Postcode: </b><?php echo $user_postcode ?></p>
                        <hr style="margin-top:-2%">
                        <p><b>City: </b><?php echo $user_city ?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->