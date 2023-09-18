<script setup>
defineProps({books:Object});
import{router} from '@inertiajs/vue3';

function destroy(id) {
    //alert(id);
    router.delete('/books/'+id);
}
</script>

<template>
    <br>
    <div class="card col-6 offset-3">
        <table class="table table-bordered table-hover table-small">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="book in books" :key="book.bookId">
                    <td>{{ book.bookId }}</td>
                    <td>{{ book.title }}</td>
                    <td>{{ book.author }}</td>
                    <td>
                        <button class="btn btn-outline-primary">Edit</button>
                        <button @click="destroy(book.bookId)" class="btn btn-outline-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
            
        </table>
    </div>
</template>