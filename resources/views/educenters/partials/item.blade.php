<a href="{{ route('educenters.show', $eduCenter->id) }}" class="card">
    <div class="border-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">{{ $categoryName }}</div>
        <div class="card-body text-primary">
            <h5 class="card-title">{{ $eduCenter->name }}</h5>

            <p class="card-text">{{ substr($eduCenter->description, 0, 100) }}</p>
        </div>
    </div>
</a>
