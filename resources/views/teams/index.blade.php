<h1>チーム一覧</h1>

<a href="{{ route('teams.create') }}"> Create New Team</a>

<table>

     <tr>
         <th>名前</th>
         <th>活動都市</th>
     </tr>
     @foreach ($teams as $team)
     <tr>
         <td>{{ $team->name }}</td>
         <td>{{ $team->city }}</td>
         <td>
             <a href="{{ route('teams.show',$team->id) }}">Show</a>
             <a href="{{ route('teams.edit',$team->id) }}">Edit</a>
         </td>
        @endforeach
     </tr>
 </table>