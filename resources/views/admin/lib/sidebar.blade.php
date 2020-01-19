<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">

            <li>
                <a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>

            <li>
                <a href="{{ url('/') }}" target="_blank"><i class="fa fa-earth fa-fw"></i> Visit Site</a>
            </li>


            <li>
                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Test</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-list fa-fw"></i> Claim Request<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.claim',0) }}">Pending Request</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.claim',1) }}">Complete Request</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-list fa-fw"></i> Subscriptions<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="panels-wells.html">Subscription List</a>
                    </li>
                    <li>
                        <a href="buttons.html">Pending Subscription</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-users fa-fw"></i> Subscriber<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.subscriber.index') }}">Subscriber List</a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-question fa-fw"></i> QA<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="panels-wells.html">QA List</a>
                    </li>

                </ul>
            </li>


            <li>
                <a href="{{ url('admin.settings') }}"><i class="fa fa-edit fa-fw"></i> Setting</a>
            </li>
        </ul>
    </div>
</div>