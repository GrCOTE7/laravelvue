<template>
    <template v-for="user in users">
        <p><span v-text="user.id" /> -
        <span v-text="user.name" class="font-bold" /></p>
    </template>
</template>

<script setup lang="ts">
import { ref } from "vue";
import axios from "axios";

const users = ref([]);

const loadFromServer = async (): Promise<void> => {
    await axios
        .get("api/users")
        .then((res) => (users.value = res.data.data))
        .catch((err) => console.log(err));
};
loadFromServer();
</script>
