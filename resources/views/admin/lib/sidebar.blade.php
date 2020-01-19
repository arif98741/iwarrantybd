<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">

            <li>
                <a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>

            <li>
                <a href="{{ url('/') }}" target="_blank"><i class="fa fa-globe fa-fw"></i> Visit Site</a>
            </li>


            <li>
                <a href="#"><i class="fa fa-sticky-note fa-fw"></i> Test</a>
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
                        <a href="{{ route('admin.subscription','pending') }}">Subscription Pending</a>
                    </li>

                    <li>
                        <a href="{{ route('admin.subscription','approved') }}">Subscription Approved</a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-users fa-fw"></i> Vendor<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.vendor.index') }}">Vendor List</a>
                    </li>


                    <li>
                        <a href="{{ route('admin.vendor.create') }}">Add Vendor</a>
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
                <a href="#"><i class="fa fa-university fa-fw"></i> Service Center<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.center.index') }}">Service Center List</a>
                    </li>


                    <li>
                        <a href="{{ route('admin.center.create') }}">Add Service Center</a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-question fa-fw"></i> FAQ<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.faq.index') }}">FAQ List</a>
                    </li>


                    <li>
                        <a href="{{ route('admin.faq.create') }}">Add FAQ</a>
                    </li>



                </ul>
            </li>


            <li>
                <a href="{{ route('admin.setting') }}"><i class="fa fa-cog fa-fw"></i> Setting</a>
            </li>
        </ul>
    </div>
</div>