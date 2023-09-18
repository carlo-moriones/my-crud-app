<script setup>
defineProps({books:Object});
import{router} from '@inertiajs/vue3';

function destroy(id) {
    //alert(id);
    router.delete('/books/'+id);
}

function edit(id) {
    //alert(id);
    router.get('/books/'+id+'/edit');
}
</script>

<template>
    <br>

    <div class="col-6 offset-3">
        <div v-if="$page.props.flash.message" class="alert alert-success">
            <strong>{{ $page.props.flash.message }}</strong>
        </div>
    </div>

    <div class="card col-6 offset-3">
        <div class="card-header">
        Create a Book
    </div>
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
                        <button @click="edit(book.bookId)" class="btn btn-outline-primary">Edit</button>
                        <button @click="destroy(book.bookId)" class="btn btn-outline-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>