import './bootstrap';

import {createApp} from "vue"
import UserList from './components/users/UsersList.vue'

const app = createApp({})

app.component('usersList', UserList)

app.mount('#app')
