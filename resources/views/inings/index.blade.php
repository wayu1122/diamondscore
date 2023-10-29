<a href="{{ route('inings.create') }}"> Create New ining</a>
 
 <table>
     <tr>
         <th>イニング数</th>
         <th>試合ＩＤ</th>
         
     </tr>
     @foreach ($inings as $ining)
     <tr>
       <td>{{ $ining->ining }}</td>
       <td>{{ $ining->game_id }}</td>
       <td>
            <form action="{{ route('inings.destroy',$ining->id) }}" method="POST">
             <a href="{{ route('inings.show',$ining->id) }}">Show</a>
             <a href="{{ route('inings.edit',$ining->id) }}">Edit</a>
             @csrf
                 @method('DELETE')
                 <button type="submit">Delete</button>
            </form>
       </td>
     </tr>
     @endforeach
 </table>