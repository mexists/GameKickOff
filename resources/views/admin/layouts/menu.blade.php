<li {!! (Request::is('admin/rivers') || Request::is('admin/rivers/create') || Request::is('admin/rivers/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Rivers</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/rivers') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/rivers') }}">
                <i class="fa fa-angle-double-right"></i>
                Rivers
            </a>
        </li>
        <li {!! (Request::is('admin/rivers/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/rivers/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Add New River
            </a>
        </li>
    </ul>
</li>
<li {!! (Request::is('admin/stations') || Request::is('admin/stations/create') || Request::is('admin/stations/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Stations</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/stations') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/stations') }}">
                <i class="fa fa-angle-double-right"></i>
                Stations
            </a>
        </li>
        <li {!! (Request::is('admin/stations/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/stations/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Add New Station
            </a>
        </li>
    </ul>
</li>
<li {!! (Request::is('admin/station_logs') || Request::is('admin/station_logs/create') || Request::is('admin/station_logs/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">StationLogs</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/station_logs') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/station_logs') }}">
                <i class="fa fa-angle-double-right"></i>
                StationLogs
            </a>
        </li>
        <li {!! (Request::is('admin/station_logs/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/station_logs/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Add New StationLog
            </a>
        </li>
    </ul>
</li>
<li {!! (Request::is('admin/phones') || Request::is('admin/phones/create') || Request::is('admin/phones/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Phones</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/phones') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/phones') }}">
                <i class="fa fa-angle-double-right"></i>
                Phones
            </a>
        </li>
        <li {!! (Request::is('admin/phones/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/phones/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Add New Phone
            </a>
        </li>
    </ul>
</li><li {!! (Request::is('admin/token_packages') || Request::is('admin/token_packages/create') || Request::is('admin/token_packages/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Token_packages</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/token_packages') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/token_packages') }}">
                <i class="fa fa-angle-double-right"></i>
                Token_packages
            </a>
        </li>
        <li {!! (Request::is('admin/token_packages/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/token_packages/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Add New Token_package
            </a>
        </li>
    </ul>
</li><li {!! (Request::is('admin/token_packages') || Request::is('admin/token_packages/create') || Request::is('admin/token_packages/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Token_packages</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/token_packages') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/token_packages') }}">
                <i class="fa fa-angle-double-right"></i>
                Token_packages
            </a>
        </li>
        <li {!! (Request::is('admin/token_packages/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/token_packages/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Add New Token_package
            </a>
        </li>
    </ul>
</li>