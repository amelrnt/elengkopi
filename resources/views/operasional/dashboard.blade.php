@extends('operasional.template')
@section('title', 'Dashboard')
@section('content')

<div class="body flex-grow-1 px-3">
    @if (\Session::has('success'))

    <div class="alert alert-success" role="alert">
        {!! \Session::get('success') !!}.
      </div>
@endif
    <div class="container-lg">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card mb-4 text-white bg-primary">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-4 fw-semibold">Rp. 5000<span class="fs-6 fw-normal">
                                </span></div>
                            <div>Total Penjualan</div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                        <canvas class="chart" id="card-chart1" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card mb-4 text-white bg-info">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-4 fw-semibold">3000 <span class="fs-6 fw-normal">
                                </span></div>
                            <div>Total Stok</div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                        <canvas class="chart" id="card-chart2" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card mb-4 text-white bg-warning">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-4 fw-semibold">Rp. {{ number_format($pembelian,2,",",".") }}</div>
                            <div style="white-space: nowrap;">Total Pembelian Bahan Baku</div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-3" style="height:70px;">
                        <canvas class="chart" id="card-chart3" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card mb-4 text-white bg-danger">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-4 fw-semibold">{{ $user }}

                            </div>
                            <div>Total User</div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                        <canvas class="chart" id="card-chart4" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- /.card.mb-4-->
    </div>
</div>


@endsection
