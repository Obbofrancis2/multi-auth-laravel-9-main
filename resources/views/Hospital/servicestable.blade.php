<!DOCTYPE html>
<html>
            <head>
                <meta charset='utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <title>Snippet - BBBootstrap</title>
                <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/css/bootstrap.min.css">
                <style>
                   @font-face { font-family: Arial !important; font-display: swap !important; }
                </style>
                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css' rel='stylesheet'>
                <link href='#' rel='stylesheet'>
                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                <style>
                ::-webkit-scrollbar {
                  width: 8px;
                }
                /* Track */
                ::-webkit-scrollbar-track { 
                  background: #f1f1f1; 
                }
                 
                /* Handle */
                ::-webkit-scrollbar-thumb {
                  background: #888; 
                }
                
                /* Handle on hover */
                ::-webkit-scrollbar-thumb:hover {
                  background: #555; 
                } </style>
            </head>
                
<body className='snippet-body'>
                <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<div class="container">
<!-- <div class="row header" style="text-align:center;color:green"> -->
<!-- <h3>Bootstrap table with pagination</h3> -->
</div>
<div id="addServiceModal" class="modal" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color:rgba(32, 137, 132, 1); font-weight:bolder;">Add Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="width:50%;">
                <form method="POST" action="/addservices">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <label style="color:rgba(32, 137, 132, 1); font-weight:bolder;">Service<input type="text" name="servicename" placeholder="Enter Service name" style="margin-left:30px;"></label>
                        </div>
                        <div class="row">
                            <label style="color:rgba(32, 137, 132, 1); font-weight:bolder;">Price<input type="text" name="serviceprice" placeholder="Enter Service Price" style="margin-left:30px;"></label>
                        </div>
                        <div class="row">
                            <label style="color:rgba(32, 137, 132, 1); font-weight:bolder;">Category<select required name="servicetype" style="margin-left:30px;"><option value="">--------</option><option value="1">Special</option><option value="2">Normal</option></select></label>
                        </div>
                        <div class="row">
                            <label style="color:rgba(32, 137, 132, 1); font-weight:bolder;">Start date<input type="date" name="startdate" placeholder="" style="margin-left:30px;"></label>
                        </div>
                        <div class="row">
                            <label style="color:rgba(32, 137, 132, 1); font-weight:bolder;">End date<input type="date" name="enddate" placeholder="" style="margin-left:30px;"></label>
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-success" style="width:100px; margin-left: 200px; background-color:rgba(32, 137, 132, 1);">Add Service</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<button type="button"  id="addServiceButton" class="btn btn-success" style="background-color:rgba(32, 137, 132, 1); margin: bottom 20px;">Add Service</button>

<table id="example" class="table table-striped table-bordered" style="width:100%" >
<thead>
<tr>
<th>ServiceName</th>
<th>Service Category</th>
<th>Service Price</th>
<th>Startdate</th>
<th>enddate</th>
<th>Edit</th>
</tr>
</thead>
<tbody>
<tr>
<td>Dental</td>
<td>Normal</td>
<td>Ugx. 50000</td>
<td>09/06/2023</td>
<td>09/10/2033</td>
<td><button type="button" class="btn btn-primary">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
</button>

<button type="button" class="btn btn-danger" style="margin-left: 30px;">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete
</button></td>
</tr>
<tr>
<td>Dental</td>
<td>Normal</td>
<td>Ugx. 50000</td>
<td>09/06/2023</td>
<td>09/10/2033</td>
<td><button type="button" class="btn btn-primary">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
</button>

<button type="button" class="btn btn-danger" style="margin-left: 30px;">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete
</button></td>
</tr>
<tr>
<td>Dental</td>
<td>Normal</td>
<td>Ugx. 50000</td>
<td>09/06/2023</td>
<td>09/10/2033</td>
<td><button type="button" class="btn btn-primary">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
</button>

<button type="button" class="btn btn-danger" style="margin-left: 30px;">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete
</button></td>
</tr>
<tr>
<td>Dental</td>
<td>Normal</td>
<td>Ugx. 50000</td>
<td>09/06/2023</td>
<td>09/10/2033</td>
<td><button type="button" class="btn btn-primary">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
</button>

<button type="button" class="btn btn-danger" style="margin-left: 30px;">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete
</button></td>
</tr>
<tr>
<td>Dental</td>
<td>Normal</td>
<td>Ugx. 50000</td>
<td>09/06/2023</td>
<td>09/10/2033</td>
<td><button type="button" class="btn btn-primary">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
</button>

<button type="button" class="btn btn-danger" style="margin-left: 30px;">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete
</button></td>
</tr>
<tr>
<td>Dental</td>
<td>Normal</td>
<td>Ugx. 50000</td>
<td>09/06/2023</td>
<td>09/10/2033</td>
<td><button type="button" class="btn btn-primary">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
</button>

<button type="button" class="btn btn-danger" style="margin-left: 30px;">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete
</button></td>
</tr>
<tr>
<td>Dental</td>
<td>Normal</td>
<td>Ugx. 50000</td>
<td>09/06/2023</td>
<td>09/10/2033</td>
<td><button type="button" class="btn btn-primary">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
</button>

<button type="button" class="btn btn-danger" style="margin-left: 30px;">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete
</button></td>
</tr>
<tr>
<td>Dental</td>
<td>Normal</td>
<td>Ugx. 50000</td>
<td>09/06/2023</td>
<td>09/10/2033</td>
<td><button type="button" class="btn btn-primary">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
</button>

<button type="button" class="btn btn-danger" style="margin-left: 30px;">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete
</button></td>
</tr>
<tr>
<td>Dental</td>
<td>Normal</td>
<td>Ugx. 50000</td>
<td>09/06/2023</td>
<td>09/10/2033</td>
<td><button type="button" class="btn btn-primary">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
</button>

<button type="button" class="btn btn-danger" style="margin-left: 30px;">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete
</button></td>
</tr>
<tr>
<td>Dental</td>
<td>Normal</td>
<td>Ugx. 50000</td>
<td>09/06/2023</td>
<td>09/10/2033</td>
<td><button type="button" class="btn btn-primary">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
</button>

<button type="button" class="btn btn-danger" style="margin-left: 30px;">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete
</button></td>
</tr>
<tr>
<td>Dental</td>
<td>Normal</td>
<td>Ugx. 50000</td>
<td>09/06/2023</td>
<td>09/10/2033</td>
<td><button type="button" class="btn btn-primary">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
</button>

<button type="button" class="btn btn-danger" style="margin-left: 30px;">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete
</button></td>
</tr>
<tr>
<td>Dental</td>
<td>Normal</td>
<td>Ugx. 50000</td>
<td>09/06/2023</td>
<td>09/10/2033</td>
<td><button type="button" class="btn btn-primary">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
</button>

<button type="button" class="btn btn-danger" style="margin-left: 30px;">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete
</button></td>
</tr>
<tr>
<td>Dental</td>
<td>Normal</td>
<td>Ugx. 50000</td>
<td>09/06/2023</td>
<td>09/10/2033</td>
<td><button type="button" class="btn btn-primary">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
</button>

<button type="button" class="btn btn-danger" style="margin-left: 30px;">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete
</button></td>
</tr>
<tr>
<td>Dental</td>
<td>Normal</td>
<td>Ugx. 50000</td>
<td>09/06/2023</td>
<td>09/10/2033</td>
<td><button type="button" class="btn btn-primary">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
</button>

<button type="button" class="btn btn-danger" style="margin-left: 30px;">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete
</button></td>
</tr>


</tbody>
<!-- <tfoot>
<tr>
<th>ServiceName</th>
<th>Service Category</th>
<th>Service Price</th>
<th>Startdate</th>
<th>enddate</th>
</tr>
</tfoot> -->
</table>
</div>

                <script  type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js'></script>
                <script  type='text/javascript' src='#'></script>
                <script  type='text/javascript' src='#'></script>
                <script  type='text/javascript' src='#'></script>
                <script  type='text/javascript'>$(document).ready(function() {
$('#example').DataTable();
} );</script>
                <script  type='text/javascript'>
                var myLink = document.querySelectorAll('a[href="#""]');
                myLink.forEach(function(link){
                  link.addEventListener('click', function(e) {
                    e.preventDefault();
                  });
                });
               </script>
                </body>
            </html></iframe></div></div><span id="headlessui-tabs-panel-:r6:" role="tabpanel" aria-labelledby="headlessui-tabs-tab-:r1:" tabindex="-1" style="position: fixed; top: 1px; left: 1px; width: 1px; height: 0px; padding: 0px; margin: -1px; overflow: hidden; clip: rect(0px, 0px, 0px, 0px); white-space: nowrap; border-width: 0px;"></span><span id="headlessui-tabs-panel-:r7:" role="tabpanel" aria-labelledby="headlessui-tabs-tab-:r2:" tabindex="-1" style="position: fixed; top: 1px; left: 1px; width: 1px; height: 0px; padding: 0px; margin: -1px; overflow: hidden; clip: rect(0px, 0px, 0px, 0px); white-space: nowrap; border-width: 0px;"></span><span id="headlessui-tabs-panel-:r8:" role="tabpanel" aria-labelledby="headlessui-tabs-tab-:r3:" tabindex="-1" style="position: fixed; top: 1px; left: 1px; width: 1px; height: 0px; padding: 0px; margin: -1px; overflow: hidden; clip: rect(0px, 0px, 0px, 0px); white-space: nowrap; border-width: 0px;"></span><span id="headlessui-tabs-panel-:r9:" role="tabpanel" aria-labelledby="headlessui-tabs-tab-:r4:" tabindex="-1" style="position: fixed; top: 1px; left: 1px; width: 1px; height: 0px; padding: 0px; margin: -1px; overflow: hidden; clip: rect(0px, 0px, 0px, 0px); white-space: nowrap; border-width: 0px;"></span></div>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/js/bootstrap.bundle.min.js"></script>

<script>
    var addServiceButton = document.getElementById('addServiceButton');
    var addServiceModal = document.getElementById('addServiceModal');

    addServiceButton.addEventListener('click', function() {
        addServiceModal.style.display = 'block';
    });

    var closeModal = function() {
        addServiceModal.style.display = 'none';
    };

    window.addEventListener('click', function(event) {
        if (event.target === addServiceModal) {
            closeModal();
        }
    });

    var closeButton = addServiceModal.querySelector('.close');
    closeButton.addEventListener('click', closeModal);
</script>
</body>
</html>