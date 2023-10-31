<a href="{{ route('players.create') }}"> Create New Player</a>

<table>

     <tr>
         <th>名前</th>
         <th>年齢</th>
         <th>ポジション</th>
         <th>背番号</th>
         <th>投球スタイル</th>
         <th>バッターボックス</th>
         <th>所属チーム</th>
     </tr>
     @foreach ($players as $player)
     <tr>
         <td>{{ $player->name }}</td>
         <td>{{ $player->age }}</td>
         <td>{{ $player->position }}</td>
         <td>{{ $player->uniform_number }}</td>
         <td>@if($player->is_southpaw)
                左投げ
             @else
                右投げ
             @endif 
         </td>
         <td>@if($player->is_lefty)
                左打ち
             @else
                右打ち
             @endif 
         </td>
         <td>{{ $player->team_id }}</td>
         <td>
             <a href="{{ route('players.show',$player->id) }}">Show</a>
             <a href="{{ route('players.edit',$player->id) }}">Edit</a>
         </td>
     </tr>
     @endforeach
 </table>
