<div>
     <h2>Edit Base_running</h2>
 </div>
 <div>
     <a href="{{ route('base_runnings.index') }}"> Back</a>
 </div>
 
 <form action="{{ route('base_runnings.update',$base_running->id) }}" method="POST">
     @csrf
     @method('PUT')
 
     <div>
         <strong>走者:</strong>
         <select name="player_id">
         @foreach ($players as $player)
             @if ($player->id == $base_running->player_id)
                 <option value="{{ $player->id }}" selected>{{ $player->name }}</option>
             @else
                 <option value="{{ $player->id }}">{{ $player->name }}</option>
             @endif
             @endforeach
         </select>
     </div>
     <div>
         <strong>アウト:</strong>
         <input type="number" name="out" value="{{ $base_running->out }}" >
     </div>
     <div>
         <strong>盗塁:</strong>
         <input type="number" name="steal"  value="{{ $base_running->steal }}">
     </div>
     <div>
         <strong>進塁:</strong>
         <input type="number" name="advance_base" value="{{ $base_running->advance_base }}" >
     </div>
     <div>
         <strong>残塁:</strong>
         <input type="number" name="left_on_base" value="{{ $base_running->left_on_base }}" >
     </div>
     <div>
         <button type="submit">Submit</button>
     </div>
 
 </form>