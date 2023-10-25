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
         <input type="text" name="home_team_id" value="{{ $game->home_team_id }}" >
     </div>
     <div>
         <strong>自チーム合計得点:</strong>
         <input type="number" name="home_team_score" value="{{ $game->home_team_score }}" >
     </div>
     <div>
         <strong>相手チーム:</strong>
         <input type="text" name="away_team_id" value="{{ $game->away_team_id }}" >
     </div>
     <div>
         <strong>相手チーム合計得点:</strong>
         <input type="number" name="away_team_score" value="{{ $game->away_team_score }}" >
     </div>
     <div>
         <button type="submit">Submit</button>
     </div>
 
 </form>