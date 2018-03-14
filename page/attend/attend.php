<script src="script/student/add_ajax.js" type="text/javascript"></script>

<style type="text/css">
 .loader,
.loader:before,
.loader:after {
  background: #D32831;
  -webkit-animation: load1 1s infinite ease-in-out;
  animation: load1 1s infinite ease-in-out;
  width: 1em;
  height: 3em;
}
.loader {
  color: #D32831;
  text-indent: -9999em;
  margin: 0px auto;
  position: relative;
  font-size: 10px;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-animation-delay: -0.16s;
  animation-delay: -0.16s;
}
.loader:before,
.loader:after {
  position: absolute;
  top: 0;
  content: '';
}
.loader:before {
  left: -1.5em;
  -webkit-animation-delay: -0.32s;
  animation-delay: -0.32s;
}
.loader:after {
  left: 1.5em;
}
@-webkit-keyframes load1 {
  0%,
  80%,
  100% {
    box-shadow: 0 0;
    height: 4em;
  }
  40% {
    box-shadow: 0 -2em;
    height: 5em;
  }
}
@keyframes load1 {
  0%,
  80%,
  100% {
    box-shadow: 0 0;
    height: 4em;
  }
  40% {
    box-shadow: 0 -2em;
    height: 5em;
  }
}
</style>


<div class="container" style="margin-top: 5%;">
    <div class="col-md-6 col-md-offset-1">

        <!-- Search Form -->
        
        
        <!-- Search Field -->
            <div class="row">
                <h1 class="text-center">Attendence</h1>
                <div class="form-group">
                    <div class="input-group">
                        <input style="padding: 30px;" class="form-control" id="id" type="text" name="search" placeholder="Enter Your Id" required/>
                        <span class="input-group-btn">
                            <button class="btn btn-success" onclick="attend()" type="submit"><span class="glyphicon glyphicon-barcode"></span><div id="load">Save Attendence</div></button>
                       

                    </div>
                    <div id="looding" style="margin-top: 4px;"></div>
                     <div id="msg"></div>
                </div>
            </div>
     
        <!-- End of Search Form -->
            
    </div>
</div>