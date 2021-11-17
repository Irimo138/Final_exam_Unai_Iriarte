<h1>Doctor List</h1>

@foreach($doctors as $doctor)
    <h3>{{$doctor->name}}</h3>
    <form action="/delete/{{$doctor->id}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete">
    </form>
    <form action="/update/{{$doctor->id}}" method="get">
        @csrf
        <input type="submit" value="Update">
    </form>
@endforeach