
@if (count($errors)>0)
<!-- モーダル・ダイアログ -->
<div class="modal fade" id="sampleModal" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span>×</span></button>
				<h4 class="modal-title">タイトル</h4>
			</div>
			<div class="modal-body">
				本文
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
				<button type="button" class="btn btn-primary">ボタン</button>
			</div>
		</div>
	</div>
</div>
@endif
