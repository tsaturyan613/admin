@include('admin.dashboard')

<form action="/admin/add/question/yes" method="post">
    @csrf
    <input type="text" name="question" placeholder="question">
    <button>Add Question</button>
</form>



<table>
    <tr>
        <td>Question</td>
        <td>Update</td>
        <td>Delete</td>
    </tr>


    @foreach($questions as $key)
        <tr>
            <td>{{ $key['question'] }}</td>
            <td><a href="/admin/question/yes/delete/{{$key['id']}}">Delete</a></td>
            <td><a href="/admin/question/yes/edit/{{$key['id']}}">Update</a></td>
        </tr>
    @endforeach

</table>


<style>
    table tr td {
        border: 1px solid black;
        padding: 5px;
    }
</style>
