<style>
    
</style>
<template>
<div >
    <div class="overview">
        <div class="container-fluid">
            <div class="intro mb-3">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-6 shadow-sm">
                        <h2 class="purple headblast">Overview</h2>
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="col-md-6 text-center">
                        <img :src="'/img/svg/landing.svg'" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------ Table : User List ----------------------------------------------------->
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card text-dark bg-transparent border border-secondary mt-3">
              <div class="card-header bg-dark ">
                <h3 class="card-title text-light">List of Papers</h3>

                <div class="card-tools">
                  <button class="btn btn-success border border-light" @click="newModal">
                      Create Paper 
                      <div class="fas fa-copy fa-fw yellow"></div></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap text-dark">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th>Category</th>
                      <th>Tutor</th>
                      <th>Created at</th>
                      <th>Modify</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr v-for="paper in papers" :key="paper.id" class="text-light">
                      <td>{{paper.id}}</td>
                      <td>{{paper.title}}</td>
                      <td>{{paper.category}}</td>
                      <td>{{paper.tutor | upText}}</td>
                      <td>{{paper.created_at | myDate}}</td>
                      <td>
                            <a href="#" @click="editModal(paper)">
                                <i class="fa fa-edit blue"></i>
                            </a>
                            /
                            <a href="#" @click="deleteUser(paper.id)">
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
        <div class="modal fade" id="createPaper" tabindex="-1" role="dialog" aria-labelledby="createPaperLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <!------ Modal: Button ----------------------------------------------------->
                    <div class="modal-header">
                        <h5 class="modal-title text-dark" id="createPaperLabel">Create New Paper</h5>
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <!----- /Modal: Button ----------------------------------------------------->
                <!------ Modal: Body ----------------------------------------------------->
                    <form @submit.prevent="createPapers()" @keydown="form.onKeydown($event)">
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="form.title" type="text" name="title"
                                    placeholder="Paper Title"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('title') }">
                                <has-error :form="form" field="title"></has-error>
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
    </div>
    <!----- /Modal: Add_New ----------------------------------------------------->
    </div>
</template>

<script>
    export default {  
    //------- OBJECTS--------------------------------------------------------------//
        data() {
            return {
                
                papers : {},
                form: new Form({
                    title : '',

                })
            }
        },
    //------ /OBJECTS--------------------------------------------------------------//
    //------- METHODS--------------------------------------------------------------//
        methods: {
/*
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
*/
            newModal(){
                this.form.reset();
                $('#createPaper').modal('show');
            },
            loadPapers(){
                axios.get("api/exampapers")
                .then(({ data }) => (this.papers = data.data));
            },

            createPapers(){
                this.$Progress.start();
                this.form.post('api/exampapers')
                .then(()=>{
                    //Fire.$emit('AfterCreate');
                    $('#createPaper').modal('hide');
                    Toast.fire({
                        icon: 'success',
                        title: 'Created Successfully'
                    });
                    window.location.href = '/createPapers/questions';
                    
                })
                .catch(()=>{
                    swal("Failed!", "There was something wrong.", "Warning");
                })
            }
        },
    //------ /METHODS--------------------------------------------------------------//
    //------- FUNCTION--------------------------------------------------------------//
        created() {
            this.loadPapers();
            //Fire.$on('AfterCreate',() => {
            //    this.loadUsers()
            //});
            //setTimeout(() => this.loadUsers(), 5000);
            //setInterval(() => this.loadUsers(), 10000);
        },
/*
        deleteUser(){
            this.deleteUser();
        }
*/
    //------ /FUNCTION--------------------------------------------------------------//

    }
</script>