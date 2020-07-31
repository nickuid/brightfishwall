<form action="">
							Contains: 
  							<select name="dropdown" required="required ">
    							<option value="title">Title</option>
    							<option value="description">Description</option>
    							<option value="tag" selected>Tag</option>
                                <option value="userup" selected>Uploader</option>
  							</select>
                              <input type="text" name="ddtext" required="required ">

  						<input type="submit">
					</form>
                    <br>
                    <br>
<?php
include("check.php");
$choice = $_GET['dropdown'];
$ddtext = $_GET['ddtext'];
$sql = "SELECT * FROM images WHERE $choice LIKE '%$ddtext%'";
$result = mysqli_query($db, $sql);
$num_rows = $result->num_rows;
if($choice == "userup"){
    $ding = "uploader";
}
else{
    $ding = $choice;
}
if($choice){
    if($num_rows != 0){
    echo "Images loaded by " . $ding . " " . $ddtext . ": <br><br>";
    }else {
        echo "No images found for " . $ding . " " . $ddtext . ".";
    }
}
while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];

   $link =  $row['link'];          
   $title = $row['title'];
   $description = $row['description'];
   $tag = $row['tag']; 
   $userup = $row['userup'];
        echo '
        <div class="imagediv">
        <ul class="grid cs-style-3">
	        <li>
		        <figure>
			        <img class="images" src="' . $link . '" alt="' . $title . '"/>
                    <figcaption>
				        <h3>' . $title . '</h3>
				        <span>' . $userup . '</span>
				        <button id="myBtn3' . $id . '">View image</button>
			        </figcaption>
		        </figure>
	        </li>
            </ul>
            
                        <!-- The Modal -->
                        <div id="myModal3' . $id . '" class="modal" onclick="myFunction3' . $id . '()">

                        <!-- Modal content -->
                            <div id="modal23' . $id . '" class="modal-content">
                                <h1 class="modaalh1">' . $title . ', uploaded by: ' . $userup . '</h1>
                                <span id="span3' . $id . '" class="close">x</span>
                                <img src="' . $link . '" alt="' . $title . '"/>
                                <p>Description: ' . $description . '</p>
                                <p>Tags: ' . $tag . '</p>
                            </div>

                        </div>
                        </div>
            <script>

            var modal3' . $id . ' = document.getElementById("myModal3' . $id . '");
            var modal23' . $id . ' = document.getElementById("modal23' . $id . '");
            var btn3' . $id . ' = document.getElementById("myBtn3' . $id . '");


            var span3' . $id . ' = document.getElementById("span3' . $id . '");


            btn3' . $id . '.onclick = function() {
             modal3' . $id . '.style.display = "block";
            }

            span3' . $id . '.onclick = function() {
               modal3' . $id . '.style.display = "none";
            }


            function myFunction3' . $id . '(){
                    document.getElementById("myModal3' . $id . '").style.display = "none";
                    }
</script>';
}


?>
