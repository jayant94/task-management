<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css" />

    </head>
    <body>
        <div class="container">
            <div class=" row justify-content-center">
                <div class="col-sm-4">
                    <h1>Login</h1>
                    <?php if (session()->getFlashdata('error')): ?>
                        <div><?= session()->getFlashdata('error') ?></div>
                    <?php endif; ?>
                    <form action="<?= site_url('login/authenticate') ?>" method="post">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" name="username" required placeholder="Enter your username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required placeholder="Enter your password">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>

                    <div class="mt-3"> <!-- Add margin-top for separation -->
                        <p>Don't have an account? <a href="<?= site_url('registration') ?>">Register here</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
