<div>
     <h2>Edit Game</h2>
 </div>
 <div>
     <a href="{{ route('games.index') }}"> Back</a>
 </div>
 
 <form action="{{ route('games.update',$game->id) }}" method="POST">
     @csrf
     @method('PUT')
 
     <div>
         <strong>試合日時:</strong>
         <input type="datetime-local" name="game_datetime" value="{{ $game->game_datetime }}" required>
     </div>
     <div>
         <strong>試合場所:</strong>
         <input type="text" name="location" value="{{ $game->location }}" >
     </div>
     <div>
         <strong>試合番号:</strong>
         <input type="number" name="game_number"  value="{{ $game->game_number }}">
     </div>
     <div>
         <strong>自チーム:</strong>
         <input type="text" name="bat_first_id" value="{{ $game->bat_first_id }}" >
     </div>
     <div>
         <strong>自チーム合計得点:</strong>
         <input type="number" name="bat_first_score" value="{{ $game->bat_first_score }}" >
     </div>
     <div>
         <strong>相手チーム:</strong>
         <input type="text" name="field_first_id" value="{{ $game->field_first_id }}" >
     </div>
     <div>
         <strong>相手チーム合計得点:</strong>
         <input type="number" name="field_first_score" value="{{ $game->field_first_score }}" >
     </div>
     <div>
         <button type="submit">Submit</button>
     </div>
 
 </form>