import logger from 'logger';

const log = logger.create('stringFormatter');

const isSimpleToken = token => !token.startsWith('{');

const getSimpleValue = (data, token, originalValue) => data[token] || originalValue;

const replaceValuePlaceholder = (string, value) => string.replace(/#/g, value);

const formatters = {
    number: (value, options) => {
        let result = '';
        if (options.length === 2) {
            result = value === 1 ? options[0] : options[1];
        }
        return replaceValuePlaceholder(result, value);
    },
};

const getParameterisedValue = (data, token, originalValue, args) => {
    if (!(token in data)) {
        log.warn('undefined token', token, data);
        return originalValue;
    }

    const value = data[token];
    const options = args.split('|');

    const valueType = typeof (value);

    if (valueType in formatters) {
        return formatters[valueType](value, options);
    } else {
        log.warn('No formatter for value type', valueType);
        return originalValue;
    }
};

function replacer(match, group1, group2, group3, group4) {
    const data = this;
    
    if (isSimpleToken(match)) {
        return getSimpleValue(data, group4, match);
    }

    return getParameterisedValue(data, group2, match, group3);
}

/*
    simple token: $token
    parameterised token: {$token:parameter1|parameter2|...|parameter N}
*/
const tokenRegex = /(\{(?:\$(\w+)):([^\}]+)\})|(?:\$(\w+))/g;

export function format(templateString, data) {
    if (!templateString) return templateString;
    return templateString.replace(tokenRegex, replacer.bind(data));
}