
<script type="text/javascript" src="page/editor/js/sms_editor.js"></script>
<link rel="stylesheet" type="text/css" href="page/editor/css/sms_editor.css">

  <div class="editor_boxx">
  <div class="editor_header">


 <select class="form-control" style="background: #424242; color: #ffffff" id="select_level" onchange="key()" style="" >
  <option value="" selected="">Select Action</option>
  <?php $sms->get_syntext(); ?>
</select>

 
  </div>
  <div class="editor_body">
  
  <textarea id="editor" onkeyup="count_len()" class="editor_area" rows="7" cols="7" placeholder=""></textarea>
  </div>
  <div id="sms_res" style="color: #000000"></div>
</div>

