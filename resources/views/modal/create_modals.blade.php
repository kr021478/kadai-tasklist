<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Kadai_tasklist</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
<!-- ボタン -->       
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#sampleA">Modal Open</button>

<!-- モーダルダイアログ -->
<div class="modal fade" id="sampleA" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
      <h4 class="modal-title">Modal Window</h4>
      </div>
      
      <div class="modal-body">
      sample sample sample sample sample
      </div>
      
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
      <button type="button" class="btn btn-primary">保存</button>
      </div>
        
    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div><!-- modal fade -->
 </body>
</html>