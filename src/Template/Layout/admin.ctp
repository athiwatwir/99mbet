<!-- set bodyTheme = "u-card-v1" -->



<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Title -->
        <title></title>

        <!-- Required Meta Tags Always Come First -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Favicon -->
        <link rel="shortcut icon" href="../../favicon.ico">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
        <!-- CSS Global Compulsory -->
        <?= $this->Html->css('/assets/vendor/bootstrap/bootstrap.css') ?>
        <!-- CSS Global Icons -->
        <?= $this->Html->css('/assets/vendor/icon-awesome/css/font-awesome.min.css') ?>
        <?= $this->Html->css('/assets/vendor/icon-line/css/simple-line-icons.css') ?>
        <?= $this->Html->css('/assets/vendor/icon-etlinefont/style.css') ?>
        <?= $this->Html->css('/assets/vendor/icon-line-pro/style.css') ?>
        <?= $this->Html->css('/assets/vendor/icon-hs/style.css') ?>
        <?= $this->Html->css('/assets/vendor/icon-material/material-icons.css') ?>

        <?= $this->Html->css('/admin_assets/vendor/hs-admin-icons/hs-admin-icons.css') ?>

        <?= $this->Html->css('/assets/vendor/animate.css') ?>
        <?= $this->Html->css('/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css') ?>

        <?= $this->Html->css('/admin_assets/vendor/flatpickr/dist/css/flatpickr.min.css') ?>
        <?= $this->Html->css('/admin_assets/vendor/bootstrap-select/css/bootstrap-select.min.css') ?>

        <?= $this->Html->css('/admin_assets/vendor/chartist-js/chartist.min.css') ?>
        <?= $this->Html->css('/admin_assets/vendor/chartist-js-tooltip/chartist-plugin-tooltip.css') ?>

        <?= $this->Html->css('/assets/vendor/fancybox/jquery.fancybox.min.css') ?>

        <?= $this->Html->css('/assets/vendor/hamburgers/hamburgers.min.css') ?>

        <!-- CSS Unify -->
        <?= $this->Html->css('/admin_assets/css/unify-admin.css') ?>

        <!-- CSS Customization -->
        <?= $this->Html->css('/assets/css/custom.css') ?>

        <!-- JS Global Compulsory -->
        <?= $this->Html->script('/admin_assets/vendor/jquery/jquery.min.js') ?>
        <?= $this->Html->script('/admin_assets/vendor/jquery-migrate/jquery-migrate.min.js') ?>

        <?= $this->Html->script('/assets/vendor/popper.min.js') ?>
        <?= $this->Html->script('/assets/vendor/bootstrap/bootstrap.min.js') ?>

        <?= $this->Html->script('/assets/vendor/cookiejs/jquery.cookie.js') ?>
        <?= $this->Html->script('/assets/vendor/jquery-validation/dist/jquery.validate.min.js') ?>
        
        
        
        
        
        <!-- jQuery UI Core -->
        <?= $this->Html->script('/assets/vendor/jquery-ui/ui/widget.js') ?>
        <?= $this->Html->script('/assets/vendor/jquery-ui/ui/version.js') ?>
        <?= $this->Html->script('/assets/vendor/jquery-ui/ui/keycode.js') ?>
        <?= $this->Html->script('/assets/vendor/jquery-ui/ui/position.js') ?>
        <?= $this->Html->script('/assets/vendor/jquery-ui/ui/unique-id.js') ?>
        <?= $this->Html->script('/assets/vendor/jquery-ui/ui/safe-active-element.js') ?>

        <!-- jQuery UI Helpers -->
        <?= $this->Html->script('/assets/vendor/jquery-ui/ui/widgets/menu.js') ?>
        <?= $this->Html->script('/assets/vendor/jquery-ui/ui/widgets/mouse.js') ?>

        <!-- jQuery UI Widgets -->
        <?= $this->Html->script('/assets/vendor/jquery-ui/ui/widgets/datepicker.js') ?>

        <!-- JS Plugins Init. -->
        <?= $this->Html->script('/assets/vendor/appear.js') ?>
        <?= $this->Html->script('/admin_assets/vendor/bootstrap-select/js/bootstrap-select.min.js') ?>
        <?= $this->Html->script('/admin_assets/vendor/flatpickr/dist/js/flatpickr.min.js') ?>
        <?= $this->Html->script('/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js') ?>

        <?= $this->Html->script('/admin_assets/vendor/chartist-js/chartist.min.js') ?>
        <?= $this->Html->script('/admin_assets/vendor/chartist-js-tooltip/chartist-plugin-tooltip.js') ?>
        <?= $this->Html->script('/admin_assets/vendor/fancybox/jquery.fancybox.min.js') ?>

        <!-- JS Unify -->
        <?= $this->Html->script('/assets/js/hs.core.js') ?>
        <?= $this->Html->script('/admin_assets/js/components/hs.side-nav.js') ?>
        <?= $this->Html->script('/assets/js/helpers/hs.hamburgers.js') ?>
        <?= $this->Html->script('/admin_assets/js/components/hs.range-datepicker.js') ?>

        <?= $this->Html->script('/assets/js/components/hs.datepicker.js') ?>
        <?= $this->Html->script('/assets/js/components/hs.dropdown.js') ?>
        <?= $this->Html->script('/assets/js/components/hs.scrollbar.js') ?>

        <?= $this->Html->script('/admin_assets/js/components/hs.area-chart.js') ?>
        <?= $this->Html->script('/admin_assets/js/components/hs.donut-chart.js') ?>
        <?= $this->Html->script('/admin_assets/js/components/hs.bar-chart.js') ?>

        <?= $this->Html->script('/assets/js/helpers/hs.focus-state.js') ?>
        <?= $this->Html->script('/admin_assets/js/components/hs.popup.js') ?>

        <?= $this->Html->script('/assets/js/helpers/hs.file-attachments.js') ?>
        <?= $this->Html->script('/assets/js/components/hs.file-attachement.js') ?>


        <!-- JS Custom -->
        <?= $this->Html->script('/assets/js/custom.js') ?>
    </head>

    <body>
        <!-- Header -->
        <header id="js-header" class="u-header u-header--sticky-top">
            <div class="u-header__section u-header__section--admin-dark g-min-height-65">
                <nav class="navbar no-gutters g-pa-0">
                    <div class="col-auto d-flex flex-nowrap u-header-logo-toggler g-py-12">
                        <!-- Logo -->
                        <a href="../index.html" class="navbar-brand d-flex align-self-center g-hidden-xs-down g-line-height-1 py-0 g-mt-5">

                            <svg class="u-header-logo" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-78.000000, -19.000000)">
                            <g transform="translate(78.000000, 19.000000)">
                            <path class="g-fill-primary" d="M0,0 L19.2941176,0 L19.2941176,0 C23.7123956,-8.11624501e-16 27.2941176,3.581722 27.2941176,8 L27.2941176,27.2941176 L8,27.2941176 L8,27.2941176 C3.581722,27.2941176 5.41083001e-16,23.7123956 0,19.2941176 L0,0 Z"></path>
                            <path class="g-fill-white" d="M21.036662,24.8752523 L20.5338647,22.6659916 L20.3510293,22.6659916 C19.8533083,23.4481246 19.1448284,24.0626484 18.2255681,24.5095816 C17.3063079,24.9565147 16.2575544,25.1799779 15.0792761,25.1799779 C13.0376043,25.1799779 11.5139914,24.672107 10.5083918,23.6563498 C9.50279224,22.6405927 9,21.1017437 9,19.0397567 L9,8.02392554 L12.6109986,8.02392554 L12.6109986,18.4150692 C12.6109986,19.7050808 12.8750915,20.6725749 13.4032852,21.3175807 C13.9314789,21.9625865 14.7593086,22.2850846 15.886799,22.2850846 C17.3901196,22.2850846 18.4947389,21.8356188 19.2006901,20.9366737 C19.9066413,20.0377286 20.2596117,18.5318912 20.2596117,16.4191164 L20.2596117,8.02392554 L23.855374,8.02392554 L23.855374,24.8752523 L21.036662,24.8752523 Z"></path>
                            <path class="g-fill-white" d="M44.4764678,24.4705882 L40.8807055,24.4705882 L40.8807055,14.1099172 C40.8807055,12.809748 40.6191519,11.8397145 40.096037,11.1997875 C39.5729221,10.5598605 38.7425531,10.2399018 37.6049051,10.2399018 C36.0914269,10.2399018 34.9842682,10.6868282 34.2833958,11.5806945 C33.5825234,12.4745608 33.2320924,13.9727801 33.2320924,16.0753974 L33.2320924,24.4705882 L29.6515664,24.4705882 L29.6515664,7.61926145 L32.4550421,7.61926145 L32.9578394,9.8285222 L33.1406747,9.8285222 C33.6485533,9.02607405 34.3697301,8.40647149 35.3042266,7.96969592 C36.2387232,7.53292034 37.27478,7.31453583 38.412428,7.31453583 C42.4551414,7.31453583 44.4764678,9.3714132 44.4764678,13.4852296 L44.4764678,24.4705882 Z M53.7357283,24.4705882 L50.1552023,24.4705882 L50.1552023,7.61926145 L53.7357283,7.61926145 L53.7357283,24.4705882 Z M49.9418944,3.15503112 C49.9418944,2.51510412 50.1171098,2.0224693 50.467546,1.67711187 C50.8179823,1.33175444 51.3182351,1.15907831 51.9683197,1.15907831 C52.5980892,1.15907831 53.0881846,1.33175444 53.4386208,1.67711187 C53.7890571,2.0224693 53.9642725,2.51510412 53.9642725,3.15503112 C53.9642725,3.76448541 53.7890571,4.24442346 53.4386208,4.59485968 C53.0881846,4.94529589 52.5980892,5.12051137 51.9683197,5.12051137 C51.3182351,5.12051137 50.8179823,4.94529589 50.467546,4.59485968 C50.1171098,4.24442346 49.9418944,3.76448541 49.9418944,3.15503112 Z M68.0077253,10.3313195 L63.8939294,10.3313195 L63.8939294,24.4705882 L60.2981671,24.4705882 L60.2981671,10.3313195 L57.525164,10.3313195 L57.525164,8.65532856 L60.2981671,7.55831633 L60.2981671,6.4613041 C60.2981671,4.47042009 60.7654084,2.99505497 61.699905,2.03516447 C62.6344015,1.07527397 64.0615189,0.595335915 65.9812999,0.595335915 C67.2408388,0.595335915 68.4800439,0.803563007 69.6989525,1.22002344 L68.7543031,3.93208145 C67.8705943,3.64766945 67.0275286,3.50546559 66.2250804,3.50546559 C65.4124747,3.50546559 64.820805,3.75686171 64.4500537,4.25966149 C64.0793023,4.76246128 63.8939294,5.51664965 63.8939294,6.52224922 L63.8939294,7.61926145 L68.0077253,7.61926145 L68.0077253,10.3313195 Z M69.0089215,7.61926145 L72.9094094,7.61926145 L76.3375727,17.1724096 C76.8556088,18.5335242 77.2009611,19.813359 77.3736398,21.0119524 L77.49553,21.0119524 C77.5869482,20.453286 77.7545456,19.7752783 77.9983273,18.9779089 C78.242109,18.1805396 79.5321012,14.3943616 81.8683427,7.61926145 L85.738358,7.61926145 L78.5315971,26.7103215 C77.2212704,30.2146837 75.0374253,31.9668385 71.9799963,31.9668385 C71.1877057,31.9668385 70.4157419,31.8805004 69.6640816,31.7078217 L69.6640816,28.8738734 C70.2024329,28.9957643 70.8169567,29.0567088 71.5076716,29.0567088 C73.2344587,29.0567088 74.4482703,28.056203 75.1491427,26.0551615 L75.7738303,24.4705882 L69.0089215,7.61926145 Z"></path>
                            </g>
                            </g>
                            </g>
                            </svg>



                        </a>
                        <!-- End Logo -->

                        <!-- End Sidebar Toggler -->
                    </div>


                    <!-- Messages/Notifications/Top Search Bar/Top User -->
                    <div class="col-auto d-flex g-py-12 g-pl-40--lg ml-auto">




                        <!-- Top User -->
                        <div class="col-auto d-flex g-pt-5 g-pt-0--sm g-pl-10 g-pl-20--sm">
                            <div class="g-pos-rel g-px-10--lg">
                                <a id="profileMenuInvoker" class="d-block" href="#!" aria-controls="profileMenu" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#profileMenu" data-dropdown-type="css-animation" data-dropdown-duration="300"
                                   data-dropdown-animation-in="fadeIn" data-dropdown-animation-out="fadeOut">

                                    <span class="g-pos-rel g-top-2">
                                        <span class="g-hidden-sm-down">Charlie Bailey</span>
                                        <i class="hs-admin-angle-down g-pos-rel g-top-2 g-ml-10"></i>
                                    </span>
                                </a>

                                <!-- Top User Menu -->
                                <ul id="profileMenu" class="g-pos-abs g-left-0 g-width-100x--lg g-nowrap g-font-size-14 g-py-20 g-mt-17 rounded" aria-labelledby="profileMenuInvoker">

                                    <li class="g-mb-10">
                                        <a class="media g-color-lightred-v2--hover g-py-5 g-px-20" href="#!">
                                            <span class="d-flex align-self-center g-mr-12">
                                                <i class="hs-admin-user"></i>
                                            </span>
                                            <span class="media-body align-self-center">My Profile</span>
                                        </a>
                                    </li>

                                    <li class="mb-0">
                                        <a class="media g-color-lightred-v2--hover g-py-5 g-px-20" href="#!">
                                            <span class="d-flex align-self-center g-mr-12">
                                                <i class="hs-admin-shift-right"></i>
                                            </span>
                                            <span class="media-body align-self-center">Sign Out</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Top User Menu -->
                            </div>
                        </div>
                        <!-- End Top User -->
                    </div>
                    <!-- End Messages/Notifications/Top Search Bar/Top User -->

                </nav>

            </div>
        </header>
        <!-- End Header -->


        <main class="container-fluid px-0 g-pt-65">
            <div class="row no-gutters g-pos-rel g-overflow-x-hidden">
                <!-- Sidebar Nav -->
                <div id="sideNav" class="col-auto u-sidebar-navigation-v1 u-sidebar-navigation--dark">
                    <ul id="sideNavMenu" class="u-sidebar-navigation-v1-menu u-side-nav--top-level-menu g-min-height-100vh mb-0">
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
                            <?php $link = '<span class="d-flex align-self-center g-font-size-18 g-mr-18"><i class="hs-admin-medall"></i></span><span class="media-body align-self-center">โปรโมชั่น</span>'; ?>
                            <?= $this->Html->link($link, ['controller' => 'articles', 'action' => 'index', 'promotion'], ['class' => 'media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12', 'escape' => false]) ?>
                        </li>

                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
                            <?php $link = '<span class="d-flex align-self-center g-font-size-18 g-mr-18"><i class="hs-admin-medall"></i></span><span class="media-body align-self-center">เคล็ดลับ</span>'; ?>
                            <?= $this->Html->link($link, ['controller' => 'articles', 'action' => 'index', 'trick'], ['class' => 'media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12', 'escape' => false]) ?>
                        </li>


                    </ul>
                </div>
                <!-- End Sidebar Nav -->


                <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
                    <div class="g-pa-20">
                        <?= $this->fetch('content'); ?>
                    </div>

                    <!-- Footer -->
                    <footer id="footer" class="u-footer--bottom-sticky g-bg-white g-color-gray-dark-v6 g-brd-top g-brd-gray-light-v7 g-pa-20">
                        <div class="row align-items-center">
                            <!-- Footer Nav -->
                            <div class="col-md-4 g-mb-10 g-mb-0--md">
                                <ul class="list-inline text-center text-md-left mb-0">

                                </ul>
                            </div>
                            <!-- End Footer Nav -->



                            <!-- Footer Copyrights -->
                            <div class="col-md-4 text-center text-md-right">
                                <small class="d-block g-font-size-default">&copy; 2018 sboclub99. All Rights Reserved.</small>
                            </div>
                            <!-- End Footer Copyrights -->
                        </div>
                    </footer>
                    <!-- End Footer -->
                </div>
            </div>
        </main>




        

        <!-- JS Plugins Init. -->
        <script>
            $(document).on('ready', function () {
                // initialization of custom select
                $('.js-select').selectpicker();

                // initialization of hamburger
                $.HSCore.helpers.HSHamburgers.init('.hamburger');

                // initialization of charts
                $.HSCore.components.HSAreaChart.init('.js-area-chart');
                $.HSCore.components.HSDonutChart.init('.js-donut-chart');
                $.HSCore.components.HSBarChart.init('.js-bar-chart');

                // initialization of sidebar navigation component
                $.HSCore.components.HSSideNav.init('.js-side-nav', {
                    afterOpen: function () {
                        setTimeout(function () {
                            $.HSCore.components.HSAreaChart.init('.js-area-chart');
                            $.HSCore.components.HSDonutChart.init('.js-donut-chart');
                            $.HSCore.components.HSBarChart.init('.js-bar-chart');
                        }, 400);
                    },
                    afterClose: function () {
                        setTimeout(function () {
                            $.HSCore.components.HSAreaChart.init('.js-area-chart');
                            $.HSCore.components.HSDonutChart.init('.js-donut-chart');
                            $.HSCore.components.HSBarChart.init('.js-bar-chart');
                        }, 400);
                    }
                });

                // initialization of range datepicker
                $.HSCore.components.HSRangeDatepicker.init('#rangeDatepicker, #rangeDatepicker2, #rangeDatepicker3');

                // initialization of datepicker
                $.HSCore.components.HSDatepicker.init('#datepicker', {
                    dayNamesMin: [
                        'SU',
                        'MO',
                        'TU',
                        'WE',
                        'TH',
                        'FR',
                        'SA'
                    ]
                });

                // initialization of HSDropdown component
                $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {dropdownHideOnScroll: false});

                // initialization of custom scrollbar
                $.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));

                // initialization of popups
                $.HSCore.components.HSPopup.init('.js-fancybox', {
                    btnTpl: {
                        smallBtn: '<button data-fancybox-close class="btn g-pos-abs g-top-25 g-right-30 g-line-height-1 g-bg-transparent g-font-size-16 g-color-gray-light-v3 g-brd-none p-0" title=""><i class="hs-admin-close"></i></button>'
                    }
                });
            });
        </script>
    </body>

</html>
