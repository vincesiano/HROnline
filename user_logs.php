
<?php
include('auth.php');
$_SESSION['previous-page'] = 'createAccount.php';


        $ln = "";
        $fn = "";
        $mn = "";
        $em = "";
        $em2 = "";
        $contact = "";
        $us = "";
        $pas = "";
        $pas2 = "";
        $usererrormsg = "";
        $emailerror = "";
        $erroremail = "";
        $whitespaceerror = "";
        $errormsg = "";   
?>
  <html>
   
   <head>
      <title>User History Logs</title>
      
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css/ripples.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <link type="text/css" href="css/bootstrap-table.css" rel="stylesheet">
  <link rel="shortcut icon" href="favicon.ico" />
  <!-- <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css"> -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap-material-design.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/sidenav.css">


  <style type="text/css">
    a:hover{
    color:white;
  }
  .navi:hover{
                color:white;  
                background-color: #00008B;
            }
  a.active {background-color:#1a1a1a;}
  box-sizing: border-box;
}
* {
  outline: none;
}
::-webkit-scrollbar {
  display: none;
}
/* */
.container {
  margin: 0 auto;
  max-width: 400px;
  text-align: center;
}
.selected-item {
  margin: 20px 0;
}
/* custom select style */
.cusSelBlock {
  height: 50px;
  min-width: 250px;
}
#cusSelectbox {
  height: 100%;
  width: 100%;
}
.s-hidden {
  visibility: hidden;
}
.cusSelBlock {
  display: inline-block;
  position: relative;
  -webkit-perspective: 800px;
  perspective: 800px;
}
.selectLabel {
  position: absolute;
  left: 0;
  top: 0;
  z-index: 9999;
  background-color: #fff;
  border: 1px solid #333;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  color: #333;
  cursor: pointer;
  display: block;
  height: 100%;
  width: 100%;
  letter-spacing: 2px;
  line-height: 50px;
  padding: 0 50px 0 20px;
  text-align: left;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  -webkit-transform-origin: 50% 0%;
  transform-origin: 50% 0%;
  -webkit-transition: -webkit-transform 300ms;
  transition: -webkit-transform 300ms;
  transition: transform 300ms;
  transition: transform 300ms, -webkit-transform 300ms;
  -webkit-backface-visibility: hidden;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.selectLabel:after {
  content: '\25BC';
  border-left: 1px solid #333;
  color: #333;
  font-size: 12px;
  line-height: 17px;
  padding: 10px;
  text-align: center;
  position: absolute;
  right: 0px;
  top: 15%;
  height: 70%;
  width: 50px;
}
.selectLabel:active {
  -webkit-transform: rotateX(30deg);
  transform: rotateX(30deg);
}
.selectLabel:active:after {
  content: '\25B2';
}
.selectLabel.active:after {
  content: '\25B2';
}
::-webkit-scrollbar {
  display: none;
}
.options {
  position: absolute;
  top: 50px;
  height: 1px;
  width: 100%;
}
.options li {
  background-color: #ffffff;
  border-left: 1px solid #333;
  border-right: 1px solid #333;
  border-bottom: 1px solid #333;
  cursor: pointer;
  display: block;
  line-height: 50px;
  list-style: none;
  opacity: 1;
  padding: 0 50px 0 20px;
  text-align: left;
  -webkit-transition: -webkit-transform 300ms ease;
  transition: -webkit-transform 300ms ease;
  transition: transform 300ms ease;
  transition: transform 300ms ease, -webkit-transform 300ms ease;
  position: absolute;
  top: -50px;
  left: 0;
  z-index: 0;
  height: 50px;
  width: 100%;
}
.options li:hover,
.options li.active {
  background-color: #333;
  color: #fff;
}
.options li:nth-child(1) {
  -webkit-transform: translateY(2px);
  transform: translateY(2px);
  z-index: 6;
}
.options li:nth-child(2) {
  -webkit-transform: translateY(4px);
  transform: translateY(4px);
  z-index: 5;
}
.options li:nth-child(3) {
  z-index: 4;
}
.options li:nth-child(4) {
  z-index: 3;
}
.options li:nth-child(5) {
  z-index: 2;
}
.options li:nth-child(6) {
  z-index: 1;
}
.showhidden{
  pointer-events: none;
}
.sb-search {

  position: relative;

  margin-top: 10px;

  width: 0%;

  min-width: 60px;

  height: 60px;

  float: right;

  overflow: hidden;



  -webkit-transition: width 0.3s;

  -moz-transition: width 0.3s;

  transition: width 0.3s;



  -webkit-backface-visibility: hidden;

}

#myTable tr.selected {

background-color: #83b4ef !important; //color when selected

}



  .active {

    background-color: white;

  }

  ul {

    list-style-type: none;

  }

    #bgImg {

    

      position: absolute;

      top: 1%;

      left: 8%;

      right: 5%;

      z-index: 0;

      background-attachment: fixed;

      background-position: center;



 

  }

  

#ulPrint div a, #ulSave div a{

  padding: 0;

border: none;

background: none;



}

  

  #ulPrint div a span, #ulSave div span{

  float: left;



}




</style>
      
   </head>
   
   <body>
   <?php
  $id = $_GET['id'];
  include 'sidenavhtml.php';

  ?>
  <div id="main">
  <nav style="width:103.25%; margin-top:-2%; margin-left:-2%; background-color:#F0F8FF;">

        <div class="container-fluid">

        <ul class="nav navbar-nav">

          <li data-toggle="dropdown-toggle"><a data-toggle='modal'><h4 style="cursor:pointer; color:#00008B; font-family:'Trebuchet MS', Helvetica, sans-serif; padding-top:5px; padding-right:10px; padding-left: -10px" onclick="openNav()"><i class="fa fa-bars"></i> Menu</h4></a></li>

          

          <li id = "useractionlogin" class="dropdown "><a data-toggle="user_actionlogs" href="#" onclick="tableFuntion()"><h4 style ="color:gray; font-family:'Trebuchet MS', Helvetica, sans-serif; padding-top:5px;">User Actions History</h4></span></a>  

          </li>

          <li id = 'userlogin' class="dropdown" ><a data-toggle="user_logins" href="#" ><h4 style ="color:gray; font-family:'Trebuchet MS', Helvetica, sans-serif; padding-top:5px;">User Login History</h4> </span></a>
          </li>
          <!--END-->

        </ul>

        </div>

      </nav>
      <div class="row">
        <div class="col-md-12">


   <hr style="padding-bottom: 1%">
  
        <div class="row">
          <div class="col-md-12">
<!-- TABLES FOR EVERY USER LOGIN -->
           <div id = "user_logins" class="table responsive"> 
            <table  class="table table-striped">                     
   
                <thead>
                    <tr>
                     
                      <th>Username</th>
                      <th>Logged in Date</th>
                      <th>User Role</th>
                      
                    </tr>
                </thead>
                <tbody>
                  <?php 
                  include('connect.php');
                  $sqltran = "SELECT * FROM tbl_userlogs";
                  $result = $conn->query($sqltran);
                  if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {


                          echo '<tr>
                                    <td scope="row">' . $row["username"]. '</td>
                                    <td>' . $row["loggedInDate"] .'</td>
                                    <td> '.$row["role"] .'</td>
                                  </tr>';
                      }
                  } else {
                      echo "0 results";
                  } 
                  ?>
                 </tbody>
             
        </table>
      </div>

<!-- TABLE FOR ACTIONS DONE IN THE ADMIN SIDE -->      
<div id = "user_actionlogs" class="table responsive">
<table  class="table table-striped">                     
    
        <thead>
            <tr>
             
              <th>Username</th>
              <th>Actions</th>
              <th>Updated Fieldname</th>
              <th>Updated Date</th>
              <th>New Value</th>
              
            </tr>
        </thead>
        <tbody>
<?php 
include('connect.php');
$sqltran = "SELECT * FROM tbl_useractionlogs";
$result = $conn->query($sqltran);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


        echo '<tr>
                  <td scope="row">' . $row["username"]. '</td>
                  <td>' . $row["action"] .'</td>
                  <td>' . $row["updated_fieldname"] .'</td>
                  <td> '.$row["updated_date"] .'</td>
                   <td> '.$row["new_value"] .'</td>
                </tr>';
    }
} else {
    echo "0 results";
} 
?>
       </tbody>
    
</table>
</div>
          </div>
        </div>
     
            </nav>
  <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>  
  <script type="text/javascript" src="js/material.js"></script>
  <script type="text/javascript" src="js/jquery.dropdown.js"></script>
  <script type="text/javascript" src="js/dataTables.material.js"></script> 
  <script type="text/javascript" src="js/bootstrap-clockpicker.js"></script>
  <script type="text/javascript" src="js/tether.js"></script>
  <script type="text/javascript">
    var idleTime = 0;
    
    function anotherfunction(){
      $('#sureroll').modal('show');
      $('#myModal').modal('hide');
    }
     
    function openNav() {
        document.getElementById("mySidenav").style.width = "300px";
        document.getElementById("main").style.marginLeft = "300px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
    }
    
</script>

 <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/material.js"></script>

  
    <script type="text/javascript">
    $.material.init();
    $(document).ready(function() {
     //$('select').material_select();
     $('#user_actionlogs').hide();
     $('#user_logins').show();
    });
    $("#userlogin").click(function(){
        $('#user_actionlogs').hide();
        $('#user_logins').show();
});
     $("#useractionlogin").click(function(){
        $('#user_actionlogs').show();
        $('#user_logins').hide();
});
     $(function () {

  var defaultselectbox = $('#cusSelectbox');
  var numOfOptions = $('#cusSelectbox').children('option').length;

  // hide select tag
  defaultselectbox.addClass('s-hidden');

  // wrapping default selectbox into custom select block
  defaultselectbox.wrap('<div class="cusSelBlock"></div>');

  // creating custom select div
  defaultselectbox.after('<div class="selectLabel"></div>');

  // getting default select box selected value
  $('.selectLabel').text(defaultselectbox.children('option').eq(0).text());

  // appending options to custom un-ordered list tag
  var cusList = $('<ul/>', { 'class': 'options'} ).insertAfter($('.selectLabel'));

  // generating custom list items
  for(var i=0; i< numOfOptions; i++) {
    $('<li/>', {
    text: defaultselectbox.children('option').eq(i).text(),
    rel: defaultselectbox.children('option').eq(i).val()
    }).appendTo(cusList);
  }

  // open-list and close-list items functions
  function openList() {
    for(var i=0; i< numOfOptions; i++) {
      $('.options').children('li').eq(i).attr('tabindex', i).css(
        'transform', 'translateY('+(i*100+100)+'%)').css(
        'transition-delay', i*30+'ms');
    }
  }

  function closeList() {
    for(var i=0; i< numOfOptions; i++) {
      $('.options').children('li').eq(i).css(
        'transform', 'translateY('+i*0+'px)').css('transition-delay', i*0+'ms');
    }
    $('.options').children('li').eq(1).css('transform', 'translateY('+2+'px)');
    $('.options').children('li').eq(2).css('transform', 'translateY('+4+'px)');
  }

  // click event functions
  $('.selectLabel').click(function () {
    $(this).toggleClass('active');
    if( $(this).hasClass('active') ) {
      openList();
      focusItems();
    }
    else {
      closeList();
    }
  });

  $(".options li").on('keypress click', function(e) {
    e.preventDefault();
    $('.options li').siblings().removeClass();
    closeList();
    $('.selectLabel').removeClass('active');
    $('.selectLabel').text($(this).text());
    defaultselectbox.val($(this).text());
    $('.selected-item p span').text($('.selectLabel').text());
  });
  
});

function focusItems() {

  $('.options').on('focus', 'li', function() {
    $this = $(this);
    $this.addClass('active').siblings().removeClass();
  }).on('keydown', 'li', function(e) {
    $this = $(this);
    if (e.keyCode == 40) {
      $this.next().focus();
      return false;
    } else if (e.keyCode == 38) {
      $this.prev().focus();
      return false;
    }
  }).find('li').first().focus();

}


  </script>

  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap-table.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>


  <!-- <style>
    #select{
      width:150px;
    }
    #select option{
      width:150px;
    }
  
  </style> -->
</div>
</div>
</body>
</html>