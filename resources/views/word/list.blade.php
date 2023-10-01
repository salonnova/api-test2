
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name=”robots” content=”noindex, nofollow”>
   <title>単語一覧</title>

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
      .delete {
      width: 80%;
      height: 50px;
      font-size: 18px;
      font-weight: bold;

        /* ボタンにカーソルを当てると、カーソルがポインターに変わる */
      cursor: pointer;
      }
      
      /* ボタンにカーソルを当てたとき、ボタンを半透明にする */
      .delete:hover{
         opacity: 0.7;
      }
      .table{
         text-align: center;
         
      }
      td{
         border-top:1px solid red;
         border-bottom:1px solid red;
         border-left:1px solid red;
         border-right:1px solid red;
         text-align: center;
         padding: 4px;
         margin: 0;
         font-weight: bold;
      }
      th{
         border-top:1px solid red;
         border-bottom:1px solid red;
         border-left:1px solid red;
         border-right:1px solid red;
         text-align: center;

      }

   </style>

   
</head>
<body>

<h1>一覧</h1>
<div class="table">
<table align="center">

      <tr class="tr">
         <th>number</th>
         <th>word</th>
         <th>mean</th>
         <th>a_part_of_speech</th>
         <th>example</th>
         <th>pronounce</th>
      </tr>
      
   @foreach ($word as $words)
      <tr class="tr">
         <td>{{ $words->id }}</td>
         <td>{{ $words->word }}</td>
         <td>{{ $words->mean }}</td>
         <td>{{ $words->a_part_of_speech }}</td>
         <td>{{ $words->example }}</td>
         <td>{{ $words->pronounce }}</td>

         <td><a href="{{ route('word.renew', ['id'=>$words->id]) }}" class="btn" >編集</a></td>
         <form id="delete_{{ $words->id }}" method="get" action="{{ route('word.destroy', ['id'=>$words->id]) }}">
            @csrf
            <div>
            <td><a href="#" data-id="{{ $words->id }}" onclick="deleteGet(this)" class="">削除</a></td>
            </div>
      </form>
      </tr>
         
   @endforeach
   <script type= "text/javascript">
            function deleteGet(e){
               passwd = prompt("パスワードを入力してください","");

               if(passwd == "gexgex2023"){
                  document.getElementById('delete_' + e.dataset.id).submit()
                  
               }else{
                  alert("パスワードが違います")
               }
               
            }
   </script>         


         
      
      
   
      <div class="">
               <a href="{{ route('word.index') }}" class="btn btn-outline-secondary" role="button">
                  <i class="fa fa-reply mr-1" aria-hidden="true"></i>{{ __('トップページへ') }}
               </a>
      </div>
</table>
</div>

</body>
</html>