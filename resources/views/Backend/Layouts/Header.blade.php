<!-- ===========Top-Bar============= -->
<div class="container-fluid sb1">
    <div class="row">
        <!--== LOGO ==-->
        <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
            <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
            <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
            <a href="index.html" class="logo">
               
                <img src="{{asset('public/images/hotel-management-logo.png')}}" alt="" />
            </a>
        </div>
        <!--== SEARCH ==-->
        <div class="col-md-6 col-sm-6 mob-hide">
            <form class="app-search">
                <input type="text" placeholder="Search..." class="form-control">
                <a href="#"><i class="fa fa-search"></i></a>
            </form>
        </div>
        <!--== NOTIFICATION ==-->
        <div class="col-md-2 tab-hide">
            <div class="top-not-cen">
                <a class='waves-effect btn-noti' href='#'><i class="fa fa-commenting-o" aria-hidden="true"></i><span>5</span></a>
                <a class='waves-effect btn-noti' href='#'><i class="fa fa-envelope-o" aria-hidden="true"></i><span>5</span></a>
                <a class='waves-effect btn-noti' href='#'><i class="fa fa-tag" aria-hidden="true"></i><span>5</span></a>
            </div>
        </div>
        <!--== MY ACCCOUNT ==-->
        <div class="col-md-2 col-sm-3 col-xs-6">
            <!-- Dropdown Trigger -->
            <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'>
                @if($admin->image)
                <img src="{{asset('public/Cms/Profile/'.$admin->image)}}" alt="">
                @else
                <img src="{{asset('public/user.jpg')}}" alt="">
                @endif
                My Account <i class="fa fa-angle-down" aria-hidden="true">

                </i>
            </a>

            <!-- Dropdown Structure -->
            <ul id='top-menu' class='dropdown-content top-menu-sty'>
                <li><a href="setting.html" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Admin Setting</a>
                </li>
                {{-- <li><a href="listing-all.html" class="waves-effect"><i class="fa fa-list-ul" aria-hidden="true"></i> Listings</a>
                </li>
                <li><a href="hotel-all.html" class="waves-effect"><i class="fa fa-building-o" aria-hidden="true"></i> Hotels</a>
                </li>
                <li><a href="package-all.html" class="waves-effect"><i class="fa fa-umbrella" aria-hidden="true"></i> Tour Packages</a>
                </li>
                <li><a href="event-all.html" class="waves-effect"><i class="fa fa-flag-checkered" aria-hidden="true"></i> Events</a>
                </li>
                <li><a href="offers.html" class="waves-effect"><i class="fa fa-tags" aria-hidden="true"></i> Offers</a>
                </li>
                <li><a href="user-add.html" class="waves-effect"><i class="fa fa-user-plus" aria-hidden="true"></i> Add New User</a>
                </li>
                <li><a href="#" class="waves-effect"><i class="fa fa-undo" aria-hidden="true"></i> Backup Data</a>
                </li> --}}
                <li class="divider"></li>
                <li><a href="{{url('admin/logout')}}" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End top-bar -->
