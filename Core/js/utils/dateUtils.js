export const getNumberOfDaysInMonth = (anyDateInMonth) => new Date(anyDateInMonth.getYear(), anyDateInMonth.getMonth() + 1, 0).getDate();

export const getDaysInMonth = (anyDateInMonth) => {
    const year = anyDateInMonth.getFullYear();
    const month = anyDateInMonth.getMonth();

    return Array(getNumberOfDaysInMonth(anyDateInMonth)).fill().map((v, i) => new Date(year, month, i + 1));
}


export const convertToUTC = dateString => {
    const date = new Date(dateString);
    return new Date(date.getTime() + date.getTimezoneOffset() * 60000);
}