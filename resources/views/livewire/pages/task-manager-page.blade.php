<div>
    @if (session()->has('success'))
        <div class="flex justify-center">
            <div class="p-3 w-80 mb-5 rounded-4xl bg-black text-center text-green-500">
                <h1>{{ session('success') }}</h1>
            </div>
        </div>
    @endif
    <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-2xs dark:bg-neutral-900 dark:border-neutral-700">
        <div class="p-4 sm:p-7">
            <div class="text-center">
                <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Make A Task</h1>
            </div>

            <div class="mt-5">
                <div
                    class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600">
                </div>

                <!-- Form -->
                <form wire:submit.prevent='save'>

                    <div class="grid gap-y-4">
                        <div>
                            <label for="title" class="block text-sm mb-2 dark:text-white">Task Name</label>
                            <div class="relative">
                                <input type="text" placeholder="Task TItle" wire:model.defer="title"
                                    class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    required aria-describedby="email-error">
                                <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                </div>
                                <div class="text-red-600">
                                    @error('title')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- Form Group -->

                        <div>
                            <label for="description" class="block text-sm mb-2 dark:text-white">Task Description</label>
                            <div class="relative">
                                <input type="text" placeholder="Task Description" wire:model.defer="description"
                                    class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    required aria-describedby="email-error">
                                <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                </div>
                                <div class="text-red-600">
                                    @error('description')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- Form Group -->


                        <button type="submit"
                            class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Save</button>
                    </div>
                </form>
                <!-- End Form -->
            </div>
        </div>
    </div>
</div>