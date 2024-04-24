<!-- home.php -->
<?= $this->extend('tasks/layout/main') ?>

<?= $this->section('content') ?>
<div class="mt-5">
    <div class="d-flex justify-content-between">

        <a href="<?= site_url('dashboard') ?>">Back to task List</a>
    </div>
    <?php if (session()->has('errors')): ?>
        <div class="alert alert-danger">
            <?php foreach (session('errors') as $error): ?>
                <p><?= $error ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('dashboard/tasks-store') ?>" method="post">
        <div class="row">
            <div class="col-sm-8 "><h2 class="mb-2">Create Task</h2></div>
            <div class="col-sm-4 text-right"> 
                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
            </div>
            <div class="col-sm-8">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div> 

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for="priority">Priority:</label>
                    <select class="form-control" id="priority" name="priority">
                        <option value="Low">Low</option>
                        <option value="Medium">Medium</option>
                        <option value="High">High</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="start_date">Start Date:</label>
                    <input type="date" class="form-control" id="start_date" name="start_date">
                </div>

                <div class="form-group">
                    <label for="due_date">Due Date:</label>
                    <input type="date" class="form-control" id="due_date" name="due_date">
                </div>

                <div class="form-group">
                    <label for="assign_to">Assign To:</label>
                    <select class="form-control" id="assign_to" name="assign_to">
                        <?php foreach ($users as $user): ?>
                            <option value="<?= $user['id'] ?>"><?= $user['username'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="status">Status:</label>
                    <select class="form-control" id="status" name="status">
                        <option value="Pending">Pending</option>
                        <option value="In Progress">In Progress</option>
                        <option value="Completed">Completed</option>
                    </select>
                </div>
            </div>
        </div>


    </form>
</div>
<?= $this->endSection() ?>