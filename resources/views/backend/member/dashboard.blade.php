@extends('backend.layouts.app')

@section('title', '- Dashboard')

@section('css')
  <link href="{{ asset('assets/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/fullcalendar/dist/fullcalendar.print.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/smalot-bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-xl-4">
            <div class="ibox ibox-fullheight" style="min-height:480px;">
                <div class="ibox-head">
                    <div class="ibox-title">SUBSCRIPTIONS</div>
                    <div class="ibox-tools">
                        <a class="font-18" href="javascript:;"><i class="ti-control-record"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                    <div class="flexbox mb-3">
                        <span class="flexbox">
                            <span class="btn-icon-only btn-circle bg-primary-50 text-primary mr-3"><i class="ti-cup"></i></span>
                            <span>BASIC PLAN</span>
                        </span>
                        <span class="h3 mb-0 text-primary font-strong ml-2">+1250</span>
                    </div>
                    <div class="flexbox mb-3">
                        <span class="flexbox">
                            <span class="btn-icon-only btn-circle bg-success-50 text-success mr-3"><i class="ti-briefcase"></i></span>
                            <span>BUSINESS PLAN</span>
                        </span>
                        <span class="h3 mb-0 text-success font-strong ml-2">+890</span>
                    </div>
                    <div class="flexbox mb-3">
                        <span class="flexbox">
                            <span class="btn-icon-only btn-circle bg-pink-50 text-pink mr-3"><i class="ti-gift"></i></span>
                            <span>EXPANDED PLAN</span>
                        </span>
                        <span class="h3 mb-0 text-pink font-strong ml-2">+720</span>
                    </div>
                    <div class="abs-bottom">
                        <canvas id="chart_1" style="height:220px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="ibox ibox-fullheight" style="min-height:480px;">
                <div class="ibox-head">
                    <div class="ibox-title">Statistics</div>
                    <div class="ibox-tools">
                        <a class="font-18" href="javascript:;"><i class="ti-control-record"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                    <div class="row align-items-center mt-4 mb-4">
                        <div class="col-md-6">
                            <div class="easypie centered" data-percent="73" data-bar-color="#18C5A9" data-size="120" data-line-width="8">
                                <span class="easypie-data h3 font-strong">73<sup>%</sup></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4 text-success"><i class="ti-desktop mr-2"></i>Desktop 52%</div>
                            <div class="mb-4 text-warning"><i class="ti-tablet mr-2"></i>Tablet 27%</div>
                            <div class="mb- text-info"><i class="ti-mobile mr-2"></i>Mobile 21%</div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mb-4">
                        <div class="text-center">
                            <div class="mb-1 text-success h2">2400</div>
                            <div class="text-muted">PAGE VIEWS</div>
                        </div>
                        <div class="text-center">
                            <div class="mb-1 text-success h2">$5200</div>
                            <div class="text-muted">MONTH INCOME</div>
                        </div>
                    </div>
                </div>
                <div class="abs-bottom" style="background-color:#f3f6fb;">
                    <canvas id="chart_b" style="height:100px;"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="ibox ibox-fullheight">
                <div class="ibox-head">
                    <div class="ibox-title">LOGS TIMELINE</div>
                    <div class="ibox-tools">
                        <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item"><i class="ti-pencil"></i>Create</a>
                            <a class="dropdown-item"><i class="ti-pencil-alt"></i>Edit</a>
                            <a class="dropdown-item"><i class="ti-close"></i>Remove</a>
                        </div>
                    </div>
                </div>
                <div class="ibox-body">
                    <ul class="timeline scroller" data-height="370px">
                        <li class="timeline-item">
                            <span class="timeline-point"></span>2 Issue fixed<small class="float-right text-muted ml-2 nowrap">Just now</small></li>
                        <li class="timeline-item">
                            <span class="timeline-point bg-warning"></span>
                            <span>7 new feedback
                                <span class="badge badge-warning badge-pill ml-2">important</span>
                            </span><small class="float-right text-muted">5 mins</small></li>
                        <li class="timeline-item">
                            <span class="timeline-point bg-primary"></span>
                            <span class="flexbox">25 new orders sent<i class="la la-truck font-16 ml-2 text-primary"></i></span><small class="float-right text-muted ml-2 nowrap">24 mins</small></li>
                        <li class="timeline-item">
                            <span class="timeline-point"></span>12 New orders<small class="float-right text-muted ml-2 nowrap">45 mins</small></li>
                        <li class="timeline-item">
                            <span class="timeline-point bg-warning"></span>18 new users registered<small class="float-right text-muted ml-2 nowrap">1 hrs</small></li>
                        <li class="timeline-item">
                            <span class="timeline-point"></span>
                            <span>Server Error
                                <span class="badge badge-success badge-pill ml-2">resolved</span>
                            </span><small class="float-right text-muted">2 hrs</small></li>
                        <li class="timeline-item">
                            <span class="timeline-point bg-primary"></span>
                            <span>System Warning
                                <a class="text-primary ml-2">Check</a>
                            </span><small class="float-right text-muted ml-2 nowrap">12:07</small></li>
                        <li class="timeline-item">
                            <span class="timeline-point bg-warning"></span>The invoice is ready<small class="float-right text-muted ml-2 nowrap">12:30</small></li>
                        <li class="timeline-item">
                            <span class="timeline-point bg-primary"></span>5 New Orders<small class="float-right text-muted ml-2 nowrap">13:45</small></li>
                        <li class="timeline-item">
                            <span class="timeline-point"></span>
                            <span class="flexbox">Production server up<i class="la la-arrow-circle-up font-18 ml-2 text-success"></i></span><small class="float-right text-muted ml-2 nowrap">1 days ago</small></li>
                        <li class="timeline-item">
                            <span class="timeline-point"></span>Server overloaded 91%<small class="float-right text-muted ml-2 nowrap">2 days ago</small></li>
                        <li class="timeline-item">
                            <span class="timeline-point bg-warning"></span>Server error<small class="float-right text-muted ml-2 nowrap">2 days ago</small></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8">
            <div class="ibox ibox-fullheight">
                <div class="ibox-head">
                    <div class="ibox-title">LATEST POSTS</div>
                    <div class="ibox-tools">
                        <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item"><i class="ti-pencil"></i>Create</a>
                            <a class="dropdown-item"><i class="ti-pencil-alt"></i>Edit</a>
                            <a class="dropdown-item"><i class="ti-close"></i>Remove</a>
                        </div>
                    </div>
                </div>
                <div class="ibox-body">
                    <ul class="media-list media-list-divider">
                        <li class="media">
                            <a class="media-img pr-4" href="javascript:;">
                                <img src="{{ asset('images/backend') }}/blog/07.jpeg" alt="image" width="120">
                            </a>
                            <div class="media-body d-flex">
                                <div class="flex-1">
                                    <h5 class="media-heading">
                                        <a href="article.html">Web Design Trends</a>
                                    </h5>
                                    <p class="font-13 text-light">Cillum in incididunt reprehenderit qui reprehenderit nulla ut sint</p>
                                    <div class="font-13">
                                        <span class="mr-4">Created:
                                            <a class="text-success" href="javascript:;">10.08.2018</a>
                                        </span>
                                        <span class="text-muted mr-4"><i class="fa fa-heart mr-2"></i>56</span>
                                        <span class="text-muted"><i class="fa fa-comment mr-2"></i>124</span>
                                    </div>
                                </div>
                                <div class="text-right ml-3">
                                    <h3 class="mb-1 font-strong text-primary">5800</h3>
                                    <div class="text-muted">views</div>
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <a class="media-img pr-4" href="javascript:;">
                                <img src="{{ asset('images/backend') }}/blog/culinary-1.jpeg" alt="image" width="120">
                            </a>
                            <div class="media-body d-flex">
                                <div class="flex-1">
                                    <h5 class="media-heading">
                                        <a href="article.html">Dish of the day</a>
                                    </h5>
                                    <p class="font-13 text-light">Cillum in incididunt reprehenderit qui reprehenderit nulla ut sint</p>
                                    <div class="font-13">
                                        <span class="mr-4">Created:
                                            <a class="text-success" href="javascript:;">10.08.2018</a>
                                        </span>
                                        <span class="text-muted mr-4"><i class="fa fa-heart mr-2"></i>56</span>
                                        <span class="text-muted"><i class="fa fa-comment mr-2"></i>124</span>
                                    </div>
                                </div>
                                <div class="text-right ml-3">
                                    <h3 class="mb-1 font-strong text-primary">5240</h3>
                                    <div class="text-muted">views</div>
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <a class="media-img pr-4" href="javascript:;">
                                <img src="{{ asset('images/backend') }}/blog/02.jpg" alt="image" width="120">
                            </a>
                            <div class="media-body d-flex">
                                <div class="flex-1">
                                    <h5 class="media-heading">
                                        <a href="article.html">Fashion Trends</a>
                                    </h5>
                                    <p class="font-13 text-light">Cillum in incididunt reprehenderit qui reprehenderit nulla ut sint</p>
                                    <div class="font-13">
                                        <span class="mr-4">Created:
                                            <a class="text-success" href="javascript:;">10.08.2018</a>
                                        </span>
                                        <span class="text-muted mr-4"><i class="fa fa-heart mr-2"></i>56</span>
                                        <span class="text-muted"><i class="fa fa-comment mr-2"></i>124</span>
                                    </div>
                                </div>
                                <div class="text-right ml-3">
                                    <h3 class="mb-1 font-strong text-primary">4780</h3>
                                    <div class="text-muted">views</div>
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <a class="media-img pr-4" href="javascript:;">
                                <img src="{{ asset('images/backend') }}/blog/04.jpeg" alt="image" width="120">
                            </a>
                            <div class="media-body d-flex">
                                <div class="flex-1">
                                    <h5 class="media-heading">
                                        <a href="article.html">Style of the week</a>
                                    </h5>
                                    <p class="font-13 text-light">Cillum in incididunt reprehenderit qui reprehenderit nulla ut sint</p>
                                    <div class="font-13">
                                        <span class="mr-4">Created:
                                            <a class="text-success" href="javascript:;">10.08.2018</a>
                                        </span>
                                        <span class="text-muted mr-4"><i class="fa fa-heart mr-2"></i>56</span>
                                        <span class="text-muted"><i class="fa fa-comment mr-2"></i>124</span>
                                    </div>
                                </div>
                                <div class="text-right ml-3">
                                    <h3 class="mb-1 font-strong text-primary">4200</h3>
                                    <div class="text-muted">views</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="ibox ibox-fullheight">
                <div class="ibox-head">
                    <div class="ibox-title">NEW CUSTOMERS</div>
                    <div class="ibox-tools">
                        <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-user"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item"><i class="ti-pencil mr-2"></i>Create</a>
                            <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                            <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                        </div>
                    </div>
                </div>
                <div class="ibox-body">
                    <ul class="media-list media-list-divider mr-2 scroller" data-height="480px">
                        <li class="media align-items-center">
                            <a class="media-img" href="javascript:;">
                                <img class="img-circle" src="{{ asset('images/backend') }}/users/u8.jpg" alt="image" width="54">
                            </a>
                            <div class="media-body d-flex align-items-center">
                                <div class="flex-1">
                                    <div class="media-heading">Lynn Weaver</div><small class="text-muted">Lorem Ipsum is simply dummy</small></div>
                                <button class="btn btn-sm btn-outline-secondary btn-rounded">Follow</button>
                            </div>
                        </li>
                        <li class="media align-items-center">
                            <a class="media-img" href="javascript:;">
                                <img class="img-circle" src="{{ asset('images/backend') }}/users/u6.jpg" alt="image" width="54">
                            </a>
                            <div class="media-body d-flex align-items-center">
                                <div class="flex-1">
                                    <div class="media-heading">Connor Perez</div><small class="text-muted">Lorem Ipsum is simply dummy</small></div>
                                <button class="btn btn-sm btn-primary btn-rounded">Followed</button>
                            </div>
                        </li>
                        <li class="media align-items-center">
                            <a class="media-img" href="javascript:;">
                                <img class="img-circle" src="{{ asset('images/backend') }}/users/u11.jpg" alt="image" width="54">
                            </a>
                            <div class="media-body d-flex align-items-center">
                                <div class="flex-1">
                                    <div class="media-heading">Tyrone Carroll</div><small class="text-muted">Lorem Ipsum is simply dummy</small></div>
                                <button class="btn btn-sm btn-outline-secondary btn-rounded">Follow</button>
                            </div>
                        </li>
                        <li class="media align-items-center">
                            <a class="media-img" href="javascript:;">
                                <img class="img-circle" src="{{ asset('images/backend') }}/users/u10.jpg" alt="image" width="54">
                            </a>
                            <div class="media-body d-flex align-items-center">
                                <div class="flex-1">
                                    <div class="media-heading">Stella Obrien</div><small class="text-muted">Lorem Ipsum is simply dummy</small></div>
                                <button class="btn btn-sm btn-outline-secondary btn-rounded">Follow</button>
                            </div>
                        </li>
                        <li class="media align-items-center">
                            <a class="media-img" href="javascript:;">
                                <img class="img-circle" src="{{ asset('images/backend') }}/users/u2.jpg" alt="image" width="54">
                            </a>
                            <div class="media-body d-flex align-items-center">
                                <div class="flex-1">
                                    <div class="media-heading">Becky Brooks</div><small class="text-muted">Lorem Ipsum is simply dummy</small></div>
                                <button class="btn btn-sm btn-outline-secondary btn-rounded">Follow</button>
                            </div>
                        </li>
                        <li class="media align-items-center">
                            <a class="media-img" href="javascript:;">
                                <img class="img-circle" src="{{ asset('images/backend') }}/users/u5.jpg" alt="image" width="54">
                            </a>
                            <div class="media-body d-flex align-items-center">
                                <div class="flex-1">
                                    <div class="media-heading">Bob Gonzalez</div><small class="text-muted">Lorem Ipsum is simply dummy</small></div>
                                <button class="btn btn-sm btn-primary btn-rounded">Followed</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">CALENDAR</div>
            <button class="btn btn-primary btn-rounded btn-air my-3" data-toggle="modal" data-target="#new-event-modal">
                <span class="btn-icon"><i class="la la-plus"></i>New Event</span>
            </button>
        </div>
        <div class="ibox-body">
            <div id="calendar"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-7">
            <div class="ibox ibox-fullheight">
                <div class="ibox-head">
                    <div class="ibox-title">LATEST ORDERS</div>
                    <div class="ibox-tools">
                        <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item"> <i class="ti-pencil"></i>Create</a>
                            <a class="dropdown-item"> <i class="ti-pencil-alt"></i>Edit</a>
                            <a class="dropdown-item"> <i class="ti-close"></i>Remove</a>
                        </div>
                    </div>
                </div>
                <div class="ibox-body">
                    <div class="flexbox mb-4">
                        <div class="flexbox">
                            <span class="flexbox mr-3">
                                <span class="mr-2 text-muted">Paid</span>
                                <span class="h3 mb-0 text-primary font-strong">310</span>
                            </span>
                            <span class="flexbox">
                                <span class="mr-2 text-muted">Unpaid</span>
                                <span class="h3 mb-0 text-pink font-strong">105</span>
                            </span>
                        </div>
                        <a class="flexbox" href="ecommerce_orders_list.html" target="_blank">VIEW ALL<i class="ti-arrow-circle-right ml-2 font-18"></i></a>
                    </div>
                    <div class="ibox-fullwidth-block">
                        <table class="table table-hover">
                            <thead class="thead-default thead-lg">
                                <tr>
                                    <th class="pl-4">Order ID</th>
                                    <th>Customer</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th class="pr-4" style="width:91px;">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pl-4">
                                        <a href="ecommerce_order_details.html" target="_blank">#1254</a>
                                    </td>
                                    <td>Becky Brooks</td>
                                    <td>$457.00</td>
                                    <td>
                                        <span class="badge badge-success badge-pill">Shipped</span>
                                    </td>
                                    <td class="pr-4">17.05.2018</td>
                                </tr>
                                <tr>
                                    <td class="pl-4">
                                        <a href="ecommerce_order_details.html" target="_blank">#1253</a>
                                    </td>
                                    <td>Emma Johnson</td>
                                    <td>$1200.00</td>
                                    <td>
                                        <span class="badge badge-success badge-pill">Shipped</span>
                                    </td>
                                    <td class="pr-4">17.05.2018</td>
                                </tr>
                                <tr>
                                    <td class="pl-4">
                                        <a href="ecommerce_order_details.html" target="_blank">#1252</a>
                                    </td>
                                    <td>Noah Williams</td>
                                    <td>$780.00</td>
                                    <td>
                                        <span class="badge badge-primary badge-pill">Pending</span>
                                    </td>
                                    <td class="pr-4">17.05.2018</td>
                                </tr>
                                <tr>
                                    <td class="pl-4">
                                        <a href="ecommerce_order_details.html" target="_blank">#1251</a>
                                    </td>
                                    <td>Sophia Jones</td>
                                    <td>$105.60</td>
                                    <td>
                                        <span class="badge badge-success badge-pill">Completed</span>
                                    </td>
                                    <td class="pr-4">17.05.2018</td>
                                </tr>
                                <tr>
                                    <td class="pl-4">
                                        <a href="ecommerce_order_details.html" target="_blank">#1250</a>
                                    </td>
                                    <td>Jacob Brown</td>
                                    <td>$40.00</td>
                                    <td>
                                        <span class="badge badge-primary badge-pill">Pending</span>
                                    </td>
                                    <td class="pr-4">17.05.2018</td>
                                </tr>
                                <tr>
                                    <td class="pl-4">
                                        <a href="ecommerce_order_details.html" target="_blank">#1249</a>
                                    </td>
                                    <td>James Davis</td>
                                    <td>$78.00</td>
                                    <td>
                                        <span class="badge badge-danger badge-pill">Canceled</span>
                                    </td>
                                    <td class="pr-4">17.05.2018</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5">
            <div class="ibox ibox-fullheight">
                <div class="ibox-head">
                    <div class="ibox-title">PAYMENT SYSTEMS</div>
                    <div class="ibox-tools">
                        <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item"> <i class="ti-pencil"></i>Create</a>
                            <a class="dropdown-item"> <i class="ti-pencil-alt"></i>Edit</a>
                            <a class="dropdown-item"> <i class="ti-close"></i>Remove</a>
                        </div>
                    </div>
                </div>
                <div class="ibox-body">
                    <ul class="media-list media-list-divider">
                        <li class="media">
                            <div class="media-img">
                                <img src="{{ asset('images/backend') }}/logos/payment/visa.png" alt="image" width="60">
                            </div>
                            <div class="media-body">
                                <div class="media-heading">Visa card
                                    <h4 class="font-strong float-right text-right"><sup>$</sup>1100</h4>
                                </div>
                                <p class="font-13 m-0 text-light">Lorem ipsum dolar set...</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-img">
                                <img src="{{ asset('images/backend') }}/logos/payment/paypal.png" alt="image" width="60">
                            </div>
                            <div class="media-body">
                                <div class="media-heading">PayPal
                                    <h4 class="font-strong float-right text-right"><sup>$</sup>985</h4>
                                </div>
                                <p class="font-13 m-0 text-light">Lorem ipsum dolar set...</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-img">
                                <img src="{{ asset('images/backend') }}/logos/payment/mastercard.png" alt="image" width="60">
                            </div>
                            <div class="media-body">
                                <div class="media-heading">MasterCard
                                    <h4 class="font-strong float-right text-right"><sup>$</sup>850</h4>
                                </div>
                                <p class="font-13 m-0 text-light">Lorem ipsum dolar set...</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-img">
                                <img src="{{ asset('images/backend') }}/logos/payment/jcb.png" alt="image" width="60">
                            </div>
                            <div class="media-body">
                                <div class="media-heading">JCB
                                    <h4 class="font-strong float-right text-right"><sup>$</sup>690</h4>
                                </div>
                                <p class="font-13 m-0 text-light">Lorem ipsum dolar set...</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-img">
                                <img src="{{ asset('images/backend') }}/logos/payment/eps.png" alt="image" width="60">
                            </div>
                            <div class="media-body">
                                <div class="media-heading">EPS
                                    <h4 class="font-strong float-right text-right"><sup>$</sup>520</h4>
                                </div>
                                <p class="font-13 m-0 text-light">Lorem ipsum dolar set...</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8">
            <div class="ibox ibox-fullheight">
                <div class="ibox-head">
                    <div class="ibox-title">BEST SELLERS</div>
                    <div class="ibox-tools">
                        <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item"> <i class="ti-pencil"></i>Create</a>
                            <a class="dropdown-item"> <i class="ti-pencil-alt"></i>Edit</a>
                            <a class="dropdown-item"> <i class="ti-close"></i>Remove</a>
                        </div>
                    </div>
                </div>
                <div class="ibox-body">
                    <ul class="media-list media-list-divider">
                        <li class="media">
                            <a class="media-img" href="javascript:;">
                                <img src="{{ asset('images/backend') }}/products/01.jpg" alt="image" height="100">
                            </a>
                            <div class="media-body d-flex">
                                <div class="flex-1">
                                    <h5 class="media-heading">
                                        <a href="javascript:;">Product name</a>
                                    </h5>
                                    <div class="h4 text-success">$25</div>
                                    <p class="font-13 text-light mb-1">Cillum in incididunt reprehenderit qui reprehenderit nulla ut sint</p>
                                    <div class="font-13">
                                        <span class="mr-4">Author:
                                            <a class="text-success" href="javascript:;">@Creative</a>
                                        </span>
                                        <span class="text-light mr-4"><i class="la la-heart-o mr-2 font-16"></i>4.8</span><i class="la la-truck font-16 text-light" data-toggle="tooltip" data-original-title="Delivery"></i></div>
                                </div>
                                <div class="text-right" style="width:100px;">
                                    <h3 class="mb-1 font-strong text-success"><sup>$</sup>7800</h3>
                                    <div class="text-muted">312 sales</div>
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <a class="media-img" href="javascript:;">
                                <img src="{{ asset('images/backend') }}/products/02.jpg" alt="image" height="100">
                            </a>
                            <div class="media-body d-flex">
                                <div class="flex-1">
                                    <h5 class="media-heading">
                                        <a href="javascript:;">Product name</a>
                                    </h5>
                                    <div class="mb-2">
                                        <span class="h4 text-success mr-2">$28</span>
                                        <span class="text-muted" style="text-decoration:line-through;">$36</span>
                                    </div>
                                    <p class="font-13 text-light mb-1">Cillum in incididunt reprehenderit qui reprehenderit nulla ut sint</p>
                                    <div class="font-13">
                                        <span class="mr-4">Author:
                                            <a class="text-success" href="javascript:;">@Creative</a>
                                        </span>
                                        <span class="text-light mr-4"><i class="la la-heart-o mr-2 font-16"></i>4.7</span>
                                        <span class="text-light mr-4" data-toggle="tooltip" data-original-title="Discount 30%"><i class="la la-tags mr-2 font-16"></i>30%</span><i class="la la-truck font-16 text-light" data-toggle="tooltip" data-original-title="Delivery"></i></div>
                                </div>
                                <div class="text-right" style="width:100px;">
                                    <h3 class="mb-1 font-strong text-success"><sup>$</sup>7560</h3>
                                    <div class="text-muted">270 sales</div>
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <a class="media-img" href="javascript:;">
                                <img src="{{ asset('images/backend') }}/products/03.jpg" alt="image" height="100">
                            </a>
                            <div class="media-body d-flex">
                                <div class="flex-1">
                                    <h5 class="media-heading">
                                        <a href="javascript:;">Product name</a>
                                    </h5>
                                    <div class="mb-2">
                                        <span class="h4 text-success mr-2">$28</span>
                                        <span class="text-muted" style="text-decoration:line-through;">$35</span>
                                    </div>
                                    <p class="font-13 text-light mb-1">Cillum in incididunt reprehenderit qui reprehenderit nulla ut sint</p>
                                    <div class="font-13">
                                        <span class="mr-4">Author:
                                            <a class="text-success" href="javascript:;">@Creative</a>
                                        </span>
                                        <span class="text-light mr-4"><i class="la la-heart-o mr-2 font-16"></i>4.5</span>
                                        <span class="text-light" data-toggle="tooltip" data-original-title="Discount 25%"><i class="la la-tags mr-2 font-16"></i>25%</span>
                                    </div>
                                </div>
                                <div class="text-right" style="width:100px;">
                                    <h3 class="mb-1 font-strong text-success"><sup>$</sup>6916</h3>
                                    <div class="text-muted">247 sales</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6">
            <div class="ibox ibox-fullheight">
                <div class="ibox-head">
                    <div class="ibox-title">POPULAR CATEGORIES</div>
                    <div class="ibox-tools">
                        <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item"> <i class="ti-pencil"></i>Create</a>
                            <a class="dropdown-item"> <i class="ti-pencil-alt"></i>Edit</a>
                            <a class="dropdown-item"> <i class="ti-close"></i>Remove</a>
                        </div>
                    </div>
                </div>
                <div class="ibox-body">
                    <ul class="media-list media-list-divider">
                        <li class="media flexbox">
                            <div>
                                <div class="media-heading">TV & Video</div>
                                <div class="font-13 text-light">Lorem ipsum dolar set...</div>
                            </div>
                            <h4 class="font-strong mb-0 ml-3 text-primary">+1200</h4>
                        </li>
                        <li class="media flexbox">
                            <div>
                                <div class="media-heading">Health & Beauty</div>
                                <div class="font-13 text-light">Lorem ipsum dolar set...</div>
                            </div>
                            <h4 class="font-strong mb-0 ml-3 text-primary">+1005</h4>
                        </li>
                        <li class="media flexbox">
                            <div>
                                <div class="media-heading">Computers & Tablets</div>
                                <div class="font-13 text-light">Lorem ipsum dolar set...</div>
                            </div>
                            <h4 class="font-strong mb-0 ml-3 text-primary">+880</h4>
                        </li>
                        <li class="media flexbox">
                            <div>
                                <div class="media-heading">Jewelry and Watches</div>
                                <div class="font-13 text-light">Lorem ipsum dolar set...</div>
                            </div>
                            <h4 class="font-strong mb-0 ml-3 text-primary">+725</h4>
                        </li>
                        <li class="media flexbox">
                            <div>
                                <div class="media-heading">Handbags & Purses</div>
                                <div class="font-13 text-light">Lorem ipsum dolar set...</div>
                            </div>
                            <h4 class="font-strong mb-0 ml-3 text-primary">+510</h4>
                        </li>
                        <li class="media flexbox">
                            <div>
                                <div class="media-heading">Cameras & Photo</div>
                                <div class="font-13 text-light">Lorem ipsum dolar set...</div>
                            </div>
                            <h4 class="font-strong mb-0 ml-3 text-primary">+323</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="ibox ibox-fullheight">
                <div class="ibox-head">
                    <div class="ibox-title">
                        <span class="btn-icon-only btn-circle bg-primary-50 text-primary mr-3"><i class="ti-email"></i></span>Email distribution</div>
                </div>
                <div class="ibox-body">
                    <div class="flexbox mb-4">
                        <div class="flexbox">
                            <span class="flexbox mr-3">
                                <span class="mr-2 text-muted">Sent</span>
                                <span class="h3 mb-0 text-primary font-strong">310</span>
                            </span>
                            <span class="flexbox">
                                <span class="mr-2 text-muted">Queue</span>
                                <span class="h3 mb-0 text-pink font-strong">105</span>
                            </span>
                        </div>
                        <a class="flexbox" href="javascript:;" target="_blank">VIEW ALL<i class="ti-arrow-circle-right ml-2 font-18"></i></a>
                    </div>
                    <div class="ibox-fullwidth-block">
                        <table class="table">
                            <thead class="thead-default thead-lg">
                                <tr>
                                    <th class="pl-4">Subject</th>
                                    <th>Quantity</th>
                                    <th>Reference</th>
                                    <th class="pr-4">Percent</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pl-4">
                                        <div class="flexbox-b">
                                            <span class="btn-icon-only btn-primary font-20 mr-3">AC</span>
                                            <div>
                                                <h6 class="mb-1">Try New version of Adminca</h6>
                                                <div>
                                                    <span class="text-muted font-13"><i class="ti-calendar mr-2"></i>20.04.2018</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h4 class="font-strong text-light mb-0">1400</h4>
                                    </td>
                                    <td>
                                        <h4 class="font-strong text-primary mb-0">820</h4>
                                    </td>
                                    <td class="pr-4">
                                        <div class="easypie" data-percent="59" data-bar-color="#5c6bc0" data-size="56" data-line-width="3">
                                            <span class="easypie-data h5 font-strong">59%</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-4">
                                        <div class="flexbox-b">
                                            <span class="btn-icon-only btn-pink mr-3"><i class="ti-gift font-20"></i></span>
                                            <div>
                                                <h6 class="mb-1">Adminca Big Bundle 6 in 1</h6>
                                                <div>
                                                    <span class="text-muted font-13"><i class="ti-calendar mr-2"></i>20.04.2018</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h4 class="font-strong text-light mb-0">1250</h4>
                                    </td>
                                    <td>
                                        <h4 class="font-strong text-pink mb-0">575</h4>
                                    </td>
                                    <td class="pr-4">
                                        <div class="easypie" data-percent="46" data-bar-color="#ff4081" data-size="56" data-line-width="3">
                                            <span class="easypie-data h5 font-strong">46%</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-4">
                                        <div class="flexbox-b">
                                            <span class="btn-icon-only btn-success font-20 mr-3">LV</span>
                                            <div>
                                                <h6 class="mb-1">Adminca - Save your time, choose the best</h6>
                                                <div>
                                                    <span class="text-muted font-13"><i class="ti-calendar mr-2"></i>20.04.2018</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h4 class="font-strong text-light mb-0">1320</h4>
                                    </td>
                                    <td>
                                        <h4 class="font-strong text-success mb-0">554</h4>
                                    </td>
                                    <td class="pr-4">
                                        <div class="easypie" data-percent="42" data-bar-color="#18c5a9" data-size="56" data-line-width="3">
                                            <span class="easypie-data h5 font-strong">42%</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-4">
                                        <div class="flexbox-b">
                                            <span class="btn-icon-only btn-warning mr-3"><i class="ti-support font-20"></i></span>
                                            <div>
                                                <h6 class="mb-1">High Quality Support & Easy Code</h6>
                                                <div>
                                                    <span class="text-muted font-13"><i class="ti-calendar mr-2"></i>20.04.2018</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h4 class="font-strong text-light mb-0">870</h4>
                                    </td>
                                    <td>
                                        <h4 class="font-strong text-warning mb-0">478</h4>
                                    </td>
                                    <td class="pr-4">
                                        <div class="easypie" data-percent="56" data-bar-color="#f39c12" data-size="56" data-line-width="3">
                                            <span class="easypie-data h5 font-strong">56%</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox ibox-fullheight">
                <div class="ibox-head">
                    <div class="ibox-title">TASKS</div>
                    <div class="ibox-tools">
                        <a class="font-18"><i class="ti-plus"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                    <ul class="list-group list-group-divider list-group-full tasks-list">
                        <li class="list-group-item task-item">
                            <div>
                                <label class="checkbox checkbox-grey checkbox-success">
                                    <input type="checkbox" checked="">
                                    <span class="input-span"></span>
                                    <span class="task-title">Make Adminca the best and the most easy admin template</span>
                                </label>
                            </div>
                            <div class="task-data"><small class="text-muted">29 May 2018</small></div>
                            <div class="task-actions">
                                <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                    <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item task-item">
                            <div>
                                <label class="checkbox checkbox-grey checkbox-success">
                                    <input type="checkbox">
                                    <span class="input-span"></span>
                                    <span class="task-title">Create Financial Report</span>
                                </label>
                            </div>
                            <div class="task-data"><small class="text-muted">No due date</small></div>
                            <div class="task-actions">
                                <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                    <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item task-item">
                            <div>
                                <label class="checkbox checkbox-grey checkbox-success">
                                    <input type="checkbox" checked="">
                                    <span class="input-span"></span>
                                    <span class="task-title">Meeting with Ann</span>
                                </label>
                                <span class="badge badge-warning ml-1"><i class="ti-alarm-clock"></i> 1 hrs</span>
                            </div>
                            <div class="task-data"><small class="text-muted">29 May 2018</small></div>
                            <div class="task-actions">
                                <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                    <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item task-item">
                            <div>
                                <label class="checkbox checkbox-grey checkbox-success">
                                    <input type="checkbox">
                                    <span class="input-span"></span>
                                    <span class="task-title">Edit the blog post</span>
                                </label>
                            </div>
                            <div class="task-data"><small class="text-muted">29 May 2018</small></div>
                            <div class="task-actions">
                                <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                    <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item task-item">
                            <div>
                                <label class="checkbox checkbox-grey checkbox-success">
                                    <input type="checkbox">
                                    <span class="input-span"></span>
                                    <span class="task-title">Send photos to Jack</span>
                                </label>
                                <span class="badge badge-success ml-1">Today</span>
                            </div>
                            <div class="task-data"><small class="text-muted">29 May 2018</small></div>
                            <div class="task-actions">
                                <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                    <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item task-item">
                            <div>
                                <label class="checkbox checkbox-grey checkbox-success">
                                    <input type="checkbox">
                                    <span class="input-span"></span>
                                    <span class="task-title">Send Financial Reports</span>
                                </label>
                                <span class="badge badge-danger ml-1">Important</span>
                            </div>
                            <div class="task-data"><small class="text-muted">29 May 2018</small></div>
                            <div class="task-actions">
                                <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                    <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item task-item">
                            <div>
                                <label class="checkbox checkbox-grey checkbox-success">
                                    <input type="checkbox">
                                    <span class="input-span"></span>
                                    <span class="task-title">Send message to Bob</span>
                                </label>
                            </div>
                            <div class="task-data"><small class="text-muted">29 May 2018</small></div>
                            <div class="task-actions">
                                <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                    <a class="dropdown-item"><i class="ti-close mr-2"></i>Remove</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- New Event Dialog-->
    <div class="modal fade" id="new-event-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form class="modal-content form-horizontal" id="newEventForm" action="javascript:;">
                <div class="modal-header p-4">
                    <h5 class="modal-title">NEW EVENT</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <div class="form-group mb-4">
                        <label class="text-muted mb-3">Category</label>
                        <div>
                            <label class="radio radio-outline-primary radio-inline check-single" data-toggle="tooltip" data-original-title="General">
                                <input type="radio" name="category" checked="" value="fc-event-primary">
                                <span class="input-span"></span>
                            </label>
                            <label class="radio radio-outline-warning radio-inline check-single" data-toggle="tooltip" data-original-title="Payment">
                                <input type="radio" name="category" value="fc-event-warning">
                                <span class="input-span"></span>
                            </label>
                            <label class="radio radio-outline-success radio-inline check-single" data-toggle="tooltip" data-original-title="Technical">
                                <input type="radio" name="category" value="fc-event-success">
                                <span class="input-span"></span>
                            </label>
                            <label class="radio radio-outline-danger radio-inline check-single" data-toggle="tooltip" data-original-title="Registration">
                                <input type="radio" name="category" value="fc-event-danger">
                                <span class="input-span"></span>
                            </label>
                            <label class="radio radio-outline-info radio-inline check-single" data-toggle="tooltip" data-original-title="Security">
                                <input type="radio" name="category" value="fc-event-info">
                                <span class="input-span"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <input class="form-control form-control-line" id="new-event-title" type="text" name="title" placeholder="Title">
                    </div>
                    <div class="row">
                        <div class="col-6 form-group mb-4">
                            <label class="col-form-label text-muted">Start:</label>
                            <div class="input-group-icon input-group-icon-right">
                                <span class="input-icon input-icon-right"><i class="fa fa-calendar-check-o"></i></span>
                                <input class="form-control form-control-line datepicker date" id="new-event-start" type="text" name="start" value="">
                            </div>
                        </div>
                        <div class="col-6 form-group mb-4">
                            <label class="col-form-label text-muted">End:</label>
                            <div class="input-group-icon input-group-icon-right">
                                <span class="input-icon input-icon-right"><i class="fa fa-calendar-check-o"></i></span>
                                <input class="form-control form-control-line datepicker date" id="new-event-end" type="text" name="end" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4 pt-3">
                        <label class="ui-switch switch-icon mr-3 mb-0">
                            <input id="new-event-allDay" type="checkbox" checked="">
                            <span></span>
                        </label>All Day</div>
                </div>
                <div class="modal-footer justify-content-start bg-primary-50">
                    <button class="btn btn-primary btn-rounded" id="addEventButton" type="submit">Add event</button>
                </div>
            </form>
        </div>
    </div>
    <!-- End New Event Dialog-->
    <!-- Event Detail Dialog-->
    <div class="modal fade" id="event-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form class="modal-content form-horizontal" id="eventForm" action="javascript:;">
                <div class="modal-header p-4">
                    <h5 class="modal-title">EDIT EVENT</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <div class="form-group mb-4">
                        <label class="text-muted mb-3">Category</label>
                        <div>
                            <label class="radio radio-outline-primary radio-inline check-single" data-toggle="tooltip" data-original-title="General">
                                <input type="radio" name="category" checked="" value="fc-event-primary">
                                <span class="input-span"></span>
                            </label>
                            <label class="radio radio-outline-warning radio-inline check-single" data-toggle="tooltip" data-original-title="Payment">
                                <input type="radio" name="category" value="fc-event-warning">
                                <span class="input-span"></span>
                            </label>
                            <label class="radio radio-outline-success radio-inline check-single" data-toggle="tooltip" data-original-title="Technical">
                                <input type="radio" name="category" value="fc-event-success">
                                <span class="input-span"></span>
                            </label>
                            <label class="radio radio-outline-danger radio-inline check-single" data-toggle="tooltip" data-original-title="Registration">
                                <input type="radio" name="category" value="fc-event-danger">
                                <span class="input-span"></span>
                            </label>
                            <label class="radio radio-outline-info radio-inline check-single" data-toggle="tooltip" data-original-title="Security">
                                <input type="radio" name="category" value="fc-event-info">
                                <span class="input-span"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <input class="form-control form-control-line" id="event-title" type="text" name="title" placeholder="Title">
                    </div>
                    <div class="row">
                        <div class="col-6 form-group mb-4">
                            <label class="col-form-label text-muted">Start:</label>
                            <div class="input-group-icon input-group-icon-right">
                                <span class="input-icon input-icon-right"><i class="fa fa-calendar-check-o"></i></span>
                                <input class="form-control form-control-line datepicker date" id="event-start" type="text" name="start" value="">
                            </div>
                        </div>
                        <div class="col-6 form-group mb-4">
                            <label class="col-form-label text-muted">End:</label>
                            <div class="input-group-icon input-group-icon-right">
                                <span class="input-icon input-icon-right"><i class="fa fa-calendar-check-o"></i></span>
                                <input class="form-control form-control-line datepicker date" id="event-end" type="text" name="end" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4 pt-3">
                        <label class="ui-switch switch-icon mr-3 mb-0">
                            <input id="event-allDay" type="checkbox">
                            <span></span>
                        </label>All Day</div>
                </div>
                <div class="modal-footer justify-content-between bg-primary-50">
                    <button class="btn btn-primary btn-rounded" id="editEventButton" type="submit">Submit</button>
                    <a class="text-danger" id="deleteEventButton" data-dismiss="modal"><i class="la la-trash font-20"></i></a>
                </div>
            </form>
        </div>
    </div>
    <!-- End Event Detail Dialog-->
</div>
@endsection

@section('js')
<script src="{{ asset('assets/chart.js/dist/chart.min.js') }}"></script>
<script src="{{ asset('assets/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('assets/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('assets/fullcalendar/dist/fullcalendar.min.js') }}"></script>
<script src="{{ asset('assets/smalot-bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('js/backend/scripts/dashboard_6.js') }}"></script>
<script src="{{ asset('js/backend/scripts/calendar-demo.js') }}"></script>
@endsection
