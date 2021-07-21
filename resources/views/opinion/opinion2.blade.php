@extends('layouts.main')

@section('title', 'Colibrilab')

@section('content')

    <h3 class="h3">Թողեք Ձեր կարծիքը</h3>
    <div class="page">
        @foreach($questions as $key)
            @if($key['id'] == 59)
        <div class="opinion-title-parent">
            @if ($key['checked']=="on")
                <h5 class='subtitle  subtitle1'  style='position: relative; display: block;'>{{$key['question']}}<span class='error1'>Պարտադիր է լրացման</span></h5>
            @else
                <h5 class='subtitle  subtitle1'  style='position: relative; display: block;'>{{$key['question']}}</h5>
            @endif
        </div>
        <form action="" method="post">

            @foreach ($key->answers as $k)
                @if ($k['type']=='input')
                    <input type="{{$k['type']}}" placeholder='Մուտքագրեք տեքստը' class='arr form-control shadow-none' style='border:none;border-bottom: 3px solid #E5E5E6;' id="{{$k['id']}}" name='inp'>

                @else
                    <p><input type="{{$k['type']}}" class='radio1' id="{{$k['id']}}" name='inp'><label for="{{$k['id']}}"><span class=span>{{$k['patasxan']}}</span></label></p>
                @endif

            @endforeach

            <p><input type="radio" class="other" id="22" name="inp"><label for="22"><span class=span>Այլ</span></label> </p>
            <div class="letterscount arr1 other-input">
                <input class="arr ar1  form-control shadow-none" id="arr1" placeholder="Մուտքագրեք տեքստը" maxlength="50">
{{--                <span class="count count1" id="count1" >--}}
{{--                    <span>0</span>/50</span>--}}
            </div>
        </form>

            @else

        <!-- <h5 class="subtitle" data-id='4' style="margin-top: 67px; font-size: 17px; margin-bottom: 19px;">4․ Ծրագրավորման ի՞նչ հավելյալ լեզու կցանկանայիք տեսնել մեր դասավանդվող լեզուների ցանկում։</h5> -->
        @if ($key['checked']=="on")
            <h5 class='subtitle  subtitle2'  style='position: relative; display: block; margin-top: 67px; font-size: 17px; margin-bottom: 19px;'>
                {{$key['question']}}<span class='error2'>Պարտադիր է լրացման</span></h5>
        @else
            <h5 class='subtitle  subtitle2'  style='position: relative; display: block; margin-top: 67px; font-size: 17px; margin-bottom: 19px;'>
        {{$key['question']}}</h5>
        @endif

            <!-- <div class=" letterscount"><input class="arr ar2 form-control shadow-none " id="arr2" placeholder="Մուտքագրեք տեքստը" maxlength="50"></input> <span class="count" id="count2"><span >0</span>/50</span></div> -->
<form action="" method="post">
            @foreach ($key->answers as  $val)
                @if ($val['type']=='input')
                    <div class='letterscount'><input type="{{$val['type']}}" class='arr ar2 form-control shadow-none ' id='arr2' placeholder='Մուտքագրեք տեքստը' maxlength='50'>
                        <span class='count' id='count2'><span >0</span>/50</span></div>
                    <input type="{{$val['type']}}" placeholder='Մուտքագրեք տեքստը' class='arr form-control shadow-none' style='border:none;border-bottom: 3px solid #E5E5E6;' id="{{$val['id']}}" name='inp'>
                @else
                    <p><input type="{{$val['type']}}" class='radio' id="{{$val['id']}}" name='inp'><label for="{{$val['id']}}"><span class=span>{{$val['patasxan']}}</span></label></p>

                @endif
            @endforeach
</form>



            @endif
        @endforeach
        <div class="next-opinion"><button class="btn-primary go-finish">ԱՎԱՐՏԵԼ</button></div>
        <div class="previous" style="position: relative;" > <a style="position: absolute; left: 0; top: -29px; text-decoration: none;" href="/opinion" ><svg style="margin-bottom: 3px; " xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-left" viewBox="0 0 16 16">
                    <path d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>
                </svg>ՆԱԽՈՐԴ ԷՋ </div> </a>
{{--        <div class="numbers">--}}
{{--            <span>1</span>--}}
{{--            <span class="span1">2</span>--}}
{{--        </div>--}}
    </div>
    <script src="{{asset('js/opinion2.js')}}"></script>

@endsection
