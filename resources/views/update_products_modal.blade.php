{{-- update data and form  --}}
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updateModalLabel">Update Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action=" {{ route('update.product') }} " method="POST" id="updateProduct">
                    @csrf
                    <div class="form-group m-2">
                        <label for="up_name">Product Name</label>
                        <input type="text" name="up_name" id="up_name" class="form-control"
                            placeholder="Enter Product Name">
                    </div>

                    <div class="form-group m-2">
                        <label for="up_price">Product Price</label>
                        <input type="text" name="up_price" id="up_price" class="form-control"
                            placeholder="Enter Product Price">
                    </div>
                    <input type="hidden" name="up_id" id="up_id">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary  update_product" id="updateProduct">Update
                    product</button>
            </div>
        </div>
    </div>
</div>
