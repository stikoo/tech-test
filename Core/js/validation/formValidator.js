import $ from 'jquery';
import { camelCase } from 'utils/stringUtils';

export default class FormValidator {
    static defaults(){
        return {
            errorMessageCssClass: 'search-box-group__error-message',
            fieldGroupSelector: '.search-box-group__field',
        };
    }

    constructor($form, props = {}){
        this.props = Object.assign({}, FormValidator.defaults(), props);
        this.$form = $form;
    }

    createErrorMessage(text){
        return $('<div>').addClass(this.props.errorMessageCssClass).html(text);
    }

    getDefaultOptions() {
        return { showFirstErrorOnly: false };
    }

    loadValidationMessages() {
        var rules = {};

        const getRuleNameAlias = name => name === 'required' ? 'presence' : name;

        this.$form.find("input[name], select[name]").each((index, input) => {
            [...input.attributes].filter(a => /^data-msg-/.test(a.name)).forEach(a => {
                const attr = a.name.replace('data-msg-', '');
                const ruleName = getRuleNameAlias(camelCase(attr));
                const message = a.value;
                rules[input.name] = rules[input.name] || {};
                rules[input.name][ruleName] = { message };
            });
        });

        return rules;
    }

    clearValidationErrors() {
        this.showValidationResults(null);
    }



    showValidationResults(errors, options = this.getDefaultOptions()){
        var self = this;

        let errorCount = 0;

        const errorsShown = [];

        this.$form.find("input[name], select[name]").each((index, input) => {           
            const isInvalid = errors && errors[input.name];

            const $fieldGroup = $(input).closest(self.props.fieldGroupSelector);
            const $errorMessages = $fieldGroup.parent().find('.' + self.props.errorMessageCssClass);

            const showError = isInvalid && !input.disabled && (errorCount === 0 || !options.showFirstErrorOnly);
            
            if(showError) {
                errorCount++;

                const fieldErrors = errors[input.name];

                if(fieldErrors.length === 1 && $errorMessages.length === 1) {                    
                    $errorMessages.html(fieldErrors[0]).show();
                    errorsShown.push(fieldErrors[0]);                    
                } else {
                    $errorMessages.remove();
                    fieldErrors.forEach(msg => {
                        const $errorMessage = self.createErrorMessage(msg);
                        $fieldGroup.after($errorMessage);
                        $errorMessage.show();
                        errorsShown.push(msg);                        
                    });
                }                
            } else if($errorMessages.length > 0) {
                $errorMessages.remove();              
            }
        });  
        return errorsShown; 
    }
}