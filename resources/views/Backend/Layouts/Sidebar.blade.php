<!-- =========== sidebar-left ============= -->
<div class="sb2-1">
    <!--== USER INFO ==-->
    <div class="sb2-12">
        <ul>
            <li>
                @if($admin->image ?? '')
                <img src="{{asset('public/Cms/Profile/'.$admin->image ?? '')}}" alt="">
                @else
                <img src="{{asset('public/user.jpg')}}" alt="">
                @endif
            </li>
            <li>
                <h5>{{ucfirst($admin->name ?? '')}} <span> ({{ucfirst($admin->type ?? '')}})</span></h5>
            </li>
            <li></li>
        </ul>
    </div>
    <!--== LEFT MENU ==-->
    <div class="sb2-13">
        <ul class="collapsible" data-collapsible="accordion">
            <li><a href="{{url('admin/dashboard')}}" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
            </li>
            {{-- <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-list-ul" aria-hidden="true"></i> Listing</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="listing-all.html">All listing</a>
                        </li>
                        <li><a href="listing-add.html">Add New listing</a>
                        </li>
                        <li><a href="listing-cat-all.html">All listing Categories</a>
                        </li>
                        <li><a href="listing-cat-add.html">Add listing Categories</a>
                        </li>
                    </ul>
                </div>
            </li> --}}
            @if($admin->type === 'managing_director' || $admin->type === 'superadmin')
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Users</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url('add-user')}}">Add New user</a>
                        </li>
                        <li><a href="{{url('user-list')}}">All Users</a>
                        </li>

                    </ul>
                </div>
            </li>
            @endif
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-picture-o" aria-hidden="true"></i>Hotels</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url('create-hotel')}}">Add Hotel</a>
                        </li>

                        <li><a href="{{url('hotel-list')}}">Hotel List</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-picture-o" aria-hidden="true"></i>Room</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url('add-room')}}">Add Room</a>
                        </li>
                        <li><a href="{{url('room-alist')}}">All Room</a>
                        </li>
                        <li><a href="{{url('add-room_type')}}">Create room type</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="{{url('guests')}}" ><i class="fa fa-bookmark" aria-hidden="true"></i>guest-list</a>
                        <li><a href="{{url('guest_bookings')}}" ><i class="fa fa-bold" aria-hidden="true"></i>All Bookings</a>

            <!--<li><a href="{{url('room-availability-overview')}}" ><i class="fa fa-h-square" aria-hidden="true"></i>All Room Availability</a>-->
            <!--</li>-->
            <!--<li><a href="{{url('room-booking')}}" ><i class="fa fa-bookmark" aria-hidden="true"></i>Assign Room</a>-->
            <!--</li>-->

            <!--</li>-->
            <!--<li><a href="{{url('client-query')}}" ><i class="fa fa-address-card-o" aria-hidden="true"></i>Web Customers Query</a>-->
            <!--</li>-->



            <!--<li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-umbrella" aria-hidden="true"></i> Tour Packages</a>-->
            <!--    <div class="collapsible-body left-sub-menu">-->
            <!--        <ul>-->
            <!--            <li><a href="package-all.html">All Packages</a>-->
            <!--            </li>-->
            <!--            <li><a href="package-add.html">Add New Package</a>-->
            <!--            </li>-->
            <!--            <li><a href="package-cat-all.html">All Package Categories</a>-->
            <!--            </li>-->
            <!--            <li><a href="package-cat-add.html">Add Package Categories</a>-->
            <!--            </li>-->
            <!--        </ul>-->
            <!--    </div>-->
            <!--</li>-->

            <!--<li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-h-square" aria-hidden="true"></i> Hotels</a>-->
            <!--    <div class="collapsible-body left-sub-menu">-->
            <!--        <ul>-->
            <!--            <li><a href="hotel-all.html">All Hotels</a>-->
            <!--            </li>-->
            <!--            <li><a href="hotel-add.html">Add New Hotel</a>-->
            <!--            </li>-->
            <!--            <li><a href="hotel-room-type-all.html">Room Type</a>-->
            <!--            </li>-->
            <!--            <li><a href="hotel-room-type-add.html">Add Room Type</a>-->
            <!--            </li>-->
            <!--        </ul>-->
            <!--    </div>-->
            <!--</li>-->

            <!--<li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-calendar-o" aria-hidden="true"></i> Events</a>-->
            <!--    <div class="collapsible-body left-sub-menu">-->
            <!--        <ul>-->
            <!--            <li><a href="event-all.html">All Events</a>-->
            <!--            </li>-->
            <!--            <li><a href="event-add.html">Add New Event</a>-->
            <!--            </li>-->
            <!--        </ul>-->
            <!--    </div>-->
            <!--</li>-->
            <!--<li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-braille" aria-hidden="true"></i> Ui-Kits</a>-->
            <!--    <div class="collapsible-body left-sub-menu">-->
            <!--        <ul>-->
            <!--            <li><a href="ui-form.html">ui-form</a>-->
            <!--            </li>-->
            <!--            <li><a href="ui-kit.html">ui-kit</a>-->
            <!--            </li>-->
            <!--            <li><a href="ui-table.html">ui-table</a>-->
            <!--            </li>-->
            <!--            <li><a href="ui-pre-load.html">ui-pre-load</a>-->
            <!--            </li>-->
            <!--            <li><a href="ui-tab.html">ui-tab</a>-->
            <!--            </li>-->
            <!--            <li><a href="ui-icons.html">ui-icons</a>-->
            <!--            </li>-->
            <!--            <li><a href="ui-collapsible.html">ui-collapsible</a>-->
            <!--            </li>-->
            <!--        </ul>-->
            <!--    </div>-->
            <!--</li>-->
            <!--<li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-usd" aria-hidden="true"></i> Discounts</a>-->
            <!--    <div class="collapsible-body left-sub-menu">-->
            <!--        <ul>-->
            <!--            <li><a href="discount.html">All Discounts</a>-->
            <!--            </li>-->
            <!--            <li><a href="discount-add.html">Add New Discounts</a>-->
            <!--            </li>-->
            <!--        </ul>-->
            <!--    </div>-->
            <!--</li>-->
            <!--<li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-tags" aria-hidden="true"></i> Offers</a>-->
            <!--    <div class="collapsible-body left-sub-menu">-->
            <!--        <ul>-->
            <!--            <li><a href="offers.html">All Offers</a>-->
            <!--            </li>-->
            <!--            <li><a href="offers-add.html">Add New Offers</a>-->
            <!--            </li>-->
            <!--        </ul>-->
            <!--    </div>-->
            <!--</li>-->
            <!--<li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-ticket" aria-hidden="true"></i> Booking & Enquiry</a>-->
            <!--    <div class="collapsible-body left-sub-menu">-->
            <!--        <ul>-->
            <!--            <li><a href="hotel-booking-all.html">Hotel</a>-->
            <!--            </li>-->
            <!--            <li><a href="package-booking-all.html">Package</a>-->
            <!--            </li>-->
            <!--            <li><a href="sight-see-booking-all.html">Sight Seeings</a>-->
            <!--            </li>-->
            <!--            <li><a href="event-booking-all.html">Events</a>-->
            <!--            </li>-->
            <!--        </ul>-->
            <!--    </div>-->
            <!--</li>-->
            <!--<li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-rss" aria-hidden="true"></i> Blog & Articals</a>-->
            <!--    <div class="collapsible-body left-sub-menu">-->
            <!--        <ul>-->
            <!--            <li><a href="blog-all.html">All Blogs</a>-->
            <!--            </li>-->
            <!--            <li><a href="blog-add.html">Add Blog</a>-->
            <!--            </li>-->
            <!--        </ul>-->
            <!--    </div>-->
            <!--</li>-->
            <!--<li><a href="social-media.html"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Social Media</a>-->
            <!--</li>-->
            <li><a href="{{url('admin/logout')}}" ><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
            </li>
        </ul>
    </div>
</div>
<!-- End sidebar-left -->
