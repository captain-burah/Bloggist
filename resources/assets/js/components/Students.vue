<template>
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card text-white bg-dark border border-secondary mt-3">
              <div class="card-header bg-info ">
                <h3 class="card-title">Student Management System</h3>

                <div class="card-tools">
                  <button class="btn btn-success border border-light" @click="newModal">Register Student <div class="fas fa-user-plus fa-fw yellow"></div></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap text-light">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Student Name</th>
                      <th>Email</th>
                      <th>Batch</th>
                      <th>Registered</th>
                      <th>Modify</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr v-for="student in students" :key="student.id" class="text-light">
                      <td>{{student.id}}</td>
                      <td>{{student.name}}</td>
                      <td>{{student.email}}</td>
                      <td>{{student.batch | upText}}</td>
                      <td>{{student.created_at | myDate}}</td>
                      <td>
                          <a href="#" @click="editModal(student)"><i class="fa fa-edit blue"></i></a>
                          /
                          <a href="#" @click="deleteStudent(student.id)"> <i class="fa fa-trash red"></i></a>
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

    <!------ Modal: Add_New ---------------------------------------------------------------->
        <div class="modal fade" id="addNewStudent" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <!------ Modal: Button ----------------------------------------------------->
                    <div class="modal-header">
                        <h5 class="modal-title text-dark" v-show="!editmode" id="addNewStudentLabel">Student Registration</h5>
                        <h5 class="modal-title text-dark" v-show="editmode" id="addNewStudentLabel">Update Student Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <!----- /Modal: Button ----------------------------------------------------->
                <!----- Modal: Body -------------------------------------------------------->
                    <form @submit.prevent="editmode ? updateStudent() : createStudent()">
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="form.name" type="text" name="name"
                                    placeholder="Student Name"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                                <has-error :form="form" field="name"></has-error>
                            </div>
                            <div class="form-group">
                                <input v-model="form.email" type="text" name="email"
                                    placeholder="Student Email"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                                <has-error :form="form" field="email"></has-error>
                            </div>
                            <div class="form-group">
                                <select v-model="form.batch" name="batch" id="batch"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('batch') }">
                                    <option value="">Select Student Batch</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                </select>
                                <has-error :form="form" field="batch"></has-error>
                            </div>
                            <div class="form-group">
                                <input v-model="form.password" type="password" name="password" id="password"
                                    placeholder="Password" autocomplete="current-password"
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
                editmode: false,
                students : {},
                form: new Form({
                    id: '',
                    name : '',
                    email : '',
                    password : '',
                    batch : '',

                })
            }
        },
    //------ /OBJECTS--------------------------------------------------------------//
    //------- METHODS--------------------------------------------------------------//
        methods: {
            updateStudent(){
                this.$Progress.start();
                //console.log('Its Updating fine!');
                this.form.put('api/student/'+this.form.id)
                .then(() => {
                    $('#addNewStudent').modal('hide');
                    //success
                    swal.fire(
                        'Update!',
                        'Information has been updated.',
                        'success'
                    )
                    setTimeout(function(){this.loadStudents()}.bind(this), 1000);
                    this.$Progress.finish();
                })
                .catch(() => {
                    this.$Progress.fail();
                    swal.fire({
                        icon: 'error',
                        title: 'Something went wrong!',
                        text: "Please note the form validations",
                    });
                });
            },
            editModal(student){
                this.editmode = true;
                this.form.reset();
                $('#addNewStudent').modal('show');
                this.form.fill(student);
            },
            newModal(){
                this.editmode = false;
                this.form.reset();
                $('#addNewStudent').modal('show');
            },
            deleteStudent(id){
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
                            this.form.delete('api/student/'+id).then(() => {
                                swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                                )
                            setTimeout(function(){this.loadStudents()}.bind(this), 1000);
                            }).catch(() => {
                                swal("Failed!", "There was something wrong.", "Warning");
                            });
                        }
                    })
            },
            loadStudents(){
                axios.get("api/student").then(({data}) => (this.students = data.data));
            },

            createStudent(){
                this.$Progress.start();
                this.form.post('api/student')
                .then(()=>{
                    //Fire.$emit('AfterCreate');
                    $('#addNewStudent').modal('hide');
                    Toast.fire({
                        icon: 'success',
                        title: 'Signed in successfully'
                    });
                    setTimeout(function(){this.loadStudents()}.bind(this), 2500);
                    this.$Progress.finish();
                })
                .catch(()=>{

                })
                
            }
        },
    //------ /METHODS--------------------------------------------------------------//
    //------- FUNCTION--------------------------------------------------------------//
        created() {
            this.loadStudents();
            //Fire.$on('AfterCreate',() => {
            //    this.loadStudents();
            //});
            //setTimeout(function(){this.loadStudents()}.bind(this), 5000);
            //setInterval(() => this.loadStudents(), 10000);
        }
    //------ /FUNCTION--------------------------------------------------------------//
    } 
</script>
