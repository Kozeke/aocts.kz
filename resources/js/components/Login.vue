<template>
  <div class="main flex-row">
    <div @click="$router.push({ name: 'home' })" class="logo">DARIS</div>
    <div class="login-left">
      <div class="login-text">
        <div class="head">С Возвращением!</div>
        <div class="input-form flex-col">
          <label class="label">Электронная почта</label>
          <input
            v-on:keyup="validateForm($event)"
            v-model="email"
            type="text"
            id="email"
            placeholder="Введите ваш электронный адрес"
          />
          <div class="err" id="err-email">
            <svg
              width="4"
              height="13"
              viewBox="0 0 4 13"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z"
                fill="#E4002F"
              />
            </svg>
          </div>
        </div>
        <div class="input-form flex-col">
          <label class="label">Пароль</label>
          <input
            v-on:keyup="validateForm($event)"
            v-model="password"
            type="password"
            id="password"
            placeholder="Введите пароль"
          />
          <div class="err" id="err-password">
            <svg
              width="4"
              height="13"
              viewBox="0 0 4 13"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M2.01301 0.703613C2.61266 0.703613 3.09767 1.23401 3.08003 1.87237L2.90366 8.42492C2.89044 8.94124 2.49361 9.3496 2.0086 9.3496C1.52359 9.3496 1.12677 8.93654 1.11354 8.42492L0.941582 1.87237C0.928355 1.23401 1.40895 0.703613 2.01301 0.703613ZM1.99978 12.5555C1.38691 12.5555 0.888672 12.0251 0.888672 11.3726C0.888672 10.7202 1.38691 10.1898 1.99978 10.1898C2.61266 10.1898 3.11089 10.7202 3.11089 11.3726C3.11089 12.0251 2.61266 12.5555 1.99978 12.5555Z"
                fill="#E4002F"
              />
            </svg>
          </div>
        </div>
        <div class="check-form flex-row">
          <input type="checkbox" />
          <label class="label">Сохранить пароль</label>
        </div>
        <div @click="logIn()" class="login-enter">Войти</div>
        <div class="login-last flex-row">
          <label @click="$router.push({ name: 'register' })" class="left">Регистрация</label>
          <label @click="$router.push({ name: 'forget' })" class="right">Вы забыли пароль?</label>
        </div>
      </div>
    </div>
    <div class="login-right"></div>
  </div>
</template>
<script>
import axios from "axios"

export default {
  data() {
    return {
      email: "",
      password: "",
      errors: ""
    };
  },
  methods: {
    validateForm(e) {
      const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if (e.target.id === "email") {
        if (!pattern.test(String(e.target.value).toLowerCase())) {
          document.getElementById("err-email").style.visibility = "visible";
          e.srcElement.classList.add("error");
        } else {
          document.getElementById("err-email").style.visibility = "hidden";
          e.srcElement.classList.remove("error");
        }
      }
      if (e.target.id === "password") {
        if (String(e.target.value).length === 0) {
          document.getElementById("err-password").style.visibility = "visible";
          e.srcElement.classList.add("error");
        } else {
          document.getElementById("err-password").style.visibility = "hidden";
          e.srcElement.classList.remove("error");
        }
      }
    },
    logIn() {
      if (this.email === "") {
        document.getElementById("err-email").style.visibility = "visible";
        document.getElementById("email").classList.add("error");
        return;
      }
      if (this.password === "") {
        document.getElementById("err-password").style.visibility = "visible";
        document.getElementById("password").classList.add("error");
        return;
      }
      var data = {
        email: this.email,
        password: this.password
      };

      axios
        .post("/api/login", data)
        .then(res => {
          localStorage.setItem('xyzSessionAo', JSON.stringify(res.data));
          this.$router.push({ name : 'profile' })
        })
        .catch(err => {
          if (err.response.status === 402) {
            alert("Профиль проверяется модератором.");
          }
          if (err.response.status === 401) {
            alert("Почта или логин не правильно.");
          }
          this.errors = Object.assign({}, err.response.data.error);
          console.log(this.errors);
          console.log(err);
        });
    }
  }
};
</script>
<style lang="scss" scoped>
.main {
  position: relative;
  width: 100%;
  background: #ffffff;
  height: 900px;
  .logo {
    cursor: pointer;
    position: absolute;
    left: calc(19%);
    width: 160px;
    height: 50px;
    top: 25px;
    background: #f6f6f8;
    font-size: 16px;
    line-height: 50px;
    color: #06397d;
    font-weight: 500;
    z-index: 99;
  }
  .login-left {
    position: relative;
    width: 48%;
    .login-text {
      width: 320px;
      position: relative;
      top: 200px;
      left: 40%;
      color: #06397d;
      .head {
        text-align: left;
        font-weight: bold;
        font-size: 32px;
        line-height: 146.28%;
        margin-bottom: 10px;
      }
      .input-form {
        position: relative;
        margin-top: 30px;
        height: 86px;
        .label {
          text-align: left;
          font-weight: 500;
          font-size: 16px;
          line-height: 20px;
        }
        input {
          cursor: initial;
          padding-left: 18px;
          text-align: left;
          margin-top: 8px;
          height: 50px;
          font-weight: normal;
          font-size: 14px;
          line-height: 22px;
          color: #000000;
          background: #ffffff;
          border: 1px solid #e6eaf3;
          box-sizing: border-box;
          border-radius: 6px;
        }
        .error {
          border: 1px solid #e4002f !important;
          box-shadow: 0px 0px 10px rgba(228, 0, 47, 0.2) !important;
        }
        .err {
          visibility: hidden;
          position: absolute;
          top: 50px;
          right: 18px;
          width: 20px;
          height: 20px;
          border-radius: 50%;

          background: #ffffff;
          border: 1px solid #e4002f;
          box-sizing: border-box;
          svg {
            margin-top: -8px;
          }
        }
        ::placeholder {
          font-weight: normal;
          font-size: 14px;
          line-height: 22px;
          color: rgba(111, 111, 111, 0.25);
        }
      }
      .check-form {
        margin-top: 30px;
        input {
          cursor: pointer;
          margin-left: 3px;
          margin-top: 3px;
          -ms-transform: scale(1.5); /* IE */
          -moz-transform: scale(1.5); /* FF */
          -webkit-transform: scale(1.5); /* Safari and Chrome */
          -o-transform: scale(1.5); /* Opera */
          transform: scale(1.5);
          padding: 6px;
        }
        .label {
          margin-left: 9px;
          text-align: left;
          font-weight: 500;
          font-size: 16px;
          line-height: 20px;
        }
      }
      .login-enter {
        cursor: pointer;
        padding-top: 17px;
        height: 55px;
        margin-top: 40px;
        background: #4985ff;
        box-shadow: 0px 0px 10px rgba(111, 111, 111, 0.25);
        border-radius: 6px;
        font-weight: bold;
        font-size: 16px;
        line-height: 20px;
        text-align: center;
        color: #ffffff;
      }
      .login-last {
        text-align: left;
        position: relative;
        margin-top: 30px;
        font-weight: 600;
        font-size: 16px;
        line-height: 20px;
        /* identical to box height */
        color: #4985ff;
        .left,
        .right {
          cursor: pointer;
        }
        .right {
          margin-left: 40px;
        }
      }
    }
  }
  .login-right {
    position: relative;
    width: 52%;
    background-image: linear-gradient(
        rgba(214, 230, 255, 0.3),
        rgba(214, 230, 255, 0.3)
      ),
      url("/images/login-layout.png");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
  }
}
@media screen and (max-width: 1420px) {
  .login-left {
    width: 58% !important;
    .login-text {
      left: 33% !important;
    }
  }
  .login-right {
    width: 42% !important;
  }
}
@media screen and (max-width: 1020px) {
  .logo {
    left: calc(50% - 160px) !important;
  }
  .login-left {
    width: 100% !important;
    margin: 0 auto;
    .login-text {
      margin: 0 auto;
      left: auto !important;
      .head {
        font-size: 28px !important;
      }
      .input-form {
        .label {
          font-size: 15px !important;
        }
        input {
          font-size: 14px !important;
        }
        ::placeholder {
          font-size: 14px !important;
        }
      }
      .check-form {
        .label {
          font-size: 15px !important;
        }
      }
      .login-enter {
        font-size: 15px !important;
      }
      .login-last {
        font-size: 15px !important;
      }
    }
  }
  .login-right {
    width: 0 !important;
  }
}
@media screen and (max-width: 520px) {
  .logo {
    left: calc(50% - 130px) !important;
  }
  .login-left {
    width: 100% !important;
    margin: 0 auto;
    .login-text {
      top: 140px !important;
      left: auto !important;
      width: 260px !important;
      .head {
        font-size: 24px !important;
      }
      .input-form {
        margin-top: 20px !important;
        .label {
          font-size: 14px !important;
        }
        input {
          font-size: 12px !important;
        }
        ::placeholder {
          font-size: 12px !important;
        }
      }
      .check-form {
        margin-top: 20px !important;
        .label {
          font-size: 12px !important;
        }
      }
      .login-enter {
        margin-top: 30px !important;
        font-size: 12px !important;
      }
      .login-last {
        font-size: 12px !important;
      }
    }
  }
}
</style>

