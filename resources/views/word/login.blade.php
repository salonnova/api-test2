
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name=”robots” content=”noindex, nofollow”>
  <!-- エンジン検索しないようにする -->
  <title>ログイン</title>
  <style>
    html{
      font-family: sans-serif;
      font-size: 100%;
      animation: bgchange 10s ease infinite;
      }
      *{
         box-sizing: border-box;
         
         /* ボックス内の幅、高さの中に『線と内側の余白』を含める */
      }
      .top{
        text-align: center;
        font-size: 1.4rem;
        font-weight: bold;
      }
      .strong1{
         color: green;
         margin: 0;
      }
      .strong2{
         color: burlywood;
         margin: 0;
      }
      .strong3{
         color: red;
         margin: 0;
      }
      .strong4{
         color: purple;
         margin: 0;
      }
      .block-small{
        background-color: white;
        text-align: center;
        border-radius: 20px;
        padding: 0px;
        margin-bottom: 40px;
        margin-left: 70px;
        margin-right: 70px;
        font-weight: 900;
      }
      .block-large{
        
        background-color: white;
        text-align: center;
        font-size: 1.5rem;
        font-weight: 600;
        border-radius: 20px;
        margin-left: 40px;
        margin-right: 40px;
        padding: 100px 0 100px 0;
        
      }
      @media (max-width: 897px) {
        .block-large{
        padding: 100px 20px 100px 20px;
        
      }
      }
      @keyframes bgchange{
          0%   {background:#AACADD;}/*変化させたい色*/
          25%  {background:#7DB8DB;}/*変化させたい色*/
          50%  {background:#6FCAFC;}/*変化させたい色*/
          75%  {background:#F4B17B;}/*変化させたい色*/
          90%  {background:#2B211D;}/*変化させたい色*/
          100% {background:#f19072;}/*変化させたい色*/
        
        }
  </style>
</head>
<div>
  <div class="top">
    <span class="strong1">W</span><span class="strong2">O</span>-<span class="strong3">R</span><span class="strong4">D</span>(ウォーラド)!</p>
  </div>
  <div class="block-small">
    <h1>login</h1>
  </div>
  
  <!-- <h2><a href="/word/user_create">新規登録へ</a></h2> -->
  @if(count($errors) >0)
  <div class="alert alert-danger">
  @foreach($errors->all() as $error)
  <p>{{ $error }}</p>
  @endforeach
  </div>
  @endif
  <div class="block-large">
    <form action="{{ route('word.login') }}" method="post">
    <p><label for="id">{{ __('user_id') }}</label></p>
    <input type="text" id="user_ID" name="user_id" class="form-control">
    
    <p><label for="password">{{ __('password') }}</label></p>
    <input type="password" id="password" name="password" class="form-control">
    
    <p><button type="submit">ログイン</button></p>
    </div>
    {{ csrf_field() }}
    </form>
  </div>
</html>