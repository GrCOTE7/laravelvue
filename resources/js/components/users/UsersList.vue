<template>
    <template v-for="user in users">
        <p>
            <span v-text="user.id" /> -
            <span
                v-text="user.name"
                style="font-weight: 600"
                :title="getBooks(user)"
            />
        </p>
    </template>
</template>

<script setup lang="ts">
import { ref } from "vue";
import axios from "axios";

const getBooks= (user)=>{
    let books = user.books;

    // console.log(typeof books)

    if (books.length) {
        return books.map(book=>{
            return (book.title);
        })
    }
        else {
            return "No book\n\nyet"
        };

}

const users = ref([]);

const loadFromServer = async (): Promise<void> => {
    await axios
        .get("api/users")
        .then((res) => (users.value = res.data.data))
        .then((res) => console.log(res))
        .catch((err) => console.log(err));
};
loadFromServer();
</script>
