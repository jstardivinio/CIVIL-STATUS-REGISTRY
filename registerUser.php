<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Civil Status Registry</title>
    <link href="../style/style.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
      <h1 class="title">Civil Status Registery</h1>
    <div class ="main">
      <p>
        <h1>register here</h1>
      </p>
      <div class="form">
        <form class=s"login" action="registerUser.inc.php" method="post">
          <table>
          <tr>
            <td>ID</td>
            <td><input type="text" name="id" value="" required></td>
          </tr>
          <tr>
            <td>First name</td>
            <td><input type="text" name="fname" required></td>
          </tr>
          <tr>
            <td>Last name</td>
            <td><input type="text" name="lname" required></td>
          </tr>
          <tr>
            <td>Sex</td>
            <td>
              <input type ="radio" name="sex" value="male" checked>Male
              <input type="radio" name="sex" value="female">Female
            </td>
          </tr>
          <tr>
            <td>Birth date</td>
            <td><select name ="year" >
              <option value="1980" selected>1980</option>
              <option value="1981">1981</option>
              <option value="1982">1982</option>
              <option value="1983">1983</option>
              <option value="1984">1984</option>
              <option value="1985">1985</option>
              <option value="1986">1986</option>
              <option value="1987">1987</option>
              <option value="1988">1988</option>
              <option value="1989">1989</option>
              <option value="1990">1990</option>
              <option value="1991">1991</option>
              <option value="1992">1992</option>
              <option value="1993">1993</option>
              <option value="1994">1994</option>
              <option value="1995">1995</option>
              <option value="1996">1996</option>
              <option value="1997">1997</option>
              <option value="1998">1998</option>
              <option value="1999">1999</option>
              <option value="2000">2000</option>
              <option value="2001">2001</option>
              <option value="2002">2002</option>
              <option value="2003">2003</option>
              <option value="2004">2004</option>
              <option value="2005">2005</option>
              <option value="2006">2006</option>
              <option value="2007">2007</option>
              <option value="2008">2008</option>
              <option value="2009">2009</option>
            </select>
            <select name ="month">
              <option value ="01" selected>01</option>
              <option value ="02">02</option>
              <option value ="03">03</option>
              <option value ="04">04</option>
              <option value ="05">05</option>
              <option value ="06">06</option>
              <option value ="07">07</option>
              <option value ="08">08</option>
              <option value ="09">09</option>
              <option value ="10">10</option>
              <option value ="11">11</option>
              <option value ="12">12</option>
            </select>
            <select name="day">
              <option value ="01" selected>01</option>
              <option value ="02">02</option>
              <option value ="03">03</option>
              <option value ="04">04</option>
              <option value ="05">05</option>
              <option value ="06">06</option>
              <option value ="07">07</option>
              <option value ="08">08</option>
              <option value ="09">09</option>
              <option value ="10">10</option>
              <option value ="11">11</option>
              <option value ="12">12</option>
              <option value ="13">13</option>
              <option value ="14">14</option>
              <option value ="15">15</option>
              <option value ="16">16</option>
              <option value ="17">17</option>
              <option value ="18">18</option>
              <option value ="19">19</option>
              <option value ="20">20</option>
              <option value ="21">21</option>
              <option value ="22">22</option>
              <option value ="23">23</option>
              <option value ="24">24</option>
              <option value ="25">25</option>
              <option value ="26">26</option>
              <option value ="27">27</option>
              <option value ="28">28</option>
              <option value ="29">29</option>
              <option value ="30">30</option>
              <option value ="31">31</option>
            </select>
            </td>
          </tr>
          <tr>
            <td>Status</td>
            <td>
              <select name="status">
                <option value="USER"  selected>USER</option>
                <option value="ADMIN">ADMIN</option>
            </td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="password" value="" required></td>
          </tr>
          <tr>
            <td>Confirm password</td>
            <td><input type="password" name="confirm_pwd" required></td>
          </tr>
          <tr>
            <td></td>
            <td class="submit"><input type="submit" name="register" value="register"></td>
          </tr>
          </table>
        </form>
      </div>
    </div>
  </body>
</html>
