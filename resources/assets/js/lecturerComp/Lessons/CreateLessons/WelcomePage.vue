<template>
  <div class="overview">
    <div class="container">
      <div class="intro mb-3">
        <div class="row">
          <div class="col-md-12 shadow mb-2">
            <h2 class="text-primary headblast">Topics that will be covered</h2>
            <form @submit.prevent="uploadTopics()">
              <div class="form-group">
                <ckeditor :editor="editor" v-model="editorData" :config="editorConfig" :row="10"></ckeditor>
              </div>
              <div class="form-group offset-10">
                <button type="submit" class="btn btn-success">Submit Topics</button>
              </div>
            </form>
            
          
          </div>
          <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="mt-3">
          <router-link to="/CreateLessons/Design" class="text-dark">
            <button type="button" class="btn btn-primary btn-lg btn-block">
              <i class="fas fa-arrow-right"></i>
                &nbsp;
                Let's go when your ready
              </button>
          </router-link>
        </div>
      </div>
    </div>

  </div>
          
</template>

<script>
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

    export default {
        name: 'app',
        data() {
            return {
                editor: ClassicEditor,
                editorData: '<p>Content of the editor.</p>',
                editorConfig: {
                    toolbar: [ 
                      'heading',
                      'bold', 
                      'italic', 
                      '|', 
                      'link', 
                      'bulletedList',
                      'numberedList',
                      'undo',
                      'redo',
                       
                      'alignment',]
                }
            };
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
