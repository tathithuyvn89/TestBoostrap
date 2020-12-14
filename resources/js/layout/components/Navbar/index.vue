<template>
  <b-navbar  toggleable="lg" type="dark">

    <b-navbar-brand @click.prevent.stop="$emit('toggle')">
        <i class="icofont-navigation-menu" id="toggle-menu" />
    </b-navbar-brand>
    <b-navbar-toggle target="nav-collapse" />

    <b-collapse id="nav-collapse" is-nav class="d-none d-lg-block">
      <b-navbar-nav id="text-name">
        {{ title }}
      </b-navbar-nav>

      <b-navbar-nav class="ml-auto">

        <LangSelector class="item-nav" />

        <b-dropdown right text="Right align" class="item-nav">
          <template v-slot:button-content>
            <b-icon icon="person-circle" font-scale="1.0" class="icon-user" />
          </template>
          <b-dropdown-item class="text">Settings</b-dropdown-item>
          <b-dropdown-item class="text">Logout</b-dropdown-item>
        </b-dropdown>
      </b-navbar-nav>
    </b-collapse>

  </b-navbar>
</template>

<script>
import LangSelector from '../LangSelector/index';

export default {
    name: 'Navbar',
    components: {
        LangSelector,
    },
    data() {
        return {
            title: 'Dashboard',
        }
    }
}
</script>

<style>
.navbar{
    background-color: #fff;
    border-bottom: 1px solid #dee4ec;
    width: 100%;
    top: 0;
    position: sticky;
    z-index: 999;
}

.navbar .nav-link{
    color: #5b6e88 !important;
}

.navbar a i{
    color: #5b6e88;
    font-size: 20px;
}

@media(max-width: 768px){
    .navbar-dark .navbar-toggler {
        border-color:transparent;
    }
}

#text-name {
    font-size: 19px;
}

.text a {
    color: black;
    text-decoration: none;
}

#selectStore {
    width: 200px;
}
#selectApp {
    width: 250px;
    margin-right: 10px;
}
.icon-user {
  margin-right: 5px;
}
.item-nav {
  margin-left: 10px;
  margin-right: 10px;
}
.display-full {
  display: flex;
}
i#toggle-menu {
  color: #000;
}
</style>

