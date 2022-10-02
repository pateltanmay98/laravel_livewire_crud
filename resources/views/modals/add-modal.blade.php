<div class="modal fade addStudent" wire:ignore.self tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 <form wire:submit.prevent="save">
                     <div class="form-group">
                         <label for="">Courses</label>
                         <select class="form-control" wire:model="course">
                               <option value="">No selected</option>
                               @foreach ($courses as $course)
                                   <option value="{{ $student->id }}">{{ $course->name }}</option>
                               @endforeach
                               
                         </select>
                         <span class="text-danger"> @error('student') {{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                         <label for="">Student Name</label>
                         <input type="text" class="form-control" placeholder="Student name" wire:model="student_name">
                         <span class="text-danger"> @error('student_name') {{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                         <label for="">Email</label>
                         <input type="text" class="form-control" placeholder="Email" wire:model="email">
                         <span class="text-danger"> @error('Email') {{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                         <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary btn-sm">Save</button>
                     </div>
                 </form>
                
            </div>
        </div>
    </div>
</div>