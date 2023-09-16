<script setup>
import { useForm } from '@inertiajs/vue3';
import { router } from '@inertiajs/vue3';

const form = useForm({
    title:null,
    author:null,
});

function submit(){
    router.post('/books',form);

};
</script>


<template>
<div class="card">
  <div class="card-header">
    Books
  </div>
  <div class="card-body">
    <form @submit.prevent="submit">
  <div class="mb-3">
    <label for="bookTitle" class="form-label">Title</label>
    <input type="text" id="bookTitle" v-model="form.title" class="form-control">
    
  </div>
  <div class="mb-3">
    <label for="bookAuthor" class="form-label">Author</label>
    <input type="text" id="bookAuthor" v-model="form.author" class="form-control">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
</template>