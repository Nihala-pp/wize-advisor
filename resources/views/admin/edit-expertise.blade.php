<div class="card card-plain">
    <div class="card-body">
            <div class="input-group input-group-dynamic is-filled">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input class="multisteps-form__input form-control" type="text" name="expertise" onfocus="focused(this)"
                    onfocusout="defocused(this)" value="{ {$data->name }}" required>
            </div>
            <div class="input-group input-group-static my-3">
                <label class="form-label"></label>
                <input type="file" name="profile_pic" class="form-control" required>
            </div>
    </div>
</div>