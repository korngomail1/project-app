

<?php
$path = '_admin';
$membership = [
    [
        'name' => '',
        'text' => 'Application Form',
        'icon' => 'fas fa-user-circle',
        'route'=> 'membership-register',
        'link' =>  url($path.'/membership-register'),
    ],
    [
        'name' => '',
        'text' => 'Student List',
        'icon' => 'fas fa-user',
        'route'=> 'student',
        'link' =>  url($path.'/student'),
    ],
    [
        'name' => '',
        'text' => 'Membership',
        'icon' => 'fas fa-id-card',
        'route'=> 'membership',
        'link' =>  url($path.'/membership'),
    ],
    [
        'name' => '',
        'text' => 'Trial Student',
        'icon' => 'fas fa-user-clock',
        'route'=> 'trial-student',
        'link' =>  url($path.'/trial-student'),
    ],
    [
        'name' => '',
        'text' => 'Birthday',
        'icon' => 'fas fa-user-clock',
        'route'=> 'birthday',
        'link' => url($path.'/birthday')
    ],
    // [
    //     'name' => '',
    //     'text' => 'ต่ออายุสมาชิก',
    //     'icon' => 'fas fa-user-plus',
    //     'route'=> '',
    //     'link' =>  '',
    // ],
    // [
    //     'name' => '',
    //     'text' => 'Expire soon',
    //     'icon' => 'fas fa-user-times',
    //     'route'=> 'membership-expiration',
    //     'link' => url($path.'/membership-expiration'),
    // ],

];
$course = [
    [
        'name' => '',
        'text' => 'Course',
        'icon' => 'fas fa-file-code',
        'route'=> 'course',
        'link' => url($path.'/course'),
    ],
    [
        'name' => '',
        'text' => 'Course Enrollment',
        'icon' => 'fas fa-registered',
        'route'=> 'register_course',
        'link' =>  url($path.'/register_course'),
    ],
    [
        'name' => '',
        'text' => 'Class Schedule',
        'icon' => 'fas fa-users',
        'route'=> 'class-schedule',
        'link' => url($path.'/class-schedule'),
    ],
    [
        'name' => '',
        'text' => 'Class Attendance',
        'icon' => 'fas fa-list',
        'route'=> 'class-attendance',
        'link' => url($path.'/class-attendance'),
    ],
    [
        'name' => '',
        'text' => 'Class Calendar',
        'icon' => 'fas fa-calendar-check',
        'route'=> 'calendar',
        'link' =>  url($path.'/calendar'),
    ],
    [
        'name' => '',
        'text' => 'Study Log',
        'icon' => 'fas fa-history',
        'route'=> 'study-log',
        'link' =>  url($path.'/study-log'),
    ],
    // [
    //     'name' => '',
    //     'text' => 'Track Sheet',
    //     'icon' => 'fas fa-table',
    //     'route'=> '',
    //     'link' =>  '',
    // ],
];
// $marketing = [
//     [
//         'name' => '',
//         'text' => 'Promotion',
//         'icon' => 'fas fa-percent',
//         'route'=> '',
//         'link' =>  '',
//     ],
// ];
$payment = [
    [
        'name' => '',
        'text' => 'Order',
        'icon' => 'fas fa-clipboard-list',
        'route'=> 'order',
        'link' => url($path.'/order?payment_status=ALL'),
    ],
    [
        'name' => '',
        'text' => 'Receipt',
        'icon' => 'fas fa-money-check',
        'route'=> 'receipt',
        'link' =>  url($path.'/receipt?payment_status=ALL'),
    ],
];
$leotard_order = [
    [
        'name' => '',
        'text' => 'Leotard',
        'icon' => 'fas fa-tshirt',
        'route'=> 'leotard',
        'link' =>  url($path.'/leotard'),
    ],
];
// $merchandise = [
//     [
//         'name' => '',
//         'text' => 'Products',
//         'icon' => 'fas fa-tshirt',
//         'route'=> '',
//         'link' => '',
//     ],
// ];
// $user = [
//     [
//         'name' => '',
//         'text' => 'User',
//         'icon' => 'fas fa-users-cog',
//         'route'=> '',
//         'link' =>  '',
//     ],
// ];
$report = [
    [
        'name' => '',
        'text' => 'Sales Report',
        'icon' => 'fas fa-file',
        'route'=> 'sales-report',
        'link' =>  url($path.'/sales-report'),
    ],
    [
        'name' => '',
        'text' => 'Annual Sales Report',
        'icon' => 'fas fa-file',
        'route'=> 'annual-sales',
        'link' =>  url($path.'/annual-sales'),
    ],
];
$user_config = [
    [
        'name' => '',
        'text' => 'Coach',
        'icon' => 'fas fa-user',
        'route'=> 'coach',
        'link' =>  url($path.'/coach'),
    ],
    [
        'name' => '',
        'text' => 'Config',
        'icon' => 'fas fa-user',
        'route'=> 'config',
        'link' =>  url($path.'/config'),
    ],
];

?>

<div class="main-sidebar sidebar-style-2 sidebar-bg">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand text-center">
            <div style="">
                <img src="/image/GAB_logo.jpg" style="width: 6em;">
            </div>
            <div class="">
                <span><b style="font-size: 18px">
                    @if(Auth::user()->Role[0]->role_id == 2) TEACHER @else ADMIN @endif

                    </b>
                </span>
            </div>
        </div>
        <hr>
        <ul class="sidebar-menu">
            @if(Auth::user()->Role[0]->role_id == 2)
            <li
                id="menu-"
                data-menu-name=""
                data-menu-url=""
                class="{{ request()->is('_admin/class-attendance')
                    || request()->is('_admin/class-attendance/*')
                    ? 'menu-active' : '' }}"
            >
                <a class="nav-link" href="{{url($path.'/class-attendance')}}" {{!empty($item['_blank']) ? 'target="_blank"' : null}}>
                    <i class="fas fa-list" style="font-size: 16px;"></i>
                <span>Class Attendance</span>
                </a>
            </li>
            @else
            {{-- MEMBERSHIP --}}
            <li>
                <a class="nav-link bg-white" style="padding-left:0px">
                    <i></i>
                    <span><b style="font-size: 18px; color: black !important;">MEMBERSHIP</b></span>
                </a>
            </li>
            @foreach($membership as $key => $item)
                <li
                    id="menu-{{$item['name']}}"
                    data-menu-name="{{$item['name']}}"
                    data-menu-url="{{$item['link']}}"
                    class="{{ request()->is('_admin/'.$item['route'])
                        || request()->is('_admin/'.$item['route'].'/*')
                        ? 'menu-active' : '' }}"
                >
                    <a class="nav-link" href="{{$item['link']}}" {{!empty($item['_blank']) ? 'target="_blank"' : null}}>
                        <i class="{{$item['icon']}}" style="font-size: 16px;"></i>
                    <span>{{$item['text']}}</span>
                    </a>
                </li>
            @endforeach
            {{-- COURSE --}}
            <li>
                <a class="nav-link bg-white" style="padding-left:0px; color: black !important;">
                    <i></i>
                    <span><b style="font-size: 18px">COURSE</b></span>
                </a>
            </li>
            @foreach($course as $key => $item)
                <li
                    id="menu-{{$item['name']}}"
                    data-menu-name="{{$item['name']}}"
                    data-menu-url="{{$item['link']}}"
                    class="{{ request()->is('_admin/'.$item['route'])
                        || request()->is('_admin/'.$item['route'].'/*')
                        ? 'menu-active' : '' }}"
                >
                    <a class="nav-link" href="{{$item['link']}}" {{!empty($item['_blank']) ? 'target="_blank"' : null}}>
                        <i class="{{$item['icon']}}" style="font-size: 16px;"></i>
                    <span>{{$item['text']}}</span>
                    </a>
                </li>
            @endforeach
            {{-- Marketing --}}
            {{-- <li>
                <a class="nav-link bg-white" style="padding-left:0px; color: black !important;">
                    <i></i>
                    <span><b style="font-size: 18px">Marketing</b></span>
                </a>
            </li>
            @foreach($marketing as $key => $item)
                <li
                    id="menu-{{$item['name']}}"
                    data-menu-name="{{$item['name']}}"
                    data-menu-url="{{$item['link']}}"
                    class="{{ request()->is('_admin/'.$item['route'])
                        || request()->is('_admin/'.$item['route'].'/*')
                        ? 'menu-active' : '' }}"
                >
                    <a class="nav-link" href="{{$item['link']}}" {{!empty($item['_blank']) ? 'target="_blank"' : null}}>
                        <i class="{{$item['icon']}}" style="font-size: 16px;"></i>
                    <span>{{$item['text']}}</span>
                    </a>
                </li>
            @endforeach --}}

            {{-- Payment --}}
            <li>
                <a class="nav-link bg-white" style="padding-left:0px; color: black !important;">
                    <i></i>
                    <span><b style="font-size: 18px">Payment</b></span>
                </a>
            </li>
            @foreach($payment as $key => $item)
                <li
                    id="menu-{{$item['name']}}"
                    data-menu-name="{{$item['name']}}"
                    data-menu-url="{{$item['link']}}"
                    class="{{ request()->is('_admin/'.$item['route'])
                        || request()->is('_admin/'.$item['route'].'/*')
                        ? 'menu-active' : '' }}"
                >
                    <a class="nav-link" href="{{$item['link']}}" {{!empty($item['_blank']) ? 'target="_blank"' : null}}>
                        <i class="{{$item['icon']}}" style="font-size: 16px;"></i>
                    <span>{{$item['text']}}</span>
                    </a>
                </li>
            @endforeach
            {{-- leotard_order --}}
            <li>
                <a class="nav-link bg-white" style="padding-left:0px; color: black !important;">
                    <i></i>
                    <span><b style="font-size: 18px">Leotard Order</b></span>
                </a>
            </li>
            @foreach($leotard_order as $key => $item)
                <li
                    id="menu-{{$item['name']}}"
                    data-menu-name="{{$item['name']}}"
                    data-menu-url="{{$item['link']}}"
                    class="{{ request()->is('_admin/'.$item['route'])
                        || request()->is('_admin/'.$item['route'].'/*')
                        ? 'menu-active' : '' }}"
                >
                    <a class="nav-link" href="{{$item['link']}}" {{!empty($item['_blank']) ? 'target="_blank"' : null}}>
                        <i class="{{$item['icon']}}" style="font-size: 16px;"></i>
                    <span>{{$item['text']}}</span>
                    </a>
                </li>
            @endforeach

            {{-- Report --}}
            <li>
                <a class="nav-link bg-white" style="padding-left:0px; color: black !important;">
                    <i></i>
                    <span><b style="font-size: 18px">Report</b></span>
                </a>
            </li>
            @foreach($report as $key => $item)
                <li
                    id="menu-{{$item['name']}}"
                    data-menu-name="{{$item['name']}}"
                    data-menu-url="{{$item['link']}}"
                    class="{{ request()->is('_admin/'.$item['route'])
                        || request()->is('_admin/'.$item['route'].'/*')
                        ? 'menu-active' : '' }}"
                >
                    <a class="nav-link" href="{{$item['link']}}" {{!empty($item['_blank']) ? 'target="_blank"' : null}}>
                        <i class="{{$item['icon']}}" style="font-size: 16px;"></i>
                    <span>{{$item['text']}}</span>
                    </a>
                </li>
            @endforeach


              {{-- user_config --}}
              <li>
                <a class="nav-link bg-white" style="padding-left:0px; color: black !important;">
                    <i></i>
                    <span><b style="font-size: 18px">User Config</b></span>
                </a>
            </li>
            @foreach($user_config as $key => $item)
                <li
                    id="menu-{{$item['name']}}"
                    data-menu-name="{{$item['name']}}"
                    data-menu-url="{{$item['link']}}"
                    class="{{ request()->is('_admin/'.$item['route'])
                        || request()->is('_admin/'.$item['route'].'/*')
                        ? 'menu-active' : '' }}"
                >
                    <a class="nav-link" href="{{$item['link']}}" {{!empty($item['_blank']) ? 'target="_blank"' : null}}>
                        <i class="{{$item['icon']}}" style="font-size: 16px;"></i>
                    <span>{{$item['text']}}</span>
                    </a>
                </li>
            @endforeach
            @endif

            {{-- merchandise --}}
            {{-- <li>
                <a class="nav-link bg-white" style="padding-left:0px; color: black !important;">
                    <i></i>
                    <span><b style="font-size: 18px">Merchandise</b></span>
                </a>
            </li>
            @foreach($merchandise as $key => $item)
                <li
                    id="menu-{{$item['name']}}"
                    data-menu-name="{{$item['name']}}"
                    data-menu-url="{{$item['link']}}"
                    class="{{ request()->is('_admin/'.$item['route'])
                        || request()->is('_admin/'.$item['route'].'/*')
                        ? 'menu-active' : '' }}"
                >
                    <a class="nav-link" href="{{$item['link']}}" {{!empty($item['_blank']) ? 'target="_blank"' : null}}>
                        <i class="{{$item['icon']}}" style="font-size: 16px;"></i>
                    <span>{{$item['text']}}</span>
                    </a>
                </li>
            @endforeach --}}

            {{-- User --}}
            {{-- <li>
                <a class="nav-link" style="padding-left:0px">
                    <i></i>
                    <span><b style="font-size: 18px">User</b></span>
                </a>
            </li>
            @foreach($user as $key => $item)
                <li
                    id="menu-{{$item['name']}}"
                    data-menu-name="{{$item['name']}}"
                    data-menu-url="{{$item['link']}}"
                    class="{{ request()->is('_admin/'.$item['route'])
                        || request()->is('_admin/'.$item['route'].'/*')
                        ? 'menu-active' : '' }}"
                >
                    <a class="nav-link" href="{{$item['link']}}" {{!empty($item['_blank']) ? 'target="_blank"' : null}}>
                        <i class="{{$item['icon']}}" style="font-size: 16px;"></i>
                    <span>{{$item['text']}}</span>
                    </a>
                </li>
            @endforeach --}}

        </ul>
    </aside>
</div>
