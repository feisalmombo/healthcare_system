<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
                        <!-- <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </li> -->
                        <li>
                            <a href="{{ url('/home') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                        
                        <li>
                            
                            <a href="#"><i class="fa fa-user fa-fw"></i> Manage Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                               
                                <li>
                                    <a href="{{ url('/view-users') }}"> View users</a>
                                </li>


                                <li>
                                    <a href="{{ url('/view-users/create') }}"> Add user</a>
                                </li>
                                                           
                            </ul>
                            <!-- .nav-second-level -->
                      

                        </li>
                        
                       
                        <li>
                         
                                 <a href="#"><i class="fa fa-shield fa-fw"></i> Manage Reception<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            
                                <li>
                                    <a href="{{ url('/view-receptions') }}"> View Reception Info</a>
                                </li>
                            
                                
                               
                                <li>
                                    <a href="{{ url('/view-receptions/create') }}"> Add Reception Info</a>
                                </li>                            
                            </ul>
                            <!-- .nav-second-level -->
                        </li> 
                     
                        <?php 
                        if(Auth::user()->can('manage_privileges')){?>
                        <li>
                            <a href="#"><i class="fa fa-genderless"></i>  Manage Permissions<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a href="{{ url('/settings/manage_users/permissions') }}">View Permission</a>
                                </li>                          
                                
                                
                                <li>
                                    <a href="{{ url('/settings/manage_users/permissions/entrust_role') }}">Assign Permissions to Role</a>
                                </li>
                                <li>
                                    <a href="{{ url('/settings/manage_users/permissions/entrust_user') }}">Entrust Permission to User</a>
                                </li>
                            </ul>
                            <!-- .nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user"></i>  Manage Roles<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('/settings/manage_users/roles') }}">View Roles</a>
                                </li>  
                                <li>
                                    <a href="{{ url('/settings/manage_users/roles/create') }}">Entrust Role to User</a>
                                </li>
                            </ul>
                            <!-- .nav-second-level -->
                        </li>
                        <?php }?>
                        
                        <?php 
                        if(Auth::user()->can('create_finance')||Auth::user()->can('view_finance')){?>
                        <li>
                            <a href="#"><i class="fa fa-money"></i>  Manage Finance<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <?php if(Auth::user()->can('create_finance')){?>
                                <li>
                                    <a href="{{ url('/finance/create') }}">Add Cost</a>
                                </li>                           
                                
                                <?php }?>
                                <?php if(Auth::user()->can('view_finance')){?>

                                <li>
                                    <a href="{{ url('/finance') }}">Closed Status</a>
                                </li>
                                <li>
                                    <a href="{{ url('/finance/tasks_with_cost') }}">Closed Status With cost</a>
                                </li>
                                <?php }?>

                            </ul>
                            <!-- .nav-second-level -->
                        </li>
                        <?php } ?>
                        <?php 
                        if(Auth::user()->can('view_feedback')){?>
                        <li>
                            <a href="#"><i class="fa fa-check fa-fw"></i> Solution<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/solvedSolution')}}">Solved</a>
                                </li>

                                <li>
                                    <a href="{{ url('/unsolvedSolution') }}">Un-solved</a>
                                </li>

                            </ul>

                        </li>

                        
                        <?php  }?>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>