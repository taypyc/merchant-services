document.addEventListener('DOMContentLoaded', () => {
    let urlGetFiles = 'php/get-files.php';
    let urlSendFile = 'php/form-files.php';
    let l10n = {
        inputButtonFileText: 'File',
        inputButtonSizeText: 'Size',
        inputButtonAnotherFileText: 'Upload another file',
        filetypeWarnMessage: 'Please select image/photo or PDF file',
        filesizeWarnMessage: 'Max size is 5Mb, select other file',
        fileuploadSuccessMessage: 'La carga del archivo ha sido un éxito',
        fileuploadErrorMessage: 'Error with uploading file, please try again',
        fileChoose: 'Escoja el Archivo'
    };

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

    function createFileInputTemplate(parent, text = '', data = ''){
        let element = document.getElementById('input-template');
        if (element){
            let elementContent = element.content.cloneNode(true);
            let fileInput = elementContent.querySelector('input')
            let fileInputLabel = elementContent.querySelector('label');
            let fileInputText = elementContent.querySelector('.input__file-button-text');
            fileInput.name = fileInput.name + data;
            fileInput.dataset.name = text;
            fileInput.dataset.id = data;
            fileInput.id = fileInput.id + data;
            fileInputLabel.for = fileInput.name;

            let slideHeadline = elementContent.querySelector('.slide-block__headline');
            slideHeadline.textContent = text;
            return parent.appendChild(elementContent);
        }
    }

    function createUploadBtn(parent, text = l10n.inputButtonAnotherFileText) {
        let uploadBtn = document.createElement('div');
        uploadBtn.classList.add('input__file-another');
        uploadBtn.innerText = text;
        uploadBtnDOM = parent.appendChild(uploadBtn);
        uploadBtnDOM.addEventListener('click', (e)=>{
            let input = parent.parentElement.querySelector('input');
            if (input.disabled && input.disabled === true) {
                input.disabled = false;
                input.click();
                input.disabled = false;
            }
        });
        return uploadBtnDOM;
    }

    function parseJson(jsonString) {
        try {
            var o = JSON.parse(jsonString);
            if (o && typeof o === "object") {
              return o;
            }
        }
        catch (e) { }
        return false;
    }

    let id = getParameterByName('id');
    let filesWrapper = document.getElementById('files-wrapper');
    let dataList = [];

    if (id) {
        ajax({
            url: urlGetFiles,
            type: 'post',
            data: { id: id }
        }).then(
            function successHandler(response, textStatus) {
                let responseFilesData = parseJson(response.d) || {};
                if (responseFilesData['status'] && responseFilesData['status'] == 'success' &&
                    responseFilesData['id'] && responseFilesData['id'] == id &&
                    responseFilesData['docs'] && Array.isArray(responseFilesData['docs'])) 
                {
                    responseFilesData['docs'].forEach(doc=>{
                        if (doc['name'] && doc['id']) {
                            let fileInput = createFileInputTemplate(filesWrapper, doc['name'], doc['id']);
                            $(fileInput).hide().fadeIn(400)
                        } 
                    });

                    $( '.loader-fileloader' ).fadeOut(200);
                    $('.slide-block__headline').bind('click', function(e){
                        e && e.preventDefault && e.preventDefault();
                        let title = $(this),
                        content = title.parent().find('.slide-block__body');
                        title.hasClass('slide-block__headline--collapsed') ? content.slideDown({
                            duration: 300, complete: function () {
                                title.removeClass('slide-block__headline--collapsed')
                            }
                        }) : content.slideUp({
                            duration: 300, complete: function () {
                                title.addClass('slide-block__headline--collapsed')
                            }
                        })
                    });

                    let fileInputs = document.querySelectorAll('.input__file');
                    Array.prototype.forEach.call(fileInputs, input => {
                        let label = input.nextElementSibling;
                        let iconContainer = label.querySelector('.input__file-icon-wrapper');
                        let buttonTextLabel = label.querySelector('.input__file-button-text') || null;

                        input.addEventListener('dragover', event => input.classList.add('input__file--dragover'));
                        input.addEventListener('dragenter', event => input.classList.add('input__file--dragover'));
                        input.addEventListener('dragleave', event => input.classList.remove('input__file--dragover'));

                        input.addEventListener('change', event => {
                            let iconSuccess = document.getElementById('success-icon').content.cloneNode(true);
                            let iconError = document.getElementById('error-icon').content.cloneNode(true);
                            let iconProgress = document.getElementById('progress-icon').content.cloneNode(true);

                            if (input.files.length > 0) {
                                if (checkIfFileSizeValid(input.files[0].size) && checkIfFileTypeValid(input.files[0].type)) {
                                        buttonTextLabel.innerHTML = '';
                                        /* return file input into uploading state */
                                        if (label.querySelector('.input__file-button-text')) {
                                            label.querySelector('.input__file-button-text').classList.remove('input__file-button-text--success');
                                            label.querySelector('.input__file-button-text').classList.remove('input__file-button-text--error');
                                        }
                                        label.classList.remove('input__file-button--error');

                                        /* two-lined file info */
                                        let inputButtonTextLine1 = document.createElement('div');
                                        inputButtonTextLine1.innerText = l10n.inputButtonFileText + ': ' + input.files[0].name;
                                        inputButtonTextLine1.className = 'input__file-button-text-line';
                                        buttonTextLabel.appendChild(inputButtonTextLine1);

                                        let inputButtonTextLine2 = document.createElement('div');
                                        inputButtonTextLine2.innerText = l10n.inputButtonSizeText + ': ' + fileSize(parseInt(input.files[0].size,10));
                                        inputButtonTextLine2.className  = 'input__file-button-text-line';
                                        buttonTextLabel.appendChild(inputButtonTextLine2);
                                        
                                        /* upload icon animation */
                                        iconContainer.innerHTML = '';
                                        iconContainer.appendChild(iconProgress);
                                        
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
                                                    buttonTextLabel.innerText = l10n.fileuploadSuccessMessage;
                                                    buttonTextLabel.classList.add('input__file-button-text--success');

                                                    iconContainer.innerHTML = '';
                                                    iconContainer.appendChild(iconSuccess);

                                                    if (label.querySelector('.input__file-button-notice')) label.querySelector('.input__file-button-notice').classList.add('hidden');
                                                    if (label.querySelector('.input__file-button-textwrapper')) label.querySelector('.input__file-button-textwrapper').classList.add('input__file-button-textwrapper--success');
                                                    if (label.querySelector('.input__file-typenotice')) label.querySelector('.input__file-typenotice').remove();
                                                    input.classList.add('input__file--success');
                                                    if (input.parentElement.parentElement.querySelector('.slide-block__headline')) {
                                                        let slideHead = input.parentElement.parentElement.querySelector('.slide-block__headline');
                                                        slideHead.classList.add('slide-block__headline--success');
                                                        if (!slideHead.classList.contains('slide-block__headline--collapsed')) slideHead.click();
                                                    }  

                                                    /* prevent repeating dataList.push */
                                                    if (!input.dataset['success'] || (input.dataset['success'] && input.dataset.success != 1)) {
                                                        input.dataset.success = 1;
                                                        dataList.push({});
                                                    } 
                                                    /* disable input after success upload */
                                                    input.disabled = true;
                                                    input.classList.add('input__file--disabled');
                                                    
                                                    /* another file upload button */
                                                    if (!label.querySelector('.input__file-another')) {
                                                        let uploadBtnElement = document.createElement('div');
                                                        uploadBtnElement.classList.add('input__file-another');
                                                        uploadBtnElement.innerText = l10n.inputButtonAnotherFileText;
                                                        uploadBtnDOM = label.appendChild(uploadBtnElement);
                                                        uploadBtnDOM.addEventListener('click', (e)=>{
                                                            input.disabled = false;
                                                            input.click();
                                                        });
                                                    }
                                                    if (dataList.length == responseFilesData['docs'].length) {
                                                        window.location.href = responseData.redirect_link;
                                                    }
                                                } else {
                                                    /* NOTE: "change" event is not fired if same file has been selected twice in a row (Chrome-based only)*/
                                                    input.value = null;
                                                    throw new Error('Response data error');
                                                }
                                        })
                                        .catch(function errorHandler(error) {
                                            /* error icon */
                                            iconContainer.innerHTML = '';
                                            iconContainer.appendChild(iconError);
                                            /* error button message */
                                            if (buttonTextLabel) {
                                                buttonTextLabel.classList.remove('input__file-button-text--success');
                                                buttonTextLabel.classList.add('input__file-button-text--error');
                                            }
                                            buttonTextLabel.innerText = l10n.fileuploadErrorMessage;
                                            /* error input border */
                                            label.classList.add('input__file-button--error');
                                            if (input.parentElement.parentElement.querySelector('.slide-block__headline')) {
                                                let slideHead = input.parentElement.parentElement.querySelector('.slide-block__headline');
                                                slideHead.classList.remove('slide-block__headline--success');
                                                if (slideHead.classList.contains('slide-block__headline--collapsed')) slideHead.click();
                                            }
                                            console.log('Request failed: %o', error)
                                        })
                                        .finally(()=>{
                                            let fileIcon = label.querySelector('.input__file-icon') || null;
                                            if (fileIcon) {
                                                let fileIconArrow = fileIcon.querySelector('.input__file-icon__arrow') || null;
                                                if (fileIconArrow && fileIconArrow.classList.contains('input__file-icon__arrow--active')) fileIconArrow.classList.remove('input__file-icon__arrow--active');
                                            }
                                        });

                                } else {
                                    if (input.dataset['success'] && input.dataset.success == 1) {
                                        if (!checkIfFileTypeValid(input.files[0].type)){
                                            input.value = null;
                                            buttonTextLabel.innerText = l10n.filetypeWarnMessage;
                                        } else if (!checkIfFileSizeValid(input.files[0].size)){
                                            input.value = null;
                                            buttonTextLabel.innerText = l10n.filesizeWarnMessage;
                                        }
                                    } else {}
                                }

                            } else {
                                if (input.dataset['success'] && input.dataset.success == 1) input.disabled = true;
                                buttonTextLabel.innerText = l10n.fileChoose + ' ' + input.dataset.name;
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
            } else if(errorData && errorData.redirect.length > 0) {
                window.location.href = errorData.redirect;
            }
        });
    }
});