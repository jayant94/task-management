<!-- home.php -->
<?= $this->extend('tasks/layout/main') ?>

<?= $this->section('content') ?>
<div class="mt-5">
    <div class="d-flex justify-content-between">
        <h2>Task List</h2>
    </div>
    <table id="myTable"  class="table table-bordered table-sm">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Priority</th>
                <th>Assigned User</th>
                <th>Status</th>
                <th>Start Date</th>
                <th>Due Date</th>
                <th>View</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
        <tfoot>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Priority</th>
                <th>Assigned User</th>
                  <th>Status</th>
                <th>Start Date</th>
                <th>Due Date</th>
                <th>View</th>
                <th>Delete</th>
            </tr>
        </tfoot>
    </table>
</div>
<?= $this->endSection(); ?>