<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard and Admin Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">

    <title>Sloftechpark</title>

    <!-- vendor css -->
    <link href="{{asset('lib/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">

    <!-- template css -->
    <link rel="stylesheet" href="{{asset('assets/css/cassie.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('dist/sweetalert.css') }}">
    {{-- <link href="{{asset('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet"> --}}
    @stack('styles');
</head>
<body>

@include('admin.partials.sidebar')
<div class="content content-page">
@include('admin.partials.header')
<!-- <div class="row"> -->

{{--    @include('flash-message')--}}
@yield('content')
<!-- </div> -->


    @include('admin.partials.footer')
</div><!-- content -->

<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('lib/jqueryui/jquery-ui.min.js')}}"></script>
<script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('lib/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('lib/js-cookie/js.cookie.js')}}"></script>
<script src="{{asset('lib/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{asset('lib/jquery.flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('lib/jquery.flot/jquery.flot.resize.js')}}"></script>

<script src="{{asset('assets/js/cassie.js')}}"></script>
<script src="{{asset('assets/js/flot.sampledata.js')}}"></script>

<script src="{{asset('dist/sweetalert.min.js')}}"></script>


<script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
@include('flash-message')
<script>
    $(function(){
        'use strict'

        $('#example1').DataTable({
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });

        $('#example2').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });

        $('#example8').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });



        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

    });
</script>





<script>
    $(function(){

        'use strict'

        $.plot('#flotChart1', [{
            data: df1,
            color: '#38c4fa'
        }], {
            series: {
                shadowSize: 0,
                lines: {
                    show: true,
                    lineWidth: 1.5,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0 }, { opacity: 0.5 } ] }
                },
                points: {
                    show: false,
                    radius: 2,
                    lineWidth: 1.5
                }
            },
            grid: {
                borderWidth: 0,
                labelMargin: 0,
            },
            yaxis: { show: false },
            xaxis: {
                show: false,
                min: 40,
                max: 80
            }
        });

        $.plot('#flotChart2', [{
            data: df1,
            color: '#22d273'
        }], {
            series: {
                shadowSize: 0,
                lines: {
                    show: true,
                    lineWidth: 1.5,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0 }, { opacity: 0.5 } ] }
                },
                points: {
                    show: false,
                    radius: 2,
                    lineWidth: 1.5
                }
            },
            grid: {
                borderWidth: 0,
                labelMargin: 0,
            },
            yaxis: { show: false },
            xaxis: {
                show: false,
                min: 20,
                max: 60
            }
        });

        $.plot('#flotChart3', [{
            data: df1,
            color: '#e83e8c'
        }], {
            series: {
                shadowSize: 0,
                lines: {
                    show: true,
                    lineWidth: 1.5,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0 }, { opacity: 0.5 } ] }
                },
                points: {
                    show: false,
                    radius: 2,
                    lineWidth: 1.5
                }
            },
            grid: {
                borderWidth: 0,
                labelMargin: 0,
            },
            yaxis: { show: false },
            xaxis: {
                show: false,
                min: 60,
                max: 100
            }
        });

        $.plot('#flotChart4', [{
            data: df1,
            color: '#fd7e14'
        }], {
            series: {
                shadowSize: 0,
                lines: {
                    show: true,
                    lineWidth: 1.5,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0 }, { opacity: 0.5 } ] }
                },
                points: {
                    show: false,
                    radius: 2,
                    lineWidth: 1.5
                }
            },
            grid: {
                borderWidth: 0,
                labelMargin: 0,
            },
            yaxis: { show: false },
            xaxis: {
                show: false,
                min: 100,
                max: 140
            }
        });

        // card-calendar-one widget
        $('#datepicker1').datepicker({
            showOtherMonths: true
        });

    })
</script>

<script>
    $(function(){

        'use strict'

        var getUrlParameter = function getUrlParameter(sParam) {
            var sPageURL = window.location.search.substring(1),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                }
            }
        };

        if(!Cookies.get('theme-skin')){
            $('#defaultTheme').addClass('theme-selected');
        }

        $('.card-theme').on('click', function(e){
            $('.card-theme').removeClass('theme-selected');
            $(this).addClass('theme-selected');

            var skin = $(this).attr('data-title');

            if(skin === 'default') {
                $('#themeSkin').remove();
                Cookies.remove('theme-skin');
            } else {

                if($('#themeSkin').length === 0) {
                    $('head').append('<link id="themeSkin" rel="stylesheet" href="{{asset('assets/css/skin')}}.'+skin+'.css">')
                } else {
                    $('#themeSkin').attr('href', '{{asset('assets/css/skin')}}.'+skin+'.css');
                }

                Cookies.set('theme-skin', skin);
            }
        })

        var skinParam = getUrlParameter('skin');
        if(skinParam.length) {
            $('.card-theme').removeClass('theme-selected');
            $('.card-theme[data-title="'+skinParam+'"]').addClass('theme-selected');

            if(skinParam === 'default') {
                $('#themeSkin').remove();
                Cookies.remove('theme-skin');
            } else {

                if($('#themeSkin').length === 0) {
                    $('head').append('<link id="themeSkin" rel="stylesheet" href="{{asset('assets/css/skin')}}.'+skinParam+'.css">')
                } else {
                    $('#themeSkin').attr('href', '{{asset('assets/css/skin')}}.'+skinParam+'.css');
                }

                Cookies.set('theme-skin', skinParam);
            }
        }

    })
</script>
{{--<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>--}}
<script type="text/javascript" src="https://unpkg.com/nepali-date-picker@2.0.0/dist/jquery.nepaliDatePicker.min.js" integrity="sha384-bBN6UZ/L0DswJczUYcUXb9lwIfAnJSGWjU3S0W5+IlyrjK0geKO+7chJ7RlOtrrF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://unpkg.com/nepali-date-picker@2.0.0/dist/nepaliDatePicker.min.css" integrity="sha384-Fligaq3qH5qXDi+gnnhQctSqfMKJvH4U8DTA+XGemB/vv9AUHCwmlVR/B3Z4nE+q" crossorigin="anonymous">

<script type="text/javascript">
    $(".bod-picker").nepaliDatePicker({
        // dateFormat: "%D, %M %d, %y",

        dateFormat: "%y-%m-%d",
        closeOnDateSelect: true
    });
    $("#clear-bth").on("click", function(event) {
        $(".bod-picker").val('');
    });

</script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@stack('scripts')
</body>
</html>
