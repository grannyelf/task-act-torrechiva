<div>
    @if (session()->has('success'))
        <div class="flex justify-center">
            <div class="p-3 w-80 mb-5 rounded-4xl bg-black text-center text-green-500">
                <h1>{{ session('success') }}</h1>
            </div>
        </div>
    @endif
    <!-- Table Section -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="bg-layer border border-layer-line rounded-xl shadow-2xs overflow-hidden">
                        <!-- Header -->
                        <div
                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-table-line">
                            <div>
                                <h2 class="text-xl font-semibold text-foreground">
                                    Teams
                                </h2>
                                <p class="text-sm text-muted-foreground-2">
                                    Create teams, edit, download and more.
                                </p>
                            </div>

                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                        <table class="min-w-full divide-y divide-table-line">
                            <thead class="bg-muted">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start">
                                        <a class="group inline-flex items-center gap-x-2 text-xs font-semibold uppercase text-foreground hover:text-muted-foreground-1 focus:outline-hidden focus:text-muted-foreground-1"
                                            href="#">
                                            Title
                                        </a>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <a class="group inline-flex items-center gap-x-2 text-xs font-semibold uppercase text-foreground hover:text-muted-foreground-1 focus:outline-hidden focus:text-muted-foreground-1"
                                            href="#">
                                            Description
                                        </a>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <a class="group inline-flex items-center gap-x-2 text-xs font-semibold uppercase text-foreground hover:text-muted-foreground-1 focus:outline-hidden focus:text-muted-foreground-1"
                                            href="#">
                                            Created At
                                        </a>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-end"></th>
                                </tr>
                            </thead>

                            @forelse ($this->tasks() as $task)
                                <livewire:pages.subcomponent.task-pages.task-list-subcomponent :task="$task" :key="$task->id" />
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-4 text-center text-muted-foreground">No tasks found</td>
                                </tr>
                            @endforelse
                        </table>
                        <!-- End Table -->

                        <!-- Footer -->
                        <div
                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-table-line">
                            <div>
                                <p class="text-sm text-muted-foreground-2">
                                    <span class="font-semibold text-foreground">{{ $this->tasks()->count() }}</span> results
                                </p>
                            </div>
                        </div>
                        <!-- End Footer -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Table Section -->
</div>
