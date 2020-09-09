<ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle notification" data-toggle="dropdown" href="/problems">
                        
                        <i class="fa fa-bell fa-fw"></i> 
                        
                        
                             @if(Auth::user() && !Auth::user()->can('create_finance') && App\Duty::All()->where('status','=','Appointment')->where('doctor_id','=',Auth::user()->id)->count()) 
                                   
                            <i class="badge badge-danger navbar-badge"> 
                                 {{$notifications=App\Duty::All()->where('status','=','Appointment')
                                                     ->where('doctor_id','=',Auth::user()->id)->count()
                                                    }} 
                                                    </i>
                             @endif 
                            {{--  @if(Auth::user() && Auth::user()->can('create_finance') && $notifications=count(DB::table('details')
                                                ->join('tasks','tasks.detail_id','=','details.id')
                                                ->select('details.ticket_number','tasks.id')
                                                ->whereNotIn('details.ticket_number',function($q){
                                                $q->select('costs_tasks.ticket_number')->from('costs_tasks');
                                            })->whereIn('tasks.id',function($q){$q->select('solutions.task_id')
                                            ->from('solutions');})->get()))
                            <i class="badge badge-danger navbar-badge"> {{$notifications=count(DB::table('details')
                                                ->join('tasks','tasks.detail_id','=','details.id')
                                                ->select('details.ticket_number','tasks.id')
                                                ->whereNotIn('details.ticket_number',function($q){
                                                $q->select('costs_tasks.ticket_number')->from('costs_tasks');
                                            })->whereIn('tasks.id',function($q){$q->select('solutions.task_id')
                                            ->from('solutions');})->get())
                                                    }}
                                                    </i>
                            @endif  --}}
                                
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        
                        {{--  @if(Auth::user() && !Auth::user()->can('create_finance') && count($notifications=App\Task::where('status','=','Received')
                                                     ->where('engineer_id','=',Auth::user()->id)
                                                     ->join('details','tasks.detail_id','=','details.id')
                                                     ->join('users','tasks.engineer_id','=','users.id')
                                                     ->select('tasks.id','details.problem','users.first_name','tasks.detail_id','tasks.created_at')->paginate(5)))
                       
                        @foreach($notifications as $notification)  --}}
                        <li>
                            <a href="">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i>
                                    {{--  {{str_limit($notification->problem, $limit = 10, $end = '...')}}   --}}
                                    <span class="pull-right text-muted small"> 
                                        {{--  {{$notification->created_at->diffForhumans()}}   --}}
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        {{--  @endforeach
                        @endif  --}}
                        {{--  @if(Auth::user()->can('create_finance') && count($notifications=App\Task::select('tasks.id','details.ticket_number','tasks.id','tasks.updated_at','tasks.detail_id','details.problem')
                                                ->join('details','tasks.detail_id','=','details.id')
                                                ->whereNotIn('details.ticket_number',function($q){
                                                $q->select('costs_tasks.ticket_number')->from('costs_tasks');
                                            })->whereIn('tasks.id',function($q){$q->select('solutions.task_id')
                                            ->from('solutions');})->get()))
                       
                        @foreach($notifications as $notification)  --}}
                        <li>
                            <a href="">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i>
                                    {{--  {{str_limit($notification->problem, $limit = 10, $end = '...')}}   --}}
                                    <span class="pull-right text-muted small"> 
                                        {{--  {{$notification->updated_at->diffForhumans()}}   --}}
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        {{--  @endforeach
                        @endif  --}}
                        <li>
                            <a class="text-center" href="{{url('/finance')}}">
                                <strong>See All Notifications</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>
                        <i>
                            @foreach(App\Role::All() as $role)
                                @if(Auth::user()->hasRole($role->slug))
                                    {{$role->name}}
                                @endif
                            @endforeach

                            {!!": <strong>".Auth::user()->first_name."</i></strong>"!!} <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="{{ url('/change-password') }}"><i class="fa fa-gear fa-fw"></i> Change Password</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out fa-fw"></i>Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>