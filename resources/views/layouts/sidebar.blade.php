<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-user"></i> Users <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('user.index') }}">User List</a></li>
                </ul>
            </li>

            <li><a><i class="fa fa-desktop"></i> Manage Profile <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('profile.index') }}">Profile</a></li>
                </ul>
            </li>

            <li><a><i class="fa fa-desktop"></i> Manage Password <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('profile.password.view') }}">Change Password</a></li>
                </ul>
            </li>


            <li><a><i class="fa fa-desktop"></i> Todo List <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('todo.index') }}">Todos</a></li>
                </ul>
            </li>
        </ul>
    </div>

</div>
<!-- /sidebar menu -->
