
<a href="/admin/answer">Admin Answer</a>

<h1>update answer</h1>

<form action="/admin/answer/update" method="post">
    @csrf
<input type="hidden" value="{{ $answer['id'] }}" name="id"  >
<input name="patasxan" type="text" value="{{ $answer['patasxan'] }}">
<input name="type" value="{{ $answer['type'] }}">
    <select name="harc_id">
        <option value="{{ $answer->questionYes['id'] }}">{{$answer->questionYes['question']}}</option>
        @foreach($questions as $key => $value)

            <option value="{{ $key }}">{{$value}}</option>

        @endforeach
    </select>
<button>Update</button>

</form>
