<a href="{{ route('base_runnings.create') }}"> Create New Base_running</a>
 
 <table>
     <tr>
         <th>走者</th>
         <th>アウト</th>
         <th>盗塁</th>
         <th>進塁</th>
         <th >残塁</th>
     </tr>
     @foreach ($base_runnings as $base_running)
     <tr>
         <td>{{ $base_running->player->name }}</td>
         <td>{{ $base_running->out }}</td>
         <td>{{ $base_running->steal }}</td>
         <td>{{ $base_running->advance_base }}</td>
         <td>{{ $base_running->left_on_base }}</td>
         <td>
         <form action="{{ route('base_runnings.destroy',$base_running->id) }}" method="POST">
             <a href="{{ route('base_runnings.show',$base_running->id) }}">Show</a>
             <a href="{{ route('base_runnings.edit',$base_running->id) }}">Edit</a>
             @csrf
             @method('DELETE')
             <button type="submit">Delete</button>
         </form>
         </td>
     </tr>
     @endforeach
 </table>
