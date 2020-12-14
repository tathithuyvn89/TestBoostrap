<template>
  <div class="container-fluid">
    <div class="container">
      <div class="col-xl-6 col-lg-6 mx-auto login-container">
        <div class="row">

          <div class="col-lg-12 col-md-12 no-padding">
            <div class="login-box">
              <h5>Welcome Back!</h5>
              <div class="login-row row no-margin">
                <label for=""><i class="fas fa-envelope" /> Username</label>
                <input v-model="username" type="email" class="form-control form-control-sm" spellcheck="false">
              </div>

              <div class="login-row row no-margin">
                <label for=""><i class="fas fa-unlock-alt" /> Password</label>
                <input v-model="password" type="password" class="form-control form-control-sm">
              </div>

              <div class="login-row row forrr no-margin">
                <p> <input type="checkbox"> Remember Me</p>
                <p><a class="vgh" href="">Forget Password?</a></p>
              </div>

              <div class="login-row btnroo row no-margin">
                <button type="button" class="btn btn-primary btn-sm" @click="login()"> Sign In</button>
              </div>
              <div class="login-row donroo row no-margin">
                <p>Dont have an Account ? <a href="">Sign Up</a></p>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-7 col-md-6 img-box">
            <img src="../assets/logo.png" alt="" class="img-demo">
          </div> -->
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Login',
  data() {
    return {
      username: '',
      password: '',
    };
  },
  beforeCreate: function() {
    document.body.className = 'login';
  },
  methods: {
    login() {
      console.log('Username: ' + this.username);
      console.log('Password: ' + this.password);
    },
  },
};
</script>

<style scoped>
/* ===================================== Import Variables ================================== */
@import url(https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700);
@import url(https://fonts.googleapis.com/css?family=Arimo:300,400,400italic,700,700italic);
/* ===================================== Basic CSS ==================================== */
* {
  margin: 0px;
  padding: 0px;
  list-style: none;
}

img {
  max-width: 100%; }

a {
  text-decoration: none;
  outline: none;
  color: #3751fe;
  font-weight: 600;}

a:hover {
  color: #3751fe;
}

ul {
  margin-bottom: 0;
  padding-left: 0; 
}

a:hover,
a:focus,
input,
textarea {
  text-decoration: none;
  outline: none; 
}

.center {
  text-align: center; 
}

.left {
  text-align: left; 
}

.right {
  text-align: right; 
}

.cp {
  cursor: pointer; 
}

html, body {
  height: 100%; 
}

p {
  margin-bottom: 0px;
  width: 100%; 
}

.no-padding {
  padding: 0px; 
}

.no-margin {
  margin: 0px; 
}

.hid {
  display: none; 
}

.top-mar {
  margin-top: 15px; 
}

.h-100 {
  height: 100%; 
}

::placeholder {
  color: #747f8a !important;
  font-size: 13px;
  opacity: .5 !important; 
}

.container-fluid {
  padding: 0px;
  position: absolute;
  top: 150px;
}

h1, h2, h3, h4, h5, h6 {
  color: #545454; 
}

body {
  background-color: #f1f1f145 !important;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-rendering: optimizeLegibility;
  color: #6A6A6A;
  overflow-x: hidden; 
}

.session-title {
  padding: 30px;
  margin: 0px;
  margin-bottom: 20px; 
}
  @media screen and (max-width: 767px) {
    .session-title {
      padding: 5px; } 
    }

  .session-title h2 {
    width: 100%;
    text-align: center;
    font-weight: 600;
    margin-bottom: 0px; 
  }

  .session-title p {
    max-width: 850px;
    text-align: center;
    float: none;
    margin: auto;
    font-size: .9rem;
    margin-top: 6px; 
  }

  .session-title span {
    float: right;
    font-style: italic; 
  }

.inner-title {
  padding: 20px;
  padding-left: 0px;
  margin: 0px;
  margin-bottom: 10px;
  padding-bottom: 0px;
  border-bottom: 1px solid #ccccccc4;
  display: block;
  padding-right: 0px; 
}
  .inner-title h2 {
    width: 100%;
    text-align: center;
    font-size: 1rem;
    font-weight: 600;
    text-align: left;
    border-bottom: 1px solid #863dd9;
    padding-bottom: 10px;
    margin-bottom: 0px;
    width: 300px; 
  }
  .inner-title p {
    width: 100%;
    text-align: center; 
  }
  .inner-title .btn {
    float: right;
    margin-top: -38px;
    font-weight: 600;
    font-size: .8rem; 
  }

.page-nav {
  background-size: 100%;
  padding: 68px;
  text-align: center;
  background-color: #eaeaea; 
}
  .page-nav ul {
    float: none;
    margin: auto; 
  }
  @media screen and (max-width: 992px) {
    .page-nav {
      background-size: auto; } 
    }
  @media screen and (max-width: 767px) {
    .page-nav {
      padding-top: 200px;
      padding-bottom: 40px; } 
    }
  @media screen and (max-width: 356px) {
    .page-nav {
      padding-top: 200px;
      padding-bottom: 40px; } 
    }

  .page-nav h2 {
    font-size: 28px;
    width: 100%;
    font-weight: 700;
    color: #444; 
  }
    @media screen and (max-width: 600px) {
      .page-nav h2 {
        font-size: 26px; } 
      }
  .page-nav ul li {
    float: left;
    margin-right: 10px;
    margin-top: 10px;
    font-size: 16px;
    font-size: .93rem;
    font-weight: 600;
    color: #444; 
  }
    .page-nav ul li i {
      width: 30px;
      text-align: center;
      color: #444; 
    }
    .page-nav ul li a {
      color: #444;
      font-size: .93rem;
      font-weight: 600; 
    }

.btn-success {
  background-color: #009e76;
  border-color: #009e76; 
}

.btn-success:hover {
  background-color: #009e76 !important;
  border-color: #009e76 !important; 
}

.btn-success:active {
  background-color: #009e76 !important;
  border-color: #009e76 !important; 
}

.btn-success:focus {
  background-color: #009e76 !important;
  border-color: #009e76 !important;
  box-shadow: none !important; 
}

.btn {
  box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
  border-radius: 2px; 
}

.form-control:focus {
  box-shadow: none !important;
  border: 1px solid #CCC; 
}

.btn-light {
  background-color: #FFF;
  color: #3F3F3F; 
}

.collapse.show {
  display: block !important; 
}

.form-control:focus {
  box-shadow: none;
  border: 1px solid #CCC; 
}

.form-control {
  background-color: #FFF;
  margin-bottom: 20px; 
}

.form-control:focus {
  background-color: #FFF;
  border-color: #CCC; 
}

.container {
  max-width: 1170px; 
}
  @media screen and (max-width: 575px) {
    .container {
      padding: 10px 15px; } 
    }

/* =================== Header Style Starts Here =================== */
/* body {
  background-color: #f5f5fc;
  background-image: url(../login.jpg); 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
} */

.login-container {
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  background-color: #FFF;
  z-index: 99;
  border-radius: 30px;
}

.img-box {
  padding: 50px 90px;
  margin: auto; 
}

@media screen and (max-width: 767px) {
    .img-box {
        padding-top: 0px; 
    }
    .container-fluid {
        padding: 0px;
        position: absolute;
        top: 30px;
        margin-bottom: 20px;
    }
}

.login-box {
  padding: 80px 50px;
}

.login-box h5 {
    text-align: center;
    margin-bottom: 40px; 
    font-size: 30px;
    color: #000;
}

.login-box label {
    padding: 5px;
    font-size: .9rem;
    font-weight: 600;
    margin-bottom: -15px;
    z-index: 99;
    background-color: #FFF;
    width: auto;
    margin-left: 13px; 
}

.login-box input {
    border-radius: 5px;
    padding-top: 25px;
    padding-bottom: 22px;
    background-color: #FFF;
    font-weight: 600;
    font-size: 15px;
    padding-left: 15px;
    padding-right: 15px;
}

.login-box p {
    margin-bottom: 10px;
    font-size: .9rem; 
}

.login-box p .vgh {
    float: right;
    margin-top: -32px;
    color: #3751fe;
    font-weight: 600; 
}
      
.login-box .login-row .btn {
    font-weight: 600;
    padding-top: 10px;
    padding-bottom: 10px;
}

.login-box .login-row .btn-primary {
    margin-bottom: 20px; 

}

.login-box .donroo {
    margin-top: 15px;
    font-size: .9rem;
    text-align: center; 
}

/*# sourceMappingURL=style.css.map */

button.btn.btn-primary.btn-sm {
  margin-top: 20px;
  width: 100%;
  background-color: tomato;
  border: none;
}

button.btn.btn-primary.btn-sm:hover {
  background-color: #f9e41a;
  color: #000;
}

a {
  color: #3751fe;
  font-weight: 600;
}

.img-demo {
  height: 310px;
}
</style>
