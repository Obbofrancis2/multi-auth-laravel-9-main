<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
     <!-- <form Method="POST" action="/addservices">
        @csrf
        @method('post')
        <div class="container">
            <div class="row">
                <label >Service   <input type="text" name="servicename" placeholder="Enter Service name"></label>
            </div>
            <div class="row">
                <label >Price <input type="text" name="serviceprice" placeholder="Enter Service Price"></label>
                
            </div>
            <div class="row">
                <label >Category <select required name="servicetype"><option value="1">Special</option><option value="2">Normal</option></select></label>
                
            </div>
            <div class="row">
                <label >Start date  <input type="date" name="startdate" placeholder=""></label>
               
            </div>
            <div class="row">
                <label  >End date <input type="date" name="enddate" placeholder=""></label>
                
            </div>
            <div class="row">
                <button type="submit">Add Service</button>
            </div>
        </div>
    </form> -->






    
    <button id="addServiceButton" class="btn btn-primary">Add Service</button>

<div id="addServiceModal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/addservices">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <label>Service<input type="text" name="servicename" placeholder="Enter Service name"></label>
                        </div>
                        <div class="row">
                            <label>Price<input type="text" name="serviceprice" placeholder="Enter Service Price"></label>
                        </div>
                        <div class="row">
                            <label>Category<select required name="servicetype"><option value="1">Special</option><option value="2">Normal</option></select></label>
                        </div>
                        <div class="row">
                            <label>Start date<input type="date" name="startdate" placeholder=""></label>
                        </div>
                        <div class="row">
                            <label>End date<input type="date" name="enddate" placeholder=""></label>
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-primary">Add Service</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS -->
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