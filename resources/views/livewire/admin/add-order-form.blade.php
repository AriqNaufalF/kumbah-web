<div>

    <div class="mt-4">
        <h2 class="text-center fw-bold text-primary">Add Order</h2>
    </div>
    <div class="border rounded p-3">
        <div class="form">
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="costumername" class="form-label">Costumer Name</label>
                        <input type="text" class="form-control" id="costumername" placeholder="Full Name">
                    </div>
                    <div class="mb-3">
                        <label for="phonenumber" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phonenumber" placeholder="Costumer Phone">
                    </div>
                    <div class="mb-3">
                        <label for="costumeraddress" class="form-label">Address</label>
                        <textarea class="form-control" id="costumeraddress" rows="3"></textarea>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="serivelist" class="form-label">Service</label>
                        <select id="serivelist" class="form-select">
                          <option>Serive 1</option>
                          <option>Serive 2</option>
                          <option>Serive 3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="unit" class="form-label">Unit</label>
                        <input type="text" class="form-control" id="unit" placeholder="Kg">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date of Entry</label>
                        <input type="date" class="form-control" id="date" placeholder="DD/MM/YY">
                    </div>
                    <div class="mb-3">
                        <label for="costumernote" class="form-label">Note</label>
                        <textarea class="form-control" id="costumernote" rows="3"></textarea>
                    </div> 
                    <div class="d-flex justify-content-end g-4">
                        <button class="btn btn-outline-secondary me-1">Cancel
                        </button>
                        <button class="btn btn-info text-light">Add Order
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
