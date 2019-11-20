<?php
for ($i = 1; $i <= $a; $i++) { ?>
    <div id="custom-width-modal<?php echo $i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Shed Number Details</h4>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url() . 'c_layout/InsertItem' ?>" method="post" data-parsley-validate novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Item Code</label>
                                    <select class="form-control" name="id_item" id="id_item<?php echo $i ?>">
                                        <?php
                                            foreach ($item as $itemList) { ?>
                                            <option value="<?= $itemList->id_item ?>"><?= $itemList->item_code ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Cow Type</label>
                                    <input type="text" id="type<?php echo $i; ?>" value="" name="type" readonly value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Current Weight</label>
                                    <input type="text" id="test3<?php echo $i; ?>" name="current" readonly class="form-control" name="item_weight">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-4" class="control-label">Date Arrived</label>
                                    <input type="text" id="date<?php echo $i; ?>" name="date" readonly value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-5" class="control-label">Arrived From</label>
                                    <input type="text" id="arrival<?php echo $i; ?>" name="arrival" readonly value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-6" class="control-label">Purcased price</label>
                                    <input type="text" id="price<?php echo $i; ?>" name="price" readonly value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-7" class="control-label">Status</label>
                                    <input type="text" id="status<?php echo $i; ?>" name="status" readonly value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-8" class="control-label">Box Number</label>
                                    <input type="text" name="number" readonly value="<?php echo $i ?>" class="form-control">
                                </div>
                            </div>
                        </div>

                        <script type="text/javascript" src="<?php echo base_url() . 'assets/jquery-3.3.1.js' ?>">
                            // function EnableDisableTextBox(relocation) {
                            //     var txtRelocate = document.getElementById("relocate");
                            //     txtRelocate.disabled = relocation.checked ? false : true;
                            //     if (!txtRelocate.disabled) {
                            //         txtRelocate.focus();
                            //     }
                            // }


                           function showHide()
                           {
                                var checkBox = document.getElementById("relocation");
                                var show = document.getElementById("show");

                                if (checkBox.checked == true){
                                    show.style.display = "block";
                                } else {
                                    show.style.display = "none";
                                }

                           }

                           
                           $("#relocation").change(function () {
                                   $("#show").toggle();
                            })
                        </script>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <input type="checkbox" value="relocate" id="relocation" onclick="showHide()"> Relocate
                                </div>
                            </div>
                        </div>
                        <div id ="show" style = "display:show;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-8" class="control-label">Change Layout</label>
                                    <select class="form-control" name="id_layout" id="id_layout" >
                                        <?php
                                            foreach ($layoutlist as $list) { ?>
                                            <option value="<?= $list->id_layout ?>"><?= $list->layout_name ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group no-margin">
                                    <label for="field-9" class="control-label">Relocate To</label>
                                    <select class="form-control" name="relocate" id="relocate" disabled="disabled" >
                                        <?php for ($j = 1; $j <= 40; $j++) {
                                                $flag = 0;
                                                foreach ($relocate as $list) { ?>
                                                <?php if ($list->layout_box_number == $j) { ?>
                                                <?php $flag = 1;break;}
                                                        }
                                                   if($flag == 0){     
                                                        ?>
                                                        <option><?php echo $j ?></option>
                                        <?php
                                                   }   
                                            }   ?>



                                    </select>
                                </div>
                            </div>
                        </div>
                         </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Delete</button>
                    <a href="<?php echo base_url() . 'c_layout/InsertItem' ?>"><button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button></a>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {

            $('#id_item<?php echo $i; ?>').change(function() {
                var id_item = $(this).val();
                $.ajax({
                    url: "<?php echo site_url('c_layout/getCode'); ?>",
                    method: "POST",
                    data: {
                        id_item: id_item
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data) {
                        $('#test3<?php echo $i; ?>').val(data[0].item_weight);
                        $('#type<?php echo $i; ?>').val(data[0].item_category);
                        $('#date<?php echo $i; ?>').val(data[0].item_date);
                        $('#arrival<?php echo $i; ?>').val(data[0].item_arrival);
                        $('#price<?php echo $i; ?>').val(data[0].item_price);
                        $('#status<?php echo $i; ?>').val(data[0].item_status);

                    }
                });
                return false;
            });

        });

        $(document).ready(function() {

            $('#id_layout<?php echo $i; ?>').change(function() {
                var id_layout = $(this).val();
                $.ajax({
                    url: "<?php echo site_url('c_layout/getLayout'); ?>",
                    method: "POST",
                    data: {
                        id_layout: id_layout
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data) {
                        // $('#test3<?php echo $i; ?>').val(data[0].item_weight);

                    }
                });
                return false;
            });

        });
    </script>

<?php } ?>