import validate from 'validate.js';

export const addCustomRule = (name, lambda) => {
    validate.validators[name] = function(value, options, key, attributes) {
        const isValid = lambda(value);

        if (isValid)
            return null;

        return options.message;
    };
}