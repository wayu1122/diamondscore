<a href="{{ route('games.create') }}"> Create New Game</a>
 
 <table>
     <tr>
         <th>試合日時</th>
         <th>試合場所</th>
         <th>試合番号</th>
         <th>自チーム</th>
         <th>自チーム合計点</th>
         <th>相手チーム</th>
         <th>相手チーム合計点</th>
         <th >Action</th>
     </tr>
     @foreach ($games as $game)
     <tr>
         <td>{{ $game->game_datetime }}</td>
         <td>{{ $game->location }}</td>
         <td>{{ $game->game_number }}</td>
         <td>{{ $game->bat_first_id }}</td>
         <td>{{ $game->bat_first_score }}</td>
         <td>{{ $game->field_first_id }}</td>
         <td>{{ $game->field_first_score }}</td>
         <td>
         <form action="{{ route('games.destroy',$game->id) }}" method="POST">
             <a href="{{ route('games.show',$game->id) }}">Show</a>
             <a href="{{ route('games.edit',$game->id) }}">Edit</a>
             @csrf
             @method('DELETE')
             <button type="submit">Delete</button>
         </form>
         </td>
     </tr>
     @endforeach
 </table>