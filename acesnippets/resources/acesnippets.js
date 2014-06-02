var AceSnippets = {

    init: function(inputId, mode, theme, readOnly)
    {
        // Set input variable and hide it
        var input  = $("#" + inputId + "-content");
        input.hide();

        // Initialize Ace Editor
        ace.require("ace/ext/language_tools");
        var editor = ace.edit(inputId + "-container");

        // Configure Ace Editor
        editor.setTheme("ace/theme/" + theme);
        editor.setReadOnly(readOnly);
        editor.getSession().setMode("ace/mode/" + mode);
        editor.setShowInvisibles(false);

        // Enable auto completion and snippets
        editor.setOptions({
            enableBasicAutocompletion: true,
            enableSnippets: true,
            maxLines: 30,
        });

        editor.getSession().setUseSoftTabs(true);
        editor.getSession().setTabSize(4);

        if (!readOnly)
        {
            // Update input with content from Ace Editor
            editor.getSession().on('change', function(){
                input.val( editor.getSession().getValue() );
            });
        }

        // Update Ace Editor with content from input
        editor.getSession().setValue(input.val());
    },

    changeMode: function(inputId, mode)
    {
        var editor = ace.edit(inputId + "-container");
        editor.getSession().setMode("ace/mode/" + mode);
    }

};
