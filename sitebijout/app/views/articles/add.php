<!-- bootstrap css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <!-- responsive style -->
   <link href="<?php echo URLROOT; ?>/css/responsive.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/stylelogreg.css">
<div class="container col-md-8">
            <div class="col-md-3">
              <h2>
                  Add Articles
              </h2>
            </div>
        <div class="container-fluid my-5">
            <div class="row p-2">
                <div class="col-md-12">
                    <form action="<?php echo URLROOT;?>/Articles/add/" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label  <?php echo (!empty($data['name_prod_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name_prod']; ?>" >Product Name</label>
                            <div class="invalid-feedback "><?php echo $data['name_prod_err']; ?></div>
                            <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Product name" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label  <?php echo (!empty($data['prix_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['prix']; ?>">Product Price</label>
                            <div class="invalid-feedback"><?php echo $data['prix_err']; ?></div>
                            <input type="number" name="prix" class="form-control" id="exampleFormControlInput1" placeholder="Product price" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label  <?php echo (!empty($data['quantite_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['quantite']; ?>">Product Quantity</label>
                            <div class="invalid-feedback"><?php echo $data['quantite_err']; ?></div>
                            <input type="number" name="quantite" class="form-control" id="exampleFormControlInput1" placeholder="Product quantity" >
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label  <?php echo (!empty($data['image_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['image']; ?>">Product Image</label>
                            <input class="form-control " type="file" name="image" id="formFile" >
                        </div>


                        <div class="col-12 d-flex justify-content-between">
                        <button type="submit" class="btn btn-lg btn-block">Add</button>
                            <a href="<?php echo URLROOT; ?>/articles/dashbord" class="btn btn-secondary rounded-3 px-4 ml-2 mt-2">Cancel</a>
                        </div>


                </div>

                </form>
            </div>
        </div>
</div>
