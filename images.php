<?php
$sql = "SELECT * FROM images ORDER BY RAND()";
$result = mysqli_query($db, $sql);
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
				            <button id="myBtnt' . $id . '">View image</button>
			            </figcaption>
		            </figure>
	            </li>
                </ul>
            
                        <!-- The Modal -->
                        <div id="myModalt' . $id . '" class="modal" onclick="myFunctiont' . $id . '()">

                        <!-- Modal content -->
                            <div id="modal2t' . $id . '" class="modal-content">
                                <h1 class="modaalh1">' . $title . ', uploaded by: ' . $userup . '</h1>
                                <span id="spant' . $id . '" class="close">x</span>
                                <img src="' . $link . '" alt="' . $title . '"/>
                                <p>Description: ' . $description . '</p>
                                <p>Tags: ' . $tag . '</p>
                            </div>

                        </div>
                </div>
            <script>

            var modalt' . $id . ' = document.getElementById("myModalt' . $id . '");
            var modal2t' . $id . ' = document.getElementById("modal2t' . $id . '");
            var btnt' . $id . ' = document.getElementById("myBtnt' . $id . '");
            var spant' . $id . ' = document.getElementById("spant' . $id . '");


            btnt' . $id . '.onclick = function() {
             modalt' . $id . '.style.display = "block";
            }

            spant' . $id . '.onclick = function() {
               modalt' . $id . '.style.display = "none";
            }

            function myFunctiont' . $id . '(){
                    document.getElementById("myModalt' . $id . '").style.display = "none";
                    }
</script>';
}




?>