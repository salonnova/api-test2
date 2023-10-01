<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name=”robots” content=”noindex, nofollow”>
   <title>ウォーラド</title>

   <style>
      html{
      font-family: sans-serif;
      font-size: 100%;
      background-color: rgb(201, 236, 253);
      }
      *{
         box-sizing: border-box;
         
         /* ボックス内の幅、高さの中に『線と内側の余白』を含める */
      }
      
      .header{
         background-color: gray;
         text-align: right;
      }
      .header-nav{
         margin-top: 0;
         margin-bottom: 0;
         font-size: 120%;
         padding: 10px;
         
         display: inline-block;
         padding: 0.5em 1em;
         text-decoration: none;
         background: white;/*ボタン色*/
         color: #FFF;
         border-bottom: solid 4px black;
         border-top: solid 4px black;
         border-left: solid 4px black;
         border-right: solid 4px black;
         border-radius: 3px;
         text-align: center;
         justify-content: center;
         margin-right: 10px;
         z-index: 999;
      }
      
      a{
         text-decoration: none;
         color: black;
         font-weight: bold;
      }
      a:hover{
         color:goldenrod;
         transition: all ,0.3s;
      }
      body {
      margin: 0;
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
      .strong5{
         text-align: center;
         margin: 10px 10px 5px 10px;
      }
      .welcome{
         margin:  10px 5px 10px;
         font-size: 1rem;
      }
      .btn {
         
         display: block;
         padding: 0.5em 1em;
         text-decoration: none;
         background: black;/*ボタン色*/
         color: #FFF;
         border: solid 4px #627295;
         
         border-radius: 3px;
         text-align: center;
         justify-content: center;
         margin-right: 0px;
         font-size: 1.1rem;
         padding-left: 8%;
         padding-right:8%;
         transform: translateY(30%);
         
      }
      .btn-div{
         text-align: center;
         margin: 0;
         
         
      }
      .btn-text{
         
         font-size: 9px;
         
      }
   </style>
</head>
<body>
   <header class="header">
      <nav class="header-nav"><a class="a" href="{{ route('word.logout') }}">ログアウト</a></nav>
   </header>
   <main>
   <h1>
   <div class="top">
   <span class="strong1">W</span>asabi<br>
   <span class="strong2">O</span>konomiyaki<br>
   <span class="strong3">R</span>amen<br>
   <span class="strong4">D</span>onut<br>
   <p class="strong5">
      <span class="strong1">W</span><span class="strong2">O</span>-<span class="strong3">R</span><span class="strong4">D</span>(ウォーラド)!</p>
   </div>
   </h1>
   <h3 class="welcome">辛いワサビ、粉もののお好み焼き、塩っこいラーメン、甘いドーナツ。</h3>
   <h3 class="welcome">みんなバラバラな味です。英単語も、</h3>
   <h3 class="welcome">なじみのあるもの、聞いたことないもの、似たようなものがあってバラバラです。</h3>
   <h3 class="welcome">そんな英単語もウォーラドでまとめて覚えることができます！</h3>
   </main>
   
   <div class="btn-div">
      <a  class="btn" href="{{ route('word.edit') }}" >登録<br><p  class="btn-text">英単語を登録すること<br>ができます</p></a>
      <a  class="btn" href="{{ route('word.list') }}" >一覧<br><p  class="btn-text">登録した単語を編集、<br>削除することができます</p></a>
      <a   class="btn" href="{{ route('word.quiz_ready')}}" >クイズ<br><p  class="btn-text">繰り返すこのスタディズム<br>この努力はやはり素敵だね</p></a><br>
   </div>
   
   
</body>


</html>