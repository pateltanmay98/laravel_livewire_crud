<div>
 
    <button class="btn btn-primary btn-sm mb-3" wire:click="OpenAddStudentModal()">Add New Student</button>
    <div>
       @if ($checkedStudent)
            <button class="btn btn-danger" wire:click="deleteStudents()">Selected Students ({{ count($checkedStudent) }})</button>
       @endif
    </div>
    <table class="table table-hover">
        <thead class="thead-inverse">
            <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($students as $student)
                    <tr class="{{ $this->isChecked($student->id) }}">
                    <td><input type="checkbox" value="{{ $student->id }}" wire:model="checkedStudent"></td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->course->name }}</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-danger btn-sm" wire:click="deleteConfirm({{$student->id}})">Delete</button>
                            <button class="btn btn-success btn-sm" wire:click="OpenEditCountryModal({{$student->id}})">Edit</button>
                        </div>
                    </td>
                </tr>
                @empty
                    <code>No student found!</code>
                @endforelse
                
            </tbody>
    </table>
    @if (count($students))
        {{ $students->links('livewire-pagination-links') }}
    @endif
    @include('modals.add-modal')
    @include('modals.edit-modal')
</div>