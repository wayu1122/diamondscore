<div>
     <h2>Edit Player</h2>
 </div>
 <div>
     <a href="{{ route('players.index') }}"> Back</a>
 </div>
 
 <form action="{{ route('players.update',$player->id) }}" method="POST">
     @csrf
     @method('PUT')
 
     <div>
         <strong>名前:</strong>
         <input type="text" name="name" value="{{ $player->name }}" placeholder="Name">
     </div>
     <div>
         <strong>年齢:</strong>
         <input type="number" name="age"  value="{{ $player->age }}">
     </div>
     <div>
         <strong>ポジション:</strong>
         <input type="text" name="position"  value="{{ $player->position }}">
     </div>
     <div>
         <strong>背番号:</strong>
         <input type="number" name="uniform_number"  value="{{ $player->uniform_number }}">
     </div>
     <div>
         <strong>投球スタイル:</strong>
         <input type="radio" name="is_southpaw" value="0" {{ $player->is_southpaw == 0 ? 'checked' : '' }}>
        右投げ
        <input type="radio" name="is_southpaw" value="1" {{ $player->is_southpaw == 1 ? 'checked' : '' }}>
        左投げ
     </div>
     <div>
         <strong>バッターボックス:</strong>
         <input type="radio" name="is_lefty" value="0" {{ $player->is_southpaw == 0 ? 'checked' : '' }}>
         右打ち
         <input type="radio" name="is_lefty" value="1" {{ $player->is_southpaw == 1 ? 'checked' : '' }}>
         左打ち
     </div>
     <div>
         <strong>メールアドレス:</strong>
         <input type="text" name="mailaddress"  value="{{ $player->mailaddress }}">
     </div>
     <div>
         <strong>パスワード:</strong>
         <input type="text" name="password"  value="{{ $player->password }}">
     </div>
     <div>
         <button type="submit">Submit</button>
     </div>
 
 </form>