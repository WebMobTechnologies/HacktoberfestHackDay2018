<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.interface.club/limitless/layout_2/LTR/material/layout_navbar_sidebar_fixed.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Sep 2016 10:48:00 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crypto</title>

    <!-- Global stylesheets -->
    <link href="../../../../../fonts.googleapis.com/css1381.css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
    <link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="assets/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>
    <script type="text/javascript" src="assets/js/plugins/ui/nicescroll.min.js"></script>

    <script type="text/javascript" src="assets/js/core/app.js"></script>
    <script type="text/javascript" src="assets/js/pages/dashboard.js"></script>
    <script type="text/javascript" src="assets/js/pages/layout_fixed_custom.js"></script>

    <script type="text/javascript" src="assets/js/plugins/ui/ripple.min.js"></script>
    <!-- /theme JS files -->

</head>

<body class="navbar-top">

<!-- Main navbar -->
<div class="navbar navbar-default navbar-fixed-top header-highlight">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=""></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-main sidebar-fixed">
            <div class="sidebar-content">
                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">
                            <!-- Main -->
                            <li><a href="index.html"><i class="icon-home4"></i> <span>Home</span></a></li>
                            <li><a href="index.html"><i class="icon-coin-dollar"></i> <span>BTC Price Graph</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /main navigation -->

            </div>
        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">
            <!-- Dashboard content -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Marketing campaigns -->
                    <div class="panel panel-flat">
                        {{--{{print_r($data)}}--}}
                        <div class="panel-heading">
                            <h6 class="panel-title text-center text-bold">Cryptocurrency Prices</h6>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-lg text-nowrap">
                                <tbody>
                                <tr>
                                    {{--<td class="col-md-5">
                                        <div class="media-left">
                                            <div id="campaigns-donut"></div>
                                        </div>

                                        <div class="media-left">
                                            <h5 class="text-semibold no-margin">38,289
                                                <small class="text-success text-size-base"><i
                                                            class="icon-arrow-up12"></i> (+16.2%)
                                                </small>
                                            </h5>
                                            <ul class="list-inline list-inline-condensed no-margin">
                                                <li>
                                                    <span class="status-mark border-success"></span>
                                                </li>
                                                <li>
                                                    <span class="text-muted">May 12, 12:30 am</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>--}}

                                    {{--<td class="col-md-5">
                                        <div class="media-left">
                                            <div id="campaign-status-pie"></div>
                                        </div>

                                        <div class="media-left">
                                            <h5 class="text-semibold no-margin">2,458
                                                <small class="text-danger text-size-base"><i
                                                            class="icon-arrow-down12"></i> (- 4.9%)
                                                </small>
                                            </h5>
                                            <ul class="list-inline list-inline-condensed no-margin">
                                                <li>
                                                    <span class="status-mark border-danger"></span>
                                                </li>
                                                <li>
                                                    <span class="text-muted">Jun 4, 4:00 am</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>--}}
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                <tr>
                                    <th class="col-md-2">Coin</th>
                                    <th class="col-md-2">24 Hr Price Change</th>
                                    <th class="col-md-2">Price</th>
                                    <th class="col-md-2">Market Cap</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $d)
                                <tr>
                                    <td>
                                        <div class="media-left">

                                            <div class=""><a href="#" class="text-default text-semibold">{{$d->currency}}</a></div>
                                            <div class="text-muted text-size-small">
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 2.43%</span>
                                    </td>
                                    <td><h6 class="text-semibold">{{$d->price}}</h6></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /marketing campaigns -->


                <!-- /dashboard content -->


            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

</body>

<!-- Mirrored from demo.interface.club/limitless/layout_2/LTR/material/layout_navbar_sidebar_fixed.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Sep 2016 10:48:14 GMT -->
</html>