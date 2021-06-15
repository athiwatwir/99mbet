<section class="container">
    <div class="row">
        <div class="col-md-10">
            <h2 class="g-color-primary f-promppt-500 mb-4">VDO</h2>
        </div>
        <div class="col-md-2 text-right">
            <?= $this->Html->link('เพิ่ม',['controller'=>'admin-vdo','action'=>'add'],['class'=>'btn btn-primary'])?>
        </div>
    </div>
</section>
<section class="container g-line-height-2 g-mb-30">
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ชื่อวิดีโอ</th>
                        <th>วันที่เพิ่ม</th>
                        <th>สถานะ</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($adminVdo as $item) : ?>
                        <tr>
                            <td><?=$item->name?></td>
                            <td><?=$item->created?></td>
                            <td><?=$item->isactive?></td>
                            <td class="text-right">
                                <div class="btn-group">
                                    <?= $this->Html->link(BT_EDIT, ['action' => 'edit', $item->id], ['escape' => false]) ?> 
                                    <?= $this->Form->postLink(BT_DELETE, ['action' => 'delete', $item->id], ['confirm' => __('คุณต้องการลบ {0}?', $item->name), 'escape' => false]) ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        

    </div>

</section>