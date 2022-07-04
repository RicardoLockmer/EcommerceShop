@extends('mainLayout')

@section('buy')
<div class="container" id="BPONE"  v-cloak>
    <div class="" >
    <!-- LEFT CARD -->

        @if(Auth::check())
            @include('buyLoggedIn')
        @endif
    

    </div>
</div>
@endsection

@section('bp')
<script src="/scripts/bpOne.js"></script>
@endsection