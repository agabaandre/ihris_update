<div class="row mb-5">
      
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                         <span class="easy-pie-chart" data-percent="100"
                                               data-options='{"lineWidth": 10, "barColor": "#7dc855"}'>
                                    <span class="percent">100%</span>
                                     </span>
                            </div>
                            <div>
                                <h6> Progress <br>
                                    <small>Commnunity Health Workers</small>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <!-- <li class="list-group-item">
                            <i class="icon icon-schedule text-yellow"></i>Design New Layout
                            <div class="float-right">
                                <span class="badge badge-warning">Incomplete</span>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                         <span class="easy-pie-chart" data-percent="100"
                                               data-options='{"lineWidth": 10, "barColor": "#ed5564"}'>
                                    <span class="percent"><?php echo $count_synronised;?></span>
                                     </span>
                            </div>
                            <div>
                                <h6> Syncronised Records <br>
                                    <small>Update Actvity Records</small>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <!-- <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="icon icon-schedule text-yellow"></i>Design New Layout
                            <div class="float-right">
                                <span class="badge badge-warning">Incomplete</span>
                            </div>
                        </li>
                    </ul> -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                         <span class="easy-pie-chart" data-percent="70"
                                               data-options='{"lineWidth": 10, "barColor": "#7dc855"}'>
                                    <span class="percent">70%</span>
                                     </span>
                            </div>
                            <div>
                                <h6> Progress <br>
                                    <small>Ministry Health Worker</small>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <!-- <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="icon icon-schedule text-yellow"></i>Design New Layout
                            <div class="float-right">
                                <span class="badge badge-warning">Incomplete</span>
                            </div>
                        </li>
                    </ul> -->
                </div>
            </div>
        </div>
        <div class="card-group my-4">
            <div class="card">
                <div class="card-body pl-5 pr-5 pt-5">
                    <div class="d-lg-flex align-items-center">
                        <div>
                            <h4>iHRIS Manage</h4>
                            <div class="avatar-group mt-3">
                          
                            </div>
                        </div>
                        <div class="ml-auto mt-sm-3">
                                         <span class="easy-pie-chart " data-percent="100"
                                               data-options='{"lineWidth": 10, "barColor": "#7dc855","trackColor":"#f6f8fb"}'>
                                    <span class="percent s-24"><?php echo @$manage_records; ?></span>
                                     </span>
                        </div>
                    </div>
                </div>
                <ul class="list-group list-group-flush">

                    <li class="list-group-item">
                        <i class="icon icon-check-circle text-success"></i>Last Sync
                        <div class="float-right">
                            <span class="badge badge-success">Completed</span>
                        </div>
                    </li>
                    <li class="list-group-item">
                      
                    </li>
                    <li class="list-group-item">
                      
                    </li>
                    
                </ul>
            </div>
            <div class="card ">
                <div class="card-body p-5">
                    <div class="d-lg-flex align-items-center">
                        <div>
                            <h4>Community Health Workers Registry</h4>
                            <div class="avatar-group mt-3">
                            
                            </div>
                        </div>
                        <div class="ml-auto">
                                         <span class="easy-pie-chart " data-percent="55"
                                               data-options='{"lineWidth": 10, "barColor": "#03a9f4","trackColor":"#f6f8fb"}'>
                                    <span class="percent s-24"><?php echo @$chw_records; ?></span>
                                     </span>
                        </div>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">
                        <i class="icon icon-check-circle text-success"></i>Last Sync
                        <div class="float-right">
                            <span class="badge badge-success">Completed</span>
                        </div>
                    </li>
                    <li class="list-group-item">
                      
                    </li>
                    <li class="list-group-item">
                      
                    </li>
                </ul>
            </div>
            <div class="card ">
                <div class="card-body p-5">
                    <div class="d-lg-flex align-items-center">
                        <div>
                            <h4>iHRIS Qualify</h4>
                            <div class="avatar-group mt-3">
                            
                            </div>
                        </div>
                        <div class="ml-auto mt-sm-3">
                                         <span class="easy-pie-chart " data-percent="55"
                                               data-options='{"lineWidth": 10, "barColor": "#03a9f4","trackColor":"#f6f8fb"}'>
                                    <span class="percent s-24"><?php echo @$qualify_records; ?></span>
                                     </span>
                        </div>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">
                        <i class="icon icon-check-circle text-success"></i>Last Sync
                        <div class="float-right">
                            <span class="badge badge-success">Completed</span>
                        </div>
                    </li>
                    <li class="list-group-item">
                      
                    </li>
                    <li class="list-group-item">
                      
                    </li>              
                  </ul>
            </div>
</div>