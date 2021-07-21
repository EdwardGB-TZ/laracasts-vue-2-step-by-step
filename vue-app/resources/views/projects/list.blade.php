@foreach ($projects as $project)
    <div class="card mb-5">
        <header class="card-header">
            <p class="card-header-title">
                {{ $project->name }}
            </p>
        </header>
    </div>
@endforeach