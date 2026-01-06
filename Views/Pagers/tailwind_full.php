<?php if ($pager->hasPrevious() || $pager->hasNext()): ?>
<div class="flex justify-center items-center gap-2 mt-8">

    <!-- Previous Button -->
    <?php if ($pager->hasPrevious()): ?>
        <a href="<?= $pager->getPrevious() ?>"
           class="page-btn px-3 py-2 border border-gray-300 rounded-lg transition-colors">
            <i data-lucide="chevron-left" class="h-5 w-5"></i>
        </a>
    <?php else: ?>
        <span class="px-3 py-2 border border-gray-200 rounded-lg opacity-50">
            <i data-lucide="chevron-left" class="h-5 w-5"></i>
        </span>
    <?php endif ?>

    <!-- Page Numbers -->
    <?php foreach ($pager->links() as $link): ?>
        <?php if ($link['active']): ?>
            <span
                class="page-btn active px-4 py-2 border border-gray-300 rounded-lg bg-gray-200 font-semibold">
                <?= $link['title'] ?>
            </span>
        <?php else: ?>
            <a href="<?= $link['uri'] ?>"
               class="page-btn px-4 py-2 border border-gray-300 rounded-lg transition-colors">
                <?= $link['title'] ?>
            </a>
        <?php endif ?>
    <?php endforeach ?>

    <!-- Next Button -->
    <?php if ($pager->hasNext()): ?>
        <a href="<?= $pager->getNext() ?>"
           class="page-btn px-3 py-2 border border-gray-300 rounded-lg transition-colors">
            <i data-lucide="chevron-right" class="h-5 w-5"></i>
        </a>
    <?php else: ?>
        <span class="px-3 py-2 border border-gray-200 rounded-lg opacity-50">
            <i data-lucide="chevron-right" class="h-5 w-5"></i>
        </span>
    <?php endif ?>

</div>
<?php endif ?>
