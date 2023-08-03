<div class="card card-plain">
    <div class="card-body">
            <input type="hidden" name="row_id" value="{{ $availability->id }}">
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label">Timezone</label>
                    <select class="form-control" name="time_zone" required>
                        <option value="">Choose your time zones</option>
                        @foreach($timezones as $timezone => $value)
                        <option value="{{ $timezone }}" {{ $timezone == $availability->time_zone ? 'selected' : '' }}>
                            {{ $timezone }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Date</label>
                    <input type="text" name="date" class="form-control date" value="{{ $availability->date }}" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Start Time</label>
                    <input type="time" name="start_time" class="form-control" value="{{ $availability->start_time }}"
                        required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">End Time</label>
                    <input type="time" name="end_time" class="form-control" value="{{ $availability->end_time }}"
                        required>
                </div>
            </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('.date').datepicker({
        multidate: true,
        format: 'dd-mm-yyyy'
    });
});
</script>