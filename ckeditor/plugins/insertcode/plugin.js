CKEDITOR.plugins.add('insertcode',  {
	icons: 'insertcode',
	init: function (editor) {
		editor.addCommand( 'insertMyCode', new CKEDITOR.dialogCommand( 'insertCodeDialog' ) );
		editor.ui.addButton('insertCode', {
			label: 'Insert Code',
			command: 'insertMyCode',
			toolbar: 'insertCode',
		});

		// 加载dialog
		CKEDITOR.dialog.add( 'insertCodeDialog', this.path + 'dialogs/insertcode.js' );
	}
});