<!DOCTYPE html>
<html lang="en">
   
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name=”robots” content=”noindex, nofollow”>
   <title>単語編集画面</title>
   <style>
       html{
         
         background-color: rgb(201, 236, 253);
         background-image: url("{{ asset('/storage/word木.png') }}");
         background-repeat: no-repeat;
         background-position: center;
         background-size: contain;
         width: 100%;
         height: 100%;
         text-align: center;
      }
      h1{
         background-color: #FFF;
         padding: 0;
         width: 10%;
         
      }
      .form-group{
         color: black;
         font-weight: 900;
         display: flex;
         flex-direction: column;
         text-align: center;
         
      
      }
      .red{
         margin: 10px auto;
         
         
         
      }
      .red-title{
         background-color: #E9546B;
         border-radius: 90px;
         margin: auto;
         
      }
      @media (max-width: 897px) {
         html{
            background-size: cover;
            
         }
      }
      input{
         width: 80px;
      }
      fieldset {
         margin: 0;
         border: none;
         
         
      }
      .attention{
         background-color: black;
         color: #FFF;
      }
      .totop{
         background-color: white;
      }
   </style>
</head>
<body class="back">
<h1>編集</h1>
<div class="container small">
   @if (count($errors) > 0)
   <div>
      <ul>
         @foreach($errors ->all() as $error)
            <li class="attention">{{ $error }}</li>
         @endforeach
      </ul>
   </div>
   @endif
   <form action="{{ route('word.renew',['id'=>$word->id]) }}" method="POST">
   @csrf
   <fieldset>
         <div class="form-group">
            <label for="book_name" class="red-title">{{ __('英単語') }}<span class="">{{ __(' (必須!)') }}</span></label>
            <input type="text" class="red" name="word" id="book_name">
            
            <label for="book_name" class="red-title">{{ __('日本語での意味') }}<span class="badge badge-danger ml-2">{{ __(' (必須!)') }}</span></label>
            <input type="text" class="red" name="mean" id="book_name">
            
            <label for="book_name" class="red-title">{{ __('例文') }}<span class="badge badge-danger ml-2"></span></label>
            <input type="text" class="red" name="example" id="book_name">
            
            <label  class="red-title">{{ __('品詞') }}</label>
            <select name="a_part_of_speech" class="red">
               <option value="動詞">動詞</option>
               <option value="副詞">副詞</option>
               <option value="形容詞">形容詞</option>
               <option value="名詞">名詞</option>
            </select>

            <label for="book_name" class="red-title">{{ __('発音 カタカナ') }}<span class="badge badge-danger ml-2"></span></label>
            <input type="text" class="red" name="pronounce" id="book_name">
            
            <label for="book_name" class="red-title">{{ __('選択肢1') }}<span class="badge badge-danger ml-2"></span></label>
            <input type="text" class="red" name="choice[]" id="book_name">

            <label for="book_name" class="red-title">{{ __('選択肢2') }}<span class="badge badge-danger ml-2"></span></label>
            <input type="text" class="red" name="choice[]" id="book_name">

            <label for="book_name" class="red-title">{{ __('選択肢3') }}<span class="badge badge-danger ml-2"></span></label>
            <input type="text" class="red" name="choice[]" id="book_name">

            <label for="book_name" class="red-title">{{ __('選択肢4') }}<span class="badge badge-danger ml-2"></span></label>
            <input type="text" class="red" name="choice[]" id="book_name">


            

            <label class="red-title">{{ __('正解の選択肢') }}</label>
               
            
         </div>
            <select name="correct_choice">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
            </select>

            <div class="">
            <a href="{{ route('word.list') }}" class="totop" role="button">
               <i class="fa fa-reply mr-1" aria-hidden="true"></i>{{ __('単語一覧へ') }}
            </a>
            <p class="attention">注意：必須欄と、正解の選択肢は必ず入力してください</p>
            <button type="submit" class="btn btn-success">
               {{ __('更新') }}
            </button>

            
      </div>
   </fieldset>
   </form>



</div>


</body>


</html>