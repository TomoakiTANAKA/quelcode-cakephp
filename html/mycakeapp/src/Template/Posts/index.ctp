<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post[] $posts
 */
?>
<h1>index.php</h1>

<div class="content">
    <?php foreach ($posts as $post) : ?>
        <h3><?= h($post->title) ?></h3>
<!--    brの変換-->
        <p><?= $this->Text->autoParagraph(h($post->description)) ?></p>
        <p><?= h($post->created->i18nFormat('YYYY/MM/dd HH:mm')) ?></p>

        <a href='<?= "posts/view/{$post->id}" ?>' class="button">記事読み</a>
        <?= $this->Html->link("記事を読む", [
            'controller' => 'Posts',
            'action' => 'view',
            $post->id
        ], ['class' => 'button']); ?>
    <?php endforeach; ?>

    <?php if($this->Paginator->total() > 1) : ?>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first("<< first"); ?>
                <?= $this->Paginator->prev("< prev"); ?>
                <?= $this->Paginator->numbers(); ?>
                <?= $this->Paginator->next("> next"); ?>
                <?= $this->Paginator->last(">> last"); ?>
                <li></li>
            </ul>
        </div>
    <?php endif; ?>
</div>

