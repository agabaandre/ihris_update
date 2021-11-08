<!-- sidebar begins -->
<aside class="main-sidebar fixed offcanvas b-r" data-toggle='offcanvas'>
    <section class="sidebar">
        <ul class="sidebar-menu mt-4">
            <li class="treeview"><a href="#">
                <i class="icon icon-sailing-boat-water s-24"></i> <span>Dashboard</span> <i
                    class=" icon-angle-left  pull-right"></i>
            </a>
            </li>
            <li class="treeview"><a href="#">
                <i class="icon icon icon-package s-24"></i>
                <span>Data and Sessions</span>
                <span class="badge r-3 badge-primary pull-right"></span>
            </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url()?>data"><i class="icon icon-circle-o"></i>Field Data</a>
                    </li>
                    <li><a href="<?php echo base_url()?>sessions"><i class="icon icon-add"></i>Activity Sessions</a>
                    </li>
                </ul>
            </li>
            <li class="treeview"><a href="#">
                <i class="icon icon icon-settings s-24"></i>
                <span>Forms</span>
                <span class="badge r-3 badge-primary pull-right"></span>
            </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url()?>forms/"><i class="icon icon-circle-o"></i>Forms & Fields</a>
                    </li>
                   
                </ul>
            </li>
            <li class="treeview"><a href="#"><i class="icon icon-account_box s-24"></i>Users<i
                    class=" icon-angle-left  pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('users/list')?>"><i class="icon icon-circle-o"></i>All Users</a>
                    </li>
                    <li><a href="<?php echo base_url()?>users/form"><i class="icon icon-add"></i>Add User</a>
                    </li>
                  
                </ul>
            </li>
             
           
        <div class="relative pt-5">
            <div class="user-panel p-4 mb-2">
               
                <div class="clearfix"></div>
                <div class="collapse multi-collapse" id="userSettingsCollapse">
                    <div class="list-group mt-3 shadow">
                        <a href="index-2.html" class="list-group-item list-group-item-action ">
                            <i class="mr-2 icon-umbrella text-blue"></i>Profile
                        </a>
                        <a href="#" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-cogs text-yellow"></i>Settings</a>
                        <a href="#" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-security text-purple"></i>Change Password</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</aside>
<!--Sidebar End-->