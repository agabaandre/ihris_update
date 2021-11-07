<!-- <top nav> -->
<div class="sticky">
    <div class="navbar navbar-expand d-flex justify-content-between bd-navbar white b-b">
        <div class="relative">
            <div class="d-flex">
                <div>
                    <a href="#" data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle">
                        <i></i>
                    </a>
                </div>
                <ul class="nav responsive-tab nav-material nav-material-white mt-1 ml-3" id="v-pills-tab">
                    <li>
                        <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1">
                            <i class="mr-3 icon-code2"></i><?php echo ucwords($uptitle) ?></a>
                    </li>
                  
                </ul>
            </div>
        </div>
        <!--Top Menu Start -->
        <div class="navbar-custom-menu d-flex align-items-center">
            <ul class="nav navbar-nav">
            
                <!-- Notifications -->
                <li class="dropdown custom-dropdown notifications-menu">
                    <a href="#" class="nav-link  b-r b-l pl-lg-3 pr-lg-3 btn btn-sm btn-primary" data-toggle="dropdown" aria-expanded="false" style="background">
                        <i class="icon-user "><?php echo $this->session->userdata('fullname');?></i>
                        <!-- <span class="badge badge-danger badge-mini rounded-circle">4</span> -->
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="header"></li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="icon icon-arrow_forward text-success"></i> Log Out
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        
                    </ul>
                </li>

            </ul>
            <!-- Button -->
            <!-- <div>
                <a href="#" class="btn btn-primary btn-sm ml-3 d-none d-sm-block">Add New Project</a>
            </div> -->
        </div>

    </div>
</div>
<!-- end top nav> -->
