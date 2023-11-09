<div>
     <h2>走者詳細</h2>
 </div>
 <div>
     <a href="{{ route('base_runnings.index') }}"> Back</a>
 </div>

<div>
     <strong>走者:</strong>
     {{$base_running->player->name}}
 </div>
 
 <div>
     <strong>アウト:</strong>
     {{$base_running->out}} 
 </div>

 <div>
     <strong>盗塁:</strong>
     {{$base_running->steal}} 
 </div>

 <div>
     <strong>進塁:</strong>
     {{$base_running->advance_base}} 
 </div>

 <div>
     <strong>残塁:</strong>
     {{$base_running->left_on_base}} 
 </div>

 
