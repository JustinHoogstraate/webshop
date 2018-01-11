@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! <?php
                        $dbController = new \App\Http\Controllers\databaseController();
                        $stock = $dbController->getStock();
                        echo $stock;
                        ?>
                        <a href="{{ url('/order') }}">order</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
