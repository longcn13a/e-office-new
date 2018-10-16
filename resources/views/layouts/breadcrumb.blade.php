<ol class="breadcrumb">

    <?php
    $title = isset($title) ? $title : "";
    ?>
    <li class="breadcrumb-item text-primary">
        <strong><a href="{{url('/')}}">Trang chủ</a></strong>
    </li>
    <li class="breadcrumb-item hide">
        <a href="#">Admin</a>
    </li>
    <li class="breadcrumb-item active ">{{$title}}</li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
            @yield('toolbar')

            <a class="btn hide" href="#">
                <i class="icon-speech"></i>
            </a>
            <a class="btn hide" href="./">
                <i class="icon-graph"></i>  Chuyển tiếp</a>
            <a class="btn hide" href="#">
                <i class="icon-settings"></i>  Chia sẽ</a>
        </div>
    </li>
</ol>