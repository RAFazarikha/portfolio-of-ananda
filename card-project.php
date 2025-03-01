<?php
function renderProjectCard($data) { ?>
    <div class="max-w-sm p-6 bg-black border border-blue-500 rounded-lg shadow-sm mb-5" data-aos="flip-left">
        <a href="<?= htmlspecialchars($data['link']) ?>">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white hover:text-blue-500">
                <?= htmlspecialchars($data['judul']) ?>
            </h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 text-justify">
            <?= htmlspecialchars($data['short-description']) ?>
        </p>
        <button data-modal-target="<?= htmlspecialchars($data['id']) ?>" data-modal-toggle="<?= htmlspecialchars($data['id']) ?>" class="block w-full md:w-auto text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
            Read more
        </button>
    </div>

    <div id="<?= htmlspecialchars($data['id']) ?>" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-4xl max-h-full">
            <div class="relative bg-black rounded-lg shadow-sm border border-blue-500">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                        Project Description
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="<?= htmlspecialchars($data['id']) ?>">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-4 md:p-5 space-y-4">
                    <p class="text-justify leading-relaxed text-white">
                        <?= htmlspecialchars($data['description-1']) ?>
                    </p>
                    <ul class="space-y-1 list-disc list-inside text-justify text-white">
                        <?php foreach ($data['slot'] as $item): ?>
                            <li><?= htmlspecialchars($item) ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <p class="text-justify leading-relaxed text-white">
                        <?= htmlspecialchars($data['description-2']) ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
