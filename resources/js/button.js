$(document).ready(function () {
    $('button[data-quantity]').click(function () {
        var input = $('#quantity');
        var quantity = parseInt(input.val());
        var step = parseInt(input.attr('step'));
        var increment = parseInt($(this).data('quantity'));

        quantity += increment * step;
        input.val(quantity);
    });
});