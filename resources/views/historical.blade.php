@extends('layouts/default')

{{-- Page title --}}
@section('title')
Historical Data
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/timeline1.css') }}">
@stop

{{-- breadcrumb --}}
@section('top')
    <div class="breadcum">
        <div class="container">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                    </a>
                </li>
                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Historical Data</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="clock" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Historical Data
            </div>
        </div>
    </div>
    @stop


{{-- Page content --}}
@section('content')
    <div class="row">

    <!-- Container Section Start -->
        <div class="container">
            <!--Content Section Start -->
            {{--<div id="chartContainer" style="height: 400px; width: 100%;"></div>--}}

            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js" type="text/javascript"></script>
            <hr/>
            <canvas id="myChart" width="400" height="200"></canvas>
            <hr/>
            <script>
                var data = {
                    labels: ["January", "February", "March", "April", "May", "June", "July", "Aug", "Sep", "Nov", "Dec"],
                    datasets: [
                        {
                            label: "Water Level",
                            fill: false,
                            lineTension: 0.1,
                            backgroundColor: "rgba(75,192,192,0.4)",
                            borderColor: "rgba(75,192,192,1)",
                            borderCapStyle: 'butt',
                            borderDash: [],
                            borderDashOffset: 0.0,
                            borderJoinStyle: 'miter',
                            pointBorderColor: "rgba(75,192,192,1)",
                            pointBackgroundColor: "#fff",
                            pointBorderWidth: 1,
                            pointHoverRadius: 5,
                            pointHoverBackgroundColor: "rgba(75,192,192,1)",
                            pointHoverBorderColor: "rgba(220,220,220,1)",
                            pointHoverBorderWidth: 2,
                            pointRadius: 1,
                            pointHitRadius: 10,
                            data: [65, 59, 80, 81, 56, 55, 40, 45, 50, 55, 45, 45],
                            spanGaps: false,
                        },
                        {
                            label: "DANGER",
                            fill: false,
                            lineTension: 0.1,
                            backgroundColor: "rgba(255,0,0,0.4)",
                            borderColor: "rgba(255,0,0,1)",
                            borderCapStyle: 'butt',
                            borderDash: [],
                            borderDashOffset: 0.0,
                            borderJoinStyle: 'miter',
                            pointBorderColor: "rgba(255,0,0,1)",
                            pointBackgroundColor: "#fff",
                            pointBorderWidth: 1,
                            pointHoverRadius: 5,
                            pointHoverBackgroundColor: "rgba(255,0,0,1)",
                            pointHoverBorderColor: "rgba(220,220,220,1)",
                            pointHoverBorderWidth: 2,
                            pointRadius: 1,
                            pointHitRadius: 10,
                            data: [80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80],
                            spanGaps: false,
                        },
                        {
                            label: "NORMAL",
                            fill: false,
                            lineTension: 0.1,
                            backgroundColor: "rgba(0,0,0,0.4)",
                            borderColor: "rgba(0,0,0,1)",
                            borderCapStyle: 'butt',
                            borderDash: [],
                            borderDashOffset: 0.0,
                            borderJoinStyle: 'miter',
                            pointBorderColor: "rgba(0,0,0,1)",
                            pointBackgroundColor: "#fff",
                            pointBorderWidth: 1,
                            pointHoverRadius: 5,
                            pointHoverBackgroundColor: "rgba(0,0,0,1)",
                            pointHoverBorderColor: "rgba(220,220,220,1)",
                            pointHoverBorderWidth: 2,
                            pointRadius: 1,
                            pointHitRadius: 10,
                            data: [50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50],
                            spanGaps: false,
                        },
                        {
                            label: "MIN",
                            fill: false,
                            lineTension: 0.1,
                            backgroundColor: "rgba(0,255,0,0.4)",
                            borderColor: "rgba(0,255,0,1)",
                            borderCapStyle: 'butt',
                            borderDash: [],
                            borderDashOffset: 0.0,
                            borderJoinStyle: 'miter',
                            pointBorderColor: "rgba(0,255,0,1)",
                            pointBackgroundColor: "#fff",
                            pointBorderWidth: 1,
                            pointHoverRadius: 5,
                            pointHoverBackgroundColor: "rgba(0,255,0,1)",
                            pointHoverBorderColor: "rgba(220,220,220,1)",
                            pointHoverBorderWidth: 2,
                            pointRadius: 1,
                            pointHitRadius: 10,
                            data: [10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10],
                            spanGaps: false,
                        }
                    ]
                };

                var ctx = document.getElementById("myChart");
                var myLineChart = new Chart(ctx, {
                    type: 'line',
                    data: data,
                    options: {
                        legend: {
                            display: true,
                            labels: {
                                fontColor: 'rgb(255, 99, 132)'
                            }
                        },
                        title: {
                            display: true,
                            text: 'Sg.Sembrong ({{date('Y')}})'
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
            </script>
        <!-- //Content Section End -->
    </div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
