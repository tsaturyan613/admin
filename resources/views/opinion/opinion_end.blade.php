@extends('layouts.main')

@section('title', 'Colibrilab')

@section('content')
<div style="margin-top: 200px;"></div>
    <div class="page">

        <div class="and" style="text-align: center;">
            <center>
                <div id="end"  style="position: relative; width: 190px; height: 190px;">
                    <div><img style="position: absolute; top: -17px; right: 0;" src="{{ asset('images/celebrate.svg ') }}" ></div>

                    <div  ><img class="op" style="position: absolute; top: 48px;right: 51px;" src="{{ asset('images/box-2.svg') }}" ></div>

                    <div><img class="pt" style="position: absolute; top: 71px;right: 71px;" src="{{ asset('images/checkin.svg') }}" ></div>

                    <div><img style="position: absolute; top: 73px; right: 53px;" src="{{ asset('images/box-1.svg') }}" ></div>

                    <div><img style="position: absolute; top: 133px; right: 53px;" src="{{ asset('images/Ellipse 824.svg') }}" ></div>
                </div>
            </center>

            <p style="margin-bottom: 30px;">Շնորհակալությու՜ն հարցմանը մասնակցելու համար</p>
            <a href="/">ԱՆՑՆԵԼ ԳԼԽԱՎՈՐ ԷՋ</a>
        </div>

    </div>


<script src="{{asset('js/opinion_end.js')}}"></script>
@endsection
