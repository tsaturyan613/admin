@extends('layouts.main')

@section('title', 'Colibrilab')

@section('content')

        <h3 class="h3">Թողեք Ձեր կարծիքը</h3>
        <div class="page">


            @foreach($questions as $key)
            <div>
                @if ($key['checked']=="on")
                    <h5 class='subtitle subtitle1'  style='position: relative; display: block;'>
                        {{$key['question']}}
                        <span class='sas'>*</span> ։<span id=error1 class='error1'>Պարտադիր է լրացման</span></h5>
                @else
                    <h5 class='subtitle subtitle1'  style='position: relative; display: block;'>
                        {{$key['question']}}</h5>
                @endif
                                <form action="" method="post" class="opinion-form" id="form-{{$key['id']}}">
                                    @foreach ($key->answers as $k)
                                       @if ($k['type']=='input')
                                            <input type="{{  $k['type'] }}" placeholder='Մուտքագրեք տեքստը' class='arr form-control shadow-none' style='border:none;border-bottom: 3px solid #E5E5E6;' id="{{  $k['id'] }}" name='inp'>
                                            <span class='count' id='count2'><span >0</span>/50</span>
                                        @else
                                            <p>
                                                <input type="{{  $k['type'] }}" data-question-id="{{$key['id']}}" class='radio' id="{{  $k['id'] }}" value="{{  $k['patasxan'] }}" name='inp'>
                                                <label for="{{  $k['id'] }}">
                                                <span class="span">{{  $k['patasxan'] }}</span>
                                                </label>
                                            </p>
                                        @endif
                                    @endforeach
                                </form>
            </div>
            @endforeach

            <div class="next-opinion"><button class="btn-primary go "><a  class="a"  >ԱՌԱՋ <svg style="margin-bottom: 2px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                        </svg></a> </button></div>

        </div>
        <script src="{{asset('js/opinion.js')}}"></script>
@endsection

