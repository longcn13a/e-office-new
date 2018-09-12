<header id="header" class="header">
    <div class="header-menu">
        <div class="col-sm-10 pdl5 pdr5">
            <div class="inline">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa-angle-left"></i></a>
                <a href="{{url('/')}}"><img class="logo" src="{{asset('media/logo-eOffice.png')}}" alt=""></a>
                <div class="header-left right-menu collapse navbar-collapse" id="right-menu">
                    <style>
                        @media screen and (min-width: 576px) {
                            .right-panel header.header div.header-left {
                                display: block;
                            }
                        }
                    </style>
                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle btn-module-link" href="/w76f2142" type="button"
                                id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>Tin tức nội bộ</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                        </div>
                    </div>
                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>Quản lý công việc</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                        </div>
                    </div>
                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>Lịch làm việc</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                        </div>
                    </div>
                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle btn-module-link" href="/W76F2130" type="button"
                                id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>Quản lý hợp đồng</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                        </div>
                    </div>
                    <div class="dropdown for-notification" style="display: none;">
                        <button class="btn btn-secondary dropdown-toggle btn-module-link" href="/W76F2150" type="button"
                                id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>Hồ sơ - tài liệu</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                        </div>
                    </div>
                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle btn-module-link" href="/bi" type="button"
                                id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>Tài liệu số</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                        </div>
                    </div>
                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>Ứng dụng tiện ích</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                            <a class="dropdown-item" href="#">
                                <p>Business Intelligent</p>
                            </a>
                            <a class="dropdown-item" href="#">
                                <p>Employee Self Service</p>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <p>Manager Self Service</p>
                            </a>
                            <a class="dropdown-item media" href="/w76f2140">
                                <p>{{Helpers::getRS('Quan_ly_ban_tin')}}</p>
                            </a>
                            <a class="dropdown-item media" href="/w76f2200">
                                <p>{{Helpers::getRS('Danh_sach_phong_hop')}}</p>
                            </a>
                        </div>
                    </div>
                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>Hệ thống</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                            <a class="dropdown-item" href="{{url('/w76f1555')}}">
                                <p>Danh mục dùng chung</p>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-sm-2">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="{{ asset('media/default_user_icon.png') }}"
                         alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                    <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                    <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                    <a class="nav-link" href="/logout/post"><i class="fa fa-power -off"></i>Logout</a>
                </div>
            </div>

        </div>
    </div>

</header>
<script>
    var $ = jQuery.noConflict();
    $(document).ready(function () {
        $(".btn-module-link").click(function () {
            var linkTo = $(this).attr("href");
            window.location.href = linkTo;
        });
    });
</script>
