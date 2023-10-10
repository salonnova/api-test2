    <html>
    <div class="row">
      <form action="{{ route('word.postsSignup') }}" method="post" class="form-horizontal" style="margin-top: 50px;">
      <div class="form-group">
      <label class="col-sm-3 control-label" for="InputName">{{ __('氏名') }} </label>
      <div class="col-sm-9">
      <input type="text" name="name" class="form-control" id="InputName" placeholder="氏名">
      <!--/.col-sm-10---></div>
      <!--/form-group--></div>
    
      <div class="form-group">
      <p></p>
      <label class="col-sm-3 control-label" for="InputEmail">{{ __('ID') }}</label>
      <div class="col-sm-9">
      <input type="ID" name="user_id" class="form-control" id="InputEmail" placeholder="好きなIDを設定">
      </div>
      <!--/form-group--></div>
    
      <div class="form-group">
        <p>6文字以上で大文字と小文字と英数字を必ず入れてください(バリテーション未有効化)</p>
      <label class="col-sm-3 control-label" for="InputPassword">{{ __('パスワード') }}</label>
      <div class="col-sm-9">
      <input type="password" name="password" class="form-control" id="InputPassword" placeholder="パスワード">
      </div>
      <!--/form-group--></div>
    
      <div class="form-group">
      <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-primary btn-block">新規登録</button>
      </div>
      <!--/form-group--></div>
      {{ csrf_field() }}
      </form>
      </div>
    </html>