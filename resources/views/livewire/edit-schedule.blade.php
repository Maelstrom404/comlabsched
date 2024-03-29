<div>
    <div class="p-5 bg-white dark:bg-gray-700">

        <div class="flex w-full gap-2">
            <div class="flex flex-col mb-3 grow">
                <label class="mb-2">Title</label>
                <input type="text" wire:model="title" id="title"
                    class=" rounded p-2 shadow-inner text-black bg-smokeywhite ">
                @error('title')
                    <p class="error text-red-500">{{ $message }}</p>
                @enderror

            </div>

            <div class="flex flex-col mb-3 grow">
                <label class="mb-2">User ID</label>
                <select required wire:model="user_id" id="user_id"
                    class="rounded p-2 shadow-inner text-black bg-smokeywhite">
                    <option value="" disabled selected hidden>Enter User ID</option>
                    @foreach ($schedules as $schedule)
                        <option value="{{ $schedule['id'] }}">{{ $schedule['firstname'] . ' ' . $schedule['lastname'] }}
                        </option>
                    @endforeach
                </select>
                @error('user_id')
                    <p class="error text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="flex flex-col mb-3 grow">
            <label class="mb-2">Date</label>
            <input type="date" wire:model="date" id="date"
                class=" rounded p-2 shadow-inner text-black bg-smokeywhite ">
            @error('date')
                <span class="text-red-400 text-sm py-1">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex w-full gap-2">
            <div class="flex flex-col mb-3 grow">
                <label class="mb-2">Start Time</label>
                <input type="time" class=" rounded p-2 shadow-inner text-black  bg-smokeywhite"
                    wire:model="start_time">
                @error('start_time')
                    <span class="text-red-400 text-sm py-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col mb-3 grow">
                <label class="mb-2">End Time</label>
                <input type="time" class=" rounded p-2 shadow-inner text-black bg-smokeywhite" wire:model="end_time">
                @error('end_time')
                    <span class="text-red-400 text-sm py-1">{{ $message }}</span>
                @enderror

            </div>
        </div>

        <div class="flex w-full gap-2">
            <div class="flex flex-col mb-3 grow">
                <label class="mb-2">Recurrence</label>
                <select class=" rounded p-2 shadow-inner text-black bg-smokeywhite" wire:model="recurrence">
                    <option hidden value="">Select Recurrence</option>
                    <option value="none">None</option>
                    <option value="daily">Daily</option>
                    <option value="weekly">Weekly</option>
                </select>
                @error('recurrence')
                    <span class="text-red-400 text-sm py-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col mb-3 grow">
                <label class="mb-2">Recurrence Value</label>
                <input type="text" class=" rounded p-2 shadow-inner text-black bg-smokeywhite"
                    wire:model="recurrence_value">
                @error('recurrence_value')
                    <span class="text-red-400 text-sm py-1">{{ $message }}</span>
                @enderror

            </div>
        </div>

        <div class="flex w-full gap-2">
            <div class="flex flex-col mb-3 grow">
                <label class="mb-2">School Year</label>
                <select class=" rounded p-2 shadow-inner text-black bg-smokeywhite" wire:model="school_year">
                    <option hidden value="">Select Year</option>
                    <option value="2022-2023">2022-2023</option>
                </select>
                @error('school_year')
                    <span class="text-red-400 text-sm py-1">{{ $message }}</span>
                @enderror

            </div>

            <div class="flex flex-col mb-3 grow">
                <label class="mb-2">Semester</label>
                <select class=" rounded p-2 shadow-inner text-black bg-smokeywhite" wire:model="semester">
                    <option hidden value="">Select Semester</option>
                    <option value="1st Semester">1st Semester</option>
                    <option value="2nd Semester">2nd Semester</option>
                </select>
                @error('semester')
                    <span class="text-red-400 text-sm py-1">{{ $message }}</span>
                @enderror

            </div>
        </div>
        <div class="flex flex-col mb-3 grow">
            <label class="mb-2">Lab</label>
            <select class=" rounded p-2 shadow-inner text-black bg-smokeywhite" wire:model="laboratory">
                <option hidden value="">Select Lab</option>
                <option value="lab1" class="bg-smokeywhite">Lab 1</option>
                <option value="lab2" class="bg-smokeywhite">Lab 2</option>
            </select>
            @error('laboratory')
                <span class="text-red-400 text-sm py-1">{{ $message }}</span>
            @enderror

        </div>

        <div class="d-flex justify-content-between">
            <div class="flex items-center justify-center">
                <div class="w-full my-2 space-x-3 flex justify-between px-7">
                    <button wire:click="closeModal" id="closeRefresh"
                        class="rounded-lg border border-blue-700 w-20 h-8">Close</button>
                
                    <div>
                        <button id="addRefresh" type="submit" wire:click="deleteSchedule" class="btn btn-danger closeModal bg-red-500 w-20 h-8 text-white rounded-lg !important">Delete</button>
                    
                        <button id="addRefresh" type="submit" wire:click="editSched" class="btn btn-success closeModal bg-blue-500 w-20 h-8 text-white rounded-lg !important">Submit</button></br>

                    </div>

                    
                    
                </div>
            </div>


        </div>


    </div>
</div>
<script>
    var closeModals = document.querySelectorAll('.closeModal');

    closeModals.forEach(function(closeModal) {
        closeModal.addEventListener('click', function() {
            setTimeout(function() {
                location.reload();
            }, 15); // Delay of 3 seconds before refreshing
        });
    });
</script>
