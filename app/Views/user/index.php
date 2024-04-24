<?= $this->extend('tasks/layout/main') ?>

<?= $this->section('content') ?>
<div class="container">
    <h1 class="text-center">Add User</h1>
     <?php if (isset($validation)): ?>
        <div class="alert alert-danger">
             <?= \Config\Services::validation()->listErrors(); ?>
        </div>
    <?php endif; ?>
    <form action="<?= site_url('dashboard/user/add') ?>" method="post" class="col-sm-4 mx-auto">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" value="<?= old('username') ?>" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= old('email') ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Add User</button>
    </form>
</div>
<?= $this->endSection() ?>
