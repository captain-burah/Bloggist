<template>
  <div class="overview">
    <div class="container">
      <div class="intro mb-3">
        <div class="row">
          <div class="col-md-12 shadow mb-3">
            <h2 class="text-danger headblast">Lesson Contents</h2>
            <form>
              <div class="form-group">
                
              </div>
              <div class="form-group">
                <ckeditor :editor="editor" v-model="editorData" :config="editorConfig" ></ckeditor>
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
