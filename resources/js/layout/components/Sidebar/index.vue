<template>
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">

        <li class="li-dashboard">
            <h3 class="title-dashboard">{{ title }}</h3>
        </li>

        <li class="items" title="Calendar">
            <router-link to="/dashboard/calendar" class="active">
            <div class="item">
                <i class="icofont-calendar" />
                <span>Calendar</span>
            </div>
            </router-link>
        </li>
        
        </ul>
    </div>
</template>

<script>
export default {
    name: 'Sidebar',
    data() {
        return {
            title: 'Dashboard',
        }
    }
}
</script>

<style>
@import url(https://fonts.googleapis.com/css2?family=Cabin:wght@500&display=swap);

#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
    font-family: 'Cabin', sans-serif;
    position: relative;
}
#wrapper.toggled {
    padding-left: 250px;
}
#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 0;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    background: #7386D5;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
#wrapper.toggled #sidebar-wrapper {
    width: 250px;
}
#page-content-wrapper {
    width: 100%;
    position: absolute;
}
#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -250px;
}
.sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
}
.sidebar-nav li {
    line-height: 30px;
}
.sidebar-nav li.items:hover{
    background-color:#6d7ecc;
}

li a.active:focus {
    background-color: #6d7ecc;
}
.items {
    text-indent: 5px;
}
.item {
    overflow:hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    width: 220px;
    display: inline-block;
    vertical-align: middle;
}
.li-dashboard {
    background-color:#6d7fcc;
    display: flex;
    align-items: center;
    justify-content: center;
}
.title-dashboard {
    padding-top: 30px;
    padding-bottom: 30px;
    font-weight: bold;
    color: #fff;
}
.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #fff;
    padding: 15px 0;
    font-size: 16px;
    text-align: left;
}
.sidebar-nav li ul li a{
    font-size: 13px;
}
.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}
.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}
.sidebar-nav > .sidebar-brand a {
    color: #999999;
}
.sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
}
.caret{
    margin-right: 10px;
}
@media(min-width:768px) {
    #wrapper {
        padding-left: 250px;
    }
    #wrapper.toggled {
        padding-left: 0;
    }
    #sidebar-wrapper {
        width: 250px;
    }
    #wrapper.toggled #sidebar-wrapper {
        width: 0;
    }
    #page-content-wrapper {
        position: relative;
    }
    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
    }
}

ul li i {
    margin-right: 10px;
    font-size: 17px;
}

</style>