<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    
    , initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/post.css')}}">
    <link rel="stylesheet" href="{{url('css/button.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    
    <div class="container" style="padding-top: 4%;">
    <h1 style="text-align: center;margin-bottom:4%;">Create A post</h1>
        <form action="/auth/dashboard/host/posts/{{ $user->user_id }}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div style="display:flex ;flex-wrap: wrap; background-color: rgb(234, 234, 234); box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="post" style="padding-left: 15%;">
                    <div class="post2">
                        <div class="form-floating ">
                            <input type="text" class="form-control" id="floatingInput" name="fname" placeholder="name@example.com">
                            <label for="floatingInput">First name</label>
                        </div>
                    </div>
                    <div class="post2">
                        <div class="form-floating ">
                            <input type="text" class="form-control" id="floatingInput" name="lname" placeholder="name@example.com">
                            <label for="floatingInput">Last name</label>
                        </div>
                    </div>
                    <div class="post2">
                        <div class="form-floating ">
                            <input type="text" class="form-control" id="floatingInput" name="phoneNo" placeholder="name@example.com">
                            <label for="floatingInput">Phone Number</label>
                        </div>
                    </div>
                    <div class="post2">
                        <div class="form-floating ">
                            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                    </div>
                    <div class="post2">
                        <div class="form-floating ">
                            <input type="text" class="form-control" id="floatingInput" name="tittle" placeholder="name@example.com">
                            <label for="floatingInput">Tittle</label>
                        </div>
                        <div class="post2">
                            <div class="mb-3" style="margin-top: 10px;">
                                <label for="exampleFormControlTextarea1" class="form-label">description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="post" style="padding-right:15%">
                    <div class="post2">
                        <select class="form-select" name="area" aria-label="Default select example">
                            <option selected disabled name="advance">Location </option>
                            <option value="Mirpur">Mirpur</option>
                            <option value="Gulshan">Gulshan</option>
                        </select>
                    </div>
                    <div class="post2">
                        <div class="form-floating ">
                            <input type="text" class="form-control" id="floatingInput" name="adress" placeholder="name@example.com">
                            <label for="floatingInput">Adress</label>
                        </div>
                    </div>
                    <div class="post2">
                        <select class="form-select" aria-label="Default select example" name="block">
                            <option selected disabled>Block</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>

                        </select>
                    </div>
                    <div class="post2">
                        <select class="form-select" aria-label="Default select example" name="restriction">
                            <option selected disabled>Restriction</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>

                        </select>
                    </div>
                    <div class="post2">
                        <div class="form-floating ">
                            <input type="text" class="form-control" id="floatingInput" name="price" placeholder="name@example.com">
                            <label for="floatingInput">Price$$</label>
                        </div>
                    </div>

                    <div class="post2">
                        <select class="form-select" aria-label="Default select example" name="advance">
                            <option selected disabled>Advance Required </option>
                            <option value="1 Month">1 Month</option>
                            <option value="2 months">2 months</option>
                            <option value="3 months">3 months</option>
                            <option value="No Advance">No Advance</option>

                        </select>
                    </div>
                    <div class="post2">
                        <div class="container">
                            <h5>Payment Date</h5>
                            <div class="">
                                <div class=" form-floating">

                                    <input id="startDate" class="form-control" type="date" name="date" />
                                    <span id="startDateSelected"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fileupload">
                    <label style="color:blue;padding-right:5%;" for="">Upload Pictures </label>
                    <input style="padding-bottom:5%;" type="file" name="image" id="inpFile" value="Upload Pictures">
                    <div class="image-preview" id='imagePreview'>
                        <div class="previewimg"> <img src="" alt="Image Preview" class="image-preview__image"></div>
                        <span class="image-preview__default-text"></span>
                    </div>
                </div>
            </div>
            <div class="buttondiv">
                <div class="wrapper">
                    <button class="button">Upload Post</button>
                </div>
                <script>
                    const inpFile = document.getElementById("inpFile");
                    const previewContainer = document.getElementById("imagePreview");
                    const previewImage = previewContainer.querySelector(".image-preview__image");
                    const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");

                    inpFile.addEventListener("change", function() {
                        const file = this.files[0];
                        if (file) {
                            const reader = new FileReader();
                            previewDefaultText.style.display = "none";
                            previewImage.style.display = "block";
                            reader.addEventListener("load", function() {
                                previewImage.setAttribute("src", this.result);
                            });
                            reader.readAsDataURL(file);
                        }
                    });
                </script>

            </div>
        </form>

    </div>

    <script src="js/datepicker.js"> </script>
    <script src="js/button1.js"> </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>