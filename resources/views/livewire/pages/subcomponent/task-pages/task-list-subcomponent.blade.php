<div>
    <tbody class="divide-y divide-table-line">
        <tr class="bg-layer hover:bg-layer-hover">
            <td class="size-px whitespace-nowrap">
                <a class="block relative z-10" href="#">
                    <div class="px-6 py-2">
                        <span
                            class="inline-flex items-center gap-1.5 py-1 px-2 rounded-lg text-xs font-medium bg-surface text-surface-foreground">
                            {{ $task->title }}
                        </span>
                    </div>
                </a>
            </td>
            <td class="h-px w-72 min-w-72">
                <a class="block relative z-10" href="#">
                    <div class="px-6 py-2">
                        <p class="text-sm text-muted-foreground-1">{{ $task->description }}</p>
                    </div>
                </a>
            </td>
            <td class="size-px whitespace-nowrap">
                <a class="block relative z-10" href="#">
                    <div class="px-6 py-2">
                        <span
                            class="inline-flex items-center gap-1.5 text-xs font-medium bg-surface text-surface-foreground">
                            {{ $task->created_at->format('M d, Y') }}
                        </span>
                    </div>
                </a>
            </td>
            <td class="size-px whitespace-nowrap">
                <div class="px-6 py-2">
                    <div class="hs-dropdown [--placement:bottom-right] relative inline-block">
                        <button id="hs-table-dropdown-1" type="button"
                            class="hs-dropdown-toggle py-1.5 px-2 inline-flex justify-center items-center gap-2 rounded-lg text-foreground align-middle disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:ring-2 focus:ring-primary-focus transition-all text-sm"
                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="1" />
                                <circle cx="19" cy="12" r="1" />
                                <circle cx="5" cy="12" r="1" />
                            </svg>
                        </button>
                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-40 z-20 bg-dropdown border border-dropdown-line divide-y divide-dropdown-divider shadow-2xl rounded-lg p-2"
                            role="menu" aria-orientation="vertical" aria-labelledby="hs-table-dropdown-1">
                            <div class="py-2 first:pt-0 last:pb-0">
                                <button wire:click="deleteTask({{ $task->id }})"
                                    class="px-3 py-2 flex items-center gap-2 rounded-md text-sm text-foreground hover:bg-dropdown-hover focus:outline-hidden focus:bg-dropdown-focus">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="3 6 5 6 21 6" />
                                        <path
                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                                        <line x1="10" y1="11" x2="10" y2="17" />
                                        <line x1="14" y1="11" x2="14" y2="17" />
                                    </svg>
                                    <span>Delete</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</div>
