@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <!-- nav -->
            @include('layouts.nav')
            <!-- end nav -->
        </div>
        <div class="col-md-9">
            <div class="jumbotron">
                <div class="panel panel-default">
                    <div class="panel-heading">Assalaam</div>

                    <div class="panel-body">
                        Selamat datang di Bengkel Assalaam
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
@endsection
