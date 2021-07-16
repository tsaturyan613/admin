<form action="/admin/add/answer" method="post" style="display: flex;flex-direction: column; width: 600px;">
    @csrf
    <input type="text" placeholder="Type" name="type" required><br><br>
    <input type="text" placeholder="Patasxan" name="patasxan" ><br><br>
<select name="harc_id">

@foreach($questions as $key)
    <option value="{{ $key['id'] }}">{{$key['question']}}</option>
@endforeach
</select>

    <button name='action' value='add'>add</button>
</form>

<table>
    <tr>
        <td>patasxan</td>
        <td>type</td>
        <td>Delete</td>
        <td>Update</td>
    </tr>
    <?php

    ?>
    @foreach($answers as $key)


    <tr>
        <td>{{ $key['patasxan'] }}</td>
        <td>{{ $key['type'] }}</td>
        <td><a href="/admin/answer/delete/{{ $key['id'] }}">Delete</a></td>
        <td><a href="/admin/answer/edit/{{ $key['id'] }}">Update</a></td>
    </tr>
    @endforeach

</table>
<style>
    table tr td {
        border: 1px solid black;
        padding: 5px;
    }
</style>

{{--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>--}}

