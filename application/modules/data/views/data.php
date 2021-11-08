<section class="paper-card">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><?php echo $title?></h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
    <table id="example" class="table table-striped table-bordered nowrap mytable" style="width:100%">
        <thead>
            <tr>
            <?php foreach($headers as $header): ?>
                <th><?php echo $header->label; ?></th>
            <?php endforeach:?>
            <td>Location</td>
            <td>Record Date</td>
            </tr>
        </thead>
        <tbody>
        <?php 
        $i=0;
        foreach($staffs as $staff): ?>
            <tr>
            <td><?php echo $staff->hw_type ?></td>
            <td><?php echo $staff->surname ?></td>
            <td><?php echo $staff->firstname ?></td>
            <td><?php echo $staff->othername ?></td>
            <td><?php echo $staff->birth_date ?></td>
            <td><?php echo $staff->birth_place ?></td>
            <td><?php echo $staff->gender ?></td>
            <td><?php echo $staff->position ?></td>
            <td><?php echo $staff->position_id ?></td>
            <td><?php echo $staff->facility_id ?></td>
            <td><?php echo $staff->facility ?></td>
            <td><?php echo $staff->id_type ?></td>
            <td><?php echo $staff->id_number ?></td>
            <td><?php echo $staff->expiry_date ?></td>
            <td><?php echo $staff->id_photo ?></td>
            <td><?php echo $staff->hw_photo?></td>
            <td><?php echo $staff->info_consent ?></td>
            <td><?php echo $staff->mobile_number ?></td>
            <td><?php echo $staff->is_mm_registered ?></td>
            <td><?php echo $staff->is_registered_by_hw ?></td>
            <td><?php echo $staff->registered_mm_name ?></td>
            <td><?php echo $staff->allow_mm_consent ?></td>
            <td><?php echo $staff->kyc_verification ?></td>
            <td><?php echo $staff->location ?></td>
            <td><?php echo $staff->record_date ?></td>
           
            
            </tr>
        </tbody>
</table>
</div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
</section>                           