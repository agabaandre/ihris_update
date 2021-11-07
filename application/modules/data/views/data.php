<div class="row">
    <div class="col-md-6">
                <div class="card ">
                    <div class="card-header white">
                        <i class="icon icon-wpforms light-green-text s-18"></i>
                        <strong> Forms </strong>
                    </div>
                    <div class="slimScrollDiv" style="position: relative; overflow: auto; width: auto; height: 500px;">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <!-- Table heading -->
                                <tbody>
                                <tr class="no-b">
                                   
                                    <th>Form ID</th>
                                    <th>Form</th>
                                    <th>Form Description</th>
                                    <th>Parent</th>
                                    <th>Action</th>
                                </tr>
                                <?php  $forms=Modules::run('data/forms'); ?>
                                <tr>
                                    
                                    <?php foreach($forms as $form):
                                       // print_r($form);
                                        ?>

                                      <td><?php echo $form['id'];?></td>
                                      <td><?php echo $form['form_title'];?></td>
                                      <td><?php echo $form['description'];?></td>
                                      <td><?php echo $form['parent_form'];?></td>
                                      <td></td>
                                    
                                   
                                </tr>
                                <?php endforeach; ?>
                               
                                </tbody>
                            </table>
                      
                    </div><div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.95); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 259.366px;"></div><div class="slimScrollRail" style="width: 5px; height: 300%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                    <div class="card-footer white">
                        
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header white">
                        <i class="icon-clipboard-edit blue-text"></i>
                        <strong> Fields </strong>
                    </div>
                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 300px;"><div class="card-body p-0 bg-light slimScroll" data-height="300" style="overflow: hidden; width: auto; height: 300px;">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <!-- Table heading -->
                                <tbody>
                                <tr class="no-b">
                                   
                                    <th>Form ID</th>
                                    <th>Form</th>
                                    <th>Form Description</th>
                                    <th>Parent</th>
                                    <th>Action</th>
                                </tr>

                                <?php  $forms=Modules::run('data/fields'); ?>
                                
                                <tr>
                                   
                                    <!-- Page name -->
                                    <td>
                                        <a href="#">About Us</a>
                                    </td>
                                   
                                </tr>
                                <?php endforeach; ?>
                               
                                </tbody>
                            </table>
                        </div>
                    </div><div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.95); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 259.366px;"></div><div class="slimScrollRail" style="width: 5px; height: 300%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                    <div class="card-footer white">
                        
                    </div>
                </div>
    </div>
</div>