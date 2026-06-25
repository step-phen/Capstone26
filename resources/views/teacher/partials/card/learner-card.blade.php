{{-- ===== LEARNERS GRID ===== --}}
<div class="learners-grid">

    @forelse ($learners as $learner)
        @php
            $parts = explode(' ', trim($learner->name));
            $initials = strtoupper(substr($parts[0], 0, 1) . (isset($parts[1]) ? substr($parts[1], 0, 1) : ''));
        @endphp

        <div class="learner-card">
            <div class="learner-avatar">{{ $initials }}</div>

            <div class="learner-info">
                <div class="learner-name">{{ $learner->name }}</div>

                <div class="learner-details">
                    <div class="learner-detail"><strong>ID:</strong> {{ $learner->id }}</div>
                    <div class="learner-detail"><strong>Age:</strong> {{ $learner->age }}</div>
                    <div class="learner-detail"><strong>Gender:</strong> {{ $learner->gender }}</div>
                </div>

                <div class="learner-actions">
                    <x-button class="btn-view" onclick="window.location='{{ route('learners.show', $learner->id) }}'">
                        Profile
                    </x-button>
                    <x-button class="btn-progress"
                        onclick="window.location='{{ route('learners.progress', $learner->id) }}'">
                        Progress
                    </x-button>
                </div>
            </div>
        </div>

    @empty
        <div class="empty-state">
            <span class="material-symbols-rounded">person_off</span>
            <p>No learners found. Click <strong>Add Learner</strong> to get started.</p>
        </div>
    @endforelse

</div>
