<div class="card card-plain">
    <div class="card-body">
        <div class="input-group input-group-dynamic is-filled">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input class="multisteps-form__input form-control" type="text" name="voucher" onfocus="focused(this)"
                onfocusout="defocused(this)" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Type</label><br />
            <select class="select form-control" name="type" required>
                <option value="percent">
                    Percent
                </option>
                <option value="fixed">
                    Fixed
                </option>
            </select>
        </div>
        <div class="input-group input-group-dynamic is-filled">
            <label for="exampleFormControlInput1" class="form-label">Discount Value</label>
            <input class="multisteps-form__input form-control" type="number" name="discount_value"
                onfocus="focused(this)" onfocusout="defocused(this)" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Mentors</label><br />
            <select class="select form-control" name="mentor" required>
                <option value="">All</option>
                @foreach($mentors as $mentor)
                <option value="{{ $mentor->id }}">
                    {{ $mentor->name }}
                </option>
                @endforeach
            </select>
        </div>
    </div>
</div>