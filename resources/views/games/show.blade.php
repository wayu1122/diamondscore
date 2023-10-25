<div>
     <h2>試合詳細</h2>
 </div>
 <div>
     <a href="{{ route('games.index') }}"> Back</a>
 </div>
 
 <div>
     <strong>試合日時:</strong>
     {{$game->game_datetime}}
 </div>
 
 <div>
     <strong>試合場所:</strong>
     {{$game->location}}
 </div>
 
 <div>
     <strong>試合番号:</strong>
     {{$game->game_number}} 
 </div>

 <div>
     <strong>自チーム:</strong>
     {{$game->home_team_id}} 
 </div>

 <div>
     <strong>自チーム合計得点:</strong>
     {{$game->home_team_score}} 
 </div>

 <div>
     <strong>相手チーム:</strong>
     {{$game->away_team_id}} 
 </div>

 <div>
     <strong>相手チーム合計得点:</strong>
     {{$game->home_team_score}} 
 </div>
