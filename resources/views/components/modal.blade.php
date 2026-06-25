<div class="modal-backdrop" id="{{ $id }}" role="dialog" aria-modal="true" aria-labelledby="{{ $id }}-title">
    <div class="modal-container">

        {{-- Header --}}
        <div class="modal-header">
            <div class="modal-header-left">
                <span class="material-symbols-rounded">{{ $icon }}</span>
                <h2 id="{{ $id }}-title">{{ $title }}</h2>
            </div>
            <button class="modal-close" data-modal-close="{{ $id }}" aria-label="Close modal">
                <span class="material-symbols-rounded">close</span>
            </button>
        </div>

        {{-- Body --}}
        <div class="modal-body">
            {{ $slot }}
        </div>

        {{-- Footer --}}
        <div class="modal-footer">
            <button type="button" class="btn-cancel-modal" data-modal-close="{{ $id }}">Cancel</button>
            <button type="submit" form="{{ $formId }}" class="btn-submit-modal">
                <span class="material-symbols-rounded">{{ $submitIcon }}</span>
                {{ $submitLabel }}
            </button>
        </div>

    </div>
</div>
