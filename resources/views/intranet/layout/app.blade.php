<!doctype html>
<html lang="es">
<!--begin::Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/vnd.microsoft.icon" href="{{ asset('imagenes/sistema/favicon.ico') }}" sizes="64x64">
    <title>Mayo-Tech</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="AdminLTE v4 | Dashboard" />
    <meta name="author" content="ColorlibHQ" />
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS." />
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard" />

    <!--end::Primary Meta Tags-->
    <!--begin::Fonts-->
    @include('intranet.layout.head')
    @yield('cssPagina')
</head>
<!--end::Head-->
<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
        <!--begin::Header-->
        @include('intranet.layout.menusup')
        <!--end::Header-->
        <!--begin::Sidebar-->
        @include('intranet.layout.aside')
        <!--end::Sidebar-->
        <!--begin::App Main-->
        <main class="app-main">
            <!--begin::App Content Header-->
            <div class="app-content-header">
                <!--begin::Container-->
                <div class="container-fluid">
                    <!--begin::Row-->
                    <div class="row">
                        <div class="12 col-md-6">
                            <h3 class="mb-0">
                                @yield('tituloPagina')
                            </h3>
                        </div>
                        <div class="12 col-md-6">
                            <ol class="breadcrumb float-md-end">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                @yield('breadcrumb')
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="d-grid gap-2 d-md-block float-md-end">
                                @yield('botonesCard')
                            </div>
                        </div>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::App Content Header-->
            <!--begin::App Content-->
            <div class="app-content">
                <!--begin::Container-->
                <div class="container-fluid">
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-8">
                            @include('includes.error-form')
                            @include('includes.mensaje')
                        </div>
                    </div>
                    <!--begin::Row-->
                    @yield('cuerpoPagina')
                    <!--end::Row-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::App Content-->
        </main>
        <!--end::App Main-->
        <!--begin::Footer-->
        <footer class="app-footer">
            @include('intranet.layout.footer')
        </footer>
        <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    @include('intranet.layout.script')
    @yield('scriptPagina')
    <!--end::Script-->
    @yield('modalesPagina')
</body>
<!--end::Body-->
</html>
