import $ from 'jquery';

export const transformToDotNotation = obj => {
    const result = {};
    recurse(obj, "");
    return result;
    function recurse(o, name) {
        if (Object(o) !== o)
            result[name] = o;
        else if (Array.isArray(o))
            for (let i=0; i<o.length; i++)
                recurse(o[i], name+"["+i+"]");
        else // if plain object?
            for (let p in o)
                recurse(o[p], name?name+"."+p:p);
    }
}

class AjaxRequests {
    constructor() {
        this.xhrs = [];
        this.defaults = {
            cache: false,
            dataType: 'json'
        };
        this.getDefaults = Object.assign({}, this.defaults, {
            contentType : 'url-encoded',
            traditional : true,
            type : 'GET'
        });
        this.postDefaults = Object.assign({}, this.defaults, {
            contentType: 'application/json; charset=utf-8',
            traditional: false,
            type: 'POST'
        });
    }

    request(options) {
        if (!options) {
            return;
        }

        var key = options.key ? options.key : options.url;        
        this.abort(key);

        var settings = $.extend({}, options, {
            success:(response, textStatus, jqXhr) => {
                if (options.success) {
                    var data = response && response.Data ? response.Data : response;
                    options.success(data, textStatus, jqXhr);
                }
            },
            complete: (jqXhr, textStatus) => {
                if (options.complete) {
                    options.complete(jqXhr, textStatus);
                }
            },
            error: (jqXhr, textStatus, errorThrown) => {
                if (options.error) {
                    options.error(jqXhr, textStatus, errorThrown);
                }
            }
        });

        this.xhrs[key] = $.ajax(settings);
    }

    getJson(url, options = {}) {
        const promise = new Promise((resolve, reject) => {
            const success = (data, status) => resolve(data);            const error = (xhr, textStatus, error) => reject({
                status: textStatus,
                statusCode: xhr.status,                statusDescription: error,                response: xhr.responseJSON,                xhr            });
            const mergedOptions = Object.assign({}, this.getDefaults, { url, success, error }, options);
            this.request(mergedOptions);
        });

        return promise;
    }

    postJson(url, data, options = {}) {
        const promise = new Promise((resolve, reject) => {
            const success = (data, status) => resolve(data);            const error = (xhr, textStatus, error) => reject({
                status: textStatus,
                statusCode: xhr.status,                statusDescription: error,                response: xhr.responseJSON,                xhr            });
            const mergedOptions = Object.assign({}, this.postDefaults, { url, success, error, dataType: "json", data: JSON.stringify(data) }, options);
            this.request(mergedOptions);
        });

        return promise;
    }

    get(options) {
        this.request($.extend({},this.getDefaults, options));       
    }

    post(options) {
        this.request($.extend({}, this.postDefaults, options, { data: JSON.stringify(options.data) }));
    }

    abort(key) {
        var xhr = this.xhrs[key];
        if (xhr) {
            try {
                xhr.abort();
            } catch (e) {
                // Do nothing - xhr has already finished or was aborted.
            }

            delete this.xhrs[key];
        }
    }
}

export default new AjaxRequests();