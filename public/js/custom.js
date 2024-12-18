$(document).ready(function () {
    function loadTable(params = {}) {
        $.ajax({
            url: "/posts",
            method: "GET",
            data: params,
            success: function (response) {
                $('#table-container').html(response.html);
            },
            error: function () {
                alert('Error loading data.');
            }
        });
    }

    // Обробка пошуку
    $('#search-form').on('input', function (e) {
        e.preventDefault();
        const search = $('#search-input').val();
        loadTable({search});
    });

    // Обробка сортування
    $(document).on('click', '.sort', function (e) {
        e.preventDefault();
        const column = $(this).data('column');
        const direction = $(this).data('direction');
        loadTable({sort_column: column, sort_direction: direction});
    });

    // Обробка пагінації
    $(document).on('click', '.pagination-link', function (e) {
        e.preventDefault();
        const page = $(this).data('page');
        loadTable({page});
    });
});

