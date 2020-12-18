<?php
include 'header.php';
$inspector = $db->query("SELECT * FROM `tbl_users` WHERE level = '3' ORDER BY id ASC ")->fetchAll(PDO::FETCH_ASSOC);
$manager = $db->query("SELECT * FROM `tbl_users` WHERE level = '4' ORDER BY id ASC ")->fetchAll(PDO::FETCH_ASSOC);
$ass_manage = $db->query("SELECT * FROM `tbl_users` WHERE level = '5' ORDER BY id ASC ")->fetchAll(PDO::FETCH_ASSOC);
$psi = $db->query("SELECT * FROM `tbl_users` WHERE level = '6' ORDER BY id ASC ")->fetchAll(PDO::FETCH_ASSOC);
$customers = $db->query("SELECT * FROM `tbl_users` WHERE level = '7' ORDER BY id ASC ")->fetchAll(PDO::FETCH_ASSOC);
$singleUser = $db->query("SELECT * FROM `tbl_users` WHERE `id` = 5")->fetch(PDO::FETCH_ASSOC);

//query for one single data


?>

<div class="container">
    <?php if (isset($_GET['success']) and $_GET['success'] == "edited"): ?>
        <div class="alert alert-success">
            <strong>Success!</strong> The User Have been Edited!
        </div>
    <?php header( "refresh:5;url=employees.php" );
    endif; ?>
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link  active" href="#inspectors" role="tab" data-toggle="tab"
               aria-selected="true">Inspector</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#managers" role="tab" data-toggle="tab">Managers</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#assmanage" role="tab" data-toggle="tab">Assistant Managers</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#psi" role="tab" data-toggle="tab">PSI</a>
        </li>

        <?php if (isset($_SESSION['user']) && $_SESSION['user']['level'] == 1):?>
            <li class="nav-item">
                <a class="nav-link" href="#customers" role="tab" data-toggle="tab">Customer</a>
            </li>
        <?php endif; ?>

    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="inspectors">
            <table class="table table-hover table-dark">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Username</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($inspector as $user): ?>
                    <tr>
                        <th scope="row"><?= $user['id'] ?></th>
                        <td><?= $user['firstname'] ?></td>
                        <td><?= $user['lastname'] ?></td>
                        <td><?= $user['username'] ?></td>
                        <!--                        <td>-->
                        <!--                            --><?php
                        //                            if ($user['status'] == "1")
                        //                                echo "<span class='badge badge-success'>Active</span>";
                        //                            else
                        //                                echo "<span class='badge badge-danger'>Inactive</span>";
                        //                            ?>
                        <!--                        </td>-->
                        <td class="text-center">
                            <a
                                    href="#"
                                    class="btn btn-primary editBtn"
                                    data-toggle="modal"
                                    data-target="#editModal"
                                    data-id="<?= $user['id'] ?>"
                                    data-firstname="<?= $user['firstname'] ?>"
                                    data-lastname="<?= $user['lastname'] ?>"
                                    data-username="<?= $user['username'] ?>"
                                    data-level="<?= $user['level'] ?>"
                                    data-status="<?= $user['status'] ?>"

                            >Edit</a>
                            <!--                            --><?php //if ($user['status'] == "1"): ?>
                            <!--                                <a href="core.php?action=ban&id=-->
                            <? //= $user['id'] ?><!--" class="btn btn-warning">Ban</a>-->
                            <!--                            --><?php //else: ?>
                            <!--                                <a href="core.php?action=unban&id=-->
                            <? //= $user['id'] ?><!--" class="btn-->
                            <!--										btn-secondary">Unban</a>-->
                            <!--                            --><?php //endif; ?>
                            <a href="core.php?action=delete&id=<?= $user['id'] ?>" class="btn
									btn-danger deleteBtn">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="managers">
            <table class="table table-hover table-dark">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Username</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($manager as $user): ?>
                    <tr>
                        <th scope="row"><?= $user['id'] ?></th>
                        <td><?= $user['firstname'] ?></td>
                        <td><?= $user['lastname'] ?></td>
                        <td><?= $user['username'] ?></td>
                        <!--                        <td>-->
                        <!--                            --><?php
                        //                            if ($user['status'] == "1")
                        //                                echo "<span class='badge badge-success'>Active</span>";
                        //                            else
                        //                                echo "<span class='badge badge-danger'>Inactive</span>";
                        //                            ?>
                        <!--                        </td>-->
                        <td class="text-center">
                            <a
                                    href="#"
                                    class="btn btn-primary editBtn"
                                    data-toggle="modal"
                                    data-target="#editModal"
                                    data-id="<?= $user['id'] ?>"
                                    data-firstname="<?= $user['firstname'] ?>"
                                    data-lastname="<?= $user['lastname'] ?>"
                                    data-username="<?= $user['username'] ?>"
                                    data-level="<?= $user['level'] ?>"
                                    data-status="<?= $user['status'] ?>"

                            >Edit</a>
                            <!--                            --><?php //if ($user['status'] == "1"): ?>
                            <!--                                <a href="core.php?action=ban&id=-->
                            <? //= $user['id'] ?><!--" class="btn btn-warning">Ban</a>-->
                            <!--                            --><?php //else: ?>
                            <!--                                <a href="core.php?action=unban&id=-->
                            <? //= $user['id'] ?><!--" class="btn-->
                            <!--										btn-secondary">Unban</a>-->
                            <!--                            --><?php //endif; ?>
                            <a href="core.php?action=delete&id=<?= $user['id'] ?>" class="btn
									btn-danger deleteBtn">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="assmanage">
            <table class="table table-hover table-dark">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Username</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($ass_manage as $user): ?>
                    <tr>
                        <th scope="row"><?= $user['id'] ?></th>
                        <td><?= $user['firstname'] ?></td>
                        <td><?= $user['lastname'] ?></td>
                        <td><?= $user['username'] ?></td>
                        <!--                        <td>-->
                        <!--                            --><?php
                        //                            if ($user['status'] == "1")
                        //                                echo "<span class='badge badge-success'>Active</span>";
                        //                            else
                        //                                echo "<span class='badge badge-danger'>Inactive</span>";
                        //                            ?>
                        <!--                        </td>-->
                        <td class="text-center">
                            <a
                                    href="#"
                                    class="btn btn-primary editBtn"
                                    data-toggle="modal"
                                    data-target="#editModal"
                                    data-id="<?= $user['id'] ?>"
                                    data-firstname="<?= $user['firstname'] ?>"
                                    data-lastname="<?= $user['lastname'] ?>"
                                    data-username="<?= $user['username'] ?>"
                                    data-level="<?= $user['level'] ?>"
                                    data-status="<?= $user['status'] ?>"

                            >Edit</a>
                            <!--                            --><?php //if ($user['status'] == "1"): ?>
                            <!--                                <a href="core.php?action=ban&id=-->
                            <? //= $user['id'] ?><!--" class="btn btn-warning">Ban</a>-->
                            <!--                            --><?php //else: ?>
                            <!--                                <a href="core.php?action=unban&id=-->
                            <? //= $user['id'] ?><!--" class="btn-->
                            <!--										btn-secondary">Unban</a>-->
                            <!--                            --><?php //endif; ?>
                            <a href="core.php?action=delete&id=<?= $user['id'] ?>" class="btn
									btn-danger deleteBtn">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="psi">
            <table class="table table-hover table-dark">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Username</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($psi as $user): ?>
                    <tr>
                        <th scope="row"><?= $user['id'] ?></th>
                        <td><?= $user['firstname'] ?></td>
                        <td><?= $user['lastname'] ?></td>
                        <td><?= $user['username'] ?></td>
                        <!--                        <td>-->
                        <!--                            --><?php
                        //                            if ($user['status'] == "1")
                        //                                echo "<span class='badge badge-success'>Active</span>";
                        //                            else
                        //                                echo "<span class='badge badge-danger'>Inactive</span>";
                        //                            ?>
                        <!--                        </td>-->
                        <td class="text-center">
                            <a
                                    href="#"
                                    class="btn btn-primary editBtn"
                                    data-toggle="modal"
                                    data-target="#editModal"
                                    data-id="<?= $user['id'] ?>"
                                    data-firstname="<?= $user['firstname'] ?>"
                                    data-lastname="<?= $user['lastname'] ?>"
                                    data-username="<?= $user['username'] ?>"
                                    data-level="<?= $user['level'] ?>"
                                    data-status="<?= $user['status'] ?>"

                            >Edit</a>
                            <!--                            --><?php //if ($user['status'] == "1"): ?>
                            <!--                                <a href="core.php?action=ban&id=-->
                            <? //= $user['id'] ?><!--" class="btn btn-warning">Ban</a>-->
                            <!--                            --><?php //else: ?>
                            <!--                                <a href="core.php?action=unban&id=-->
                            <? //= $user['id'] ?><!--" class="btn-->
                            <!--										btn-secondary">Unban</a>-->
                            <!--                            --><?php //endif; ?>
                            <a href="core.php?action=delete&id=<?= $user['id'] ?>" class="btn
									btn-danger deleteBtn">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <?php if (isset($_SESSION['user']) && $_SESSION['user']['level'] == 1): ?>

        <div role="tabpanel" class="tab-pane fade" id="customers">
            <table class="table table-hover table-dark">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Username</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($customers as $user): ?>
                    <tr>
                        <th scope="row"><?= $user['id'] ?></th>
                        <td><?= $user['firstname'] ?></td>
                        <td><?= $user['lastname'] ?></td>
                        <td><?= $user['username'] ?></td>
                        <!--                        <td>-->
                        <!--                            --><?php
                        //                            if ($user['status'] == "1")
                        //                                echo "<span class='badge badge-success'>Active</span>";
                        //                            else
                        //                                echo "<span class='badge badge-danger'>Inactive</span>";
                        //                            ?>
                        <!--                        </td>-->
                        <td class="text-center">
                            <a
                                    href="#"
                                    class="btn btn-primary editBtn"
                                    data-toggle="modal"
                                    data-target="#editModal"
                                    data-id="<?= $user['id'] ?>"
                                    data-firstname="<?= $user['firstname'] ?>"
                                    data-lastname="<?= $user['lastname'] ?>"
                                    data-username="<?= $user['username'] ?>"
                                    data-level="<?= $user['level'] ?>"
                                    data-status="<?= $user['status'] ?>"

                            >Edit</a>
                            <!--                            --><?php //if ($user['status'] == "1"): ?>
                            <!--                                <a href="core.php?action=ban&id=-->
                            <? //= $user['id'] ?><!--" class="btn btn-warning">Ban</a>-->
                            <!--                            --><?php //else: ?>
                            <!--                                <a href="core.php?action=unban&id=-->
                            <? //= $user['id'] ?><!--" class="btn-->
                            <!--										btn-secondary">Unban</a>-->
                            <!--                            --><?php //endif; ?>
                            <a href="core.php?action=delete&id=<?= $user['id'] ?>" class="btn
									btn-danger deleteBtn">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
<?php endif; ?>

    </div>
</div>


<script>
    $(function () {
        $(".deleteBtn").on("click", function () {
            return confirm('Are you sure you want to delete this User?\nThis action cannot be undone!');
        });

        $('#editModal').on('shown.bs.modal', function (e) {
            let element = $(e.relatedTarget);
            $(this).find("[name='id']").val(element.data("id"));
            $(this).find("[name='firstname']").val(element.data("firstname"));
            $(this).find("[name='lastname']").val(element.data("lastname"));
            $(this).find("[name='username']").val(element.data("username"));
            $(this).find("[name='level']").val(element.data("level"));
            $(this).find("[name='status']").val(element.data("status"));
        });
    })
</script>

<?php
include 'edit.php';
include 'footer.php';
?>
