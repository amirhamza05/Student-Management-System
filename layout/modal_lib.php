<!-- Start sm Modal -->
<div class="modal fade modal_sm" id="modal_sm" tabindex="-1" role="dialog" aria-labelledby="modal_sm_Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal_header" style="">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>

    <div class="modal-content">
        <div id="modal_sm_header" class="modal_content_header">Header</div>
            <div class="modal_sm_body" id="modal_sm_body">
                          
            </div>

    </div>
    </div>
</div>
<!-- End sm Modal -->

<!-- Start md Modal -->
<div class="modal fade modal_md" id="modal_md" tabindex="-1" role="dialog" aria-labelledby="modal_md_Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal_header" style="">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>

    <div class="modal-content">
        <div id="modal_md_header" class="modal_content_header">Header</div>
            <div class="modal_md_body" id="modal_md_body">
                           
            </div>

    </div>
    </div>
</div>
<!-- End md Modal -->

<!-- Start lg Modal -->
<div class="modal fade modal_lg" id="modal_lg" tabindex="-1" role="dialog" aria-labelledby="modal_md_Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal_header" style="">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>

    <div class="modal-content">
        <div id="modal_lg_header" class="modal_content_header">Header</div>
            <div class="modal_lg_body" id="modal_lg_body">
                           
            </div>

    </div>
    </div>
</div>
<!-- End lg Modal -->

<style type="text/css">
    .modal-content{
        border-radius: 0px;
    }
    .modal_sm .modal-dialog{max-width: 350px; width: 100%;}
    .modal_md .modal-dialog{max-width: 600px; width: 100%;}
    .modal_lg .modal-dialog{max-width: 950px; width: 100%;}
    .modal_header{
       border-radius: 10px 10px 0px 0px;
    }
    .modal_sm_body,.modal_md_body,.modal_lg_body{
        padding: 20px;
        background-color: #ECF0F1;
        overflow: scroll;
        max-height: 500px;
    }
    .modal-content  {
     -webkit-border-radius: 5px !important;
     -moz-border-radius: 5px !important;
     border-radius: 0px 0px 5px 5px !important; 
    }
    .modal_content_header{
        background-color: var(--bg-color);
        color: var(--font-color);
        padding: 15px;
        font-size: 18px;
        font-weight: bold;
    }
    .modal_header .close {
      margin: 0;
      position: absolute;
      top: -10px;
      right: -10px;
      width: 40px;
      height: 40px;
      border-radius: 23px;
      background-color: #00aeef;
      color: #ffe300;
      font-size: 20px;
      opacity: 1;
      z-index: 10;
    }
    .modal_header .close:hover {
      outline: none;
      font-size: 30px;
    }
    
    .modal_header .close:focus {
      outline: none;
      background-color: #049ad1;
    }

    
</style>

<script type="text/javascript">
    function modal_open(type,header="Header",permission="open"){
        
        if(type=="sm")modal_sm(permission,header);
        else if(type=="md")modal_md(permission,header);
        else if(type=="lg")modal_lg(permission,header);  

    }


    function modal_sm(permission,header){
        modal_ob=$("#modal_sm");
        set_data("modal_sm_header",header);
        if(permission=="open")modal_ob.modal("show");
        else modal_ob.modal("hide");
    }
     function modal_md(permission,header){
        modal_ob=$("#modal_md");
        set_data("modal_md_header",header);
        if(permission=="open")modal_ob.modal("show");
        else modal_ob.modal("hide");
    }
    function modal_lg(permission,header){
        modal_ob=$("#modal_lg");
        set_data("modal_lg_header",header);
        if(permission=="open")modal_ob.modal("show");
        else modal_ob.modal("hide");
    }

    function set_data(div,data){
        document.getElementById(div).innerHTML=data;
    }
</script>