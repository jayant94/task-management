<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tasks</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container header justify-content-between d-flex pt-2">
            <h1>Task Management &nbsp; </h1> 
           
            <span><a href="<?= site_url('logout') ?>" class="btn btn-sm btn-outline-danger">Logout</a></span>
        </div>
        <div class="container text-center">
             <h3>Welcome <?= session()->get('user_id')['username']?> </h3> 
        </div>
        <div class="container">
            <a href="<?= site_url('dashboard') ?>" class="btn btn-sm btn-outline-success">Task List</a>
            <a href="<?= site_url('dashboard/tasks-create') ?>" class="btn btn-sm btn-outline-success">Create New Task</a>
            <?php if (session('user_id')['role'] == 'admin') { ?>
                <a href="<?= site_url('dashboard/user/index') ?>" class="btn btn-sm btn-success" >User List</a>
            <?php } ?>
        </div>
        <div class="container">
            <?= $this->renderSection('content') ?>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/2.0.5/js/dataTables.min.js" ></script>

        <script>
            $(document).ready(function () {
                var role = '<?= session()->get('user_id')['role'] ?>';
                var user_id = '<?= session()->get('user_id')['id'] ?>';
                $('#myTable').DataTable({
                    "processing": false,
                    "serverSide": true,
                    "ajax": {
                        "url": "<?php echo base_url('ajax-task-list'); ?>",
                        "type": "POST"
                    },
                    "columns": [
                        {"data": "title"},
                        {"data": "description"},
                        {
                            "data": null,
                            "render": function (data, type, row) {
                                let flag = 'btn-success';
                                if (row.priority == "Low") {
                                    flag = 'btn-info';
                                } else if (row.priority == "Medium") {
                                    flag = 'btn-warning';
                                } else if (row.priority == "High") {
                                    flag = 'btn-danger';
                                }
                                return '<span class="btn btn-sm ' + flag + '">' + row.priority + '</span>';
                            }
                        },
                        {"data": "assigned_user"},
                        {"data": "status"},
                        {"data": "start_date"},
                        {"data": "due_date"},
                        {"data": null,
                            "render": function (data, type, row) {

                                return '<a href="<?= site_url('dashboard/tasks-edit/') ?>' + row.id + '">view</span>';
                            }
                        },
                        {"data": null,
                            "render": function (data, type, row) {
                                if (role == 'user' && user_id == row.assign_to) {
                                    return '<a href="<?= site_url('dashboard/tasks-delete/') ?>' + row.id + '" onclick="return confirm(\'Do you want to remove?!\')" ><i class="fa fa-trash"></i></span>';
                                } else if (role == 'admin') {
                                    return '<a href="<?= site_url('dashboard/tasks-delete/') ?>' + row.id + '" onclick="return confirm(\'Do you want to remove?!\')" ><i class="fa fa-trash"></i></span>';
                                } else {
                                    return '<a href="javascript:void(0)" onclick="return confirm(\'you dont have permission to remove this !\')" ><i class="fa fa-trash"></i></span>';
                                }
                            }
                        }
                    ]
                });
            });
        </script>
        <!-- CKEditor JS -->
        <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
        <script>
            // Initialize CKEditor for the description textarea
            CKEDITOR.replace('description');
        </script>
    </body>
</html>
