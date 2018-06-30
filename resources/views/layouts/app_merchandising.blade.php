<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">




@section('htmlheader')
    @include('layouts.partials.htmlheader-landing')
@show

@section('scripts')
    @include('layouts.partials.scripts')
@show

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="tm-isblog">
<div class="wrapper">

    @include('layouts.partials.mainheader-landing')
   

     <section class="content">

        <!-- Your Page Content Here -->
        @yield('main-content')
    </section><!-- /.content -->



</div>

    @include('layouts.partials.footer-landing')

</div><!-- ./wrapper -->


</body>
</html>
