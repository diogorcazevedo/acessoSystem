<!DOCTYPE html>
<html lang="pt-br">
@include('layouts.site_structure.head.admin')
<body>
<div>

@include('layouts.client.menus.left')

@include('layouts.client.menus.top')

    <!-- FIM DA BARRA LATERAL ESQUERDA-->
    <div class="col-lg-10" style="margin-top: 10%;">
        @yield('content')
    </div>
    <!--  col-lg-10-->

<footer style="clear: both; margin-top: 10%;" id="footer"><!--Footer-->

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2015 Acesso Público. All rights reserved.</p>

                <p class="pull-right">Designed by <span><a target="_blank" href="https://www.acessopublico.org.br/">ACESSO</a></span>
                </p>
            </div>
        </div>
    </div>

</footer>
<!--/Footer-->


<!-- JavaScripts -->
<script src="{{url(elixir('js/all.js'))}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>


</body>
</html>