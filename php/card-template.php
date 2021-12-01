<div class="container-fluid card-containr ">
    <div class="row d-flex gap-3 justify-content-center">
        <?php
            $APIresponse = $decodedOutput["response"];
            foreach ($APIresponse as $albums => $album) {?>
                <div class="card col-3 col-lg-2 px-0">
                    <img src="<?php echo $album["poster"] ?>" 
                        alt="<?php echo $album["title"] ?>"  
                        class="card-img-top" >
                    <div class="card-body text-center px-3">
                        <h3 class="card-title"><?php echo $album["title"] ?></h3>
                        <h5 class="card-text"><?php echo $album["author"] ?></h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex mb-0 justify-content-between">
                            <li><?php echo $album["genre"] ?></li>
                            <li><?php echo $album["year"] ?></li>
                        </ul>
                    </div>
                </div>
        <?php
            }
        ?>
    </div>
</div>