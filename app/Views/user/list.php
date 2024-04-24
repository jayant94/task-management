<?= $this->extend('tasks/layout/main') ?>

<?= $this->section('content') ?>
<h1>User List</h1>
 <a href="<?= site_url('dashboard/user/add') ?>">Add User</a>
<table class="table table-bordered table-sm">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['username'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['role'] ?></td>
                <td>
                    <a href="<?= site_url('dashboard/user/edit/' . $user['id']) ?>">Edit</a>
                    <a href="<?= site_url('dashboard/user/remove/' . $user['id']) ?>" onclick="return confirm('Do you want to remove?!')">Remove</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>