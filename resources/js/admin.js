/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import tinymce from 'tinymce/tinymce'
import 'tinymce/themes/silver/theme'
import 'tinymce/skins/ui/oxide/skin.min.css'
import 'tinymce/skins/ui/oxide/content.css'
import 'tinymce/plugins/image/plugin.js'
import 'tinymce/plugins/code/plugin.js'

tinymce.init({
    content_css : "/css/app.css",
    selector: '#mytextarea',
    plugins: 'image, code',
    toolbar: 'undo redo | formatselect | ' +
    ' bold italic| alignleft aligncenter ' +
    ' alignright alignjustify | bullist numlist outdent indent |' +
    ' removeformat | image code | customstyle',
    images_upload_url: '/uploads',
    images_upload_handler: function (blobInfo, success, failure) {
        var xhr, formData;
        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', '/image-upload');
        var token = '{{ csrf_token() }}';
        xhr.setRequestHeader("X-CSRF-Token", token);
        xhr.onload = function() {
            var json;
            if (xhr.status != 200) {
                failure('HTTP Error: ' + xhr.status);
                return;
            }
            json = JSON.parse(xhr.responseText);

            if (!json || typeof json.location != 'string') {
                failure('Invalid JSON: ' + xhr.responseText);
                return;
            }
            success(json.location);
        };
        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());
        xhr.send(formData);
    },
    setup: function (editor) {
        editor.ui.registry.addMenuButton('customstyle', {
            text: 'Egyedi stílusok',
            fetch: function (callback) {
                var items = [
                    {
                        type: 'menuitem',
                        text: 'Szürke doboz',
                        classes: 'c-box--gray',
                        onAction: function () {
                            editor.insertContent('<p class="c-box--gray">' +
                                tinyMCE.activeEditor.selection.getContent() +
                                '</p>'
                            );
                            //tinyMCE.activeEditor.dom.addClass(tinyMCE.activeEditor.selection.getNode(), 'c-box--gray');
                            console.log(tinyMCE.activeEditor.selection)
                        }
                    },
                    {
                        type: 'menuitem',
                        text: 'Szürke doboz lila vonallal',
                        classes: 'c-box--purple-line',
                        onAction: function () {
                            editor.insertContent('<p class="c-box--purple-line">' +
                                tinyMCE.activeEditor.selection.getContent() +
                                '</p>'
                            );
                            //tinyMCE.activeEditor.dom.addClass(tinyMCE.activeEditor.selection.getNode(), 'c-box--purple-line');
                            console.log(tinyMCE.activeEditor.selection.getNode(), 'c-paragraph--left-line')
                        }
                    },
                    {
                        type: 'menuitem',
                        text: 'Lila doboz',
                        classes: 'c-box--purple',
                        onAction: function () {
                            editor.insertContent('<p class="c-box--purple">' +
                                tinyMCE.activeEditor.selection.getContent() +
                                '</p>'
                            );
                        }
                    },
                    {
                        type: 'menuitem',
                        text: 'Bal oldalt liila vonal',
                        classes: 'c-paragraph--left-line',
                        onAction: function () {
                            editor.insertContent('<p class="c-paragraph--left-line">' +
                                tinyMCE.activeEditor.selection.getContent() +
                                '</p>'
                            );
                        }
                    },
                    {
                        type: 'menuitem',
                        text: 'Felül alul lila vonal',
                        classes: 'c-paragraph--lines',
                        onAction: function () {
                            editor.insertContent('<p class="c-paragraph--lines">' +
                                tinyMCE.activeEditor.selection.getContent() +
                                '</p>'
                            );
                        }
                    },
                    {
                        type: 'menuitem',
                        text: 'Bal oldal ikon jobb oldal szöveg',
                        classes: 'c-paragraph--left-icon',
                        onAction: function () {
                            editor.insertContent( '<div class="d-flex">' +
                                '<img src="/images/icons/mobil-telefon.png">' +
                                '<p class="c-paragraph--left-icon">' +
                                tinyMCE.activeEditor.selection.getContent() +
                                '</p>' +
                                '</div>'
                            );
                        }
                    }

                ];
                callback(items);
            }
        })
    }
});
