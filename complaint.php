<section class="complaint" id="complaintid">
    <div class="container headings text-center">
        <h1 class="text-center font-weight-bold text-white">COMPLAINT BOX </h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="down col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 offset-1">
                <form action="userdata.php" method="POST" class="form-complaint"> 
                    <div class="form-group">
                        <label for="name"></label>
                        <input type="text" class="form-control" id="name" name="txtName" required autocomplete="off"
                            placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                        <label for="number"></label>
                        <input type="number" class="form-control" name="txtNo" id="number" required autocomplete="off"
                            placeholder="Enter Mobile Number">
                    </div>
                    <div class="form-group">
                        <label for="area"></label>
                        <textarea class="form-control area-complaint" name="text" id="area" rows="3" placeholder="Write Your Complaint">

                        </textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" name="submit" class="btn btn-primary btn1">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>


