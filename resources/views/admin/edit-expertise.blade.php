<div class="row" id="row">
    <form method="POST" action="{{ route('admin.mentors.expertise.save') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="row_id" value="{{ $data->id ??  '' }}">
        <div class="input-group input-group-dynamic is-filled">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input class="multisteps-form__input form-control" type="text" value="{{ $data->name ?? '' }}"
                onfocus="focused(this)" onfocusout="defocused(this)" required>
        </div>
        <div class="input-group input-group-static my-3">
            <label class="form-label">Profile Pic</label>
            <input type="file" name="profile_pic" class="form-control" required>
        </div>
        <button type="submit" name="submitform" id="submitform" class="btn btn-primary"><i
                class="fa-solid mx-1 fa-floppy-disk"></i>{{ __('Save') }}</button>
    </form>
</div>