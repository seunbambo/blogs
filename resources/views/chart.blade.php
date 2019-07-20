@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><center><h3>Posts Weekly Visit</h3></center></div>

                <div class="panel-body">
                    {!! $chart->html() !!}
                </div><br>

                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-area-chart"></i>Trend</div>
                    <div class="card-body">
                        <canvas id="myAreaChart" width="100%" height="30"></canvas>
                    </div>
                    <div class="card-footer small text-muted">Updated at @php echo date('F j. Y', time()) @endphp</div>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Charts::scripts() !!}
{!! $chart->script() !!}
@endsection

@section( 'scripts' )
    <script src="{{url( 'vendor/jquery.min.js' )}}"></script>

    <script src="{{url( 'vendor/Chart.min.js' )}}"></script>

    <script src="{{url( 'vendor/create-charts.js' )}}"></script>
@endsection