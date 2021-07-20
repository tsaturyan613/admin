@include('admin.dashboard')

<form action="/admin/question/no/update" method="post">
    @csrf
    <input type="text" value="{{ $question->question }}" name="question">
    <input type="hidden" value="{{ $question->id }}" name="id">
    <button>Update Question</button>
</form>
