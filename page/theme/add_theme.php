<script src="tool/color_picker/jscolor.js"></script>

<style type="text/css">
	.get-in-touch {
position: relative;
margin: 0 auto;
padding: 30px;
max-width: 500px;
margin-top: 50px;
border-radius: 2px;
background: rgb(255, 255, 255) url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAGCAYAAACFIR03AAAAV0lEQVR42tXOMRWAQAwE0RWFDRTg5d47Jeg4Q9gI06RbqlwKil/P6LpXbDCf85AxEBtMGjKG/jyPUHUerfP4nEeoOo/Wedj5pOo8Wudh55Oq82idh51PLxpvled7kLAXAAAAAElFTkSuQmCC) repeat-x;
box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.get-in-touch input[type=text],.get-in-touch input[type=email], .get-in-touch textarea {
background: rgb(235, 241, 245);
color: rgb(36, 39, 41);
}
.get-in-touch  input:focus, .get-in-touch  textarea:focus {
outline: 0;
background: #FFF;
}
</style>


    <div class="row">
        <div class="col-md-10">
            <form action="theme_action.php" method="post" class="form">
            <div class="get-in-touch">
                <h3 class="text-center">
                    Add New Theme</h3>
                <div class="form-group">
                	<label for="exampleInputEmail1">Theme Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" required/>
                </div>

                <div class="form-group">
                	<label for="exampleInputEmail1">bg_color</label>
                     <input class="jscolor form-control" name="bg_color" value="EDE6EC" required="">
                </div>
                <div class="form-group">
                	<label for="exampleInputEmail1">sidebar_hover</label>
                    <input class="jscolor form-control" name="sidebar_hover" value="EDE6EC" required="">
                </div>
                <div class="form-group">
                	<label for="exampleInputEmail1">sidebar_list</label>
                    <input class="jscolor form-control" name="sidebar_list" value="EDE6EC" required="">
                </div>
                <div class="form-group">
                	<label for="exampleInputEmail1">sidebar_list_hover</label>
                    <input class="jscolor form-control" name="sidebar_list_hover" value="EDE6EC" required="">
                </div>
                <div class="form-group">
                	<label for="exampleInputEmail1">font_color</label>
                    <input class="jscolor form-control" name="font_color" value="EDE6EC" required="">
                </div>
                <input type="submit" class="btn btn-danger btn-sm btn-block" name="insert" value="Save">
                
            </div>
            </form>
        </div>
    </div>

