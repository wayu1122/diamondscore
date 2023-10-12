<div>
   <h2>Add New Team</h2>
</div>
<div>
  <a href="{{ route('teams.index') }}"> Back</a>
</div>

<form action="{{ route('teams.store') }}" method="POST">
  @csrf

  <div>
     <strong>Name:</strong>
     <input type="text" name="name" placeholder="Name">
  </div>
  <div>
    <strong>City:</strong>
    <input type="text" name="city" placeholder="City">
  </div>
  <div>
    <button type="submit">Submit</button>
  </div>

</form>