<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <form action=" {{ route('add.product') }} " method="POST" id="addProduct">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addModalLabel">Add Product</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group m-2">
                        <label for="name">Product Name</label>
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="Enter Product Name">
                    </div>

                    <div class="form-group m-2">
                        <label for="price">Product Price</label>
                        <input type="text" name="price" id="price" class="form-control"
                            placeholder="Enter Product Price">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary  add_product" id="saveProduct">Save product</button>
                </div>
            </div>
        </div>
    </form>
</div>
