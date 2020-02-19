@extends('admin.layouts.app')
@section('content')

    {{--    <link rel="stylesheet" type="text/css" href="{{ asset('dist/sweetalert.css') }}">--}}
    {{--<!DOCTYPE html>--}}
    {{--<link href="{{asset('css/plugins/switchery/switchery.css')}}" rel="stylesheet">--}}

    {{--<html lang="en">--}}
    {{--<head>--}}

    {{--    <!-- Required meta tags -->--}}
    {{--    <meta charset="utf-8">--}}
    {{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}

    {{--    <!-- Meta -->--}}
    {{--    <meta name="description" content="Responsive Bootstrap 4 Dashboard and Admin Template">--}}
    {{--    <meta name="author" content="ThemePixels">--}}

    {{--    <!-- Favicon -->--}}
    {{--    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">--}}

    {{--    <title>Cassie Responsive Bootstrap 4 Dashboard and Admin Template</title>--}}

    {{--    <!-- vendor css -->--}}
    {{--    <link href="../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">--}}
    {{--    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">--}}
    {{--    <link href="../lib/prismjs/themes/prism-tomorrow.css" rel="stylesheet">--}}
    {{--    <link href="../lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">--}}
    {{--    <link href="../lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">--}}
    {{--    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">--}}

    {{--    <!-- template css -->--}}
    {{--    <link rel="stylesheet" href="../assets/css/cassie.css">--}}

    {{--</head>--}}
    {{--<body data-spy="scroll" data-target="#navSection" data-offset="100">--}}
    {{--@include('admin.partials.sidebar')--}}

    {{--<div class="sidebar">--}}
    {{--    <div class="sidebar-header">--}}
    {{--        <div>--}}
    {{--            <a href="../index.html" class="sidebar-logo"><span>cassie</span></a>--}}
    {{--            <small class="sidebar-logo-headline">Responsive Dashboard Template</small>--}}
    {{--        </div>--}}
    {{--    </div><!-- sidebar-header -->--}}
    {{--    <div id="dpSidebarBody" class="sidebar-body">--}}
    {{--        <ul class="nav nav-sidebar">--}}
    {{--            <li class="nav-label"><label class="content-label">Template Pages</label></li>--}}
    {{--            <li class="nav-item show">--}}
    {{--                <a href="dashboard-two.html" class="nav-link"><i data-feather="box"></i> Dashboard</a>--}}
    {{--            </li>--}}
    {{--            <li class="nav-item">--}}
    {{--                <a href="" class="nav-link with-sub"><i data-feather="layout"></i> Sales</a>--}}
    {{--                <nav class="nav nav-sub">--}}
    {{--                    <a href="app-newSales.html" class="nav-sub-link">New Sales</a>--}}
    {{--                    <a href="app-allSales.html" class="nav-sub-link">All Sales</a>--}}
    {{--                    <a href="#" class="nav-sub-link">Sales Return</a>--}}
    {{--                </nav>--}}
    {{--            </li>--}}
    {{--            <li class="nav-item">--}}
    {{--                <a href="" class="nav-link with-sub"><i data-feather="lock"></i> Purchase</a>--}}
    {{--                <nav class="nav nav-sub">--}}
    {{--                    <a href="page-signin.html" class="nav-sub-link">New Purchase</a>--}}
    {{--                    <a href="page-signup.html" class="nav-sub-link">All Purchase</a>--}}
    {{--                    <a href="page-forgot.html" class="nav-sub-link">Purchase Return</a>--}}
    {{--                </nav>--}}
    {{--            </li>--}}
    {{--            <li class="nav-item">--}}
    {{--                <a href="" class="nav-link with-sub"><i data-feather="user"></i> Customer</a>--}}
    {{--                <nav class="nav nav-sub">--}}
    {{--                    <a href="page-profile.html" class="nav-sub-link">New Customer</a>--}}
    {{--                    <a href="page-timeline.html" class="nav-sub-link">All Customer</a>--}}
    {{--                </nav>--}}
    {{--            </li>--}}
    {{--            <li class="nav-item">--}}
    {{--                <a href="" class="nav-link with-sub"><i data-feather="file-text"></i> Supplier</a>--}}
    {{--                <nav class="nav nav-sub">--}}
    {{--                    <a href="page-invoice.html" class="nav-sub-link">New Supplier</a>--}}
    {{--                    <a href="page-pricing.html" class="nav-sub-link">All Supplier</a>--}}
    {{--                </nav>--}}
    {{--            </li>--}}
    {{--            <li class="nav-item">--}}
    {{--                <a href="" class="nav-link with-sub"><i data-feather="x-circle"></i> Product and Services</a>--}}
    {{--                <nav class="nav nav-sub">--}}
    {{--                    <a href="page-404.html" class="nav-sub-link">Product</a>--}}
    {{--                    <a href="page-404.html" class="nav-sub-link">Damage Product</a>--}}
    {{--                    <a href="page-500.html" class="nav-sub-link">Catagories</a>--}}
    {{--                </nav>--}}
    {{--            </li>--}}
    {{--            <li class="nav-item">--}}
    {{--                <a href="" class="nav-link"><i data-feather="layers"></i> Stock</a>--}}
    {{--            </li>--}}
    {{--            <li class="nav-label"><label class="content-label">Admin</label></li>--}}
    {{--            <li class="nav-item">--}}
    {{--                <a href="" class="nav-link with-sub"><i data-feather="life-buoy"></i> Account</a>--}}
    {{--                <nav class="nav nav-sub">--}}
    {{--                    <a href="../components/form-elements.html" class="nav-sub-link">Expense</a>--}}
    {{--                    <a href="../components/form-input-group.html" class="nav-sub-link">Income</a>--}}
    {{--                    <a href="../components/form-input-tags.html" class="nav-sub-link">Pay-in Receipt</a>--}}
    {{--                    <a href="../components/form-input-masks.html" class="nav-sub-link">Pay-out Receipt</a>--}}
    {{--                    <a href="../components/form-validation.html" class="nav-sub-link">Account Head</a>--}}
    {{--                </nav>--}}
    {{--            </li>--}}
    {{--            <li class="nav-item">--}}
    {{--                <a href="" class="nav-link with-sub"><i data-feather="book"></i> Branch</a>--}}
    {{--                <nav class="nav nav-sub">--}}
    {{--                    <a href="../components/con-grid.html" class="nav-sub-link">Branches</a>--}}
    {{--                    <a href="../components/con-icons.html" class="nav-sub-link">Stock Transfer</a>--}}
    {{--                    <a href="../components/con-images.html" class="nav-sub-link">Employee Transfer</a>--}}
    {{--                </nav>--}}
    {{--            </li>--}}
    {{--            <li class="nav-item">--}}
    {{--                <a href="" class="nav-link with-sub"><i data-feather="layers"></i> Human Resource</a>--}}
    {{--                <nav class="nav nav-sub">--}}
    {{--                    <a href="../components/com-accordion.html" class="nav-sub-link">Employee</a>--}}
    {{--                    <a href="../components/com-alerts.html" class="nav-sub-link">Salary Payroll</a>--}}
    {{--                    <a href="../components/com-avatar.html" class="nav-sub-link">Attendance</a>--}}
    {{--                </nav>--}}
    {{--            </li>--}}
    {{--            <li class="nav-item">--}}
    {{--                <a href="" class="nav-link with-sub"><i data-feather="monitor"></i> Report</a>--}}
    {{--                <nav class="nav nav-sub">--}}
    {{--                    <a href="../components/util-animation.html" class="nav-sub-link">Sales Report</a>--}}
    {{--                    <a href="../components/util-background.html" class="nav-sub-link">Purchase Report</a>--}}
    {{--                    <a href="../components/util-border.html" class="nav-sub-link">Expense Report</a>--}}
    {{--                    <a href="../components/util-display.html" class="nav-sub-link">Income Report</a>--}}
    {{--                    <a href="../components/util-divider.html" class="nav-sub-link">Payin Report</a>--}}
    {{--                    <a href="../components/util-flex.html" class="nav-sub-link">Payout Report</a>--}}
    {{--                    <a href="../components/util-height.html" class="nav-sub-link">Payment in/out</a>--}}
    {{--                    <a href="../components/util-margin.html" class="nav-sub-link">Stock</a>--}}
    {{--                    <a href="../components/util-padding.html" class="nav-sub-link">Customer Ledger</a>--}}
    {{--                    <a href="../components/util-position.html" class="nav-sub-link">Supplier Ledger</a>--}}
    {{--                    <a href="../components/util-typography.html" class="nav-sub-link">Account Ledger</a>--}}
    {{--                    <a href="../components/util-width.html" class="nav-sub-link">Customer Due Report</a>--}}
    {{--                    <a href="../components/util-extras.html" class="nav-sub-link">Supplier Due Report</a>--}}
    {{--                    <a href="../components/util-extras.html" class="nav-sub-link">Profit/loss Report</a>--}}
    {{--                    <a href="../components/util-extras.html" class="nav-sub-link">All Bills</a>--}}
    {{--                </nav>--}}
    {{--            </li>--}}
    {{--            <li class="nav-item">--}}
    {{--                <a href="" class="nav-link with-sub"><i data-feather="pie-chart"></i> Configuration</a>--}}
    {{--                <nav class="nav nav-sub">--}}
    {{--                    <a href="../components/chart-flot.html" class="nav-sub-link">General Setting</a>--}}
    {{--                    <a href="../components/chart-chartjs.html" class="nav-sub-link">Payment Method</a>--}}
    {{--                    <a href="../components/chart-peity.html" class="nav-sub-link">User</a>--}}
    {{--                    <a href="../components/com-badge.html" class="nav-sub-link">Role and Premission</a>--}}
    {{--                    <a href="../components/chart-peity.html" class="nav-sub-link">Bank</a>--}}
    {{--                </nav>--}}
    {{--            </li>--}}
    {{--        </ul>--}}

    {{--        <hr class="mg-t-30 mg-b-25">--}}

    {{--        <ul class="nav nav-sidebar">--}}
    {{--            <li class="nav-item"><a href="../pages/themes.html" class="nav-link"><i data-feather="aperture"></i> Themes</a></li>--}}
    {{--            <li class="nav-item"><a href="../docs.html" class="nav-link"><i data-feather="help-circle"></i> Documentation</a></li>--}}
    {{--        </ul>--}}


    {{--    </div><!-- sidebar-body -->--}}
    {{--</div><!-- sidebar -->--}}
    {{--@include('admin.partials.header')--}}
    {{--<div class="content">--}}
    {{--    <div class="header">--}}
    {{--        <div class="header-left">--}}
    {{--            <a href="" class="burger-menu"><i data-feather="menu"></i></a>--}}

    {{--            <div class="header-search">--}}
    {{--                <i data-feather="search"></i>--}}
    {{--                <input type="search" class="form-control" placeholder="What are you looking for?">--}}
    {{--            </div><!-- header-search -->--}}
    {{--        </div><!-- header-left -->--}}

    {{--        <div class="header-right">--}}
    {{--            <a href="" class="header-help-link"><i data-feather="help-circle"></i></a>--}}
    {{--            <div class="dropdown dropdown-notification">--}}
    {{--                <a href="" class="dropdown-link new" data-toggle="dropdown"><i data-feather="bell"></i></a>--}}
    {{--                <div class="dropdown-menu dropdown-menu-right">--}}
    {{--                    <div class="dropdown-menu-header">--}}
    {{--                        <h6>Notifications</h6>--}}
    {{--                        <a href=""><i data-feather="more-vertical"></i></a>--}}
    {{--                    </div><!-- dropdown-menu-header -->--}}
    {{--                    <div class="dropdown-menu-body">--}}
    {{--                        <a href="" class="dropdown-item">--}}
    {{--                            <div class="avatar"><span class="avatar-initial rounded-circle text-primary bg-primary-light">s</span></div>--}}
    {{--                            <div class="dropdown-item-body">--}}
    {{--                                <p><strong>Socrates Itumay</strong> marked the task as completed.</p>--}}
    {{--                                <span>5 hours ago</span>--}}
    {{--                            </div>--}}
    {{--                        </a>--}}
    {{--                        <a href="" class="dropdown-item">--}}
    {{--                            <div class="avatar"><span class="avatar-initial rounded-circle tx-pink bg-pink-light">r</span></div>--}}
    {{--                            <div class="dropdown-item-body">--}}
    {{--                                <p><strong>Reynante Labares</strong> marked the task as incomplete.</p>--}}
    {{--                                <span>8 hours ago</span>--}}
    {{--                            </div>--}}
    {{--                        </a>--}}
    {{--                        <a href="" class="dropdown-item">--}}
    {{--                            <div class="avatar"><span class="avatar-initial rounded-circle tx-success bg-success-light">d</span></div>--}}
    {{--                            <div class="dropdown-item-body">--}}
    {{--                                <p><strong>Dyanne Aceron</strong> responded to your comment on this <strong>post</strong>.</p>--}}
    {{--                                <span>a day ago</span>--}}
    {{--                            </div>--}}
    {{--                        </a>--}}
    {{--                        <a href="" class="dropdown-item">--}}
    {{--                            <div class="avatar"><span class="avatar-initial rounded-circle tx-indigo bg-indigo-light">k</span></div>--}}
    {{--                            <div class="dropdown-item-body">--}}
    {{--                                <p><strong>Kirby Avendula</strong> marked the task as incomplete.</p>--}}
    {{--                                <span>2 days ago</span>--}}
    {{--                            </div>--}}
    {{--                        </a>--}}
    {{--                    </div><!-- dropdown-menu-body -->--}}
    {{--                    <div class="dropdown-menu-footer">--}}
    {{--                        <a href="">View All Notifications</a>--}}
    {{--                    </div>--}}
    {{--                </div><!-- dropdown-menu -->--}}
    {{--            </div>--}}
    {{--            <div class="dropdown dropdown-loggeduser">--}}
    {{--                <a href="" class="dropdown-link" data-toggle="dropdown">--}}
    {{--                    <div class="avatar avatar-sm">--}}
    {{--                        <img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt="">--}}
    {{--                    </div><!-- avatar -->--}}
    {{--                </a>--}}
    {{--                <div class="dropdown-menu dropdown-menu-right">--}}
    {{--                    <div class="dropdown-menu-header">--}}
    {{--                        <div class="media align-items-center">--}}
    {{--                            <div class="avatar">--}}
    {{--                                <img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt="">--}}
    {{--                            </div><!-- avatar -->--}}
    {{--                            <div class="media-body mg-l-10">--}}
    {{--                                <h6>Louise Kate Lumaad</h6>--}}
    {{--                                <span>Administrator</span>--}}
    {{--                            </div>--}}
    {{--                        </div><!-- media -->--}}
    {{--                    </div>--}}
    {{--                    <div class="dropdown-menu-body">--}}
    {{--                        <a href="" class="dropdown-item"><i data-feather="user"></i> View Profile</a>--}}
    {{--                        <a href="" class="dropdown-item"><i data-feather="edit-2"></i> Edit Profile</a>--}}
    {{--                        <a href="" class="dropdown-item"><i data-feather="briefcase"></i> Account Settings</a>--}}
    {{--                        <a href="" class="dropdown-item"><i data-feather="shield"></i> Privacy Settings</a>--}}
    {{--                        <a href="" class="dropdown-item"><i data-feather="log-out"></i> Sign Out</a>--}}
    {{--                    </div>--}}
    {{--                </div><!-- dropdown-menu -->--}}
    {{--            </div>--}}
    {{--        </div><!-- header-right -->--}}
    {{--    </div><!-- header -->--}}
    <div class="content-header">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Contact</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All Contact</li>
                </ol>
            </nav>

        </div>



    </div><!-- content-header -->
    <div class="content-body content-body-calendar" style="margin-top: -50px;">
        <div class="d-md-flex justify-content-between">
            <h4 class="content-title mg-t-10">Welcome to contact</h4>
            <a href="{{route('contact.create')}}" class="btn btn-sm btn-primary"> Add new Contact</a>
            {{--            <button type="button" class="btn btn-sm btn-primary">Add  New Customer</button>--}}
        </div>
        <div class="component-section">

            <table id="example1" class="table">
                <thead>
                <tr>
                    <th >ID</th>
                    <th>Name</th>
                    <th >Email</th>
                    <th >Subject</th>
                    <th >Message</th>

                    {{--                            <th >Service title</th>--}}
                    {{--                            <th >Service image</th>--}}
                    {{--                            <th >Service description</th>--}}
                    {{--                            <th class="hidden-xs text-center">Team description</th>--}}
                    {{--                            <th class="hidden-xs text-center">Team image</th>--}}
{{--                    <th class="text-center">Action</th>--}}
                </tr>
                </thead>
                <tbody>
                @foreach($contact as $key =>$contact )
                    @if($contact->phone)
                    <tr id="contact{{$contact->id}}">
                        <td class="text-center">{{++$key}}</td>
                        <td>{{$contact->name }} </td>
                        <td >{{$contact->email}}  </td>
                        <td > {{$contact->subject}} </td>
                        <td > {{$contact->message}}</td>
                        {{--                        --}}{{--                    <td>{{$customer->companyName}}</td>--}}
                        {{--                        <td>{{$customer->address}}</td>--}}
                        {{--                        --}}{{--                    <td>{{$customer->registrationNumber}}</td>--}}
                        {{--                        <td>{{$customer->mailId}}</td>--}}
                        {{--                        <td>{{$customer->phoneNumber}}</td>--}}

                        {{--                    <td>{{$customer->openingDue}}</td>--}}
                        {{--                    <td>{{$customer->comment}}</td>--}}
{{--                        <td class="d-md-flex">--}}
{{--                            --}}{{--                            <div class="mg-r-20" title="View"><a href="{{route('customer.show',$customer->id)}}"><i class="icon ion-clipboard text-success"></i></a></div>--}}
{{--                            <div class="mg-r-20" title="Edit"><a href="{{route('contact.edit',$contact->id)}}"><i class="far fa-edit text-warning"></i></a></div>--}}
{{--                            --}}{{--                            <div class="mg-r-20" title="Delete"><a href="{{route('about.destroy',$about->id)}}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="icon ion-trash-b text-danger"></i></a></div>--}}
{{--                            <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger remove_button" url="{{route('contact.destroy',$contact->id)}}"><i class="fa fa-times"></i></a>--}}
{{--                        </td>--}}
                    </tr>
                    @endif
                    {{--                <tr>--}}
                    {{--                    <td>2076/12/15</td>--}}
                    {{--                    <td>000002</td>--}}
                    {{--                    <td>Bhagwan Das Agrahari</td>--}}
                    {{--                    <td>9999999</td>--}}
                    {{--                    <td>9999999</td>--}}
                    {{--                    <td>9999999</td>--}}
                    {{--                    <td class="d-md-flex">--}}
                    {{--                        <div class="mg-r-20" title="View"><a href=""><i class="icon ion-clipboard text-success"></i></a></div>--}}
                    {{--                        <div class="mg-r-20" title="Edit"><a href=""><i class="far fa-edit text-warning"></i></a></div>--}}
                    {{--                        <div class="mg-r-20" title="Delete"><a href=""><i class="icon ion-trash-b text-danger"></i></a></div>--}}
                    {{--                    </td>--}}
                    {{--                </tr>--}}
                    {{--                <tr>--}}
                    {{--                    <td>2076/12/15</td>--}}
                    {{--                    <td>000003</td>--}}
                    {{--                    <td>Bhagwan Das Agrahari</td>--}}
                    {{--                    <td>9999999</td>--}}
                    {{--                    <td>9999999</td>--}}
                    {{--                    <td>9999999</td>--}}
                    {{--                    <td class="d-md-flex">--}}
                    {{--                        <div class="mg-r-20" title="View"><a href=""><i class="icon ion-clipboard text-success"></i></a></div>--}}
                    {{--                        <div class="mg-r-20" title="Edit"><a href=""><i class="far fa-edit text-warning"></i></a></div>--}}
                    {{--                        <div class="mg-r-20" title="Delete"><a href=""><i class="icon ion-trash-b text-danger"></i></a></div>--}}
                    {{--                    </td>--}}
                    {{--                </tr>--}}
                @endforeach
                </tbody>
            </table>
        </div><!-- component-section -->

    </div><!-- content-body -->
    {{--    @include('admin.partials.footer')--}}
    {{-- <div class="content-footer">
         &copy; 2019. All Rights Reserved. Created by <a href="http://themepixels.me" target="_blank">ThemePixels</a>
     </div><!-- content-footer -->--}}
    {{--</div><!-- content -->--}}



    {{--<script src="../lib/jquery/jquery.min.js"></script>--}}
    {{--<script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
    {{--<script src="../lib/feather-icons/feather.min.js"></script>--}}
    {{--<script src="../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>--}}
    {{--<script src="../lib/prismjs/prism.js"></script>--}}
    {{--<script src="../lib/datatables.net/js/jquery.dataTables.min.js"></script>--}}
    {{--<script src="../lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>--}}
    {{--<script src="../lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>--}}
    {{--<script src="../lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>--}}
    {{--<script src="../lib/select2/js/select2.min.js"></script>--}}
    {{--<script src="../lib/js-cookie/js.cookie.js"></script>--}}

    {{--<script src="../assets/js/cassie.js"></script>--}}
    {{--    <script>--}}
    {{--        $(function(){--}}
    {{--            'use strict'--}}

    {{--            $('#example1').DataTable({--}}
    {{--                language: {--}}
    {{--                    searchPlaceholder: 'Search...',--}}
    {{--                    sSearch: '',--}}
    {{--                    lengthMenu: '_MENU_ items/page',--}}
    {{--                }--}}
    {{--            });--}}

    {{--            $('#example2').DataTable({--}}
    {{--                responsive: true,--}}
    {{--                language: {--}}
    {{--                    searchPlaceholder: 'Search...',--}}
    {{--                    sSearch: '',--}}
    {{--                    lengthMenu: '_MENU_ items/page',--}}
    {{--                }--}}
    {{--            });--}}

    {{--            $('#example8').DataTable({--}}
    {{--                responsive: true,--}}
    {{--                language: {--}}
    {{--                    searchPlaceholder: 'Search...',--}}
    {{--                    sSearch: '',--}}
    {{--                    lengthMenu: '_MENU_ items/page',--}}
    {{--                }--}}
    {{--            });--}}



    {{--            // Select2--}}
    {{--            $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });--}}

    {{--        });--}}
    {{--    </script>--}}
    {{--</body>--}}
    {{--</html>--}}
    {{--    <script src="{{asset('dist/sweetalert.min.js')}}"></script>--}}
    @push('scripts')
        <script type="text/javascript">
            $('.remove_button').on('click', function(e) {
                e.preventDefault();
                // alert('test');
                var url = $(this).attr('url');
                swal({
                        title: "Are you sure!",
                        type: "error",
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "Yes!",
                        showCancelButton: true,
                    },
                    function() {
                        $.ajax({
                            url: url,
                            type: 'DELETE',
                            data: {
                                _token : "{{csrf_token()}}"
                            },
                            success: function(data){
                                $(data).remove();
                                toastr.success('Deleted Successfully');
                            },
                            error: function(error){
                                console.log('error');
                            }
                        })
                    });
            })
        </script>
    @endpush
@endsection
