<div>
     <h2>Add New Ining</h2>
 </div>
 <div>
     <a href="{{ route('inings.index') }}"> Back</a>
 </div>
 
 <form action="{{ route('inings.store') }}" method="POST">
     @csrf
 
     <div>
         <strong>イニング数:</strong>
         <input type="text" name="ining" placeholder="イニング数">
     </div>

     <div>
         <strong>試合ID:</strong>
         <input type="number" name="game_id" placeholder="試合ID">
     </div>
    
     <div>
         <button type="submit">Submit</button>
     </div>
 
 </form>