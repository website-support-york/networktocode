jQuery(document).ready(function ($) {
    let ajaxRequest = null;
    let debounceTimer;
    $('#apps-search-input').on('keyup', function () {
        let searchTerm = $(this).val().trim();
        // Clear previous debounce timer
        clearTimeout(debounceTimer);

        // If input is empty → clear results & stop
        if (searchTerm.length === 0) {
            $('.apps-results').html('');
            return;
        }

        // Minimum characters before search
        if (searchTerm.length < 2) {
            return;
        }

        // Debounce (wait 400ms after typing stops)
        debounceTimer = setTimeout(function () {

            // Abort previous request if still running
            if (ajaxRequest !== null) {
                ajaxRequest.abort();
            }

            ajaxRequest = $.ajax({
                url: ajaxurl.ajaxurl,
                type: 'POST',
                data: {
                    action: 'apps_search',
                    search: searchTerm,
                    //nonce: apps_ajax_obj.nonce
                },
                beforeSend: function () {
                    $('.apps-results').html('<p>Searching...</p>');
                },
                success: function (response) {
                    $('.apps-results').html(response);
                },
                error: function (xhr, status) {
                    if (status !== 'abort') {
                        $('.apps-results').html('<p>Something went wrong.</p>');
                    }
                }
            });
        }, 400); // adjust delay if needed (300–500ms ideal)
    });
});


jQuery(document).ready(function ($) {

    let ajaxRequest = null;

    $('#search-app').on('submit', function (e) {

        e.preventDefault(); // stop normal form submit

        let searchTerm = $('#apps-search-input').val().trim();

        // ✅ Empty validation
        if (searchTerm.length === 0) {
            $('.apps-results').html('<p>Please enter a search term.</p>');
            return;
        }

        // ✅ Minimum 2 characters validation
        if (searchTerm.length < 2) {
            $('.apps-results').html('<p>Please enter at least 2 characters.</p>');
            return;
        }

        // Abort previous request
        if (ajaxRequest !== null) {
            ajaxRequest.abort();
        }

        ajaxRequest = $.ajax({
            url: apps_ajax_obj.ajax_url,
            type: 'POST',
            data: {
                action: 'apps_search',
                search: searchTerm,
                //nonce: apps_ajax_obj.nonce
            },
            beforeSend: function () {
                $('.apps-results').html('<p>Searching...</p>');
            },
            success: function (response) {
                $('.apps-results').html(response);
            },
            error: function () {
                $('.apps-results').html('<p>Something went wrong.</p>');
            }
        });

    });

});