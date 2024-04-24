<?= $this->extend('tasks/layout/main') ?>

<?= $this->section('content') ?>
<div class="container">
    <h1 class="text-center">Edit User</h1>
    <?php if (isset($validation)): ?>
        <div class="alert alert-danger">
            <?= \Config\Services::validation()->listErrors(); ?>
        </div>
    <?php endif; ?>
    <form action="<?= site_url('dashboard/user/edit/' . $user['id']) ?>" method="post" class="col-sm-4 mx-auto">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" value="<?= $user['username'] ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $user['email'] ?>" required>
        </div>
        <div class="form-group">
            <label for="role">Role:</label>
            <input type="text" class="form-control" id="role" name="role" value="<?= $user['role'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
</div>
<?= $this->endSection() ?>
