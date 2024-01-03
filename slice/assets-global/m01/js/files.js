$('.loader-wrap').addClass('loader-active');
/* prevent unwanted file opening in browser tab */

window.addEventListener('dragover', event => event.preventDefault(), false);
window.addEventListener('drop', event => event.preventDefault(), false);

document.addEventListener('DOMContentLoaded', () => {
    let urlGetFiles = 'php/get-files.php';
    let urlSendFile = 'php/form-file.php';

    let l10n = {
        inputButtonFileText: 'File',
        inputButtonSizeText: 'Size',
        inputButtonAnotherFileText: 'Upload another file',
        filetypeWarnMessage: 'Please select image or PDF file',
        filesizeWarnMessage: 'Max size is 6Mb',
        fileNoticeMessage: 'JPG,PNG,PDF smaller than 6Mb',
        fileNoticeMessageUploaded: 'File was uploaded',
        fileuploadSuccessMessage: 'Success',
        fileuploadErrorMessage: 'Error with uploading file',
        fileChoose: 'Add File Here',
        fileLoading: 'Loading...'
    };

    let id = getParameterByName('id');

    let filesWrapper = document.getElementById('files-group');
    let dataList = [];

    if (id) {

        ajax({
            url: urlGetFiles,
            type: 'post',
            data: {
                id: id
            }
        }).then(
            function successHandler(response, textStatus) {
                let responseFilesData = parseJson(response.d) || {};
                if (responseFilesData['status'] && responseFilesData['status'] == 'success' &&
                    responseFilesData['id'] && responseFilesData['id'] == id &&
                    responseFilesData['files'] && Array.isArray(responseFilesData['files'])) {
                    responseFilesData['files'].forEach(doc => {
                        if (doc['name'] && doc['id']) {
                            let fileInput = createFileBox(filesWrapper, doc['name'], doc['id']);
                            $(fileInput).hide().fadeIn(400)
                        }
                    });

                    $('.loader-wrap').removeClass('loader-active');
                    $('.slide-head').bind('click', function (e) {
                        e && e.preventDefault && e.preventDefault();
                        let title = $(this),
                            content = title.parent().find('.slide-body');
                        title.parent().hasClass('slide-minimized') ?
                            content.slideDown({
                                duration: 300,
                                complete: () => {
                                    title.parent().removeClass('slide-minimized')
                                }
                            }) :
                            content.slideUp({
                                duration: 300,
                                complete: () => {
                                    title.parent().addClass('slide-minimized')
                                }
                            })
                    });

                    let fileInputs = document.querySelectorAll('.fileinput');
                    Array.prototype.forEach.call(fileInputs, input => {
                        let label = input.nextElementSibling;
                        let filebox = input.parentElement;
                        let slide = filebox.parentElement.parentElement;
                        let slideHead = slide.querySelector('.slide-head') || null;
                        let iconContainer = label.querySelector('figure') || null;
                        let iconText = label.querySelector('figcaption') || null;

                        filebox.ondrop = function (event) {
                            event.preventDefault();
                            event.stopPropagation()
                            if (!filebox.classList.contains('filebox-success')) {
                                input.files = event.dataTransfer.files;
                                let dataTransfer = new DataTransfer();
                                dataTransfer.items.add(event.dataTransfer.files[0]);
                                input.files = dataTransfer.files;
                                input.dispatchEvent(new Event('change'));
                            }
                        };
                        filebox.ondragover = filebox.ondragenter = (event) => {
                            filebox.classList.add('has-focus')
                        }
                        filebox.ondragleave = filebox.onmouseleave = (event) => {
                            filebox.classList.remove('has-focus')
                        }

                        input.addEventListener('change', event => {
                            let iconInitial = document.getElementById('base-icon').content.cloneNode(true);
                            let iconSuccess = document.getElementById('success-icon').content.cloneNode(true);
                            let iconError = document.getElementById('error-icon').content.cloneNode(true);

                            if (input.files.length > 0) {
                                if (checkIfFileSizeValid(input.files[0].size) && checkIfFileTypeValid(input.files[0].type)) {
                                    input.disabled = true;

                                    /* output file info if valid */
                                    changeIconText(iconText,
                                                    l10n.inputButtonFileText + ': ' + input.files[0].name,
                                                    l10n.inputButtonSizeText + ': ' + fileSize(parseInt(input.files[0].size, 10)),
                                                    l10n.fileLoading,
                                    );
                                    iconContainer.querySelector('svg').replaceWith(iconInitial);
                                    filebox.className = 'filebox filebox-progress';

                                    /* create upload data */
                                    let formData = new FormData();
                                    formData.append("file", input.files[0]);
                                    formData.append("id", id);
                                    formData.append("doc_id", input.dataset.id);
                                    formData.append("doc_name", input.dataset.name);

                                    ajax({
                                            url: urlSendFile,
                                            type: 'post',
                                            data: formData,
                                            cache: false,
                                            contentType: false,
                                            processData: false
                                        }).then(
                                            function successHandler(response) {
                                                let responseData = parseJson(response.d) || {};
                                                if (response['response'] == 'success' && responseData.status == 'success') {

                                                    iconContainer.querySelector('svg').replaceWith(iconSuccess);

                                                    changeIconText(iconText, l10n.fileuploadSuccessMessage, '', l10n.fileNoticeMessageUploaded);
                                                    filebox.className = 'filebox filebox-success';

                                                    /* slide controls */
                                                    if (slide) {
                                                        slide.classList.add('slide-success');
                                                        if (!slide.classList.contains('slide-minimized')) slideHead.click();
                                                    }

                                                    /* prevent repeating dataList.push */
                                                    if (!input.dataset['success'] || (input.dataset['success'] && input.dataset.success != 1)) {
                                                        input.dataset.success = 1;
                                                        dataList.push({});
                                                    }

                                                    /* disable input after success upload */
                                                    input.disabled = true;
                                                    input.classList.add('fileinput-disabled');
                                                    filebox.classList.add('filebox-disabled');
                                                    label.setAttribute('for', input.name + '-disabled');

                                                    /* another file upload button */
                                                    /*if (!iconContainer.querySelector('.fileinput-another-btn')) {
                                                        let uploadBtn = document.createElement('div');
                                                        uploadBtn.classList.add('fileinput-another-btn');
                                                        uploadBtn.innerText = l10n.inputButtonAnotherFileText;
                                                        uploadBtnElement = iconContainer.appendChild(uploadBtn);
                                                        uploadBtnElement.addEventListener('click', event => {
                                                            input.disabled = false;
                                                            input.click();
                                                        });
                                                    }*/
                                                    if (dataList.length == responseFilesData['files'].length) {
                                                        if (responseData.redirect_link) window.location.href = responseData.redirect_link;
                                                    }
                                                } else {
                                                    input.value = null;
                                                    throw new Error('Response data error');
                                                }
                                            })
                                        .catch(function errorHandler(error) {
                                            input.disabled = false;
                                            iconContainer.querySelector('svg').replaceWith(iconError)
                                            changeIconText(iconText, l10n.fileuploadErrorMessage, '', l10n.fileNoticeMessage);
                                            filebox.className = 'filebox filebox-error';

                                            /* error input border */
                                            if (slide) {
                                                slide.classList.remove('slide-success');
                                                if (slide.classList.contains('slide-minimized')) slideHead.click();
                                            }
                                            console.log('Request failed: %o', error)
                                        })

                                } else {
                                    if (input.dataset['success'] && input.dataset.success == 1) {
                                        input.disabled = true;
                                    } else {
                                        if (!checkIfFileTypeValid(input.files[0].type)) {
                                            changeIconText(iconText, l10n.filetypeWarnMessage, null, null);
                                        } else if (!checkIfFileSizeValid(input.files[0].size)) {
                                            changeIconText(iconText, l10n.filesizeWarnMessage, null, null);
                                        }
                                    }
                                    input.value = null;
                                }

                            } else {
                                if (input.dataset['success'] && input.dataset.success == 1) input.disabled = true;
                                changeIconText(iconText, l10n.fileChoose + ' ' + input.dataset.name, null, null);
                            }
                        });
                    });
                } else if (responseFilesData['status'] == 'error' && responseFilesData['description'] == 'no_requested_files' && responseFilesData['redirect_link']) {
                    window.location.href = responseFilesData['redirect_link'];
                } else {
                    let error = new Error('Get files error');
                    error.redirect = response.r;
                    error.data = responseFilesData;
                    throw error;
                }
            }
        ).catch(function errorHandler(errorData) {
            console.error('Request failed: %s', errorData);
            if (errorData && errorData.data && errorData.data['redirect_link']) {
                window.location.href = errorData.data['redirect_link'];
            } else if (errorData && errorData.redirect.length > 0) {
                window.location.href = errorData.redirect;
            }
        });
    }

    function ajax(options) {
        return new Promise(function (resolve, reject) {
            $.ajax(options).done(resolve).fail(reject);
        });
    }

    function getParameterByName(name, url = window.location.href) {
        let regex = new RegExp('[?&]' + name.replace(/[\[\]]/g, '\\$&') + '(=([^&#]*)|&|#|$)'),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }

    function fileSize(size) {
        var i = Math.floor(Math.log(size) / Math.log(1024));
        return (size / Math.pow(1024, i)).toFixed(2) * 1 + ' ' + ['B', 'kB', 'MB', 'GB', 'TB'][i];
    }

    function checkIfFileTypeValid(type) {
        return ['image/jpeg', 'image/png', 'application/pdf'].includes(type);
    }

    function checkIfFileSizeValid(size) {
        return parseInt(size, 10) < 5 * 1024 * 1024;
    }

    function createFileBox(parent, text = '', data = '') {
        let element = document.getElementById('input-template');
        if (element) {
            let elementContent = element.content.cloneNode(true);
            let input = elementContent.querySelector('input')
            let inputLabel = elementContent.querySelector('label');
            let iconText = elementContent.querySelector('figcaption');
            let iconTextLine1 = iconText.querySelector('.icon-line-1');
            let iconTextLine2 = iconText.querySelector('.icon-line-2');
            let iconTextLine3 = iconText.querySelector('.icon-line-3');

            input.name = input.name + data;
            input.id = input.id + data;
            input.dataset.name = text;
            input.dataset.id = data;
            inputLabel.setAttribute('for', input.name);
            iconTextLine1.textContent = l10n.fileChoose;
            iconTextLine2.textContent = '';
            iconTextLine3.textContent = l10n.fileNoticeMessage;

            let slideHead = elementContent.querySelector('.slide-head');
            slideHead.textContent = text;

            return parent.appendChild(elementContent);
        }
    }

    function changeIconText(iconTextElement, line1=null,line2=null,line3=null,) {
        let iconTextLine1 = iconTextElement.querySelector('.icon-line-1');
        let iconTextLine2 = iconTextElement.querySelector('.icon-line-2');
        let iconTextLine3 = iconTextElement.querySelector('.icon-line-3');
        if (iconTextLine1 && iconTextLine2 && iconTextLine3) {
            iconTextLine1.textContent = line1 !== null ? line1 : iconTextLine1.textContent;
            iconTextLine2.textContent = line1 !== null ? line2 : iconTextLine2.textContent;
            iconTextLine3.textContent = line1 !== null ? line3 : iconTextLine3.textContent;
        }
    }

    function parseJson(jsonString) {
        try {
            var o = JSON.parse(jsonString);
            if (o && typeof o === "object") {
                return o;
            }
        } catch (e) {}
        return false;
    }
});