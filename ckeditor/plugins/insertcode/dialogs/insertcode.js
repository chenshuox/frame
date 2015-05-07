CKEDITOR.dialog.add('insertCodeDialog', function(editor) {
	return {
		title: '插入代码',
		minWidth: 600,
		minHeight: 400,
		contents: [
			{
				id: 'insertCode',
                label: 'Select Code',
                elements: [
                    {
                        type: 'select',
                        id: 'lang',
                        default: 'php',
                        items: [ ['Bash/shell', 'bash'], ['C#', 'csharp'], ['C++', 'cpp'], ['CSS', 'css'], ['Delphi', 'delphi'], ['Diff', 'diff'], ['Groovy', 'groovy'], ['Html', 'html'], ['JavaScript', 'js'], ['Java', 'java'], ['JavaFX', 'jfx'], ['Perl', 'perl'], ['PHP', 'php'], ['Plain Text', 'plain'], ['PowerShell', 'ps'], ['Python', 'py'], ['Ruby', 'rails'], ['Scala', 'scala'], ['SQL', 'sql'], ['Visual Basic', 'vb'], ['XML', 'xml']]
                    },
                    {
                    	id: 'code',
                    	type: 'textarea',
                    	style: 'width:600px;',
                    	rows: 31,
                    }
                ],
			}
		],
		onOk: function(){
            code = this.getValueOf('insertCode', 'code');
            lang = this.getValueOf('insertCode', 'lang');
            //将html代码进行实体转义
            code = CKEDITOR.tools.htmlEncode(code);
            //将类似 '<' 等的实体标识为文本内容，不然下次用编辑器打开时会被认为是html标签，造成编辑器上看不到该字符。
            code = code.replace(/(&){1}(lt;){1}/g,"<code>&"+"lt;</code>");
            code = code.replace(/(&){1}(amp;){1}/g,"<code>&"+"amp;</code>");
            editor.insertHtml("<pre class='code'><code class=\"" + lang + "\">" + code + "</code></pre><p/>");
        },
	};
});