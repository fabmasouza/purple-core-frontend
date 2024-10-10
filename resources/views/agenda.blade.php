{{-- resources/views/home.blade.php --}}
@extends('layouts.master')

@section('content')

<!-- theme body start-->
<div class="theme-body common-dash">
    <div class="grid grid-cols-12 page-gap">
        <div class="col-span-12 2xl:col-span-4 md:col-span-6">
            <div class="card welcome-card overflow-hidden">
                <div class="welcome-imgwarp"><img class="img-fluid"
                        src="{{ asset('images/dashboard/welcome-banner.jpg') }}" alt="logo"></div>
                <div class="card-body">
                    <h2>Welcome to Gilbert</h2>
                    <p>Congratulations! Your account has been has been Setup and you are ready to configure your
                        dashboard
                        now. Configuration only take a couple of seconds. </p><a class="btn btn-primary"
                        href="javascript:void(0)">Whats New</a>
                </div>
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-4 md:col-span-6 sm:col-span-12">
            <div class="grid grid-cols-12 cdx-gap">
                <div class="col-span-12 md:col-span-12 sm:col-span-6">
                    <div class="card earning-chart animated-shap">
                        <div class="card-header">
                            <h4>Total Earning</h4>
                            <div class="setting-card action-menu">
                                <div class="action-toggle"><i data-feather="more-horizontal"> </i></div>
                                <ul class="action-dropdown">
                                    <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a>
                                    </li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-calendar-check-o"></i>monthly</a>
                                    </li>
                                    <li><a href="javascript:void(0);"> <i class="fa fa-calendar"></i>yearly </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="earning-detail">
                                <h3>$3,354 <span>items</span></h3>
                                <h5 class="text-success"> 22% this Week<i class="fa fa-angle-up"></i></h5>
                            </div>
                            <div id="earning-chart"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-12 sm:col-span-6">
                    <div class="card product-chart animated-shap">
                        <div class="card-header">
                            <h4>Total Product</h4>
                            <div class="setting-card action-menu">
                                <div class="action-toggle"><i data-feather="more-horizontal"> </i></div>
                                <ul class="action-dropdown">
                                    <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a>
                                    </li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-calendar-check-o"></i>monthly</a>
                                    </li>
                                    <li><a href="javascript:void(0);"> <i class="fa fa-calendar"></i>yearly </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="prochart-detail">
                                <h3>$1,640<span>items</span></h3>
                                <h5 class="text-danger">22% this Week<i class="fa fa-angle-down"></i></h5>
                            </div>
                            <div id="product-chart"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-4 md:col-span-6 2xl:order-none  md:order-1">
            <div class="card countri-tbl">
                <div class="card-header">
                    <h4>Sales by Countries</h4>
                    <div class="setting-card action-menu">
                        <div class="action-toggle"><i data-feather="more-horizontal"> </i></div>
                        <ul class="action-dropdown">
                            <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-calendar-check-o"></i>monthly</a>
                            </li>
                            <li><a href="javascript:void(0);"> <i class="fa fa-calendar"></i>yearly </a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="overflow-x-auto">
                        <table class="table tblbody-p0">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="icon-countri bg-secondary-light">us</div>
                                            <div class="media-body">United states </div>
                                        </div>
                                    </td>
                                    <td class="text-success">30.7%<i class="fa fa-angle-up"></i></td>
                                    <td> Sep/15</td>
                                    <td>750k </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="icon-countri bg-success-light">uk</div>
                                            <div class="media-body">United kingdom </div>
                                        </div>
                                    </td>
                                    <td class="text-danger">25.7%<i class="fa fa-angle-down"></i></td>
                                    <td> Jun/16</td>
                                    <td>598k </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="icon-countri bg-info-light">in</div>
                                            <div class="media-body">India</div>
                                        </div>
                                    </td>
                                    <td class="text-success">35.00%<i class="fa fa-angle-up"></i></td>
                                    <td> Sep/17</td>
                                    <td>320k </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="icon-countri bg-warning-light">ja</div>
                                            <div class="media-body">japan </div>
                                        </div>
                                    </td>
                                    <td class="text-danger">28.07%<i class="fa fa-angle-down"></i></td>
                                    <td> Sep/18</td>
                                    <td>748k </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="icon-countri bg-danger-light">ko</div>
                                            <div class="media-body">korea </div>
                                        </div>
                                    </td>
                                    <td class="text-success">48.00%<i class="fa fa-angle-down"></i></td>
                                    <td> Sep/19</td>
                                    <td>748k </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="icon-countri bg-secondary-light">ch</div>
                                            <div class="media-body">China </div>
                                        </div>
                                    </td>
                                    <td class="text-success">39.00%<i class="fa fa-angle-down"></i></td>
                                    <td> Sep/20</td>
                                    <td>618k </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="icon-countri bg-info-light">It</div>
                                            <div class="media-body">Italy</div>
                                        </div>
                                    </td>
                                    <td class="text-success">39.00%<i class="fa fa-angle-down"></i></td>
                                    <td> Sep/20</td>
                                    <td>618k </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-6">
            <div class="card recent-ordertbl">
                <div class="card-header">
                    <h4>Recent Orders</h4>
                    <div class="setting-card action-menu">
                        <div class="action-toggle"><i data-feather="more-horizontal"> </i></div>
                        <ul class="action-dropdown">
                            <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-calendar-check-o"></i>monthly</a>
                            </li>
                            <li><a href="javascript:void(0);"> <i class="fa fa-calendar"></i>yearly </a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="overflow-x-auto">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Customer</th>
                                    <th>Product</th>
                                    <th>Amount</th>
                                    <th>Vendor</th>
                                    <th>Rate</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="img-wrap"><img class="img-fluid"
                                                    src="{{ asset('images/avtar/1.jpg') }}" alt="customer">
                                            </div>
                                            <div class="media-body">Theresa Web</div>
                                        </div>
                                    </td>
                                    <td><a class="text-light" href="product-detail.html"> Apple Airpod Pro</a>
                                    </td>
                                    <td>$847.39</td>
                                    <td>Palestine</td>
                                    <td>4.0(120 votes)</td>
                                    <td> <span class="badge badge-secondary">Paid</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="img-wrap"><img class="img-fluid"
                                                    src="{{ asset('images/avtar/2.jpg') }}" alt="customer">
                                            </div>
                                            <div class="media-body">Albert Flores </div>
                                        </div>
                                    </td>
                                    <td><a class="text-light" href="product-detail.html">Redmi Note 10s</a></td>
                                    <td>$470.34</td>
                                    <td>Serbia</td>
                                    <td>4.8(140 votes)</td>
                                    <td> <span class="badge badge-info">Unpaid</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="img-wrap"><img class="img-fluid"
                                                    src="{{ asset('images/avtar/3.jpg') }}" alt="customer">
                                            </div>
                                            <div class="media-body">Kathryn Murphy</div>
                                        </div>
                                    </td>
                                    <td> <a class="text-light" href="product-detail.html">Razer kraken
                                            headset</a></td>
                                    <td>$394.39</td>
                                    <td>Republic</td>
                                    <td>3.5(15 votes)</td>
                                    <td> <span class="badge badge-warning">Paid</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="img-wrap"><img class="img-fluid"
                                                    src="{{ asset('images/avtar/4.jpg') }}" alt="customer">
                                            </div>
                                            <div class="media-body">Jacob Jones</div>
                                        </div>
                                    </td>
                                    <td> <a class="text-light" href="product-detail.html">iphone 12 pro max</a>
                                    </td>
                                    <td>$249.29</td>
                                    <td>Greece</td>
                                    <td>5.0(280 votes)</td>
                                    <td> <span class="badge badge-danger">Paid</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-6 xl:col-span-7">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="grid grid-cols-12 cdx-gap">
                        <div class="col-span-12 sm:col-span-6">
                            <div class="card sale-revenue">
                                <div class="card-header">
                                    <h4>New Project</h4>
                                    <div class="setting-card action-menu">
                                        <div class="action-toggle"><i data-feather="more-horizontal"></i></div>
                                        <ul class="action-dropdown">
                                            <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a>
                                            </li>
                                            <li><a href="javascript:void(0);"><i
                                                        class="fa fa-calendar-check-o"></i>monthly</a></li>
                                            <li><a href="javascript:void(0);"> <i class="fa fa-calendar"></i>yearly</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3>$30,347<span class="badge badge-primary">20.7%<i class="fa fa-angle-up">
                                            </i></span></h3>
                                    <div class="progress progress-primary">
                                        <div class="progress-bar" style="width:45%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <div class="card sale-revenue">
                                <div class="card-header">
                                    <h4>Total Sale</h4>
                                    <div class="setting-card action-menu">
                                        <div class="action-toggle"><i data-feather="more-horizontal"></i></div>
                                        <ul class="action-dropdown">
                                            <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a>
                                            </li>
                                            <li><a href="javascript:void(0);"><i
                                                        class="fa fa-calendar-check-o"></i>monthly</a></li>
                                            <li><a href="javascript:void(0);"> <i class="fa fa-calendar"></i>yearly</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3>$30,307<span class="badge badge-secondary">28.00%<i class="fa fa-angle-down">
                                            </i></span></h3>
                                    <div class="progress progress-secondary">
                                        <div class="progress-bar" style="width: 45%"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <div class="card sale-revenue">
                                <div class="card-header">
                                    <h4>Total Revenu</h4>
                                    <div class="setting-card action-menu">
                                        <div class="action-toggle"><i data-feather="more-horizontal"></i></div>
                                        <ul class="action-dropdown">
                                            <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a>
                                            </li>
                                            <li><a href="javascript:void(0);"><i
                                                        class="fa fa-calendar-check-o"></i>monthly</a></li>
                                            <li><a href="javascript:void(0);"> <i class="fa fa-calendar"></i>yearly</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3>$25,357<span class="badge badge-success">18.00%<i class="fa fa-angle-up">
                                            </i></span></h3>
                                    <div class="progress progress-success">
                                        <div class="progress-bar" style="width: 45%"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <div class="card sale-revenue">
                                <div class="card-header">
                                    <h4>Total Expenses</h4>
                                    <div class="setting-card action-menu">
                                        <div class="action-toggle"><i data-feather="more-horizontal"></i></div>
                                        <ul class="action-dropdown">
                                            <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a>
                                            </li>
                                            <li><a href="javascript:void(0);"><i
                                                        class="fa fa-calendar-check-o"></i>monthly</a></li>
                                            <li><a href="javascript:void(0);"> <i class="fa fa-calendar"></i>yearly</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3>$45,347<span class="badge badge-info">22.00%<i class="fa fa-angle-up">
                                            </i></span></h3>
                                    <div class="progress progress-info">
                                        <div class="progress-bar" style="width: 45%"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-5 xl:col-span-5">
            <div class="card visitor-performance">
                <div class="card-header">
                    <h4>Visitors Performance</h4>
                    <div class="setting-card action-menu">
                        <div class="action-toggle"><i data-feather="more-horizontal"></i></div>
                        <ul class="action-dropdown">
                            <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-calendar-check-o"></i>monthly</a>
                            </li>
                            <li><a href="javascript:void(0);"> <i class="fa fa-calendar"></i>yearly</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div id="visitor-chart"> </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-7">
            <div class="card project-summarytbl">
                <div class="card-header">
                    <h4>Project Summary</h4>
                    <div class="setting-card action-menu">
                        <div class="action-toggle"><i data-feather="more-horizontal"></i></div>
                        <ul class="action-dropdown">
                            <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-calendar-check-o"></i>monthly</a>
                            </li>
                            <li><a href="javascript:void(0);"> <i class="fa fa-calendar"></i>yearly </a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="overflow-x-auto">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Order id</th>
                                    <th>Project Name</th>
                                    <th>Team</th>
                                    <th>Project Cost</th>
                                    <th>Project Status </th>
                                    <th>Payment</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#H034</td>
                                    <td>Payment Bank App</td>
                                    <td>
                                        <ul class="team">
                                            <li><a href="javascript:void(0);">
                                                    <div class="img-wrap"><img class="img-fluid rounded-50"
                                                            src="{{ asset('images/avtar/1.jpg') }}" alt="">
                                                    </div>
                                                </a></li>
                                            <li><a href="javascript:void(0);">
                                                    <div class="img-wrap"><img class="img-fluid rounded-50"
                                                            src="{{ asset('images/avtar/2.jpg') }}" alt="">
                                                    </div>
                                                </a></li>
                                            <li> +2 More Employees</li>
                                        </ul>
                                    </td>
                                    <td>$45,376</td>
                                    <td>Completed </td>
                                    <td> <span class="badge badge-secondary">Done </span></td>
                                </tr>
                                <tr>
                                    <td>#A230</td>
                                    <td>Cytrust Dashboard</td>
                                    <td>
                                        <ul class="team">
                                            <li><a href="javascript:void(0);">
                                                    <div class="img-wrap"><img class="img-fluid rounded-50"
                                                            src="{{ asset('images/avtar/3.jpg') }}" alt="">
                                                    </div>
                                                </a></li>
                                            <li><a href="javascript:void(0);">
                                                    <div class="img-wrap"><img class="img-fluid rounded-50"
                                                            src="{{ asset('images/avtar/4.jpg') }}" alt="">
                                                    </div>
                                                </a></li>
                                            <li> +3 More Employees</li>
                                        </ul>
                                    </td>
                                    <td>$40,258</td>
                                    <td>In Progress</td>
                                    <td> <span class="badge badge-success">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>#Y723</td>
                                    <td>Amazon website</td>
                                    <td>
                                        <ul class="team">
                                            <li><a href="javascript:void(0);">
                                                    <div class="img-wrap"><img class="img-fluid rounded-50"
                                                            src="{{ asset('images/avtar/5.jpg') }}" alt="">
                                                    </div>
                                                </a></li>
                                            <li><a href="javascript:void(0);">
                                                    <div class="img-wrap"><img class="img-fluid rounded-50"
                                                            src="{{ asset('images/avtar/6.jpg') }}" alt="">
                                                    </div>
                                                </a></li>
                                            <li> +6 More Employees</li>
                                        </ul>
                                    </td>
                                    <td>$32,256</td>
                                    <td>Completed</td>
                                    <td> <span class="badge badge-info">Done </span></td>
                                </tr>
                                <tr>
                                    <td>#A342</td>
                                    <td>Payment BAnk App</td>
                                    <td>
                                        <ul class="team">
                                            <li><a href="javascript:void(0);">
                                                    <div class="img-wrap"><img class="img-fluid rounded-50"
                                                            src="{{ asset('images/avtar/7.jpg') }}" alt="">
                                                    </div>
                                                </a></li>
                                            <li><a href="javascript:void(0);">
                                                    <div class="img-wrap"><img class="img-fluid rounded-50"
                                                            src="{{ asset('images/avtar/8.jpg') }}" alt="">
                                                    </div>
                                                </a></li>
                                            <li> +7 More Employees</li>
                                        </ul>
                                    </td>
                                    <td>$25,058</td>
                                    <td>In Progress</td>
                                    <td> <span class="badge badge-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>#C121</td>
                                    <td>Cytrust Dashboard</td>
                                    <td>
                                        <ul class="team">
                                            <li><a href="javascript:void(0);">
                                                    <div class="img-wrap"><img class="img-fluid rounded-50"
                                                            src="{{ asset('images/avtar/8.jpg') }}" alt="">
                                                    </div>
                                                </a></li>
                                            <li><a href="javascript:void(0);">
                                                    <div class="img-wrap"><img class="img-fluid rounded-50"
                                                            src="{{ asset('images/avtar/9.jpg') }}" alt="">
                                                    </div>
                                                </a></li>
                                            <li> +2 More Employees</li>
                                        </ul>
                                    </td>
                                    <td>$36,585</td>
                                    <td>In Progress</td>
                                    <td> <span class="badge badge-danger">Pending </span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-4 md:col-span-6">
            <div class="card visitor-ratetbl">
                <div class="card-header">
                    <h4>Visitors(+1.6%)</h4>
                    <div class="setting-card action-menu">
                        <div class="action-toggle"><i data-feather="more-horizontal"></i></div>
                        <ul class="action-dropdown">
                            <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-calendar-check-o"></i>monthly</a>
                            </li>
                            <li><a href="javascript:void(0);"> <i class="fa fa-calendar"></i>yearly </a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div id="visitor-chart2"> </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-4 md:col-span-6">
            <div class="card transaction-tbl">
                <div class="card-header">
                    <h4>Transactions</h4>
                    <div class="setting-card action-menu">
                        <div class="action-toggle"><i data-feather="more-horizontal"></i></div>
                        <ul class="action-dropdown">
                            <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-calendar-check-o"></i>monthly</a>
                            </li>
                            <li><a href="javascript:void(0);"> <i class="fa fa-calendar"></i>yearly </a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="overflow-x-auto">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Cashback</th>
                                    <th>Amount </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="img-wrap"><img class="img-fluid"
                                                    src="{{ asset('images/ecom-dashboard/small-pro/1.jpg') }}"
                                                    alt="product"></div>
                                            <div class="media-body">Toys </div>
                                        </div>
                                    </td>
                                    <td>Electronic</td>
                                    <td>+$25</td>
                                    <td>$250.00 </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="img-wrap"><img class="img-fluid"
                                                    src="{{ asset('images/ecom-dashboard/small-pro/2.jpg') }}"
                                                    alt="product"></div>
                                            <div class="media-body">Cutlery</div>
                                        </div>
                                    </td>
                                    <td>Restaurant</td>
                                    <td>+$20</td>
                                    <td>$450.00 </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="img-wrap"><img class="img-fluid"
                                                    src="{{ asset('images/ecom-dashboard/small-pro/3.jpg') }}"
                                                    alt="product"></div>
                                            <div class="media-body">Motors</div>
                                        </div>
                                    </td>
                                    <td>Pet Food</td>
                                    <td>+$42</td>
                                    <td>$200.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="img-wrap"><img class="img-fluid"
                                                    src="{{ asset('images/ecom-dashboard/small-pro/4.jpg') }}"
                                                    alt="product"></div>
                                            <div class="media-body">iphone</div>
                                        </div>
                                    </td>
                                    <td>Clothing</td>
                                    <td>+$30</td>
                                    <td>$540.00 </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="img-wrap"><img class="img-fluid"
                                                    src="{{ asset('images/ecom-dashboard/small-pro/5.jpg') }}"
                                                    alt="product"></div>
                                            <div class="media-body">Redmi</div>
                                        </div>
                                    </td>
                                    <td>Property</td>
                                    <td>+$40</td>
                                    <td>$810.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="img-wrap"><img class="img-fluid"
                                                    src="{{ asset('images/ecom-dashboard/small-pro/2.jpg') }}"
                                                    alt="product"></div>
                                            <div class="media-body">Apple Airpod</div>
                                        </div>
                                    </td>
                                    <td>Hobbies</td>
                                    <td>+$70</td>
                                    <td>$990.00 </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-4 md:col-span-6 2xl:order-none  md:order-1">
            <div class="card cdx-upgrade bg-primary">
                <div class="card-body">
                    <div>
                        <h2>Need More Stats?</h2>
                        <p>Upgrade to pro max for added benefits.</p><a class="btn btn-secondary"
                            href="blog-detail.html">Upgrad
                            Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- theme body end-->

@endsection