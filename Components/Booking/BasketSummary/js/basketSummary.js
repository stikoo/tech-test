import $ from 'jquery';

$(() => {
    $('.js-basket-desktop-trigger').on('click', function accordionHandler(e) {
        e.preventDefault();

        $(this)
            .find('.basket-summary__included-icon')
            .toggleClass('basket-summary__included-icon--rotated')
            .end()
            .next('.js-basket-breakdown-content')
            .toggleClass('basket-summary__breakdown-content--visible');
    });

    // In real life I would probably abstract the accordion functionality into a more generic,
    // reusable piece of code and also apply it to the 'Holidy Essentials' panel, however, the brief was
    // limited in scope and there's only so much you can do in an 1.5 hours :D

    // You would probably also want to have aria attribute manipulation and at least some :focus
    // states for better accessiblity.

    // I was also tempted to use slideToggle(), but the way in which the CSS was modelled looked to
    // favour CSS element state rather than jS driven state changes.
});