<div >
    <nav>
        <ul>
            <li><a href="/"> Home </a></li>
            
            @if(session('admin_user'))
            <li><a href="adminDashboard">{{ session('admin_user') }}</a></li>
            @elseif(session('user'))
            <li><a href="memberDashboard">{{ session('user') }}</a></li>
            @else
            <li><a href="login">Login </a></li>
            
            @endif
            
            

        </ul>
    </nav>
</div>

