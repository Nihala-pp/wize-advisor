<div class="card card-plain">
    <div class="card-body">
        <form method="POST" action="{{ route('admin.mentors.expertise.save') }}" enctype="multipart/form-data">
            @csrf
            <div class="input-group input-group-dynamic is-filled">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input class="multisteps-form__input form-control" type="text" name="expertise" onfocus="focused(this)"
                    onfocusout="defocused(this)" value="{ {$data->name }}" required>
            </div>
            <div class="input-group input-group-static my-3">
                <label class="form-label"></label>
                <input type="file" name="profile_pic" class="form-control" required>
            </div>
            <button type="submit" name="submitform" id="submitform" class="btn btn-primary"><i
                    class="fa-solid mx-1 fa-floppy-disk"></i>{{ __('Save') }}</button>
        </form>
    </div>
</div>