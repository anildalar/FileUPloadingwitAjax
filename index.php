<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <form class="w-50 offset-3 a_myform" >
        <h1 class="text-center mt-5">File Uplading</h1>
        <div class="mb-3">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" name="fname" class="form-control" id="fname" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" name="lname" class="form-control" id="lname">
        </div>
        <div class="mb-3">
            <label for="pic" class="form-label">Last Name</label>
            <input accept="image/*" type="file" name="pic" class="form-control" id="pic">
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script>

        //Check if the page is loadded
        //1. ()();
        //2. $(document).ready();
        //3. jQuery();
        $(document).ready(function(){
            //alert('Page Loaded successfully');
            //$(selector).action();
            $('form.a_myform').submit(function(e){ //e = event
                e.preventDefault(); // Ye line page ke reload ko rok degi
                //alert('OKOKOKOKOKOKOKOKOK');
                //$(selector).action();
                var fn = $('input#fname').val();
                var ln = $('input#lname').val();
                var file = $('input#pic');
                console.log(fn);
                console.log(ln);
                console.log(file[0]);

                //let object = new ClassName();
                let formData = new FormData();
                formData.append('action','registration');
                formData.append('fn',fn);
                formData.append('ln',ln);
                formData.append('pic',file);
              

                $.ajax({
                    url:'http://localhost/FIleUploadingWithAjax/api.php', //Kaha
                    type:'POST', //Kese

                    cache:false, //
                    contentType:false,
                    processData:false,

                    data:formData,
                    success:function(result,status,xhr){
                        if(result == '1'){
                            console.log(result);
                            alert('Registration with File Uploaded is Success')
                        }
                        if(result == '2'){
                            console.log(result);
                            alert('Login is Successfull')
                        }
                    }

                }); // { p:v,p:v,p:v,..... } = JS Object

            });
        });
    </script>
</body>

</html>