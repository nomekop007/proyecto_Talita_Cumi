/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function (config) {
  config.toolbarGroups = [
    { name: "clipboard", groups: ["undo", "clipboard"] },
    { name: "document", groups: ["mode", "document", "doctools"] },
    {
      name: "editing",
      groups: ["spellchecker", "find", "selection", "editing"],
    },
    { name: "forms", groups: ["forms"] },
    { name: "basicstyles", groups: ["basicstyles", "cleanup"] },
    {
      name: "paragraph",
      groups: ["list", "indent", "blocks", "align", "bidi", "paragraph"],
    },
    { name: "links", groups: ["links"] },
    { name: "colors", groups: ["colors"] },
    { name: "insert", groups: ["insert"] },
    { name: "styles", groups: ["styles"] },
    { name: "tools", groups: ["tools"] },
    { name: "others", groups: ["others"] },
    { name: "about", groups: ["about"] },
  ];

  config.removeButtons =
    "Paste,PasteText,PasteFromWord,Copy,Cut,Source,Save,NewPage,Templates,Find,Replace,SelectAll,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Subscript,Superscript,CopyFormatting,RemoveFormat,CreateDiv,BidiLtr,BidiRtl,Language,Unlink,Anchor,Flash,HorizontalRule,PageBreak,ShowBlocks";
  config.language = "es";
  config.uiColor = "#D5DBDB";
  config.height = 300;
  config.toolbarCanCollapse = true;
};
