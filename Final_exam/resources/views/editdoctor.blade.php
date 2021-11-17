<h1>{{$doctor->id}}</h1>
<h3>Updating the Doctor that you choose</h3>
<form action="maxUpdate/{{$doctor->id}}" method="post">
    @csrf
    @method('PUT')
    <label>Name <input type="text" name="name"></label>
    <br>
    <label>Surname <input type="text" name="surname"></label>
    <br>
    <label>Patients <input type="integer" name="patients"></label>
    <br>
    <input type="submit" value="Update">
</form>

<a href="/showRegister">Create a new doctor</a>

