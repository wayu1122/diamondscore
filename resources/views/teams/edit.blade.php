<div>
  <h2>Edit Team</h2>
</div>
<div>
  <a href="{{route('teams.index') }}">Back</a>
</div>

<form action="{{route('teams.update',$team->id) }}" method="POST">
  @csrf
  @method('PUT')

  <div>
    <strong>名前:</strong>
    <input type="text" name="name" value="{{$team->name}}" placeholder="Name">
  </div>
  <div>
    <strong>活動都市:</strong>
    <input type="text" name="city" value="{{$team->city}}" placeholder="city">
  </div>
  <div>
    <button type="submit">Submit</button>
  </div>
</form>