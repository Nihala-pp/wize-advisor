<div class="card card-plain">
    <div class="card-body">
        <input type="hidden" name="row_id" value="">
        <div class="row">
            <div class="col-md-6">
                <div class="input-group input-group-static mb-3">
                    <label>Company </label>
                    <input type="text" name="company" class="form-control" value="{{ $experience->company_name ?? '' }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group input-group-static mb-3">
                    <label>Designation</label>
                    <input type="text" name="designation" class="form-control" value="{{ $experience->position ?? '' }}">
                </div>
            </div>
            <div class="col-md-12">
                <div class="input-group input-group-static mb-3">
                    <label>Job Description</label>
                    <textarea class="form-control" name="description" rows="5" spellcheck="false">{{ $experience->description ?? '' }}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group input-group-static mb-3">
                    <label>Start Date</label>
                    <input type="date" name="start_date" class="form-control datevalue" value="{{ $experience->start_date ?? '' }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group input-group-static mb-3">
                    <label>End Date</label>
                    <input type="date" name="end_date" class="form-control datevalue" value="{{ $experience->end_date ?? '' }}">
                </div>
            </div>
            <div class="col-md-12">
                <div class="input-group input-group-static mb-3">
                    <div class="form-check">
                        <input type="checkbox" name="current" class="form-check-input" id="customCheckDisabled" @if(empty($experience->end_date)) checked @endif>
                        <label class="custom-control-label" for="customCheckDisabled">Are
                            you Currently
                            working here ? (If yes please check)</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>