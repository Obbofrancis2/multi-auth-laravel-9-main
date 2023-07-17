<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");:root{--header-height: 3rem;--nav-width: 68px;--first-color:rgba(32, 137, 132, 1);--first-color-light: #AFA5D9;--white-color: #F7F6FB;--body-font: 'Nunito', sans-serif;--normal-font-size: 1rem;--z-fixed: 100}*,::before,::after{box-sizing: border-box}body{position: relative;margin: var(--header-height) 0 0 0;padding: 0 1rem;font-family: var(--body-font);font-size: var(--normal-font-size);transition: .5s}a{text-decoration: none}.header{width: 100%;height: var(--header-height);position: fixed;top: 0;left: 0;display: flex;align-items: center;justify-content: space-between;padding: 0 1rem;background-color: var(--white-color);z-index: var(--z-fixed);transition: .5s}.header_toggle{color: var(--first-color);font-size: 1.5rem;cursor: pointer}.header_img{width: 35px;height: 35px;display: flex;justify-content: center;border-radius: 50%;overflow: hidden}.header_img img{width: 40px}.l-navbar{position: fixed;top: 0;left: -30%;width: var(--nav-width);height: 100vh;background-color: var(--first-color);padding: .5rem 1rem 0 0;transition: .5s;z-index: var(--z-fixed)}.nav{height: 100%;display: flex;flex-direction: column;justify-content: space-between;overflow: hidden}.nav_logo, .nav_link{display: grid;grid-template-columns: max-content max-content;align-items: center;column-gap: 1rem;padding: .5rem 0 .5rem 1.5rem}.nav_logo{margin-bottom: 2rem}.nav_logo-icon{font-size: 1.25rem;color: var(--white-color)}.nav_logo-name{color: var(--white-color);font-weight: 700}.nav_link{position: relative;color: var(--first-color-light);margin-bottom: 1.5rem;transition: .3s}.nav_link:hover{color: var(--white-color)}.nav_icon{font-size: 1.25rem}.show{left: 0}.body-pd{padding-left: calc(var(--nav-width) + 1rem)}.active{color: var(--white-color)}.active::before{content: '';position: absolute;left: 0;width: 2px;height: 32px;background-color: var(--white-color)}.height-100{height:100vh}@media screen and (min-width: 768px){body{margin: calc(var(--header-height) + 1rem) 0 0 0;padding-left: calc(var(--nav-width) + 2rem)}.header{height: calc(var(--header-height) + 1rem);padding: 0 2rem 0 calc(var(--nav-width) + 2rem)}.header_img{width: 40px;height: 40px}.header_img img{width: 45px}.l-navbar{left: 0;padding: 1rem 1rem 0 0}.show{width: calc(var(--nav-width) + 156px)}.body-pd{padding-left: calc(var(--nav-width) + 188px)}}
</style>
<style>@import url('https://fonts.googleapis.com/css?family=Assistant');
body {
  background: #eee;
  font-family: Assistant, sans-serif;
}

.cell-1 {
  border-collapse: separate;
  border-spacing: 0 4em;
  background: #fff;
  border-bottom: 5px solid transparent;
  /*background-color: gold;*/
  background-clip: padding-box;
}

thead {
  background: #dddcdc;
}

.toggle-btn {
  width: 40px;
  height: 21px;
  background: grey;
  border-radius: 50px;
  padding: 3px;
  cursor: pointer;
  -webkit-transition: all 0.3s 0.1s ease-in-out;
  -moz-transition: all 0.3s 0.1s ease-in-out;
  -o-transition: all 0.3s 0.1s ease-in-out;
  transition: all 0.3s 0.1s ease-in-out;
}

.toggle-btn > .inner-circle {
  width: 15px;
  height: 15px;
  background: #fff;
  border-radius: 50%;
  -webkit-transition: all 0.3s 0.1s ease-in-out;
  -moz-transition: all 0.3s 0.1s ease-in-out;
  -o-transition: all 0.3s 0.1s ease-in-out;
  transition: all 0.3s 0.1s ease-in-out;
}

.toggle-btn.active {
  background: blue !important;
}

.toggle-btn.active > .inner-circle {
  margin-left: 19px;
}</style>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="../../bg.png" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div style=""> <a href="#" class="nav_logo"> <img src="{{asset('logo.png')}}" alt="" width="100px"> <span class="nav_logo-name">MEDISS</span> </a>
                <div class="nav_list"> 
                    <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                    <a href="#" class="nav_link"> <i class="bx bx-plus"></i> <span class="nav_name">Add/<i class="bx bx-pencil"></i>Edit Service</span></a>
                    <a href="#" class="nav_link">  <i class="bx bx-calendar"></i> <span class="nav_name">Manage Appointments</span> </a> 
                    <a href="#" class="nav_link"> <span class="glyphicon glyphicon-th-list"></span> <span class="nav_name">News</span> </a> 
                    <a href="#" class="nav_link"> <i class="fas fa-exclamation-triangle"></i>
 <span class="nav_name">Emergencies</span> </a> 
            </div> 
            <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light" style="padding-top:100px;">
    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                <div class="rounded">
                    <div class="table-responsive table-borderless">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">
                            
                                    </th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Patient</th>
                                    <th>Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="table-body">
                                <tr class="cell-1">
                                    <td class="text-center">
                                        <div class="toggle-btn">
                                            <div class="inner-circle"></div>
                                        </div>
                                    </td>
                                    <td>BAMUKE JONATHAN</td>
                                    <td>jonah@gmail.com</td>
                                    <td><span class="badge badge-success">Fullfilled</span></td>
                                    <td>self</td>
                                    <td>Today</td>
                                    <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                                </tr>
                                <tr class="cell-1">
                                    <td class="text-center">
                                        <div class="toggle-btn">
                                            <div class="inner-circle"></div>
                                        </div>
                                    </td>
                                    <td>OBBO FRANCIS</td>
                                    <td>mcobbzfranks2@gmail.com</td>
                                    <td><span class="badge badge-info">Confirmed</span></td>
                                    <td>son</td>
                                    <td>Yesterday</td>
                                    <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                                </tr>
                                <tr class="cell-1">
                                    <td class="text-center">
                                        <div class="toggle-btn">
                                            <div class="inner-circle"></div>
                                        </div>
                                    </td>
                                    <td>OGENMUNGU BOB</td>
                                    <td>bob@gmail.com</td>
                                    <td><span class="badge badge-danger">Missed appointment</span></td>
                                    <td>wife</td>
                                    <td>May 12,2020</td>
                                    <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                                </tr>
                                <tr class="cell-1">
                                    <td class="text-center">
                                        <div class="toggle-btn">
                                            <div class="inner-circle"></div>
                                        </div>
                                    </td>
                                    <td>MUTEBI BRANDON</td>
                                    <td>james@gmail.com</td>
                                    <td><span class="badge badge-success">Fullfilled</span></td>
                                    <td>brother</td>
                                    <td>May 11,2020</td>
                                    <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
   
    <!--Container Main end-->
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
   const showNavbar = (toggleId, navId, bodyId, headerId) =>{
   const toggle = document.getElementById(toggleId),
   nav = document.getElementById(navId),
   bodypd = document.getElementById(bodyId),
   headerpd = document.getElementById(headerId)
   
   // Validate that all variables exist
   if(toggle && nav && bodypd && headerpd){
   toggle.addEventListener('click', ()=>{
   // show navbar
   nav.classList.toggle('show')
   // change icon
   toggle.classList.toggle('bx-x')
   // add padding to body
   bodypd.classList.toggle('body-pd')
   // add padding to header
   headerpd.classList.toggle('body-pd')
   })
   }
   }
   
   showNavbar('header-toggle','nav-bar','body-pd','header')
   
   /*===== LINK ACTIVE =====*/
   const linkColor = document.querySelectorAll('.nav_link')
   
   function colorLink(){
   if(linkColor){
   linkColor.forEach(l=> l.classList.remove('active'))
   this.classList.add('active')
   }
   }
   linkColor.forEach(l=> l.addEventListener('click', colorLink))
   
    // Your code to run since DOM is loaded and ready
   });
    </script>
    <script>$(document).ready(function(){

$('.toggle-btn').click(function() {
$(this).toggleClass('active').siblings().removeClass('active');
});

});</script>
</body>
</html>