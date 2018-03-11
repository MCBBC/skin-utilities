tid = /\d+$/.exec(window.location.pathname)[0];
$('div.box-footer:first').append('<a href="/user/skin-utilities/editor-1?tid=' + tid + '" class="btn btn-default" target="_blank">编辑器一</a> ');
$('div.box-footer:first').append('<a href="/user/skin-utilities/editor-2?tid=' + tid + '" class="btn btn-default" target="_blank">编辑器二</a>');
