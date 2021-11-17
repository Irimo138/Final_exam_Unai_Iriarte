<form action="/doctorRegister" method="post">
    @csrf
    <label>Name <input type="text" name="name"></label>
    <br>
    <label>Surname <input type="text" name="surname"></label>
    <br>
    <label>Patients <input type="integer" name="patients"></label>
    <br>
    <input type="submit" value="Update">

</form>