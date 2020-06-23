<template>
    <div class="container">
    <!------ Table : User List ----------------------------------------------------->
        <div class="row">
          <div class="col-md-12">
            <div class="card text-white bg-dark border border-light mt-3">
              <div class="card-header bg-info">
                <h3 class="card-title">Users Management System</h3>

                <div class="card-tools">
                  <button class="btn btn-success" @click="newModal">Add New <div class="fas fa-user-plus fa-fw"></div></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap text-light">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Type</th>
                      <th>Registered</th>
                      <th>Modify</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr v-for="user in users" :key="user.id" class="text-light">
                      <td>{{user.id}}</td>
                      <td>{{user.name}}</td>
                      <td>{{user.email}}</td>
                      <td>{{user.type | upText}}</td>
                      <td>{{user.created_at | myDate}}</td>
                      <td>
                            <a href="#" @click="editModal(user)">
                                <i class="fa fa-edit blue"></i>
                            </a>
                            /
                            <a href="#" @click="deleteUser(user.id)">
                               <i class="fa fa-trash red"></i>
                            </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    <!----- /Table : User List ----------------------------------------------------->
    <!------ Modal: Add_New ----------------------------------------------------->
        <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <!------ Modal: Button ----------------------------------------------------->
                    <div class="modal-header">
                        <h5 class="modal-title text-dark" v-show="!editmode" id="addNewLabel">Add New</h5>
                        <h5 class="modal-title text-dark" v-show="editmode" id="addNewLabel">Update User Info</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <!----- /Modal: Button ----------------------------------------------------->
                <!------ Modal: Body ----------------------------------------------------->
                    <form @submit.prevent="editmode ? updateUser() : createUser()">
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="form.name" type="text" name="name"
                                    placeholder="Name"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                                <has-error :form="form" field="name"></has-error>
                            </div>
                            <div class="form-group">
                                <input v-model="form.email" type="text" name="email"
                                    placeholder="Email"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                                <has-error :form="form" field="email"></has-error>
                            </div>
                            <div class="form-group">
                                <select v-model="form.type" name="type" id="type"
                                    placeholder="Password"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('type') }">
                                    <option value="">Select User Role</option>
                                    <option value="super_admin">super admin</option>
                                    <option value="minor_admin">minor admin</option>
                                    <option value="student">student</option>
                                    <option value="lecturer">lecturer</option>
                                    <option value="author">staff</option>
                                </select>
                                <has-error :form="form" field="type"></has-error>
                            </div>
                            <div class="form-group">
                                <input v-model="form.password" type="password" name="password" id="password"
                                    placeholder="Password"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                                <has-error :form="form" field="password"></has-error>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" v-show="!editmode" class="btn btn-primary">Create</button>
                            <button type="submit" v-show="editmode" class="btn btn-success">Update</button>
                        </div>
                    </form>
                <!----- /Modal: Body ----------------------------------------------------->
                </div>
            </div>
        </div>
    <!----- /Modal: Add_New ----------------------------------------------------->
    </div>
</template>

<script>
    export default {  
    //------- OBJECTS--------------------------------------------------------------//
        data() {
            return {
                editmode : false,
                users : {},
                form: new Form({
                    id : '',
                    name : '',
                    email : '',
                    password : '',
                    type : '',

                })
            }
        },
    //------ /OBJECTS--------------------------------------------------------------//
    //------- METHODS--------------------------------------------------------------//
        methods: {
            updateUser(){
                this.$Progress.start();
                //console.log('Its Updating fine!');
                this.form.put('api/user/'+this.form.id)
                .then(() => {
                    $('#addNew').modal('hide');
                    //success
                    swal.fire(
                        'Update!',
                        'Information has been updated.',
                        'success'
                    )
                    setTimeout(function(){this.loadUsers()}.bind(this), 1000);
                    this.$Progress.finish();
                })
                .catch(() => {
                    this.$Progress.fail();
                });
            },
            editModal(user){
                this.editmode = true;
                this.form.reset();
                $('#addNew').modal('show');
                this.form.fill(user);
            },
            newModal(){
                this.editmode = false;
                this.form.reset();
                $('#addNew').modal('show');
            },
            deleteUser(id){
                swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.value) {
                            //Send request to server
                            this.form.delete('api/user/'+id).then(() => {
                                swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                                )
                            setTimeout(function(){this.loadUsers()}.bind(this), 1000);
                            }).catch(() => {
                                swal("Failed!", "There was something wrong.", "Warning");
                            });
                        }
                    })
            },
            loadUsers(){
                axios.get("api/user")
                .then(({ data }) => (this.users = data.data));
            },

            createUser(){
                this.$Progress.start();
                this.form.post('api/user')
                .then(()=>{
                    //Fire.$emit('AfterCreate');
                    $('#addNew').modal('hide');
                    Toast.fire({
                        icon: 'success',
                        title: 'Signed in successfully'
                    });
                    setTimeout(function(){this.loadUsers()}.bind(this), 2500);
                    this.$Progress.finish();
                })
                .catch(()=>{

                })
            }
        },
    //------ /METHODS--------------------------------------------------------------//
    //------- FUNCTION--------------------------------------------------------------//
        created() {
            this.loadUsers();
            //Fire.$on('AfterCreate',() => {
            //    this.loadUsers()
            //});
            //setTimeout(() => this.loadUsers(), 5000);
            //setInterval(() => this.loadUsers(), 10000);
        },
        deleteUser(){
            this.deleteUser();
        }
    //------ /FUNCTION--------------------------------------------------------------//
    }
</script>
