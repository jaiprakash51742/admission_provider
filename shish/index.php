<style type="text/css">
  
*{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  font-family: 'Raleway', sans-serif;
}

body{ background: #3598dc; }

.cont{
  position: relative;
  width: 25%;
  height: 400px;
  padding: 10px 25px;
  margin: 10vh auto;
  background: #fff;
  border-radius: 8px;
}

.form{ width: 100%; height: 100%; }

h1, h2, .user, .pass{ 
  text-align: center;
  display: block;
}

h1{ 
  color: #606060;
  font-weight: bold;
  font-size: 40px;
  margin: 30px auto;
}

.user, .pass, .login{
  width: 100%;
  height: 45px;
  border: none;
  border-radius: 5px;
  font-size: 20px;
  font-weight: lighter;
  margin-bottom: 30px;
}

.user, .pass{ background: #ecf0f1; }

.login{
  color: #fff;
  cursor: pointer;
  margin-top: 20px;
  background: #3598dc;
  transition: background 0.4s ease;
}

.login:hover{ background: #3570dc; }

@media only screen and (min-width : 280px) {
  .cont{ width: 90% }
}

@media only screen and (min-width : 480px) {
  .cont{ width: 60% }
}

@media only screen and (min-width : 768px) {
  .cont{ width: 40% }
}

@media only screen and (min-width : 992px) {
  .cont{ width: 30% }
}

h2{ color: #fff; margin-top: 25px; }

</style>
<div class="cont">
  
  <div class="form">
    <form action="login.php" method="post">
      <h1>Login</h1>
      <input type="text" name="username" class="user" placeholder="Username"/>
      <input type="password" name="password"  class="pass" placeholder="Password"/>
      <button type="submit" class="login">Login</button>
    </form>
  </div>
  
</div>