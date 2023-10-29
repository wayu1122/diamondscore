 <div>
     <h2> Show Ining</h2>
 </div>
 <div>
     <a href="{{ route('inings.index') }}"> Back</a>
 </div>
 
 <div>
     <strong>イニング数:</strong>
     {{$ining->ining}}
 </div>

 <div>
     <strong>試合ID:</strong>
     {{$ining->game_id}}
 </div>
 