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
     {{$game->bat_first_id}} 
 </div>

 <div>
     <strong>自チーム合計得点:</strong>
     {{$game->bat_first_score}} 
 </div>

 <div>
     <strong>相手チーム:</strong>
     {{$game->field_first_id}} 
 </div>

 <div>
     <strong>相手チーム合計得点:</strong>
     {{$game->field_first_score}} 
 </div>
