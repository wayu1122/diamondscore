<div>
     <h2>Add New Player</h2>
 </div>
 <div>
     <a href="{{ route('players.index') }}"> Back</a>
 </div>
 
 <form action="{{ route('players.store') }}" method="POST">
     @csrf
 
     <div>
         <strong>名前:</strong>
         <input type="text" name="name" placeholder="Name">
     </div>
     <div>
         <strong>年齢:</strong>
         <input type="number" name="age" placeholder="Age">
     </div>
     <div>
         <strong>ポジション:</strong>
         <input type="text" name="position" placeholder="Position">
     </div>
     <div>
         <strong>背番号:</strong>
         <input type="text" name="uniform_number" placeholder="Uniform number">
     </div>
     <div>
         <strong>投球スタイル:</strong>
         右投げ
         <input type="radio" name="is_southpaw" value=0>     
         左投げ
         <input type="radio" name="is_southpaw" value=1>
     </div>
     <div>
         <strong>バッターボックス:</strong>
         右打ち
         <input type="radio" name="is_lefty" value=0>
         左打ち
         <input type="radio" name="is_lefty" value=1>
     </div>
     <div>
         <strong>メールアドレス:</strong>
         <input type="text" name="mailaddress" placeholder="Mailaddress">
     </div>
     <div>
         <strong>パスワード:</strong>
         <input type="text" name="password" placeholder="Password">
     </div>
     <div>
         <button type="submit">Submit</button>
     </div>
 
 </form>