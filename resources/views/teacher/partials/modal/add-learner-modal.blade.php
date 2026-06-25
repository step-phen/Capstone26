<x-modal id="addLearnerModal"
         title="Add New Learner"
         icon="person_add"
         form-id="addLearnerForm"
         submit-label="Add Learner"
         submit-icon="person_add">

    <form action="{{ route('learners.store') }}" method="POST" id="addLearnerForm">
        @csrf

        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter full name"
                   value="{{ old('name') }}" required />
            @error('name')
                <span class="input-error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" placeholder="Age"
                       min="1" max="100" value="{{ old('age') }}" required />
                @error('age')
                    <span class="input-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option value="" disabled {{ old('gender') ? '' : 'selected' }}>Select</option>
                    <option value="Male"   {{ old('gender') == 'Male'   ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                </select>
                @error('gender')
                    <span class="input-error">{{ $message }}</span>
                @enderror
            </div>
        </div>

    </form>

</x-modal>
