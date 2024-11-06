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

            })

        })
    </script>
