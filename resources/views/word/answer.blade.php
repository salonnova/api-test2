<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=”robots” content=”noindex, nofollow”>
    <title>答え</title>
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
            font-size: 1.5rem;
            font-weight: 600;
            border-radius: 20px;
            margin-left: 40px;
            margin-right: 40px;
            padding: 50px 0 50px 0;

        }
    </style>
</head>
<body>
    <div class="block-small">
    <h1>結果</h1> 
    </div>  
    
    <div class="block-large">
    <p class="question">問題:{{ $word->word }}</p>
    <p class="select">あなたは選択肢{{ $userAnswer + 1}}を選びました</p>
    @if ($isCorrect)
        <p>正解です</p>
        @if (is_null($word -> pronounce) and is_null($word ->example) and is_null($word-> a_part_of_speech))
        <p>発音はまだ入力されていません。</p>
        <p>例文はまだ入力されていません。</p>
        <p>品詞はまだ入力されていません</p>

        @elseif (is_null($word -> pronounce)) 
        <p>例文は{{ $word->example}}です。</p>
        <p>発音はまだ入力されていません。</p>
        <p>品詞は{{ $word->a_part_of_speech }}です。</p>

        @elseif (is_null($word ->example))
        <p>例文はまだ入力されていません。</p>
        <p>発音は{{ $word->pronounce}}です。</p>
        <p>品詞は{{ $word->a_part_of_speech }}です。</p>

        @elseif (is_null($word ->a_part_of_speech))
        <p>例文は{{ $word->example}}です。</p>
        <p>発音は{{ $word->pronounce}}です。</p>
        <p>品詞はまだ入力されていません。</p>
        
        
        @elseif (is_null($word ->a_part_of_speech) and is_null($word -> pronounce))
        <p>例文は{{ $word->example}}です。</p>
        <p>発音はまだ入力されていません。</p>
        <p>品詞はまだ入力されていません。</p>

        @elseif (is_null($word ->a_part_of_speech) and is_null($word -> example))
        <p>例文はまだ入力されていません。</p>
        <p>発音は{{ $word->pronounce}}です。</p>
        <p>品詞はまだ入力されていません。</p>

        @elseif (is_null($word ->example) and is_null($word -> pronounce))
        <p>例文は{{ $word->example}}です。</p>
        <p>発音はまだ入力されていません。</p>
        <p>品詞は{{ $word->a_part_of_speech }}です。</p>




        @else
        <p>例文は{{ $word->example}}です。</p>
        <p>発音は{{ $word->pronounce}}です。</p>
        <p>品詞は{{ $word->a_part_of_speech }}です。</p>
        @endif
    @else
        <p>不正解です。正解は{{ $word->choices[$word -> correct_choice -1] }}です。</p>
        @if (is_null($word -> pronounce) and is_null($word ->example))
        <p>発音はまだ入力されていません。</p>
        <p>例文はまだ入力されていません。</p>

        @elseif (is_null($word -> pronounce)) 
        <p>例文は{{ $word->example}}です。</p>
        <p>発音はまだ入力されていません。</p>
        @elseif (is_null($word ->example))
        <p>例文はまだ入力されていません。</p>
        <p>発音は{{ $word->pronounce}}です。</p>

        @else
        <p>例文は{{ $word->example}}です。</p>
        <p>発音は{{ $word->pronounce}}です。</p>
        @endif
    @endif


    @if ($next_word)
        <a href="{{ route('word.index_quiz', ['id'=>$next_word]) }}" class="link">次の問題へ</a>
    @else
        <p class="end">クイズが終了しました。</p>
        <a href="{{ route('word.index') }}" class="link">{{ __('トップページへ') }}</a>
    @endif
    </div>
</body>
</html>