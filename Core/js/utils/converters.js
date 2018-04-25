const converted = {
    "true": true,
    "false": false,
    "null": null
};

export const convertStringToValue = str => {
    try {
        if (converted.hasOwnProperty(str))
            return converted[str];

        if (str === +str + '')
            return +str;

        if (str.indexOf("\{") === 0)
            return JSON.parse(str);

        return str;
    } catch (err) {                
        return str;
    }
};
        