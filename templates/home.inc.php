<?php
  include "templates/master.inc.php";
  function content() {

?>
 
      <div class="row col-xs-12">
        <h1>Schlocktoberfest <small>The best worst movie festival ever</small></h1>
      </div>
      <div class="row">
        <div class="col-sm-6 lead">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</p>
          <button type="button" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-film" aria-hidden="true"></span> Film Schedule</button>
          <button type="button" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Book Tickets</button>
        </div>
        <div class="col-sm-6">
          <img src="https://placekitten.com/700/400" class="img-responsive" alt="Kitten Image">
        </div>
      </div>
      <div class="row">
          <div class="col-sm-4">
            <h3 class="text-center"> Best Worst Movie (2009) </h3>
            <p>This documentary reviews the making of the film "Troll 2" from the perspective of its child artist, Michael.</p>
          </div>
          <div class="col-sm-4">
            <h3 class="text-center"> Movie Suggestions</h3>
            <form class="form-horizontal" method="post" action="">
              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Movie Title</label>
                <div class="col-sm-10">
                  <input type="Text" class="form-control" id="title" placeholder="Troll 2">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"><small> Subscribe to our monthly newsletter</small>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Submit</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-sm-4">
            <h3 class="text-center"> Our Sponsors</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur.</p>
          </div>
      </div>
<?php

  }
