<!-- home.php -->
<?= $this->extend('tasks/layout/main') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
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
    <?php if (session()->has('success')): ?>
        <div class="alert alert-success">
            <p><?= session('success') ?></p>
        </div>
    <?php endif; ?>
    <form action="<?= base_url('dashboard/tasks-update/'.$id) ?>" method="post">
        <div class="row">
            <div class="col-sm-8"> <h2>Create Task</h2></div>
            <div class="col-sm-4 text-right">
                <?php if(session('user_id')['role']=='admin'){?>
                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                <?php }
                else if(session('user_id')['role']=='user' && $task['assign_to']== session()->get('user_id')['id'] ){?>
                 <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                  <?php }?>
            </div>
            <div class="col-sm-8">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" value="<?= $task['title'] ?>" name="title">
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description"><?= $task['description'] ?></textarea>
                </div></div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="priority">Priority:</label>
                    <select class="form-control" id="priority" name="priority">
                        <option value="Low" <?= $task['priority'] == 'Low' ? 'selected' : '' ?>>Low</option>
                        <option value="Medium" <?= $task['priority'] == 'Medium' ? 'selected' : '' ?>>Medium</option>
                        <option value="High" <?= $task['priority'] == 'High' ? 'selected' : '' ?>>High</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="start_date">start Date:</label>
                    <input type="date" class="form-control" id="start_date" value="<?= $task['start_date'] ?>" name="start_date">
                </div>

                <div class="form-group">
                    <label for="due_date">Due Date:</label>
                    <input type="date" class="form-control" id="due_date" value="<?= $task['due_date'] ?>"  name="due_date">
                </div>

                <div class="form-group">
                    <label for="assign_to">Assign To:</label>
                    <select class="form-control" id="assign_to" name="assign_to">
                        <?php foreach ($users as $user): ?>
                            <option value="<?= $user['id'] ?>" <?= $task['assign_to'] == $user['id'] ? 'selected' : '' ?>><?= $user['username'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>



                <div class="form-group">
                    <label for="status">Status:</label>
                    <select class="form-control" id="status" name="status">
                        <option>Select</option>
                        <option value="Pending" <?= $task['status'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
                        <option value="In-Progress" <?= $task['status'] == 'In-Progress' ? 'selected' : '' ?>>In Progress</option>
                        <option value="Completed" <?= $task['status'] == 'Completed' ? 'selected' : '' ?>>Completed</option>
                    </select>
                </div>
            </div>
        </div>




    </form>
</div>
<?= $this->endSection() ?>