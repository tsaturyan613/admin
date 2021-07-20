@include('admin.dashboard')

<form action="/admin/answer/update/no" method="post">
    @csrf
    <input type="hidden" value="{{ $answer['id'] }}" name="id"  >
    <input name="patasxan" type="text" value="{{ $answer['patasxan'] }}">
    <input name="type" value="{{ $answer['type'] }}">
    <select name="harc_id">
        <option value="{{ $answer->questionNo['id'] }}">{{$answer->questionNo['question']}}</option>
        @foreach($questions as $key => $value)

            <option value="{{ $key }}">{{$value}}</option>

        @endforeach
    </select>
    <button>Update</button>

</form>
