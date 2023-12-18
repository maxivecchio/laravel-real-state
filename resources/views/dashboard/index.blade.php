@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="mt-2">
                    <h2>Welcome to the Admin dashboard.</h2>
                </div>

                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body d-block gap-4 d-sm-flex justify-content-around">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="dashboard/properties" class='manageButton'>Manage Properties</a>
                        <a href="dashboard/news" class='manageButton'>Manage News</a>
                        <a href="dashboard/users" class='manageButton'>Manage Users</a>
                    </div>
                </div>

                <div class="mt-2">
                    <h2>Customers Analytics.</h2>
                </div>

                <div class="card">
                    <div class="card-header">Life-time data</div>
                    <div class="card-body d-block gap-4 d-sm-flex justify-content-around">
                        <div class="dashboardCard"><p>Total Orders:</p><span>{{ $totalOrders }}</span></div>
                        <div class="dashboardCard"><p>Total Revenue:</p><span>${{ number_format($totalRevenue, 2) }}</span></div>
                        <div class="dashboardCard"><p>Total Users:</p><span>{{ $totalUsers }}</span></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection