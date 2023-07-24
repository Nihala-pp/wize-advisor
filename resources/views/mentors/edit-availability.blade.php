<div class="card card-plain">
    <div class="card-body">
        <form method="POST" action="{{ route('mentor.schedule.save') }}" role="form text-left">
            @csrf
            <input type="hidden" name="row_id" value="">
            <div class="input-group">
                <label class="form-label"></label>
                <select class="form-control" name="time_zone" required>
                    <option value="">Choose your time zones</option>
                    @foreach($timezones as $timezone => $value)
                    <option value="{{ $value }}">{{ $timezone }}</option>
                    @endforeach
                </select>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group input-group-static my-3">
                        <label>Date</label>
                        <input type="text" name="schedule[0][date]" class="form-control date" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group input-group-static my-3">
                        <label>Start Time</label>
                        <input type="time" name="schedule[0][start_time]" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group input-group-static my-3">
                        <label>End Time</label>
                        <input type="time" name="schedule[0][end_time]" class="form-control" required>
                    </div>
                </div>
            </div>
    </div>
</div>