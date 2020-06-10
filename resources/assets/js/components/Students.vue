<template>
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card mt-5">
              <div class="card-header">
                <h3 class="card-title">Student Management System</h3>

                <div class="card-tools">
                  <button class="btn btn-success" data-toggle="modal" data-target="#addNewStudent">Register Student <div class="fas fa-user-plus fa-fw"></div></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Student Name</th>
                      <th>Email</th>
                      <th>Registered</th>
                      <th>Modify</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr v-for="student in students" :key="student.id">
                      <td>{{student.id}}</td>
                      <td>{{student.name}}</td>
                      <td>{{student.email}}</td>
                      <td>{{student.created_at | myDate}}</td>
                      <td>
                          <a href="#"><i class="fa fa-edit blue"></i></a>
                          /
                          <a href="#"> <i class="fa fa-trash red"></i></a>
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
                        <h5 class="modal-title" id="addNewStudentLabel">Student Registration</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <!----- /Modal: Button ----------------------------------------------------->
                <!----- Modal: Body -------------------------------------------------------->
                    <form @submit.prevent="createStudent">
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
                            <button type="submit" class="btn btn-primary">Create</button>
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
                students : {},
                form: new Form({
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
            
            loadStudents(){
                axios.get("api/student").then(({data}) => (this.students = data.data));
            },

            createStudent(){
                this.$Progress.start();
                this.form.post('api/student');
                //Fire.$emit('AfterCreate');
                $('#addNewStudent').modal('hide');
                Toast.fire({
                    icon: 'success',
                    title: 'Signed in successfully'
                });
                setTimeout(function(){this.loadStudents()}.bind(this), 2500);
                this.$Progress.finish();
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
