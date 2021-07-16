@extends('layouts.main')

@section('title', 'Colibrilab')

@section('content')

    <h3 class="h3">Թողեք Ձեր կարծիքը</h3>
<div class="page">
    <!-- <div><h5 class="subtitle" style="position: relative; display: block;">7․ Բավարարվա՞ծ են, արդյոք, Ձեր սպասելիքները դասընթացից  <span>*</span> ։<span class="error1">Պարտադիր է լրացման</span></h5></div> -->
<?php
//////////////////////////////////////////////////////////////////////////TITLE7////////////////////////////////////////////////////////////////////////////////////////
if ($questions[6]['checked']=="on") {
    echo "<h5 class='subtitle subtitle1'  style='position: relative; display: block;'>".utf8_decode($questions[6]['question'])."<span> *</span> ։<span class='error1'>Պարտադիր է լրացման</span></h5>";
}else{
    echo "<h5 class='subtitle subtitle1'  style='position: relative; display: block;'>".utf8_decode($questions[6]['question'])."։</h5>";
}
?>
<?php
///////////////////////////////////////////////////////////////////////ANSWER7////////////////////////////////////////////////////////////////////////////////////////////////
//$id=$m[6]['id'];
//$answer = $model->get_answer($id);
foreach ($answer_6 as  $val) {
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

<!-- <div><h5 class="subtitle" style="margin-top: 67px; position: relative; display: block;">8․ Խորհուրդ կտայի՞ք Ձեր մտերիմներին սովորել մեր ուսումնական կենտրոնում <span>*</span> ։<span class="error2">Պարտադիր է լրացման</span></h5></div> -->
    <?php
    //////////////////////////////////////////////////////////////////////////TITLE7////////////////////////////////////////////////////////////////////////////////////////
    if ($questions[7]['checked']=="on") {
        echo "<h5 class='subtitle subtitle2'  style='margin-top: 67px; position: relative; display: block;'>".utf8_decode($questions[7]['question'])."<span> *</span> ։<span class='error2'>Պարտադիր է լրացման</span></h5>";
    }else{
        echo "<h5 class='subtitle subtitle2'  style='margin-top: 67px; position: relative; display: block;'>".utf8_decode($questions[7]['question'])."։</h5>";
    }
    ?>
    <?php
    ///////////////////////////////////////////////////////////////////////ANSWER7////////////////////////////////////////////////////////////////////////////////////////////////

    foreach ($answer_7 as  $val) {
        if ($val['type']=='input') {
            echo "<input type=".$val['type']." placeholder='Մուտքագրեք տեքստը' class='arr form-control shadow-none' style='border:none;border-bottom: 3px solid #E5E5E6;' id=".$val['id']." name='inp'>";
        }
        else{
            if ($val['type']=='radio') {
                echo "<p><input type=".$val['type']." class='radio2' id=".$val['id']." name='inp2'><label for=".$val['id']."><span class=span>".$val['patasxan']."</span></label></p>";
            }else{
                echo "<p><input type=".$val['type']." class='checkbox' id=".$val['id']." name='inp2'><label for=".$val['id']."><span class=span>".$val['patasxan']."</span></label></p>";
            }


        }
    }
    ?>
    <div class="next-opinion"><button class="btn-primary go "> <a class="a" >ԱՌԱՋ<svg style="margin-bottom: 2px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                    <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                </svg></a></button>

        <div class="previous"><a class="prev" href="/opinion/yes/2" ><svg style="margin-bottom: 3px; " xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-left" viewBox="0 0 16 16">
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
{{--    <div class="numbers">--}}
{{--        <span>1</span>--}}
{{--        <span>2</span>--}}
{{--        <span>3</span>--}}
{{--        <span class="span1">4</span>--}}
{{--        <span>5</span>--}}
{{--    </div>--}}
</div>

<script src="{{asset('js/opinion_yes3.js')}}"></script>

@endsection
