<!DOCTYPE html>
<html lang="pt-br">
@include('layouts.site_structure.head.admin')
<body>
        <div>
            @include('layouts.admin.menus.left')
            @include('layouts.admin.menus.top')

            <div class="col-lg-10" style="margin-top: 5%;">
                @include('layouts.site_structure.msg.alert_primary')
                <div style="margin-bottom: 5%;" class="col-lg-offset-1 col-lg-10 padding-right">
                    @yield('content')
                </div>
            </div>
        </div>

    @yield('footer')

    <!-- JavaScripts -->
    <script src="{{url(elixir('js/all.js'))}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>


</body>
</html>