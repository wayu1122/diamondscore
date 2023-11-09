<div>
     <h2>Add New Base_running</h2>
 </div>
 <div>
     <a href="{{ route('base_runnings.index') }}"> Back</a>
 </div>
 
 <form action="{{ route('base_runnings.store') }}" method="POST">
     @csrf
 
     <div>
         <strong>走者:</strong>
         <select name="player_id" id="player_id" class="form-control">
           @foreach ($players as $player)
               <option value="{{ $player->id }}">{{ $player->name }}</option>
           @endforeach
         </select>
     </div>
     <div>
         <strong>アウト:</strong>
         <input type="number" name="out" placeholder="アウト">
     </div>
     <div>
         <strong>盗塁:</strong>
         <input type="number" name="steal" placeholder="盗塁">
     </div>
     <div>
         <strong>進塁:</strong>
         <input type="number" name="advance_base" placeholder="進塁">
     </div>
     <div>
         <strong>残塁:</strong>
         <input type="number" name="left_on_base" placeholder="残塁">
     </div>
     <div>
         <button type="submit">Submit</button>
     </div>
 
 </form>
