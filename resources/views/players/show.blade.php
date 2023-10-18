<div>
     <h2> Show Player</h2>
 </div>
 <div>
     <a href="{{ route('players.index') }}"> Back</a>
 </div>
 
 <div>
     <strong>名前:</strong>
     {{$player->name}}
 </div>
 
 <div>
     <strong>年齢:</strong>
     {{$player->age}}
 </div>
 
 <div>
     <strong>ポジション:</strong>
     {{$player->position}} 
 </div>

 <div>
     <strong>背番号:</strong>
     {{$player->uniform_number}} 
 </div>

 <div>
     <strong>投球スタイル:</strong>
     @if($player->is_southpaw)
        左投げ
     @else
        右投げ
     @endif 
 </div>

 <div>
     <strong>バッターボックス:</strong>
     @if($player->is_lefty)
        左打ち
     @else
        右打ち
     @endif 
 </div>
 <div>
     @if ($player->team)
        <strong>所属チーム:</strong>
        {{ $player->team->name }}
     @else
        <strong>所属チーム: なし</strong>
     @endif
 </div>
 <div>
     <strong>メールアドレス:</strong>
     {{$player->mailaddress}} 
 </div>

 <div>
     <strong>パスワード:</strong>
     {{$player->password}} 
 </div>
