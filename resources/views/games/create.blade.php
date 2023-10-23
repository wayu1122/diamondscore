<div>
     <h2>Add New Game</h2>
 </div>
 <div>
     <a href="{{ route('games.index') }}"> Back</a>
 </div>
 
 <form action="{{ route('games.store') }}" method="POST">
     @csrf
 
     <div>
         <strong>試合日時:</strong>
         <input type="datetime-local" name="game_datetime" value="{{ now()->format('Y-m-d\TH:i') }}" required>
     </div>
     <div>
         <strong>試合場所:</strong>
         <input type="text" name="location" placeholder="試合場所">
     </div>
     <div>
         <strong>試合番号:</strong>
         <input type="number" name="game_number" placeholder="試合番号">
     </div>
     <div>
       <strong for="home_team_id">自チーム:</strong>
       <input name="home_team_id" required>
     </div>
     <div>
        <strong for="home_team_score">自チーム合計得点:</strong>
        <input type="number" name="home_team_score" value="0" required>
     </div>
     <div>
       <strong for="away_team_id">相手チーム:</strong>
            <input name="away_team_id" required>
     </div>
     <div>
     <strong for="away_team_score">相手チーム合計得点:</strong>
    <input type="number" name="away_team_score" value="0" required>
     </div>
     <div>
         <button type="submit">Submit</button>
     </div>
 
 </form>