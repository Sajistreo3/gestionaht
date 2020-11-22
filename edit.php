<div class="modal" id="editModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit User</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="core.php" method="post">
                    <input type="hidden" name="id">
                    <div class="form-group">
                        <label for="fname">Firstname:</label>
                        <input type="text" name="firstname" class="form-control" placeholder="Enter firstname"
                               id="fname">
                    </div>

                    <div class="form-group">
                        <label for="lname">Lastname:</label>
                        <input type="text" name="lastname" class="form-control" placeholder="Enter lastname"
                               id="lname">
                    </div>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter Username"
                               id="lname">
                    </div>
                    <div class="form-group">
                        <label for="level">Level:</label>
                        <select name="level" class="form-control level">
                            <option value="" hidden>Select a Level</option>
                            <option value="3">Inspector</option>
                            <option value="4">Manager</option>
                            <option value="5">Assistant Manager</option>
                            <option value="6">PSI</option>
                            <option value="7">Customer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select name="status" id="status" class="form-control">
                            <option value="">Select Status</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="editUser" value="Edit User"
                               class="form-control btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
