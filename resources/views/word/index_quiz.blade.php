<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name=”robots” content=”noindex, nofollow”>
   <title>クイズ</title>
   <style>
      html{
      font-family: sans-serif;
      font-size: 100%;
      background-color:  rgb(201, 236, 253);
      }
      
      *{
         box-sizing: border-box;
         
         /* ボックス内の幅、高さの中に『線と内側の余白』を含める */
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
        font-size: 2rem;
        font-weight: 600;
        border-radius: 20px;
        margin-left: 40px;
        margin-right: 40px;
        padding: 100px 0 100px 0;
        
      }
   </style>
</head>

<body>
      <div class="block-small">
         <h1>Q{{ $word -> id }}</h1>   
         <h2>{{ $word->word }}</h2>
      </div>
      <div class="block-large">
            <form action="{{ route('word.answer') }}" method="get">
               @csrf
               <input type="hidden" name="id" value="{{ $word->id }}">
               @foreach($word->choices as $index =>$choice)
                  <div>
                     <label>
                        <input type="radio" name="choice" value="{{ $index }}" required>
                        {{ $choice }}
                     </label>
                  </div>
               @endforeach
               <input type="submit" value="回答する" class="answer">
            </form>
      </div>
   </body>
</html>