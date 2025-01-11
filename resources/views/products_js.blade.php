    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <script>
        //    add products not reloated page

        $(document).ready(function() {
                $(document).on('click', '.add_product', function(e) {
                    e.preventDefault();
                    let name = $('#name').val();
                    let price = $('#price').val();
                    $.ajax({
                        url: "{{ route('add.product') }}",
                        method: "POST",
                        data: {
                            name: name,
                            price: price
                        },

                        success: function(data) {
                            console.log(data);
                            $('#addModal').modal('hide');
                            $('#addProduct')[0].reset();
                            $('body').removeClass('modal-open');
                            $('.modal-backdrop').remove();
                            // add data without reload page

                            $('.table').load(location.href + ' .table');


                        },



                        error: function(err) {
                            console.log(err)

                        }

                    });

                });
                // show products in value modal

                $(document).on('click', '.update_product_form', function(e) {
                    let id = $(this).data('id');
                    let name = $(this).data('name');
                    let price = $(this).data('price');

                    $('#up_id').val(id);
                    $('#up_name').val(name);
                    $('#up_price').val(price);
                });

                // update crud
                $('document').on('click', '.update_product', function(e) {
                    e.preventDefault();
                    let id = $('#up_id').val();
                    let name = $('#up_name').val();
                    let price = $('#up_price').val();
                    $.ajax({
                        url: "{{ route('update.product') }}",
                        method: "POST",
                        data: {
                            id: id,
                            name: name,
                            price: price
                        },
                        success: function(data) {
                            $('#updateModal').modal('hide');
                            $('#updateProduct')[0].reset();
                            $('body').removeClass('modal-open');
                            $('.modal-backdrop').remove();
                            $('.table').load(location.href + ' .table');
                        },

                        error: function(err) {
                            console.log(err)

                        },

                    });

                });
                // delete crud

                $(document).on('click', '.delete_product', function(e) {
                    e.preventDefault();
                    let id = $(this).data('id');
                    $.ajax({
                        url: "{{ route('delete.product') }}",
                        method: "POST",
                        data: {
                            id: id
                        },
                        success: function(data) {
                            $('.table').load(location.href + ' .table');
                        },
                        error: function(err) {
                            console.log(err)
                        },


                    });
                });
            },

        );
    </script>
