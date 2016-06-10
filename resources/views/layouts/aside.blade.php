@section("aside")
        <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <p>.</p>
            </div>
            <div class="pull-left info">
                <p> {{Auth::user()->name}} </p>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <li>
                <a href="/home">
                    <i class="glyphicon glyphicon-blackboard"></i> <span>List of Boards </span>
                    <small class="label pull-right bg-red"></small>
                </a>
            </li>

            <li>
                <a href="/board/{{$Board->id}}#/">
                    <i class="glyphicon glyphicon-blackboard"></i> <span>Board</span>
                    <small class="label pull-right bg-red"></small>
                </a>
            </li>
            <li>
                <a href="/member/{{$Board->id}}">
                    <i class="fa  fa-user"></i> <span>Member</span>
                    <small class="label pull-right bg-red"></small>
                </a>
            </li>
            <li>
                <a href="/showGantt/{{$Board->id}}">
                    <i class="fa  fa-bar-chart"></i> <span>Gantt</span>
                    <small class="label pull-right bg-red"></small>
                </a>
            </li>

            @if(Auth::user()->Level_id == 1) <!-- hide form Member -->
                <li>
                    <a href="/editBoard/{{$Board->id}}">
                        <i class="fa fa-cogs"></i> <span>Edit</span>
                    </a>
                </li>

            @endif
            <li>
                <a href="/help">
                    <i class="glyphicon glyphicon-info-sign"></i> <span>Help</span>
                    <small class="label pull-right bg-red"></small>
                </a>
            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
</div><!-- ./wrapper -->
@show