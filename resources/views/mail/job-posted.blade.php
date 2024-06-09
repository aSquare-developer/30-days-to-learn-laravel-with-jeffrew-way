<h1>{{ $job->title }}</h1>

<p>Your new Job is posted succesfully!</p>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">View You Job Listing</a>
</p>