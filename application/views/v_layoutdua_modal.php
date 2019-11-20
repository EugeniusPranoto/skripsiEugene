<?php
    for ($i = 1; $i <= 96   ; $i++) { ?>
<div  id="custom-width-modal<?php echo $i; ?>"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                <h4 class="modal-title">Shed Number Details</h4> 
            </div> 
            <div class="modal-body"> 
                <div class="row"> 
                    <div class="col-md-6"> 
                        <div class="form-group"> 
                            <label for="field-1" class="control-label">SKU Code</label> 
                            <input type="text" class="form-control" id="field-1"   value="<?php echo $i?>" placeholder="John"> 
                        </div> 
                    </div> 
                    <div class="col-md-6"> 
                        <div class="form-group"> 
                            <label for="field-2" class="control-label">Cow Breed</label> 
                            <input type="text" class="form-control" id="field-2" placeholder="Doe"> 
                        </div> 
                    </div> 
                </div> 
                <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="form-group"> 
                            <label for="field-3" class="control-label">Current Weight</label> 
                            <input type="text" class="form-control" id="field-3" placeholder="Address"> 
                        </div> 
                    </div> 
                </div> 
                <div class="row"> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-4" class="control-label">Date Arrived</label> 
                            <input type="text" class="form-control" id="field-4" placeholder="Boston"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-5" class="control-label">Arrived From</label> 
                            <input type="text" class="form-control" id="field-5" placeholder="United States"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-6" class="control-label">Purcased price</label> 
                            <input type="text" class="form-control" id="field-6" placeholder="123456"> 
                        </div> 
                    </div> 
                </div> 
                <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="form-group no-margin"> 
                            <label for="field-7" class="control-label">Status</label> 
                            <textarea class="form-control autogrow" id="field-7" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;"></textarea>
                        </div> 
                    </div> 
                </div>
                <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="form-group no-margin"> 
                            <label for="field-7" class="control-label">Relocate To</label> 
                            <select class="form-control" id="field-8">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div> 
                    </div> 
                </div> 
            </div> 
            <div class="modal-footer"> 
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Delete</button> 
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button> 
            </div> 
        </div> 
    </div>
</div>
<?php }
                                                                ?><!-- /.modal -->