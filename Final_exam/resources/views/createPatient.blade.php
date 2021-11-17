<h2>Patient Register</h2>

<form action="/patientRegister" method="post">
    @csrf
    <label>name<input type="text" name="name"></label>
    <br>
    <label>Surname<input type="text" name="surname"></label>
    <br>
    <label>DNI<input type="text" name="DNI"></label>
    <br>
    <label>Birthday<input type="date" name="birthday"></label>
    <br>
    <label>Vacunated<input type="text" name="vacunated"></label>
    <br>
    <input type="submit" value="Register">

</form>