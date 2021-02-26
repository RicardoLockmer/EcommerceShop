@extends('mainLayout')

@section('buy')
<div class="container" id="BPONE"  v-cloak>
<div class="row" style="margin: 18px; border: 0.1px solid #b0e6ff81;" >
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