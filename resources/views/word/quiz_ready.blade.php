<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=”robots” content=”noindex, nofollow”>
    <title>開始画面</title>
    <style>
        html{
            animation: bgchange 10s ease infinite;
            box-sizing: border-box;

            font-family: sans-serif;
            font-size: 100%;
            background-color: rgb(201, 236, 253);
        }

        .btn{display: inline-block;
                padding: 0.5em 1em;
                text-decoration: none;
                background-color: gray;
                font-size: xx-large;
                color: #FFF;
                border: solid 4px #627295;
                border-radius: 3px;
                text-align: center;
                justify-content: center;
                
                 padding: 350px;
                
        }
        .btn:active {
                /*ボタンを押したとき*/
                -webkit-transform: translateY(4px);
                transform: translateY(4px);/*下に動く*/
                border-bottom: none;/*線を消す*/
        }
        .btn-div{
            text-align: center;
            justify-content: center;
        }
        .messeage{
            font-size: xx-large;
        }
        
        @keyframes bgchange{
          0%   {background: rgb(201, 236, 253);}/*変化させたい色*/
          25%  {background:rgb(201, 236, 253);}/*変化させたい色*/
          50%  {background:rgb(201, 236, 253);}/*変化させたい色*/
          75%  {background:rgb(201, 236, 253);}/*変化させたい色*/
          90%  {background:rgb(201, 236, 253);}/*変化させたい色*/
          100% {background:rgb(201, 236, 253);}/*変化させたい色*/
        
        }
        @media (max-width: 897px){
            .btn{
                padding: 120px;
            }
        }
        
    </style>
</head>
<body>
    
    <p id="messeage" class="messeage"></p>
    <div class="btn-div">
        <a class="btn"  href="{{ route('word.index_quiz',['id' => $id])}}" >開始</a>
    </div>
    
    <script>
    // ランダムに応援メッセージ
       var messeages = [
        'break your leg!',
        '繰り返すこのスタンディングこの努力はやはり素敵だね',
        'go for it!'
       ];

       var randomIndex = Math.floor(Math.random()*messeages.length);

       var randomTextElement = document.getElementById("messeage");
       randomTextElement.textContent = messeages[randomIndex];
       
    
    </script>
</body>
</html>
