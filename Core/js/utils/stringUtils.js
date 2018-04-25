export { format } from './stringFormatter';

export const camelCase = name => name.replace(/-([a-z])/g, function (g) { return g[1].toUpperCase(); })
                              .replace(/^(.)/, function ($1) { return $1.toLowerCase(); });

export const formatCurrency = value => value == null ? '' : value.toLocaleString('en-GB').split('.')[0];

export const formatNegativeCurrencyWithPoundSign = value => value == null ? '' : value.toLocaleString('en-GB').split('.')[0].replace('-', '&#8209;&pound;'); //non-breaking hyphen