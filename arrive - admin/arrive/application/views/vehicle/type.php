<?php
//echo'<pre>';
//print_r($category);
//die();
?>
<style type="text/css">
    /*    .control-panel .page-content {
        padding-right: 12px;
    }*/
    .sortings::before,.sortings::after{
        content:"" !important;
    }
    .adjest{display: flex; flex-direction: row;}
    .adjest a{margin: 5px;}
</style>

<!DOCTYPE html>

<div class="page-content">
    <div class="container-fluid">
        <header class="mgb">
            <!--<header class="section-header mgb">-->
            <div class="tbl">
                <div class="tbl-row">
                    <div class="tbl-cell">
                        <h4>Vehicle Class
<!--                            <button class="btn btn-rounded pull-right" type="button" onclick="location.href = '<?php echo base_url(); ?>admin/vehicle/form'">Add</button>-->
                        </h4>
                    </div>
                </div>
            </div>
        </header>
        <section class="card">
            <div class="card-block">

                <table id="example" class="display table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Vehicle Class Name</th>
                            <!--<th>Vehicle Image</th>-->
                            <th>Vehicle Class Status</th>
                            <th class="sortings">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
//                        $catDetail = site_url('category/catdetail');
                        foreach ($vehicle as $key => $value) {
                            ?>

                            <tr>
                                <td><?php echo ucfirst($value['vehicle_type']); ?></td>
                                <td>
                                    <?php
                                   
                                        echo $value['active_flag'];
                                   
                                    ?>
                                </td>

                                <td class="adjest">
   
                                   <!-- <?php if ($value['status'] == '1') { ?>

                                        <a class="btn btn-info" onclick="return confirm('Are you sure want to Deactive status')" href="<?php echo base_url('admin/vehicle/deactive/' . $value['id']); ?>" title="Deactive"><i class="fa fa-remove"></i></a>
                                    <?php } else { ?>
                                        <a class="btn btn-info" onclick="return confirm('Are you sure want to Active status')" href="<?php echo base_url('admin/vehicle/active/' . $value['id']); ?>" title="Active"><i class="fa fa-check"></i></a>
                                        <?php } ?>-->
										<a class="btn btn-info" href="<?php echo base_url('admin/vehicle/classtype/' . $value['id']); ?>" title="Type">Class type</a>
                                </td>

                            </tr>
                        <?php }
                        ?>


                    </tbody>
                </table>
            </div>
        </section>
    </div><!--.container-fluid-->
</div><!--.page-content-->

<script>

    $(function () {
        $('#example').DataTable({
            responsive: true
        });
    });




</script>