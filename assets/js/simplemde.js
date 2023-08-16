$(function() {
  'use strict';

  /*simplemde editor*/
  if ($("#simpleMdeExample").length) {
    var simplemde = new SimpleMDE({
      element: $("#simpleMdeExample")[0],
			renderingConfig: {
				// Enable image rendering
				singleLineBreaks: false,
				codeSyntaxHighlighting: true,
			},
    });

		// Optional: Update preview on content change
		simplemde.codemirror.on("change", function () {
			simplemde.options.previewRender(simplemde.value(), simplemde.preview);
		});

		simplemde.codemirror.on("change", function () {
			simplemde.options.previewRender(simplemde.value(), simplemde.preview);
			document.getElementById("markdown-preview").innerHTML = simplemde.options.previewRender(
				simplemde.value()
			);
		});
  }

});
