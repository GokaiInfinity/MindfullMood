<div class="card sticky">
    <div class="card-body">
        <h5 class="card-title card-text-color">Subscribe to our newsletter</h5>
        {{-- Email form, checkbox for subscription, and button --}}
        <form action="/"method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Subscribe for your newsletter</label>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn subbutton text-white w-100">SUBSCRIBE NOW</button>
            </div>
        </form>
    </div>
</div>

