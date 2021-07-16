@extends('layouts.main')

@section('title', 'Colibrilab')

@section('content')


<h3 class="h3">Թողեք Ձեր կարծիքը</h3>
<div class="page">
    <!-- <h5 class="subtitle" style="position: relative; display: block;">3․ Ո՞ր դասընթացներին եք մասնակցել <span>*</span> ։<span class="error1">Պարտադիր է լրացման</span></h5> -->
    <?php
    //////////////////////////////////////////////////////////////////////////TITLE3////////////////////////////////////////////////////////////////////////////////////////
    if ($questions[2]['checked']=="on") {
        echo "<h5 class='subtitle subtitle1'  style='position: relative; display: block;'>".utf8_decode($questions[2]['question'])."<span>*</span> ։<span class='error1'>Պարտադիր է լրացման</span></h5>";
    }else{
        echo "<h5 class='subtitle subtitle1'  style='position: relative; display: block;'>".utf8_decode($questions[2]['question'])."։</h5>";
    }
    ?>

    <?php
    ///////////////////////////////////////////////////////////////////////ANSWER3////////////////////////////////////////////////////////////////////////////////////////////////
    foreach ($answer_2 as  $val) {
        if ($val['type']=='input') {
            echo "<input type=".$val['type']." placeholder='Մուտքագրեք տեքստը' class='arr form-control shadow-none' style='border:none;border-bottom: 3px solid #E5E5E6;' id=".$val['id']." name='inp'>";
        }
        else{
            if ($val['type']=='radio') {
                echo "<p><input type=".$val['type']." class='radio' id=".$val['id']." name='inp'><label for=".$val['id']."><span class=span>".$val['patasxan']."</span></label></p>";
            }else{
                echo "<p><input type=".$val['type']." class='checkbox' id=".$val['id']." name='inp'><label for=".$val['id']."><span class=span>".$val['patasxan']."</span></label></p>";
            }


        }
    }
    ?>
    <p><input type="checkbox" class="other" id="5" name="inp"> <label for="5"><span class=span>Այլ</span></label></p>
    <div class=" letterscount arr1"><input class="arr  form-control shadow-none" id="arr1" placeholder="Մուտքագրեք տեքստը" maxlength="50"></input>
{{--        <span class="count count1"><span >0</span>/50</span>--}}
    </div>

    <!-- <h5 class="subtitle" style="margin-top: 67px;  margin-bottom: 19px;">4․ Հավանե՞լ եք դասընթացը։</h5> -->
    <?php
    //////////////////////////////////////////////////////////////////////////TITLE4////////////////////////////////////////////////////////////////////////////////////////
    if ($questions[3]['checked']=="on") {
        echo "<h5 class='subtitle subtitle2'  style='position: relative; display: block; margin-top: 40px;'>".utf8_decode($questions[3]['question'])."<span>*</span> ։<span class='error2'>Պարտադիր է լրացման</span></h5>";
    }else{
        echo "<h5 class='subtitle subtitle2'  style='position: relative; display: block; margin-top: 40px;'>".utf8_decode($questions[3]['question'])."։</h5>";
    }
    ?>
    <?php
    ///////////////////////////////////////////////////////////////////////ANSWER3////////////////////////////////////////////////////////////////////////////////////////////////
    foreach ($answer_3 as  $val) {
        if ($val['type']=='input') {
            echo "<input type=".$val['type']." placeholder='Մուտքագրեք տեքստը' class='arr form-control shadow-none' style='border:none;border-bottom: 3px solid #E5E5E6;' id=".$val['id']." name='inp'>";
        }
        else{
            echo "<p><input type=".$val['type']." class='radio' id=".$val['id']." name='inp'><label for=".$val['id']."><span class=span>".$val['patasxan']."</span></label></p>";
        }
    }
    ?>
    <div class="next-opinion"><button class="btn-primary go "> <a class="a" >ԱՌԱՋ<svg style="margin-bottom: 2px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                    <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                </svg></a></button>

        <div class="previous"><a class="prev" href="/opinion" ><svg style="margin-bottom: 3px; " xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-left" viewBox="0 0 16 16">
                    <path d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>
                </svg>ՆԱԽՈՐԴ ԷՋ</div></a>
        {{--    <div class="numbers">--}}
        {{--        <span>1</span>--}}
        {{--        <span class="span1">2</span>--}}
        {{--        <span>3</span>--}}
        {{--        <span>4</span>--}}
        {{--        <span>5</span>--}}

        {{--    </div>--}}
    </div>
</div>
<script src="{{asset('js/opinion_yes.js')}}"></script>

@endsection
