<!DOCTYPE html>
<?php
session_start();
include_once 'conndb.php';
include_once 'header.php';
?>

<div class="jumbotron pb-0 pt-3 mx-5 l-20 ">
  <h2>Birth Certificates</h2>

<ul class="nav nav-tabs  mb-0 mx-auto" style="width: 50%;">
  <li class="nav-item">
    <a class="nav-link" href="birth.php">Certificates</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="birth_new.php">New certificate</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Update certificate</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
</div>

<div class = "mx-5">

  <form>
  <div class="form-group row">
    <label for="cname" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="cname" name="cname" placeholder="Name of the child" required>
    </div>
  </div>

  <div class="form-group row">
  <legend class="col-sm-2 col-form-label">Date of birth</legend>
  <div class="col-sm-10">
  <select class="custom-select col-sm-1" name="year" id="yy" required>
    <option selected>Year</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
    <option value="2024">2024</option>
    <option value="2025">2025</option>
    <option value="2026">2026</option>
    <option value="2027">2027</option>
    <option value="2028">2028</option>
    <option value="2029">2029</option>
    <option value="2030">2030</option>
    <option value="2031">2031</option>
    <option value="2032">2032</option>
    <option value="2033">2033</option>
    <option value="2034">2034</option>
    <option value="2035">2035</option>
    <option value="2036">2036</option>
    <option value="2037">2037</option>
    <option value="2038">2038</option>
    <option value="2039">2039</option>
    <option value="2040">2040</option>
  </select>

  <select class="custom-select col-sm-1 pl-1" name="month" id="mm" required>
    <option  selected>Month</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
  </select>

  <select class="custom-select col-sm-1" name="day" id="dd" required>
    <option selected>Day</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>

  </select>
</div>

</div>

  <div class="form-group row">
    <label for="bplace" class="col-sm-2 col-form-label">Place of birth</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bplace" name="bplace" placeholder="Place of birth" required>
    </div>
  </div>


  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Sex</legend>
      <div class="col-sm-10">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="sex" id="sex1" value="Male" checked>
          <label class="form-check-label" for="sex1">
            Male
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="sex" id="sex2" value="Female">
          <label class="form-check-label" for="sex2">
            Female
          </label>
        </div>
      </div>
    </div>
  </fieldset>

  <div class="form-group row">
    <label for="fname" class="col-sm-2 col-form-label">Father's name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fname" name="fname" placeholder="Name of the father">
    </div>
  </div>

  <div class="form-group row">
    <label for="fbplace" class="col-sm-2 col-form-label">Father's place of birth</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fbplace" name="fbplace" placeholder="Father's place of birth">
    </div>
  </div>

  <div class="form-group row">
  <legend class="col-sm-2 col-form-label">Father's Date of birth</legend>
  <div class="col-sm-10">
  <select class="custom-select col-sm-1" name="fyear" id="yy">
    <option selected>Year</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
    <option value="2024">2024</option>
    <option value="2025">2025</option>
    <option value="2026">2026</option>
    <option value="2027">2027</option>
    <option value="2028">2028</option>
    <option value="2029">2029</option>
    <option value="2030">2030</option>
    <option value="2031">2031</option>
    <option value="2032">2032</option>
    <option value="2033">2033</option>
    <option value="2034">2034</option>
    <option value="2035">2035</option>
    <option value="2036">2036</option>
    <option value="2037">2037</option>
    <option value="2038">2038</option>
    <option value="2039">2039</option>
    <option value="2040">2040</option>
  </select>

  <select class="custom-select col-sm-1 pl-1" name="fmonth" id="mm" >
    <option  selected>Month</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
  </select>

  <select class="custom-select col-sm-1" name="fday" id="dd">
    <option selected>Day</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
  </select>
</div>
</div>

<div class="form-group row">
    <label for="flocation" class="col-sm-2 col-form-label">Father's location</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="flocation" name="flocation" placeholder="father's location">
    </div>
  </div>

  <div class="form-group row">
    <label for="foccupation" class="col-sm-2 col-form-label">Father's occupation</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="foccupation" name="foccupation" placeholder="father's occupation">
    </div>
  </div>

<div class="form-group row">
    <label for="mname" class="col-sm-2 col-form-label">Mother's name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="mname" name="mname" placeholder="Name of the mother">
    </div>
  </div>

  <div class="form-group row">
    <label for="mbplace" class="col-sm-2 col-form-label">mather's place of birth</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fbplace" name="fbplace" placeholder="Father's place of birth">
    </div>
  </div>

  <div class="form-group row">
  <legend class="col-sm-2 col-form-label">Father's Date of birth</legend>
  <div class="col-sm-10">
  <select class="custom-select col-sm-1" name="fyear" id="yy">
    <option selected>Year</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
    <option value="2024">2024</option>
    <option value="2025">2025</option>
    <option value="2026">2026</option>
    <option value="2027">2027</option>
    <option value="2028">2028</option>
    <option value="2029">2029</option>
    <option value="2030">2030</option>
    <option value="2031">2031</option>
    <option value="2032">2032</option>
    <option value="2033">2033</option>
    <option value="2034">2034</option>
    <option value="2035">2035</option>
    <option value="2036">2036</option>
    <option value="2037">2037</option>
    <option value="2038">2038</option>
    <option value="2039">2039</option>
    <option value="2040">2040</option>
  </select>

  <select class="custom-select col-sm-1 pl-1" name="fmonth" id="mm" >
    <option  selected>Month</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
  </select>

  <select class="custom-select col-sm-1" name="fday" id="dd">
    <option selected>Day</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
  </select>
</div>
</div>

<div class="form-group row">
    <label for="flocation" class="col-sm-2 col-form-label">Father's location</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="flocation" name="flocation" placeholder="father's location">
    </div>
  </div>

  <div class="form-group row">
    <label for="foccupation" class="col-sm-2 col-form-label">Father's occupation</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="foccupation" name="foccupation" placeholder="father's occupation">
    </div>
  </div>






  <div class="form-group row">
    <div class="col-sm-2">Checkbox</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Example checkbox
        </label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Create</button>
    </div>
  </div>
</form>
</div>
