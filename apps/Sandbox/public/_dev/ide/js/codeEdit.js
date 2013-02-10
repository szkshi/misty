$.codeEdit = {
	changed : false,
	factory : function() {
        var editor = ace.edit("editor");
        editor.setTheme("ace/theme/eclipse");
        editor.getSession().setMode("ace/mode/php");
        window.aceEditor = editor;
        editor.getSession().setTabSize(4);
        editor.getSession().setUseSoftTabs(true);
        editor.getSession().setUseWrapMode(true);
        editor.renderer.setHScrollBarAlwaysVisible(false);
        editor.getSession().on('change', $.codeEdit.change);
        editor.setHighlightActiveLine(true);
        return editor;
	},
	change : function() {
		if ($.codeEdit.changed == true) {
			return;
		}
		$.codeEdit.label('changed');
		$.codeEdit.changed = true;
	},
	reset : function() {
		$.codeEdit.label('reset');
		$.codeEdit.changed = false;
	},
	label : function(mode) {
		var label = 'div#label.editor_label span.editor_file_save';
		if (mode == 'reset') {
			// reset
			jQuery(label).html('SAVE').css('background-color', 'gray');
		} else if (mode == 'changed') {
			// change
			jQuery(label).html('SAVE').css('background-color', 'red');
		} else if (mode == 'readonly') {
			// change
			jQuery(label).html('Read Only').css('background-color', 'black');
		} else if (mode == 'save') {
			jQuery(label).html('Saving...').css('background-color', 'green').fadeOut().fadeIn('slow', function() {
				jQuery(label).html('SAVE').css('background-color', 'gray');
			});
		}
	}
}
