<?php $this->view('includes/header')?>

<div class="table">

<form method="GET" action="<?= ROOT ?>/request/index">
    <input type="text" name="filter" placeholder="Enter project CODE...">
    <button type="submit" class="filter-button">Filter</button>
</form>

    <div class="table_header">
        <h1>Requests from project manager</h1>
    </div>
    <div class="table_section" style="height: 1000px;">
        <table>
            <thead>
                <tr>
                    <th>Project Code</th>
                    <th>Material Code</th>
                    <th>Material Name</th>
                    <th>Measure Unit</th>
                    <th>Quantity</th>
                    <th>Availability</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($rows)): ?>
                    <?php foreach ($rows as $row):?>
                         <tr data-project-id="<?=$row->p_id?>" 
                             data-material-code="<?=$row->material_or_item_id?>" 
                             data-material-name="<?=$row->material_or_item_name?>" 
                             data-measure-unit="<?=$row->mesure_unit?>" 
                             data-quantity="<?=$row->quantity?>">
                            <td><?=$row->p_id?></td>
                            <td><?=$row->material_or_item_id?></td>
                            <td><?=$row->material_or_item_name?></td>
                            <td><?=$row->mesure_unit?></td>
                            <td><?=$row->quantity?></td>
                            <td></td>
                            <td>
                                <button class="send-quotation-btn"><i class="fa-regular fa-clock"></i></button>
                            </td>
                        </tr>
                    <?php endforeach;?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php $this->view('includes/footer'); ?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const sendQuotationButtons = document.querySelectorAll('.send-quotation-btn');
        sendQuotationButtons.forEach(button => {
            button.addEventListener('click', function() {
                const row = this.closest('tr');
                const projectId = row.getAttribute('data-project-id');
                const materialCode = row.getAttribute('data-material-code');
                const materialName = row.getAttribute('data-material-name');
                const measureUnit = row.getAttribute('data-measure-unit');
                const quantity = row.getAttribute('data-quantity');
                window.location.href = '<?=ROOT?>/quotationorder/add?p_id=' + encodeURIComponent(projectId) +
                '&material_code=' + encodeURIComponent(materialCode) +
                '&material_name=' + encodeURIComponent(materialName) +
                '&measure_unit=' + encodeURIComponent(measureUnit) +
                '&requested_quantity=' + encodeURIComponent(quantity);
            });
        });
    });
</script>
