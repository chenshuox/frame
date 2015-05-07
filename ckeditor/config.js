/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// 设置语言
	config.language = 'zh-cn';
	// 设置UI颜色
	config.uiColor = '#ffffff';
	// 设置最小高度
	config.height = "400px";
	//允许写入html代码
	config.allowedContent = true;
	//加载自定义插件
	config.extraPlugins = 'insertcode';
	// 自定义工具栏
	config.toolbar = 'Basic';

	config.toolbar_Basic =
	[
		[
			'Source',
			'Undo',
			'Redo',
			'JustifyLeft',
			'JustifyCenter',
			'JustifyRight',
			'JustifyBlock',
			'RemoveFormat',
			'Bold',
			'Italic',
			'Underline',
			'Strike',
			'Subscript',
			'Superscript',
			'NumberedList',
			'BulletedList',
			'Blockquote',
			'Link',
			'Unlink',
			'Image',
			'Flash',
			'Table',
			'insertCode',
			'Format',
			'TextColor',
			'BGColor',
			'Maximize',
		]
	];

	config.toolbar_Full =
	[
		['Source','-','Save','NewPage','Preview','-','Templates'],
		['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'],
		['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
		['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
		'/',
		['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
		['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
		['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
		['Link','Unlink','Anchor'],
		['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
		'/',
		['Styles','Format','Font','FontSize'],
		['TextColor','BGColor'],
		['Maximize', 'ShowBlocks','-','About']
	];
}	