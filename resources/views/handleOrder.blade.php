@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    <?php
                    $id = Auth::id();
                    $amount = $orderDetail['amount'];
                    echo $id . "     " . $amount;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
