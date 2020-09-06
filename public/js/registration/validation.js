// ====================
// Javascript Polyfill
// ====================
;(function (window, document, undefined) {

    'use strict';

    // Make sure that ValidityState is supported in full (all features)
    var supported = function () {
        var input = document.createElement('input');
        return ('validity' in input && 'badInput' in input.validity && 'patternMismatch' in input.validity && 'rangeOverflow' in input.validity && 'rangeUnderflow' in input.validity && 'stepMismatch' in input.validity && 'tooLong' in input.validity && 'tooShort' in input.validity && 'typeMismatch' in input.validity && 'valid' in input.validity && 'valueMissing' in input.validity);
    };

    /**
     * Generate the field validity object
     * @param  {Node]} field The field to validate
     * @return {Object}      The validity object
     */
    var getValidityState = function (field) {

        // Variables
        var type = field.getAttribute('type') || input.nodeName.toLowerCase();
        var isNum = type === 'number' || type === 'range';
        var length = field.value.length;
        var valid = true;

        // Run validity checks
        var checkValidity = {
            badInput: (isNum && length > 0 && !/[-+]?[0-9]/.test(field.value)), // value of a number field is not a number
            patternMismatch: (field.hasAttribute('pattern') && length > 0 && new RegExp(field.getAttribute('pattern')).test(field.value) === false), // value does not conform to the pattern
            rangeOverflow: (field.hasAttribute('max') && isNum && field.value > 1 && parseInt(field.value, 10) > parseInt(field.getAttribute('max'), 10)), // value of a number field is higher than the max attribute
            rangeUnderflow: (field.hasAttribute('min') && isNum && field.value > 1 && parseInt(field.value, 10) < parseInt(field.getAttribute('min'), 10)), // value of a number field is lower than the min attribute
            stepMismatch: (field.hasAttribute('step') && field.getAttribute('step') !== 'any' && isNum && Number(field.value) % parseFloat(field.getAttribute('step')) !== 0), // value of a number field does not conform to the stepattribute
            tooLong: (field.hasAttribute('maxLength') && field.getAttribute('maxLength') > 0 && length > parseInt(field.getAttribute('maxLength'), 10)), // the user has edited a too-long value in a field with maxlength
            tooShort: (field.hasAttribute('minLength') && field.getAttribute('minLength') > 0 && length > 0 && length < parseInt(field.getAttribute('minLength'), 10)), // the user has edited a too-short value in a field with minlength
            typeMismatch: (length > 0 && ((type === 'email' && !/^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*$/.test(field.value)) || (type === 'url' && !/^(?:(?:https?|HTTPS?|ftp|FTP):\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-zA-Z\u00a1-\uffff0-9]-*)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]-*)*[a-zA-Z\u00a1-\uffff0-9]+)*)(?::\d{2,5})?(?:[\/?#]\S*)?$/.test(field.value)))), // value of a email or URL field is not an email address or URL
            valueMissing: (field.hasAttribute('required') && (((type === 'checkbox' || type === 'radio') && !field.checked) || (type === 'select' && field.options[field.selectedIndex].value < 1) || (type !=='checkbox' && type !== 'radio' && type !=='select' && length < 1))) // required field without a value
        };

        // Check if any errors
        for (var key in checkValidity) {
            if (checkValidity.hasOwnProperty(key)) {
                // If there's an error, change valid value
                if (checkValidity[key]) {
                    valid = false;
                    break;
                }
            }
        }

        // Add valid property to validity object
        checkValidity.valid = valid;

        // Return object
        return checkValidity;

    };

    // If the full set of ValidityState features aren't supported, polyfill
    if (!supported()) {
        Object.defineProperty(HTMLInputElement.prototype, 'validity', {
            get: function ValidityState() {
                return getValidityState(this);
            },
            configurable: true,
        });
    }

    })(window, document);


// =====================================
// Functions and Variables
// =====================================

    // 0. Add the novalidate attribute when the JS loads
    // -------------------------------------------------
    var forms = document.querySelectorAll('.validate');
    for (var i = 0; i < forms.length; i++) {
        forms[i].setAttribute('novalidate', true);
    }

    // 1. Validate the field
    // ---------------------
    var hasError = function (field) {

        // Don't validate submits, buttons, file and reset inputs, and disabled fields
        if (field.disabled || field.type === 'file' || field.type === 'reset' || field.type === 'submit' || field.type === 'button') return;

        // Get validity
        var validity = field.validity;

        // If valid, return null
        if (validity.valid) return;

        // If field is required and empty
        if (validity.valueMissing) return 'Please fill out this field.';

        // If not the right type
        if (validity.typeMismatch) {

            // Email
            if (field.type === 'email') return 'Please enter an email address.';

            // URL
            if (field.type === 'url') return 'Please enter a URL.';

        }

        // If too short
        if (validity.tooShort) return 'Please lengthen this text to ' + field.getAttribute('minLength') + ' characters or more. You are currently using ' + field.value.length + ' characters.';

        // If too long
        if (validity.tooLong) return 'Please shorten this text to no more than ' + field.getAttribute('maxLength') + ' characters. You are currently using ' + field.value.length + ' characters.';

        // If number input isn't a number
        if (validity.badInput) return 'Please enter a number.';

        // If a number value doesn't match the step interval
        if (validity.stepMismatch) return 'Please select a valid value.';

        // If a number field is over the max
        if (validity.rangeOverflow) return 'Please select a value that is no more than ' + field.getAttribute('max') + '.';

        // If a number field is below the min
        if (validity.rangeUnderflow) return 'Please select a value that is no less than ' + field.getAttribute('min') + '.';
    
        // If pattern doesn't match
        if (validity.patternMismatch) {

            // If pattern info is included, return custom error
            if (field.hasAttribute('title')) return field.getAttribute('title');

            // Otherwise, generic error
            return 'Please match the requested format.';

        }

        // If all else fails, return a generic catchall error
        return 'The value you entered for this field is invalid.';

    };


    // 2. Show the error message
    // -------------------------
    var showError = function(field, error){

        // Add error class to field
        field.classList.add("error");

        // If the field is a radio button and part of a group, error all and get the last item in the group
        if (field.type === 'radio' && field.name){
            var group = document.getElementsByName(field.name);
            if (group.length > 0){
                for (var i = 0; i < group.length; i++){
                    // Only checks the field on the current form
                    if (group[i].form !== field.name) continue;
                    group[i].classList.add('error');
                }
                field = group[group.length - 1];
            }
        }

        // Get field id or name
        var id = field.id || field.name;
        if (!id) return;

        // Check if error message field already exists
        // If not, create one
        var message = field.form.querySelector(`.error-message#error-for-${id}`);
        if(!message){
            message = document.createElement('div');
            message.className = 'error-message';
            message.id = `error-for-${id}`;

            // If the field is a radio button or checkbox, insert error after the label
            var label;
            if (field.type === 'radio' || field.type === 'checkbox') {
                label = field.form.querySelector(`label[for=${id}]`) || field.parentNode;
                if (label) label.parentNode.insertBefore( message, label.lastSibling );
            }
            
            if (!label) field.parentNode.insertBefore( message, field.lastSibling );
        }

        // Add ARIA role to the field
        field.setAttribute('aria-describedby', `error-for-${id}`);

        // Update error message
        message.innerHTML = error;

        // Show error message
        message.style.display = 'block';
        message.style.visibility = 'visible';
    };


    // 3. Remove Error Message
    // ------------------------
    var removeError = function(field){
        
        // Remove error class to the field
        field.classList.remove("error");

        // Remove ARIA role from the field
        field.removeAttribute('aria-describedby');

        // If the field is radio button and a part of a group, remove error from all and get the last item from the group
        if (field.type === 'radio' && field.name){
            var group = document.getElementsByName(field.name);
            if (group.length > 0){
                for (var i = 0; i < group.length - 1; i++) {
                    // Only check fields in current form
                    if (group[i].form !== field.name) continue;
                    group[i].classList.remove('error');
                }
                field = group[group.length - 1];
            }

        }

        // Get field id or name
        var id = field.id || field.name;
        if (!id) return;

        // Check if error message is in DOM
        var message = field.form.querySelector(`.error-message#error-for-${id}`);
        if(!message) return;

        // If so, hide it
        message.innerHTML = '';
        message.style.display = 'none';
        message.style.visibility = 'hidden';
    }


// ========================
// ALGORITHMS
// ========================

    // Listen to all blur events
    // -------------------------
    document.addEventListener('blur', function (event) {

        // Only run if the field is in a form to be validated
        if (!event.target.form.classList.contains('validate')) return;

        // Validate the field
        var error = hasError(event.target);

        // If there's an error, show it
        if (error) return showError(event.target, error);
        removeError(event.target);

    }, true);


    // Check all fields on submit
    // --------------------------
    document.addEventListener('submit', function (event) {

        // Only run on forms flagged for validation
        if (!event.target.classList.contains('validate')) return;

        // Get all of the form elements
        var fields = event.target.elements;

        // Validate each field
        // Store the first field with an error to a variable so we can bring it into focus later
        var error, hasErrors;
        for (var i = 0; i < fields.length; i++) {
            error = hasError(fields[i]);
            if (error) {
                showError(fields[i], error);
                if (!hasErrors) {
                    hasErrors = fields[i];
                }
            }
        }

        // If there are errrors, don't submit form and focus on first element with error
        if (hasErrors) {
            error = dictionary(hasErrors.getAttribute("name"));
            event.preventDefault();
            hasErrors.focus();
            alert(`You have an error on this field: ${error}`);
        }

        // Otherwise, let the form submit normally
        // You could also bolt in an Ajax form submit process here

    }, false);