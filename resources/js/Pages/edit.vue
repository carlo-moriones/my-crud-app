<script setup>
import {useForm} from '@inertiajs/vue3';
import {router} from '@inertiajs/vue3';

const props=defineProps({
    errors: Object,
    book: Object
});

const form = useForm({
    title:props.book.title,
    author:props.book.author,
});

function submit(id) {
    //alert(id);
    router.put('/books/'+id,form);
}
</script>

<template>
<br>
<div class="card col-6 offset-3">
  <div class="card-header">
    Edit a Book
  </div>
  <div class="card-body">
    <form @submit.prevent="submit(book.id)">
  <div class="mb-3">
    <label for="bookTitle" class="form-label">Title</label>
    <input type="text" id="bookTitle" v-model="form.title" class="form-control">
    <div class="text-danger text-xs" v-if="errors.title">{{ errors.title }}</div>

  </div>
  <div class="mb-3">
    <label for="bookAuthor" class="form-label">Author</label>
    <input type="text" id="bookAuthor" v-model="form.author" class="form-control">
    <div class="text-danger text-xs" v-if="errors.author">{{ errors.author }}</div>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
</template>