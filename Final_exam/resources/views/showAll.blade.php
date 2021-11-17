<section>
<div style="width: 50%;">
<h2>Patients</h2>
@foreach($patients as $patient)
<h3>{{$patient->name}}</h3>
@endforeach
</div>
<div style="width: 50%; margin-left: 50%;">
<h2>Doctors</h2>
@foreach($doctors as $doctor)
<h3>{{$doctor->name}}</h3>
@endforeach
</div>
</section>